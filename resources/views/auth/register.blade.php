{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.main')
@section('head', 'Signup')
@section('header-area')
   @include('layouts.header')
@endsection
@section('content')
    @section('breadcrumb', 'Signup')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->

<!-- sign up area start -->
<section class="signup__area p-relative z-index-1 pt-100 pb-145">
    <div class="sign__shape">
       <img class="man-1" src="assets/img/icon/sign/man-3.png" alt="">
       <img class="man-2 man-22" src="assets/img/icon/sign/man-2.png" alt="">
       <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
       <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
       <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
       <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
       <img class="flower" src="assets/img/icon/sign/flower.png" alt="">
    </div>
    <div class="container">
       <div class="row">
          <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
             <div class="section__title-wrapper text-center mb-55">
                <h2 class="section__title">Create an  Account</h2>
             </div>
          </div>
       </div>
       <div class="row">
           <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="sign__wrapper white-bg">
                    <div class="sign__form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="sign__input-wrapper mb-25">
                            <h5>Full Name</h5>
                            <div class="sign__input">
                                <input type="text" placeholder="Full name" name="name" class="@error('password') is-invalid @enderror">
                                <i class="fal fa-user"></i>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="sign__input-wrapper mb-25">
                            <h5>Email address</h5>
                            <div class="sign__input">
                                <input type="email" placeholder="e-mail address" name="email" class="@error('password') is-invalid @enderror">
                                <i class="fal fa-envelope"></i>
                            </div>
                        </div>
                        <div class="sign__input-wrapper mb-25">
                            <h5>Register as</h5>
                            <select name="role_as" id="" class=" @error('password') is-invalid @enderror">
                                <option selected value="student">Student</option>
                                <option value="school">School Adminitrator</option>
                                <option value="lecture">Lecture(E-book)</option>
                            </select>
                        </div>
                        <div class="sign__input-wrapper mb-25">
                            <h5>Password</h5>
                            <div class="sign__input">
                                <input type="password" placeholder="Password" name="password" class="@error('password') is-invalid @enderror">
                                <i class="fal fa-lock"></i>
                            </div>
                        </div>
                        <div class="sign__input-wrapper mb-10">
                            <h5>Re-Password</h5>
                            <div class="sign__input">
                                <input type="password" placeholder="Re-Password" name="password_confirmation" required autocomplete="new-password">
                                <i class="fal fa-lock"></i>
                            </div>
                        </div>
                        <div class="sign__action d-flex justify-content-between mb-30">
                            <div class="sign__agree d-flex align-items-center">
                                <input class="m-check-input" type="checkbox" id="m-agree">
                                <label class="m-check-label" for="m-agree">I agree to the <a href="#">Terms & Conditions</a>
                                </label>
                            </div>
                        </div>
                        <button class="tp-btn w-100"> <span></span> Sign Up</button>
                        <div class="sign__new text-center mt-20">
                            <p>Already have an account ? <a href="/login"> Sign In</a></p>
                        </div>
                    </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- sign up area end -->
 @endsection