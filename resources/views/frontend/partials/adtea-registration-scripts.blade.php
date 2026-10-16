        // 15. Real-Time Client-Side Validation for ADTEA Attendee Registration Form
        (function() {
            const form = document.getElementById('adteaRegistrationForm');
            if (!form) return;

            const nameInput = document.getElementById('reg_name');
            const emailInput = document.getElementById('reg_email');
            const phoneInput = document.getElementById('reg_phone');
            const messageInput = document.getElementById('reg_message');

            const nameError = document.getElementById('reg_name_error');
            const emailError = document.getElementById('reg_email_error');
            const phoneError = document.getElementById('reg_phone_error');
            const messageError = document.getElementById('reg_message_error');

            // Standard RFC 5322 compliant email regex
            const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/;
            // Phone regex permitting +, numbers, parentheses, spaces, and hyphens (7-25 chars)
            const phoneFormatRegex = /^[\+]?[(]?[0-9]{1,4}[)]?[-\s./0-9]{5,20}$/;

            function hideServerError(input) {
                const parent = input.closest('.mb-3, .mb-4');
                if (parent) {
                    const serverError = parent.querySelector('.server-error-feedback');
                    if (serverError) {
                        serverError.style.display = 'none';
                    }
                }
            }

            function setFieldState(input, errorEl, isValid, message) {
                hideServerError(input);
                if (isValid) {
                    input.classList.remove('is-invalid');
                    input.classList.add('is-valid');
                    if (errorEl) {
                        errorEl.classList.add('d-none');
                        errorEl.innerText = '';
                    }
                } else {
                    input.classList.remove('is-valid');
                    input.classList.add('is-invalid');
                    if (errorEl) {
                        errorEl.classList.remove('d-none');
                        errorEl.innerText = message;
                    }
                }
            }

            function clearFieldState(input, errorEl) {
                hideServerError(input);
                input.classList.remove('is-valid', 'is-invalid');
                if (errorEl) {
                    errorEl.classList.add('d-none');
                    errorEl.innerText = '';
                }
            }

            function validateName() {
                const val = nameInput.value.trim();
                if (!val) {
                    setFieldState(nameInput, nameError, false, 'Full Name is required.');
                    return false;
                }
                if (val.length < 2) {
                    setFieldState(nameInput, nameError, false, 'Full Name must be at least 2 characters.');
                    return false;
                }
                setFieldState(nameInput, nameError, true, '');
                return true;
            }

            function validateEmail() {
                const val = emailInput.value.trim();
                if (!val) {
                    setFieldState(emailInput, emailError, false, 'Email Address is required.');
                    return false;
                }
                if (!emailRegex.test(val)) {
                    setFieldState(emailInput, emailError, false, 'Please enter a valid email address (e.g. name@example.com).');
                    return false;
                }
                setFieldState(emailInput, emailError, true, '');
                return true;
            }

            function validatePhone() {
                const val = phoneInput.value.trim();
                if (!val) {
                    setFieldState(phoneInput, phoneError, false, 'Phone Number is required.');
                    return false;
                }
                const digitsOnly = val.replace(/\D/g, '');
                if (digitsOnly.length < 7 || !phoneFormatRegex.test(val)) {
                    setFieldState(phoneInput, phoneError, false, 'Please enter a valid phone number (at least 7 digits, e.g. +234 800 123 4567).');
                    return false;
                }
                setFieldState(phoneInput, phoneError, true, '');
                return true;
            }

            // Real-time events for instant user feedback
            nameInput.addEventListener('input', validateName);
            nameInput.addEventListener('blur', validateName);

            emailInput.addEventListener('input', validateEmail);
            emailInput.addEventListener('blur', validateEmail);

            phoneInput.addEventListener('input', validatePhone);
            phoneInput.addEventListener('blur', validatePhone);

            form.addEventListener('submit', function(e) {
                const isNameValid = validateName();
                const isEmailValid = validateEmail();
                const isPhoneValid = validatePhone();

                if (!isNameValid || !isEmailValid || !isPhoneValid) {
                    e.preventDefault();
                    if (!isNameValid) nameInput.focus();
                    else if (!isEmailValid) emailInput.focus();
                    else if (!isPhoneValid) phoneInput.focus();
                }
            });
        })();

        // 16. Registration Path Switching (Driver / Participant) & Country-State Linkage
        const ADTEA_NIGERIAN_STATES = [
            'Abia', 'Adamawa', 'Akwa Ibom', 'Anambra', 'Bauchi', 'Bayelsa', 'Benue', 'Borno',
            'Cross River', 'Delta', 'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 'FCT (Abuja)', 'Gombe',
            'Imo', 'Jigawa', 'Kaduna', 'Kano', 'Katsina', 'Kebbi', 'Kogi', 'Kwara', 'Lagos',
            'Nasarawa', 'Niger', 'Ogun', 'Ondo', 'Osun', 'Oyo', 'Plateau', 'Rivers', 'Sokoto',
            'Taraba', 'Yobe', 'Zamfara'
        ];

        function setRegistrationType(type, scrollToForm) {
            const typeInput = document.getElementById('reg_registration_type');
            if (!typeInput || (type !== 'driver' && type !== 'participant')) return;

            // Keep the dropdown in sync when called programmatically
            if (typeInput.value !== type) typeInput.value = type;
            const isDriver = type === 'driver';

            // Toggle driver-only detail fields
            const driverFields = document.getElementById('driverFields');
            if (driverFields) driverFields.style.display = isDriver ? '' : 'none';

            // Update the form heading copy
            const badgeText = document.getElementById('regPathBadgeText');
            const title = document.getElementById('regPathTitle');
            const subtitle = document.getElementById('regPathSubtitle');

            if (badgeText) badgeText.innerText = isDriver ? 'Driver Registration' : 'Participant Registration';
            if (title) title.innerText = isDriver ? 'Driver Registration — Free' : 'Participant Registration — Free';
            if (subtitle) {
                subtitle.innerText = isDriver
                    ? 'Airport drivers register here to secure a free delegate seat at the 2026 ADTEA Summit.'
                    : 'Tourism & hospitality stakeholders, students and general attendees register here — completely free.';
            }

            if (scrollToForm) {
                const formCard = document.getElementById('adteaRegistrationForm');
                if (formCard) formCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        function buildStateField(country, selectedState) {
            const wrap = document.getElementById('reg_state_wrap');
            if (!wrap) return;

            wrap.innerHTML = '';
            const fieldStyle = 'border-color: #e2e8f0;';
            const fieldClasses = 'form-control form-control-lg rounded-3';

            if (!country || country === 'Nigeria') {
                // Nigerian attendees pick from the 36 states + FCT
                const select = document.createElement('select');
                select.name = 'state';
                select.id = 'reg_state';
                select.className = 'form-select ' + fieldClasses;
                select.style.cssText = fieldStyle;

                let options = '<option value="">' + (country === 'Nigeria' ? 'Select your state' : 'Select your state (Nigeria)') + '</option>';
                options += ADTEA_NIGERIAN_STATES.map(function (state) {
                    return '<option value="' + state + '">' + state + '</option>';
                }).join('');

                select.innerHTML = options;

                if (selectedState) {
                    const known = ADTEA_NIGERIAN_STATES.indexOf(selectedState) !== -1;
                    if (!known) {
                        select.insertAdjacentHTML('beforeend', '<option value="' + selectedState + '">' + selectedState + '</option>');
                    }
                    select.value = selectedState;
                }

                wrap.appendChild(select);
            } else {
                // All other countries: free-text state / province
                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'state';
                input.id = 'reg_state';
                input.className = fieldClasses;
                input.style.cssText = fieldStyle;
                input.placeholder = 'e.g. State / Province / Region';
                input.value = selectedState || '';
                wrap.appendChild(input);
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Apply the registration path persisted through old input (or default to driver)
            const typeInput = document.getElementById('reg_registration_type');
            if (typeInput) {
                setRegistrationType(typeInput.value === 'participant' ? 'participant' : 'driver', false);
            }

            // Country -> State/Province dynamic field
            const countrySelect = document.getElementById('reg_country');
            const stateWrap = document.getElementById('reg_state_wrap');

            if (countrySelect && stateWrap) {
                const previousState = stateWrap.getAttribute('data-old') || '';
                buildStateField(countrySelect.value, previousState);

                countrySelect.addEventListener('change', function () {
                    buildStateField(countrySelect.value, '');
                });
            }
        });
