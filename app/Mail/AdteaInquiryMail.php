<?php

namespace App\Mail;

use App\Models\AdteaInquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdteaInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $inquiry;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\AdteaInquiry  $inquiry
     * @return void
     */
    public function __construct(AdteaInquiry $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New ADTEA 2026 Sponsorship Inquiry: ' . $this->inquiry->name)
                    ->view('email.adtea_inquiry_mail');
    }
}
