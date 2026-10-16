<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Models\Admin;
use App\Models\Ahtes;
use App\Models\CorporateService;
use App\Models\LocalFlight;
use App\Models\Merchandise;
use App\Models\OtherService;
use App\Models\User;
use App\Models\VisaApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    //
    public function __construct() {
        $this->middleware('admin');
        $this->middleware('checkAdminRole:administrator')->only('update');
    }


    public function home(){

        $admin = Auth::guard('admin')->user(); 
        $ahtes = Ahtes::orderBy('id', 'asc')->paginate(10);
        return view('admin.index', [
            'admin' => $admin,
            'ahtes' => $ahtes,
        ]);
    }

    public function profile()
    {
        $admin = Auth::guard('admin')->user();
        $adminUser = Admin::orderBy('id', 'desc')->get();
        return view('admin.profile', compact('admin', 'adminUser'));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        if ($admin) {
            // $admin = Admin::where('id', $id)->first();
            $admin->update([
                // 'image'=>$image_file ?? $users->image,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            return back()->with('Updated Successfully');
        } else {
            return back()->with('Something went Wrong');
        }
    }




    public function validatepassword(Request  $request)
    {
        $this->validate($request, [
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string'],
        ]);
        # check for current password match
        $adminpassword = Auth::guard('admin')->user();
        if (password_verify($request->current_password, $adminpassword->password)) {
            # if true
            if ($request->new_password == $request->Confirm_password) {
                # send otp to user email and the password in datebase
                session(['new_password' => $request->new_password]);
                $adminpassword->update([
                    'password' => Hash::make(session('new_password'))
                ]);
                // dd($adminpassword);
                Alert::success('Password Change Successfully');
                return back();
            } else {
                Alert::error('Error! Password Mismatch');
                return back();
            }
        } else {
            Alert::error('Error! The password does not match the current password?');
            return back();
        }
    }
}


