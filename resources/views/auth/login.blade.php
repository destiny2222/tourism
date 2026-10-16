{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
@section('head', 'Login')
@section('header-area')
   @include('layouts.header')
@endsection
@section('content')
    @section('breadcrumb', 'Login')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->
             <!-- sign up area start -->
             <section class="signup__area p-relative z-index-1 pt-100 pb-145">
                <div class="sign__shape">
                   <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
                   <img class="man-2" src="assets/img/icon/sign/man-2.png" alt="">
                   <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
                   <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
                   <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
                   <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
                </div>
                <div class="container">
                   <div class="row">
                      <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                         <div class="section__title-wrapper text-center mb-55">
                            <h2 class="section__title">Sign in</h2>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                         <div class="sign__wrapper white-bg">
                            <div class="sign__form">
                               <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                  <div class="sign__input-wrapper mb-25">
                                     <h5>Email</h5>
                                     <div class="sign__input">
                                        <input type="email" placeholder="e-mail address" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <i class="fal fa-envelope"></i>
                                     </div>
                                     @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="sign__input-wrapper mb-10">
                                     <h5>Password</h5>
                                     <div class="sign__input">
                                        <input type="password" placeholder="Password" class="" name="password" class="@error('password') is-invalid @enderror" required autocomplete="current-password">
                                        <i class="fal fa-lock"></i>
                                     </div>
                                     @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="sign__action d-sm-flex justify-content-between mb-30">
                                     <div class="sign__agree d-flex align-items-center">
                                        <input class="m-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="m-check-label" for="remember">Keep me signed in
                                           </label>
                                     </div>
                                     <div class="sign__forgot">
                                        @if (Route::has('password.request'))
                                            <a  href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                     </div>
                                  </div>
                                  <button class="tp-btn  w-100" type="submit"> <span></span> Sign In</button>
                                </form>
                                <div class="sign__new text-center mt-20">
                                   <p>Don't have an account? <a href="/register">Sign Up</a></p>
                                </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </section>
             <!-- sign up area end -->
@endsection