<?php

namespace Tests\Feature;

use App\Mail\EventRegistrationAdminNotification;
use App\Models\EventRegistration;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class EventRegistrationTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test the ADTEA page loads successfully and displays the registration form.
     */
    public function test_user_can_view_adtea_page_with_registration_form(): void
    {
        $response = $this->get(route('adtea-page'));

        $response->assertStatus(200);
        $response->assertSee('id="registration"', false);
        $response->assertSee('id="adteaRegistrationForm"', false);
        $response->assertSee('name="registration_type"', false);
        $response->assertSee('name="name"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="phone"', false);
        $response->assertSee('name="occupation"', false);
        $response->assertSee('name="organisation"', false);
        $response->assertSee('name="gender"', false);
        $response->assertSee('name="country"', false);
        $response->assertSee('id="reg_state_wrap"', false);
        $response->assertSee('name="how_heard"', false);
        $response->assertSee('name="expectations"', false);
        $response->assertSee('name="message"', false);
        $response->assertSee('id="sponsor-inquiry"', false);
    }

    /**
     * Test submitting valid registration with all four fields saves to database
     * and redirects with a success flash message.
     */
    public function test_user_can_submit_registration_with_all_fields(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Babatunde Fashola',
            'email' => 'tunde.fashola@example.com',
            'phone' => '+234 803 123 4567',
            'message' => 'Interested in the airport transport hospitality session.',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertRedirect(route('adtea-page') . '#registration');
        $response->assertSessionHas('registration_success');

        $this->assertDatabaseHas('event_registrations', [
            'name' => 'Babatunde Fashola',
            'email' => 'tunde.fashola@example.com',
            'phone' => '+234 803 123 4567',
            'message' => 'Interested in the airport transport hospitality session.',
        ]);
    }

    /**
     * Test submitting registration with only required fields (name, email, phone),
     * confirming the profile and survey fields are treated as optional.
     */
    public function test_user_can_submit_registration_with_only_required_fields(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Amaka Okafor',
            'email' => 'amaka.okafor@example.com',
            'phone' => '08031234567',
            'occupation' => null,
            'organisation' => null,
            'gender' => null,
            'country' => null,
            'state' => null,
            'how_heard' => null,
            'expectations' => null,
            'message' => null,
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertRedirect(route('adtea-page') . '#registration');
        $response->assertSessionHas('registration_success');

        $this->assertDatabaseHas('event_registrations', [
            'name' => 'Amaka Okafor',
            'email' => 'amaka.okafor@example.com',
            'phone' => '08031234567',
            'registration_type' => 'participant',
            'message' => null,
        ]);
    }

    /**
     * Test submitting a full driver registration with every available field
     * persists all values against the driver registration path.
     */
    public function test_user_can_submit_full_driver_registration(): void
    {
        Mail::fake();

        $payload = [
            'registration_type' => 'driver',
            'name' => 'Musa Ibrahim',
            'email' => 'musa.ibrahim@example.com',
            'phone' => '+234 806 555 7788',
            'occupation' => 'Airport Taxi Driver',
            'organisation' => 'Lagos Airport Taxi Cooperative',
            'gender' => 'Male',
            'country' => 'Nigeria',
            'state' => 'Lagos',
            'driver_association' => 'NURTW Airport Branch',
            'driver_vehicle_type' => 'Airport Taxi',
            'driver_experience' => '7 - 10 years',
            'how_heard' => 'Transport Association / Union',
            'expectations' => 'I want to learn how to serve international visitors better and grow my income.',
            'message' => 'Please send me the venue details by SMS.',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertRedirect(route('adtea-page') . '#registration');
        $response->assertSessionHas('registration_success');

        $this->assertDatabaseHas('event_registrations', $payload);
    }

    /**
     * Test submitting a participant registration saves the participant path
     * and clears any driver-only details.
     */
    public function test_participant_registration_clears_driver_details(): void
    {
        Mail::fake();

        $payload = [
            'registration_type' => 'participant',
            'name' => 'Chiamaka Eze',
            'email' => 'chiamaka@example.com',
            'phone' => '+234 701 222 3333',
            'occupation' => 'Hospitality Student',
            'organisation' => 'Lagos State University',
            'gender' => 'Female',
            'country' => 'Nigeria',
            'state' => 'Ogun',
            'driver_association' => 'Should be discarded',
            'driver_vehicle_type' => 'Airport Taxi',
            'driver_experience' => '1 - 3 years',
            'how_heard' => 'Social Media',
            'expectations' => 'Networking opportunities with tourism professionals.',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertRedirect(route('adtea-page') . '#registration');

        $registration = EventRegistration::where('email', 'chiamaka@example.com')->first();

        $this->assertNotNull($registration);
        $this->assertSame('participant', $registration->registration_type);
        $this->assertNull($registration->driver_association);
        $this->assertNull($registration->driver_vehicle_type);
        $this->assertNull($registration->driver_experience);
    }

    /**
     * Test server-side validation error when required field 'phone' is missing.
     */
    public function test_registration_fails_when_phone_is_missing(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Tunde Motor',
            'email' => 'tunde.motor@example.com',
            'phone' => '',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertSessionHasErrors(['phone']);
        $this->assertDatabaseMissing('event_registrations', [
            'email' => 'tunde.motor@example.com',
        ]);
        Mail::assertNothingSent();
    }

    /**
     * Test server-side validation error when an unknown registration path is used.
     */
    public function test_registration_fails_with_unknown_registration_type(): void
    {
        Mail::fake();

        $payload = [
            'registration_type' => 'sponsor',
            'name' => 'Invalid Path User',
            'email' => 'invalid.path@example.com',
            'phone' => '08012345678',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertSessionHasErrors(['registration_type']);
        $this->assertDatabaseMissing('event_registrations', [
            'email' => 'invalid.path@example.com',
        ]);
    }

    /**
     * Test the dedicated registration page loads and shows the shared form.
     */
    public function test_user_can_view_standalone_registration_page(): void
    {
        $response = $this->get(route('adtea.register'));

        $response->assertStatus(200);
        $response->assertSee('id="adteaRegistrationForm"', false);
        $response->assertSee('name="registration_type"', false);
        $response->assertSee('value="register"', false);
        $response->assertSee(route('adtea-page'), false);
    }

    /**
     * Test submitting from the standalone registration page redirects
     * the user back to that same page with a success message.
     */
    public function test_registration_submitted_from_standalone_page_redirects_back(): void
    {
        Mail::fake();

        $payload = [
            'from' => 'register',
            'registration_type' => 'participant',
            'name' => 'Standalone Page User',
            'email' => 'standalone@example.com',
            'phone' => '08099998888',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertRedirect(route('adtea.register'));
        $response->assertSessionHas('registration_success');
        $this->assertDatabaseHas('event_registrations', [
            'email' => 'standalone@example.com',
        ]);
    }

    /**
     * Test server-side validation error when required field 'name' is missing.
     */
    public function test_registration_fails_when_name_is_missing(): void
    {
        Mail::fake();

        $payload = [
            'name' => '',
            'email' => 'attendee@example.com',
            'phone' => '+2348012345678',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertSessionHasErrors(['name']);
        $this->assertDatabaseMissing('event_registrations', [
            'email' => 'attendee@example.com',
        ]);
        Mail::assertNothingSent();
    }

    /**
     * Test server-side validation error when required field 'email' is missing.
     */
    public function test_registration_fails_when_email_is_missing(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Emeka Victor',
            'email' => '',
            'phone' => '+2348012345678',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertSessionHasErrors(['email']);
        $this->assertDatabaseMissing('event_registrations', [
            'name' => 'Emeka Victor',
        ]);
        Mail::assertNothingSent();
    }

    /**
     * Test server-side validation error when 'email' is malformed.
     */
    public function test_registration_fails_when_email_is_malformed(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Chidi Mokeme',
            'email' => 'not-a-valid-email-address',
            'phone' => '+2348012345678',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertSessionHasErrors(['email']);
        $this->assertDatabaseMissing('event_registrations', [
            'name' => 'Chidi Mokeme',
        ]);
        Mail::assertNothingSent();
    }

    /**
     * Test server-side validation error when optional field 'phone' is malformed.
     */
    public function test_registration_fails_when_phone_is_malformed(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Folake Adeyemi',
            'email' => 'folake@example.com',
            'phone' => 'abc-invalid-phone-xyz',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        $response->assertSessionHasErrors(['phone']);
        $this->assertDatabaseMissing('event_registrations', [
            'email' => 'folake@example.com',
        ]);
        Mail::assertNothingSent();
    }

    /**
     * Test API/JSON validation responses return 422 with specific error keys.
     */
    public function test_validation_errors_returned_as_json_for_json_requests(): void
    {
        $response = $this->postJson(route('adtea.registration.store'), [
            'name' => '',
            'email' => 'invalid-email',
            'phone' => 'bad-phone',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['name', 'email', 'phone']);
    }

    /**
     * Test CRUD: Read list of registrations (index).
     */
    public function test_can_read_all_registrations_via_index(): void
    {
        $reg1 = EventRegistration::create([
            'name' => 'Driver One',
            'email' => 'driver1@example.com',
            'phone' => '08011112222',
        ]);

        $reg2 = EventRegistration::create([
            'name' => 'Driver Two',
            'email' => 'driver2@example.com',
            'phone' => '08033334444',
        ]);

        $response = $this->getJson(route('adtea.registrations.index'));

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Driver One']);
        $response->assertJsonFragment(['name' => 'Driver Two']);
    }

    /**
     * Test CRUD: Create registration via JSON API endpoint.
     */
    public function test_can_create_registration_via_api(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Samuel Peters',
            'email' => 'samuel.peters@example.com',
            'phone' => '+234 809 999 8888',
            'message' => 'Registering as an independent taxi operator.',
        ];

        $response = $this->postJson(route('adtea.registrations.store'), $payload);

        $response->assertStatus(201);
        $response->assertJsonPath('status', 'success');
        $response->assertJsonPath('data.name', 'Samuel Peters');
        $response->assertJsonPath('data.email', 'samuel.peters@example.com');

        $this->assertDatabaseHas('event_registrations', [
            'name' => 'Samuel Peters',
            'email' => 'samuel.peters@example.com',
        ]);
    }

    /**
     * Test CRUD: Read single registration (show).
     */
    public function test_can_read_single_registration_via_show(): void
    {
        $registration = EventRegistration::create([
            'name' => 'Zainab Danjuma',
            'email' => 'zainab@example.com',
            'phone' => '08055556666',
            'message' => 'Airport shuttle service manager.',
        ]);

        $response = $this->getJson(route('adtea.registrations.show', $registration));

        $response->assertStatus(200);
        $response->assertJsonPath('status', 'success');
        $response->assertJsonPath('data.id', $registration->id);
        $response->assertJsonPath('data.name', 'Zainab Danjuma');
    }

    /**
     * Test CRUD: Update registration.
     */
    public function test_can_update_registration(): void
    {
        $registration = EventRegistration::create([
            'name' => 'Olumide Bakare',
            'email' => 'olumide@example.com',
            'phone' => '08077778888',
            'message' => 'Old note',
        ]);

        $updatePayload = [
            'name' => 'Olumide Bakare Senior',
            'email' => 'olumide.updated@example.com',
            'phone' => '+234 807 777 9999',
            'message' => 'Updated summit expectations and notes.',
        ];

        $response = $this->putJson(route('adtea.registrations.update', $registration), $updatePayload);

        $response->assertStatus(200);
        $response->assertJsonPath('status', 'success');
        $response->assertJsonPath('data.name', 'Olumide Bakare Senior');
        $response->assertJsonPath('data.email', 'olumide.updated@example.com');

        $this->assertDatabaseHas('event_registrations', [
            'id' => $registration->id,
            'name' => 'Olumide Bakare Senior',
            'email' => 'olumide.updated@example.com',
            'phone' => '+234 807 777 9999',
            'message' => 'Updated summit expectations and notes.',
        ]);
    }

    /**
     * Test CRUD: Delete registration.
     */
    public function test_can_delete_registration(): void
    {
        $registration = EventRegistration::create([
            'name' => 'To Be Deleted',
            'email' => 'delete.me@example.com',
            'phone' => '08000000000',
        ]);

        $response = $this->deleteJson(route('adtea.registrations.destroy', $registration));

        $response->assertStatus(200);
        $response->assertJsonPath('status', 'success');

        $this->assertDatabaseMissing('event_registrations', [
            'id' => $registration->id,
        ]);
    }

    /**
     * Test Administrator Notification: Email is sent to configured admin address
     * containing the submitted name, email, phone, and message.
     */
    public function test_administrator_notification_email_is_sent_with_correct_content(): void
    {
        Mail::fake();

        $configuredAdmin = 'adtea-admin@tourismafrikanianig.com';
        Config::set('mail.admin_address', $configuredAdmin);

        $payload = [
            'name' => 'Kudirat Abiola',
            'email' => 'kudirat@example.com',
            'phone' => '+234 802 333 4444',
            'occupation' => 'Hotel Shuttle Dispatcher',
            'organisation' => 'Coastal Transfers Ltd',
            'gender' => 'Female',
            'country' => 'Nigeria',
            'state' => 'Lagos',
            'how_heard' => 'Friend or Colleague',
            'expectations' => 'I expect practical customer service training for our dispatch team.',
            'message' => 'Requesting special transport operator seating.',
        ];

        $this->post(route('adtea.registration.store'), $payload);

        Mail::assertSent(EventRegistrationAdminNotification::class, function ($mail) use ($configuredAdmin, $payload) {
            // Verify recipient is the configured admin address
            $hasRecipient = $mail->hasTo($configuredAdmin);

            // Verify the mailable contains the registration model with submitted data
            $hasCorrectData = $mail->registration->name === $payload['name']
                && $mail->registration->email === $payload['email']
                && $mail->registration->phone === $payload['phone']
                && $mail->registration->message === $payload['message'];

            // Render the email view to verify the submitted fields are present in the HTML output
            $rendered = $mail->render();
            $containsContent = str_contains($rendered, $payload['name'])
                && str_contains($rendered, $payload['email'])
                && str_contains($rendered, $payload['phone'])
                && str_contains($rendered, $payload['occupation'])
                && str_contains($rendered, $payload['organisation'])
                && str_contains($rendered, $payload['country'])
                && str_contains($rendered, $payload['state'])
                && str_contains($rendered, $payload['how_heard'])
                && str_contains($rendered, $payload['expectations'])
                && str_contains($rendered, $payload['message']);

            return $hasRecipient && $hasCorrectData && $containsContent;
        });
    }

    /**
     * Test Administrator Notification Resilience: If the email fails to send,
     * the registration is STILL saved in the database, the failure is logged
     * with diagnostic details, and the user request succeeds.
     */
    public function test_notification_failure_does_not_prevent_registration_from_being_saved(): void
    {
        $configuredAdmin = 'admin-fail-test@tourismafrikanianig.com';
        Config::set('mail.admin_address', $configuredAdmin);

        // Spy on logger to verify diagnostic error logging
        Log::spy();

        // Mock Mail facade to throw a simulated network/SMTP failure
        Mail::shouldReceive('to')
            ->once()
            ->with($configuredAdmin)
            ->andReturnSelf();

        Mail::shouldReceive('send')
            ->once()
            ->andThrow(new \RuntimeException('Connection to mail host mail.tourismafrikania.com:587 failed'));

        $payload = [
            'name' => 'Resilience Test User',
            'email' => 'resilience@example.com',
            'phone' => '+234 801 999 0000',
            'message' => 'Registration should persist even if mail server fails.',
        ];

        $response = $this->post(route('adtea.registration.store'), $payload);

        // User should still receive successful redirect to registration section
        $response->assertRedirect(route('adtea-page') . '#registration');
        $response->assertSessionHas('registration_success');

        // Confirm record was still persisted in the database
        $this->assertDatabaseHas('event_registrations', [
            'name' => 'Resilience Test User',
            'email' => 'resilience@example.com',
            'phone' => '+234 801 999 0000',
            'message' => 'Registration should persist even if mail server fails.',
        ]);

        // Confirm failure was logged with sufficient diagnostic context
        Log::shouldHaveReceived('error')
            ->once()
            ->withArgs(function ($message, $context) use ($configuredAdmin) {
                return str_contains($message, 'ADTEA Registration Notification Mail failed to send')
                    && isset($context['registration_id'])
                    && $context['recipient'] === $configuredAdmin
                    && str_contains($context['error_message'], 'Connection to mail host');
            });
    }
}
