<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    use HasFactory;

    protected $table = 'event_registrations';

    /**
     * Registration path constants.
     */
    public const TYPE_DRIVER = 'driver';
    public const TYPE_PARTICIPANT = 'participant';

    /**
     * Allowed gender options.
     */
    public const GENDERS = ['Male', 'Female', 'Other', 'Prefer not to say'];

    /**
     * Allowed driver fleet/vehicle categories.
     */
    public const DRIVER_VEHICLE_TYPES = [
        'Airport Taxi',
        'Ride-Hailing Driver',
        'Hotel Shuttle',
        'Private Chauffeur',
        'Tour / Charter Bus',
        'Executive Transfer',
        'Other',
    ];

    /**
     * Allowed "how did you hear about us" sources.
     */
    public const HOW_HEARD_OPTIONS = [
        'Social Media',
        'WhatsApp',
        'Email / Newsletter',
        'Friend or Colleague',
        'Transport Association / Union',
        'Hotel or Employer',
        'Radio / TV / Press',
        'Airport / Terminal Notice',
        'Tourism Afrikania Website',
        'Other',
    ];

    protected $fillable = [
        'registration_type',
        'name',
        'email',
        'phone',
        'occupation',
        'organisation',
        'gender',
        'country',
        'state',
        'driver_association',
        'driver_vehicle_type',
        'driver_experience',
        'how_heard',
        'expectations',
        'message',
    ];

    /**
     * Determine if this registration belongs to a driver.
     */
    public function isDriver(): bool
    {
        return $this->registration_type === self::TYPE_DRIVER;
    }

    /**
     * Human readable registration path label.
     */
    public function registrationTypeLabel(): string
    {
        return $this->isDriver() ? 'Driver' : 'Participant';
    }
}
