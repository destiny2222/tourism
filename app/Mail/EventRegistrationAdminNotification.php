<?php

namespace App\Mail;

use App\Models\EventRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventRegistrationAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The event registration instance.
     *
     * @var \App\Models\EventRegistration
     */
    public $registration;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\EventRegistration  $registration
     * @return void
     */
    public function __construct(EventRegistration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New ADTEA Event Registration: ' . $this->registration->name)
                    ->view('email.event_registration_notification')
                    ->with([
                        'name' => $this->registration->name,
                        'email' => $this->registration->email,
                        'phone' => $this->registration->phone,
                        'contentMessage' => $this->registration->message,
                        'registrationType' => $this->registration->registrationTypeLabel(),
                        'occupation' => $this->registration->occupation,
                        'organisation' => $this->registration->organisation,
                        'gender' => $this->registration->gender,
                        'country' => $this->registration->country,
                        'state' => $this->registration->state,
                        'driverAssociation' => $this->registration->driver_association,
                        'driverVehicleType' => $this->registration->driver_vehicle_type,
                        'driverExperience' => $this->registration->driver_experience,
                        'howHeard' => $this->registration->how_heard,
                        'expectations' => $this->registration->expectations,
                        'registeredAt' => $this->registration->created_at ? $this->registration->created_at->format('M d, Y h:i A') : now()->format('M d, Y h:i A'),
                    ]);
    }
}
