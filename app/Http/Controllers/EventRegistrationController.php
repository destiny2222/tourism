<?php

namespace App\Http\Controllers;

use App\Mail\EventRegistrationAdminNotification;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EventRegistrationController extends Controller
{
    /**
     * Display a listing of all event registrations.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $registrations = EventRegistration::latest()->get();

        return response()->json([
            'status' => 'success',
            'data' => $registrations,
        ], 200);
    }

    /**
     * Store a newly created event registration and notify the administrator(s).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->registrationRules());

        $validated['registration_type'] = $validated['registration_type'] ?? EventRegistration::TYPE_PARTICIPANT;
        $validated = $this->normalizeRegistration($validated);

        $registration = EventRegistration::create($validated);

        $this->notifyAdministrators($registration);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Registration completed successfully.',
                'data' => $registration,
            ], 201);
        }

        return redirect()->to($this->registrationRedirectTarget($request))
            ->with('registration_success', 'Thank you! Your registration for ADTEA 2026 has been received successfully. We look forward to seeing you at the summit.');
    }

    /**
     * Determine where to send the user after a successful registration,
     * depending on whether they registered from the standalone
     * registration page or the main ADTEA sponsorship page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function registrationRedirectTarget(Request $request): string
    {
        return $request->input('from') === 'register'
            ? route('adtea.register')
            : route('adtea-page') . '#registration';
    }

    /**
     * Display the specified event registration.
     *
     * @param  \App\Models\EventRegistration  $eventRegistration
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(EventRegistration $eventRegistration)
    {
        return response()->json([
            'status' => 'success',
            'data' => $eventRegistration,
        ], 200);
    }

    /**
     * Update the specified event registration in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventRegistration  $eventRegistration
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, EventRegistration $eventRegistration)
    {
        $validated = $request->validate($this->registrationRules(false));

        $validated = $this->normalizeRegistration($validated);

        $eventRegistration->update($validated);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Registration updated successfully.',
                'data' => $eventRegistration,
            ], 200);
        }

        return redirect()->back()->with('registration_success', 'Registration updated successfully.');
    }

    /**
     * Remove the specified event registration from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventRegistration  $eventRegistration
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, EventRegistration $eventRegistration)
    {
        $eventRegistration->delete();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Registration deleted successfully.',
            ], 200);
        }

        return redirect()->back()->with('registration_success', 'Registration deleted successfully.');
    }

    /**
     * Validation rules for the ADTEA attendee registration form.
     *
     * The "name", "email" and "phone" fields are always required for new
     * registrations. All profile and survey fields are optional.
     *
     * @param  bool  $isCreate
     * @return array
     */
    protected function registrationRules(bool $isCreate = true): array
    {
        $nameRule = $isCreate ? 'required|string|max:255' : 'sometimes|required|string|max:255';
        $emailRule = $isCreate ? 'required|string|email|max:255' : 'sometimes|required|string|email|max:255';
        $phoneRule = $isCreate
            ? 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:7|max:25'
            : 'sometimes|required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:7|max:25';

        return [
            'registration_type' => 'nullable|string|in:' . implode(',', [
                EventRegistration::TYPE_DRIVER,
                EventRegistration::TYPE_PARTICIPANT,
            ]),
            'name' => $nameRule,
            'email' => $emailRule,
            'phone' => $phoneRule,
            'occupation' => 'nullable|string|max:255',
            'organisation' => 'nullable|string|max:255',
            'gender' => 'nullable|string|in:' . implode(',', EventRegistration::GENDERS),
            'country' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'driver_association' => 'nullable|string|max:255',
            'driver_vehicle_type' => 'nullable|string|in:' . implode(',', EventRegistration::DRIVER_VEHICLE_TYPES),
            'driver_experience' => 'nullable|string|max:50',
            'how_heard' => 'nullable|string|in:' . implode(',', EventRegistration::HOW_HEARD_OPTIONS),
            'expectations' => 'nullable|string|max:2000',
            'message' => 'nullable|string|max:5000',
        ];
    }

    /**
     * Normalise the validated registration payload:
     * - empty strings become null for optional fields
     * - driver-only fields are cleared for participant registrations
     *
     * @param  array  $data
     * @return array
     */
    protected function normalizeRegistration(array $data): array
    {
        $nullableFields = [
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

        foreach ($nullableFields as $field) {
            if (array_key_exists($field, $data) && is_string($data[$field]) && trim($data[$field]) === '') {
                $data[$field] = null;
            }
        }

        if (array_key_exists('registration_type', $data)
            && $data['registration_type'] !== EventRegistration::TYPE_DRIVER) {
            $data['driver_association'] = null;
            $data['driver_vehicle_type'] = null;
            $data['driver_experience'] = null;
        }

        return $data;
    }

    /**
     * Send email notification to configured administrator(s).
     * If sending fails, the error is logged and execution continues
     * without interrupting the registration persistence.
     *
     * @param  \App\Models\EventRegistration  $registration
     * @return void
     */
    protected function notifyAdministrators(EventRegistration $registration): void
    {
        $adminEmail = config('mail.admin_address') ?: config('mail.from.address');

        if (empty($adminEmail)) {
            Log::warning('ADTEA Registration Notification Mail skipped: No admin address configured in mail settings.', [
                'registration_id' => $registration->id,
            ]);
            return;
        }

        try {
            Mail::to($adminEmail)->send(new EventRegistrationAdminNotification($registration));
        } catch (Throwable $e) {
            Log::error('ADTEA Registration Notification Mail failed to send', [
                'registration_id' => $registration->id,
                'recipient' => $adminEmail,
                'error_message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
        }
    }
}
