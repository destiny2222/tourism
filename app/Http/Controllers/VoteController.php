<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use KingFlamez\Rave\Facades\Rave as Flutterwave;

use function PHPUnit\Framework\isEmpty;

class VoteController extends Controller
{
    public function contestant(){
        $contestants = Contestant::all();
        return view('frontend.vote_page', compact('contestants'));
    }

    public function contestantDetails(Contestant $contestant){
        return view('frontend.vote_page_details', compact('contestant'));
    }

    public function initiate(Request $request, $id){
        $request->validate([
            'email' => 'required|email',
            'vote_number' => 'required|numeric',
        ]);

        $contestant = Contestant::findOrFail($id);
        // check if user voted in the last 24 hours
        $lastVote = Vote::where('email', $request->email)
            ->where('contestant_id', $id)
            ->where('voted_at', '>=', Carbon::now()->subHours(24))
            ->first();

        if ($lastVote) {
            return back()->with('error', 'You can only vote for this contestant once every 24 hours.');
        }

       try{
           // calculate the total  request vote_number for votes  then multiply by 100
            $totalVotes = $request->vote_number * 100;

            // dd($totalVotes);

            $reference = Flutterwave::generateReference();
            // dd($reference);
            $data = [
                'payment_options' => 'card,banktransfer',
                'amount' => $totalVotes, // N100
                'email' => $request->email,
                'tx_ref' => $reference,
                'currency' => 'NGN',
                'redirect_url' => route('vote.callback'),
                'customer' => [
                    'email' => $request->email,
                    'name' => 'Voter',
                ],
                'meta' => [
                    'contestant_id' => $id,
                    'email' => $request->email,
                    'vote_number' => $request->vote_number,
                ],
                'customizations' => [
                    'title' => 'African Hospitality and Tourism Education Summit',
                    'description' => "Payment to vote for {$contestant->name}",
                ],
            ];

            try {
                $payment = Flutterwave::initializePayment($data);
                if ($payment['status'] !== 'success') {
                    return redirect()->route('contestant')->with('error', 'Payment initialization failed.');
                }
                return redirect($payment['data']['link']);
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                return redirect()->route('contestant')->with('error', 'Payment initialization failed.');
            }
       } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('contestant')->with('error', 'Payment initialization failed.');
        }
    }

    public function callback()
    {
        $status = request()->status;

        if ($status == 'successful') {
            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);

            if ($data['status'] == 'success') {
                // dd($data);
                // dd($data['data']['meta']);
                $contestantId = $data['data']['meta']['contestant_id'];
                $email = $data['data']['meta']['email'];
                

                // Increment vote count
                $contestant = Contestant::findOrFail($contestantId);
                $voteNumber = $data['data']['meta']['vote_number'] ?? 1;
                $contestant->increment('votes', $voteNumber);

                // Set vote key  with 24-hour expiration
                Vote::create([
                   'email' => $email,
                   'contestant_id' => $contestantId,
                   'transaction_reference' => $data['data']['tx_ref'],
                   'voted_at' => Carbon::now(),
               ]);
                return redirect()->route('contestant')->with('success', 'Vote recorded successfully.');
            }
        }

        return redirect()->route('contestant')->with('error', 'Payment failed or was cancelled.');
    }


    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $signature = $request->header('verif-hash');

        if ($signature === config('flutterwave.secretHash')) {
            $data = json_decode($payload, true);
            if ($data['status'] === 'success' && $data['event'] === 'charge.completed') {
                $contestantId = $data['data']['meta']['contestant_id'];
                $email = $data['data']['meta']['email'];
                $voteKey = Vote::where('email', $email)
                    ->where('contestant_id', $contestantId)
                    ->where('voted_at', '>=', Carbon::now()->subHours(24))
                    ->first();

                if (!empty($voteKey)) {
                    $contestant = Contestant::findOrFail($contestantId);
                    $contestant->increment('votes');
                }
            }
        }
        return response()->json(['status' => 'success'], 200);
    }
}
