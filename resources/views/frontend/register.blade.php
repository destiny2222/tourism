@extends('layouts.main')
@section('head', 'AHTES26')
@section('header-area')
    @include('layouts.subheader')
@endsection
@section('content')
@section('breadcrumb', 'AHTES26')
<!-- breadcrumb-area -->
@include('partials.breadcrumb-area')
<!-- breadcrumb-area-end -->


<section class="membership-area pt-110 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6">
                <div class="section-title text-center mb-40">
                    <h2>AHTES26 Registration Packages</h2>
                    <p>Select the package that best fits your goals for AHTES 2026.</p>
                </div>
            </div>
            <div class="tab-content" id="priceTabContent">
                <div class="tab-pane fade active show" id="monthly" role="tabpanel">
                    <div class="row justify-content-center">
                        {{-- Visitor Package --}}
                        <div class="col-12 col-xl-4 col-lg-4 col-md-6">
                            <div class="membership-box mb-30 h-100 d-flex flex-column">
                                <div class="membership-info flex-grow-1">
                                    <h4>EDU VISITOR PACKAGE (FREE)</h4>
                                    <div class="membership-price">
                                        <span>Benefits</span>
                                    </div>
                                    <div class="membership-list">
                                        <ul>
                                            <li><span><i class="far fa-check"></i></span>Network with scholars &
                                                professionals</li>
                                            <li><span><i class="far fa-check"></i></span>Certificate of Participation
                                                Request</li>
                                            <li><span><i class="far fa-check"></i></span>Access to Network with
                                                Businesses</li>
                                            <li><span><i class="far fa-check"></i></span>Access to the Educational Award
                                                Night</li>
                                            <li><span><i class="far fa-check"></i></span>Participate to Win Big</li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="membership-btn mt-auto" href="{{ route('register-visitor') }}">Register
                                    Now</a>
                            </div>
                        </div>

                        {{-- Regular Package --}}
                        <div class="col-12 col-xl-4 col-lg-4 col-md-6">
                            <div class="membership-box mb-30 h-100 d-flex flex-column">
                                <div class="membership-info flex-grow-1">
                                    <h4>EDU REGULAR DELEGATE ₦100,000</h4>
                                    <div class="membership-price">
                                        <span>Benefits</span>
                                    </div>
                                    <div class="membership-list">
                                        <ul>
                                            <li><i class="far fa-check"></i> VIP Reserved Seating </li>
                                            <li><i class="far fa-check"></i> Brand Logo on Official Backdrop</li>
                                            <li><i class="far fa-check"></i> High-Level Networking</li>
                                            <li><i class="far fa-check"></i> Certificate of Participation</li>
                                            <li><i class="far fa-check"></i> Premium Delegate Meal</li>
                                            <li><i class="far fa-check"></i> Lagos Naija Edu-Tour Access</li>
                                            <li><i class="far fa-check"></i> Official AHTES Summit Pack</li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="membership-btn mt-auto" href="{{ route('register-regular') }}">Register
                                    Now</a>
                            </div>
                        </div>

                        {{-- Plus Package --}}
                        <div class="col-12 col-xl-4 col-lg-4 col-md-6">
                            <div class="membership-box mb-30 h-100 d-flex flex-column">
                                <div class="membership-info flex-grow-1">
                                    <h4>EDU-DELEGATE PLUS ₦350,000</h4>
                                    <div class="membership-price">
                                        <span>Benefits</span>
                                    </div>
                                    <div class="membership-list">
                                        <ul>
                                            <li><i class="far fa-check"></i> Everything in Regular Package</li>
                                            <li><i class="far fa-check"></i> Enhanced Brand Recognition</li>
                                            <li><i class="far fa-check"></i> One (1) Night Hotel</li>
                                            <li><i class="far fa-check"></i> Extended Networking</li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="membership-btn mt-auto" href="{{ route('register-delegate') }}">Register
                                    Now</a>
                            </div>
                        </div>

                        {{-- Premium Package --}}
                        <div class="col-12 col-xl-4 col-lg-4 col-md-6 mt-30">
                            <div class="membership-box mb-30 h-100 d-flex flex-column">
                                <div class="membership-info flex-grow-1">
                                    <h4>PREMIUM EDU-DELEGATE ₦550,000</h4>
                                    <div class="membership-price">
                                        <span>Benefits</span>
                                    </div>
                                    <div class="membership-list">
                                        <ul>
                                            <li><i class="far fa-check"></i> Everything in Plus Package</li>
                                            <li><i class="far fa-check"></i> Two (2) Nights Premium Hotel</li>
                                            <li><i class="far fa-check"></i> Stronger Brand Visibility</li>
                                            <li><i class="far fa-check"></i> Priority Networking Advantage</li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="membership-btn mt-auto" href="{{ route('register-premium') }}">Register
                                    Now</a>
                            </div>
                        </div>

                        {{-- Investors Package --}}
                        <div class="col-12 col-xl-4 col-lg-4 col-md-6 mt-30">
                            <div class="membership-box mb-30 h-100 d-flex flex-column">
                                <div class="membership-info flex-grow-1">
                                    <h4>INVESTORS & STRATEGIC PARTNERS ₦1,000,000</h4>
                                    <div class="membership-price">
                                        <span>Benefits</span>
                                    </div>
                                    <div class="membership-list">
                                        <ul>
                                            <li><i class="far fa-check"></i> Everything in Premium Package</li>
                                            <li><i class="far fa-check"></i> Exclusive Brand Presentation</li>
                                            <li><i class="far fa-check"></i> Strategic Brand Positioning</li>
                                            <li><i class="far fa-check"></i> Access to High-Growth Ventures</li>
                                            <li><i class="far fa-check"></i> Executive Visibility</li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="membership-btn mt-auto" href="{{ route('register-page') }}">Register Now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</section>


@endsection
