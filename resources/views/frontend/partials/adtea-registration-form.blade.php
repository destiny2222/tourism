    {{-- ADTEA Free Registration Form (shared between /adtea#registration and /adtea/register) --}}
    <!-- Section: Attendee Registration Portal -->
    <style>
        /* Free Registration Chip */
        .adtea-free-chip {
            background: #ecfdf5;
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.3);
            font-size: 0.72rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            border-radius: 50px;
            padding: 4px 12px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .adtea-driver-fields {
            background: #eff6ff;
            border: 1px solid rgba(37, 99, 235, 0.2);
            border-radius: 14px;
            padding: 18px;
            transition: all 0.3s ease;
        }
    </style>

    <div id="registration" class="pt-90 pb-90" style="background-color: #f1f5f9; scroll-margin-top: 130px;">
        <div class="container">
            <div class="section-title mb-40 text-center adtea-reveal">
                <span class="adtea-free-chip mb-2">
                    <i class="fas fa-gift"></i> 100% Free Registration
                </span>
                <h2>Register for <span class="down-mark-line-2">ADTEA 2026</span></h2>
                <p class="lead text-secondary mt-2" style="max-width: 760px; margin: 0 auto;">
                    Airport drivers, tourism &amp; hospitality stakeholders and general attendees all register here — completely free. Simply choose your registration type in the form below.
                </p>
            </div>

            <!-- Registration Form -->
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 adtea-reveal">
                    <div class="card-2026 p-4 p-md-5 border-0 shadow-lg" style="background: #ffffff; border-top: 5px solid #ff7b41 !important;">
                        <div class="text-center mb-4">
                            <span class="adtea-badge adtea-badge-orange mb-2" id="regPathBadge">
                                <i class="fas fa-id-card me-1"></i> <span id="regPathBadgeText">Driver Registration</span>
                            </span>
                            <h2 class="font-weight-bold text-dark mt-1" id="regPathTitle">Driver Registration — Free</h2>
                            <p class="text-muted mb-0" id="regPathSubtitle">
                                Airport drivers register here to secure a free delegate seat at the 2026 ADTEA Summit.
                            </p>
                        </div>

                        @if(session('registration_success'))
                            <div class="alert alert-success rounded-3 p-3 mb-4 d-flex align-items-center shadow-sm" role="alert" id="registrationSuccessAlert">
                                <i class="fas fa-check-circle fa-lg text-success me-2"></i>
                                <div class="font-weight-bold">{{ session('registration_success') }}</div>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger rounded-3 p-3 mb-4">
                                <ul class="mb-0 ps-3">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('adtea.registration.store') }}" method="POST" id="adteaRegistrationForm" novalidate>
                            @csrf
                            <input type="hidden" name="from" value="{{ $registrationFormSource ?? 'adtea' }}">

                            <!-- Registration Type Dropdown -->
                            <div class="mb-4">
                                <label for="reg_registration_type" class="form-label font-weight-bold text-dark">
                                    I Am Registering As <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;"><i class="fas fa-user-tag text-muted"></i></span>
                                    <select name="registration_type"
                                            id="reg_registration_type"
                                            class="form-select form-control form-control-lg rounded-end-3 @error('registration_type') is-invalid @enderror"
                                            required
                                            onchange="setRegistrationType(this.value, false);"
                                            style="border-color: #e2e8f0;">
                                        <option value="driver" @selected(old('registration_type', 'driver') === 'driver')>Driver (Airport taxi, ride-hailing, hotel shuttle, chauffeur)</option>
                                        <option value="participant" @selected(old('registration_type') === 'participant')>Participant (Tourism/hospitality staff, student or general attendee)</option>
                                    </select>
                                </div>
                                @error('registration_type')
                                    <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Driver-only fields -->
                            <div id="driverFields" class="adtea-driver-fields mb-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-steering-wheel me-2 text-primary"></i>
                                    <strong class="text-dark">Driver Details</strong>
                                    <small class="text-muted ms-2">(optional — helps us verify your fleet)</small>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="reg_driver_association" class="form-label font-weight-bold text-dark">
                                            Association / Union
                                        </label>
                                        <input type="text"
                                               name="driver_association"
                                               id="reg_driver_association"
                                               class="form-control form-control-lg rounded-3 @error('driver_association') is-invalid @enderror"
                                               placeholder="e.g. NURTW, IPOB Drivers Coop."
                                               value="{{ old('driver_association') }}"
                                               style="border-color: #e2e8f0;">
                                        @error('driver_association')
                                            <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="reg_driver_vehicle_type" class="form-label font-weight-bold text-dark">
                                            Vehicle / Fleet Type
                                        </label>
                                        <select name="driver_vehicle_type"
                                                id="reg_driver_vehicle_type"
                                                class="form-select form-control form-control-lg rounded-3 @error('driver_vehicle_type') is-invalid @enderror"
                                                style="border-color: #e2e8f0;">
                                            <option value="">Select vehicle type</option>
                                            @foreach(\App\Models\EventRegistration::DRIVER_VEHICLE_TYPES as $vehicleType)
                                                <option value="{{ $vehicleType }}" @selected(old('driver_vehicle_type') === $vehicleType)>{{ $vehicleType }}</option>
                                            @endforeach
                                        </select>
                                        @error('driver_vehicle_type')
                                            <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="reg_driver_experience" class="form-label font-weight-bold text-dark">
                                            Years of Experience
                                        </label>
                                        <select name="driver_experience"
                                                id="reg_driver_experience"
                                                class="form-select form-control form-control-lg rounded-3 @error('driver_experience') is-invalid @enderror"
                                                style="border-color: #e2e8f0;">
                                            <option value="">Select experience</option>
                                            @foreach(['Under 1 year', '1 - 3 years', '4 - 6 years', '7 - 10 years', 'Over 10 years'] as $experience)
                                                <option value="{{ $experience }}" @selected(old('driver_experience') === $experience)>{{ $experience }}</option>
                                            @endforeach
                                        </select>
                                        @error('driver_experience')
                                            <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="reg_name" class="form-label font-weight-bold text-dark">
                                        Full Name <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;"><i class="fas fa-user text-muted"></i></span>
                                        <input type="text" 
                                               name="name" 
                                               id="reg_name" 
                                               class="form-control form-control-lg rounded-end-3 @error('name') is-invalid @enderror" 
                                               placeholder="e.g. Adebayo Ogunlesi" 
                                               value="{{ old('name') }}" 
                                               required 
                                               style="border-color: #e2e8f0;">
                                    </div>
                                    <span class="client-error-feedback text-danger small mt-1 d-none" id="reg_name_error"></span>
                                    @error('name')
                                        <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="reg_email" class="form-label font-weight-bold text-dark">
                                        Email Address <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;"><i class="fas fa-envelope text-muted"></i></span>
                                        <input type="email" 
                                               name="email" 
                                               id="reg_email" 
                                               class="form-control form-control-lg rounded-end-3 @error('email') is-invalid @enderror" 
                                               placeholder="e.g. attendee@company.com" 
                                               value="{{ old('email') }}" 
                                               required 
                                               style="border-color: #e2e8f0;">
                                    </div>
                                    <span class="client-error-feedback text-danger small mt-1 d-none" id="reg_email_error"></span>
                                    @error('email')
                                        <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="reg_phone" class="form-label font-weight-bold text-dark">
                                        Phone Number <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;"><i class="fas fa-phone-alt text-muted"></i></span>
                                        <input type="text" 
                                               name="phone" 
                                               id="reg_phone" 
                                               class="form-control form-control-lg rounded-end-3 @error('phone') is-invalid @enderror" 
                                               placeholder="e.g. +234 800 123 4567" 
                                               value="{{ old('phone') }}" 
                                               required 
                                               style="border-color: #e2e8f0;">
                                    </div>
                                    <span class="client-error-feedback text-danger small mt-1 d-none" id="reg_phone_error"></span>
                                    @error('phone')
                                        <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="reg_gender" class="form-label font-weight-bold text-dark">
                                        Gender <small class="text-muted font-weight-normal">(Optional)</small>
                                    </label>
                                    <select name="gender"
                                            id="reg_gender"
                                            class="form-select form-control form-control-lg rounded-3 @error('gender') is-invalid @enderror"
                                            style="border-color: #e2e8f0;">
                                        <option value="">Select gender</option>
                                        @foreach(\App\Models\EventRegistration::GENDERS as $genderOption)
                                            <option value="{{ $genderOption }}" @selected(old('gender') === $genderOption)>{{ $genderOption }}</option>
                                        @endforeach
                                    </select>
                                    @error('gender')
                                        <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="reg_occupation" class="form-label font-weight-bold text-dark">
                                        Occupation <small class="text-muted font-weight-normal">(Optional)</small>
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;"><i class="fas fa-briefcase text-muted"></i></span>
                                        <input type="text"
                                               name="occupation"
                                               id="reg_occupation"
                                               class="form-control form-control-lg rounded-end-3 @error('occupation') is-invalid @enderror"
                                               placeholder="e.g. Airport Taxi Driver"
                                               value="{{ old('occupation') }}"
                                               style="border-color: #e2e8f0;">
                                    </div>
                                    @error('occupation')
                                        <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="reg_organisation" class="form-label font-weight-bold text-dark">
                                        Organisation <small class="text-muted font-weight-normal">(Optional)</small>
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-color: #e2e8f0;"><i class="fas fa-building text-muted"></i></span>
                                        <input type="text"
                                               name="organisation"
                                               id="reg_organisation"
                                               class="form-control form-control-lg rounded-end-3 @error('organisation') is-invalid @enderror"
                                               placeholder="e.g. Lagos Airport Transfer Co."
                                               value="{{ old('organisation') }}"
                                               style="border-color: #e2e8f0;">
                                    </div>
                                    @error('organisation')
                                        <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="reg_country" class="form-label font-weight-bold text-dark">
                                        Country <small class="text-muted font-weight-normal">(Optional)</small>
                                    </label>
                                    <select name="country"
                                            id="reg_country"
                                            class="form-select form-control form-control-lg rounded-3 @error('country') is-invalid @enderror"
                                            style="border-color: #e2e8f0;">
                                        <option value="">Select country</option>
                                        @php
                                            $adteaCountries = [
                                                'Afghanistan','Albania','Algeria','Andorra','Angola','Antigua and Barbuda','Argentina','Armenia','Australia','Austria','Azerbaijan',
                                                'Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Brazil','Brunei','Bulgaria','Burkina Faso','Burundi',
                                                'Cabo Verde','Cambodia','Cameroon','Canada','Central African Republic','Chad','Chile','China','Colombia','Comoros','Costa Rica','Croatia','Cuba','Cyprus','Czech Republic',
                                                'Denmark','Djibouti','Dominica','Dominican Republic',
                                                'Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Eswatini','Ethiopia',
                                                'Fiji','Finland','France','Gabon','Gambia','Georgia','Germany','Ghana','Greece','Grenada','Guatemala','Guinea','Guinea-Bissau','Guyana',
                                                'Haiti','Honduras','Hungary','Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Italy',
                                                'Jamaica','Japan','Jordan','Kazakhstan','Kenya','Kiribati','Kosovo','Kuwait','Kyrgyzstan',
                                                'Laos','Latvia','Lebanon','Lesotho','Liberia','Libya','Liechtenstein','Lithuania','Luxembourg',
                                                'Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Marshall Islands','Mauritania','Mauritius','Mexico','Micronesia','Moldova','Monaco','Mongolia','Montenegro','Morocco','Mozambique','Myanmar',
                                                'Namibia','Nauru','Nepal','Netherlands','New Zealand','Nicaragua','Niger','Nigeria','North Korea','North Macedonia','Norway',
                                                'Oman','Pakistan','Palau','Palestine','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Poland','Portugal','Qatar',
                                                'Romania','Russia','Rwanda','Saint Kitts and Nevis','Saint Lucia','Saint Vincent and the Grenadines','Samoa','San Marino','Sao Tome and Principe','Saudi Arabia','Senegal','Serbia','Seychelles','Sierra Leone','Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','South Africa','South Korea','South Sudan','Spain','Sri Lanka','Sudan','Suriname','Sweden','Switzerland','Syria',
                                                'Taiwan','Tajikistan','Tanzania','Thailand','Timor-Leste','Togo','Tonga','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Tuvalu',
                                                'Uganda','Ukraine','United Arab Emirates','United Kingdom','United States','Uruguay','Uzbekistan',
                                                'Vanuatu','Venezuela','Vietnam','Yemen','Zambia','Zimbabwe',
                                            ];
                                        @endphp
                                        @foreach($adteaCountries as $countryOption)
                                            <option value="{{ $countryOption }}" @selected(old('country') === $countryOption)>{{ $countryOption }}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="reg_state" class="form-label font-weight-bold text-dark">
                                        State / Province <small class="text-muted font-weight-normal">(Optional)</small>
                                    </label>
                                    <div id="reg_state_wrap" data-old="{{ old('state') }}"></div>
                                    @error('state')
                                        <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="reg_how_heard" class="form-label font-weight-bold text-dark">
                                    How did you find out about this event? <small class="text-muted font-weight-normal">(Optional)</small>
                                </label>
                                <select name="how_heard"
                                        id="reg_how_heard"
                                        class="form-select form-control form-control-lg rounded-3 @error('how_heard') is-invalid @enderror"
                                        style="border-color: #e2e8f0;">
                                    <option value="">Select an option</option>
                                    @foreach(\App\Models\EventRegistration::HOW_HEARD_OPTIONS as $source)
                                        <option value="{{ $source }}" @selected(old('how_heard') === $source)>{{ $source }}</option>
                                    @endforeach
                                </select>
                                @error('how_heard')
                                    <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="reg_expectations" class="form-label font-weight-bold text-dark">
                                    What do you expect at this event? <small class="text-muted font-weight-normal">(Optional)</small>
                                </label>
                                <textarea name="expectations" 
                                          id="reg_expectations" 
                                          class="form-control form-control-lg rounded-3 @error('expectations') is-invalid @enderror" 
                                          rows="3" 
                                          placeholder="Share what you hope to learn or gain from the ADTEA 2026 Summit..." 
                                          style="border-color: #e2e8f0;">{{ old('expectations') }}</textarea>
                                @error('expectations')
                                    <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="reg_message" class="form-label font-weight-bold text-dark">
                                    Additional Notes <small class="text-muted font-weight-normal">(Optional)</small>
                                </label>
                                <textarea name="message" 
                                          id="reg_message" 
                                          class="form-control form-control-lg rounded-3 @error('message') is-invalid @enderror" 
                                          rows="3" 
                                          placeholder="Any special requests, accessibility needs or other information you would like us to know..." 
                                          style="border-color: #e2e8f0;">{{ old('message') }}</textarea>
                                <span class="client-error-feedback text-danger small mt-1 d-none" id="reg_message_error"></span>
                                @error('message')
                                    <span class="server-error-feedback text-danger small mt-1 d-block font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" id="btnSubmitRegistration" class="adtea-btn-hero-primary px-5 py-3 font-weight-bold shadow" style="border: none; border-radius: 12px; cursor: pointer;">
                                    <i class="fas fa-paper-plane me-2"></i> Complete Free Registration
                                </button>
                                <p class="text-muted small mt-3 mb-0">
                                    <i class="fas fa-lock me-1"></i> Your details are used only for ADTEA 2026 event coordination.
                                </p>
                                <p class="small mt-2 mb-0">
                                    <i class="fas fa-hand-holding-heart me-1" style="color: #d97706;"></i>
                                    <span class="text-muted">Want to sponsor or partner with ADTEA 2026?</span>
                                    <a href="#sponsor-inquiry" class="font-weight-bold" style="color: #ff7b41;">Reach out through the Partnership Desk <i class="fas fa-arrow-right"></i></a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
