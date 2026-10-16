@extends('layouts.main')
@section('head', 'Free Registration - 2026 Airport Drivers Tourism Education (ADTEA) Summit')
@section('header-area')
   @include('layouts.subheader')
@endsection

@section('content')
    <!-- Dedicated ADTEA Registration Page -->
    <style>
        .adtea-reg-hero {
            background: linear-gradient(135deg, #071329 0%, #0b1b3d 45%, #152e5a 100%);
            color: #ffffff;
            padding: 70px 0 90px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        .adtea-reg-hero::before {
            content: '';
            position: absolute;
            top: -120px;
            right: -80px;
            width: 420px;
            height: 420px;
            background: radial-gradient(circle, rgba(255, 123, 65, 0.22) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .adtea-reg-hero::after {
            content: '';
            position: absolute;
            bottom: -140px;
            left: -90px;
            width: 460px;
            height: 460px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.18) 0%, transparent 72%);
            border-radius: 50%;
            pointer-events: none;
        }
        .adtea-reg-hero h1 {
            color: #ffffff !important;
            font-weight: 800;
            letter-spacing: -0.4px;
            position: relative;
            z-index: 2;
        }
        .adtea-reg-hero p.lead {
            color: rgba(255, 255, 255, 0.85) !important;
            position: relative;
            z-index: 2;
        }
        .adtea-reg-hero-chip {
            background: rgba(255, 123, 65, 0.18);
            color: #ff9d6c;
            border: 1px solid rgba(255, 123, 65, 0.45);
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            border-radius: 50rem;
            padding: 6px 18px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            position: relative;
            z-index: 2;
        }
        .adtea-reg-hero-facts {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-top: 22px;
            position: relative;
            z-index: 2;
        }
        .adtea-reg-hero-facts span {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.16);
            backdrop-filter: blur(8px);
            color: #ffffff;
            font-size: 0.82rem;
            font-weight: 600;
            border-radius: 50rem;
            padding: 7px 16px;
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }
        .adtea-reg-hero-facts i {
            color: #ff9d6c;
        }
        .adtea-reg-body {
            margin-top: -55px;
            position: relative;
            z-index: 5;
            padding-bottom: 80px;
        }
        .adtea-reg-back-link {
            color: #64748b;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: color 0.2s ease;
        }
        .adtea-reg-back-link:hover {
            color: #ff7b41;
            text-decoration: none;
        }
        .adtea-btn-hero-primary {
            background: linear-gradient(135deg, #ff7b41 0%, #e5581c 100%) !important;
            border: 2px solid #ff7b41 !important;
            color: #ffffff !important;
            padding: 14px 28px !important;
            font-size: 1.02rem !important;
            font-weight: 700 !important;
            border-radius: 12px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 10px !important;
            text-decoration: none !important;
            box-shadow: 0 8px 24px rgba(255, 123, 65, 0.38) !important;
            position: relative;
            overflow: hidden;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1) !important;
            cursor: pointer;
        }
        .adtea-btn-hero-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -120%;
            width: 70%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.35), transparent);
            transform: skewX(-22deg);
            animation: btnSheen 5s infinite;
        }
        @keyframes btnSheen {
            0%, 65% { left: -120%; }
            100% { left: 160%; }
        }
        .adtea-btn-hero-primary:hover {
            background: linear-gradient(135deg, #ff8c57 0%, #ff6b2b 100%) !important;
            border-color: #ff8c57 !important;
            color: #ffffff !important;
            transform: translateY(-3px) !important;
            box-shadow: 0 16px 32px rgba(255, 123, 65, 0.52) !important;
            text-decoration: none !important;
        }

        .adtea-btn-hero-secondary {
            background: rgba(255, 255, 255, 0.08) !important;
            border: 1.5px solid rgba(255, 255, 255, 0.32) !important;
            color: #ffffff !important;
            padding: 14px 26px !important;
            font-size: 1.02rem !important;
            font-weight: 700 !important;
            border-radius: 12px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 10px !important;
            text-decoration: none !important;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }
        .adtea-btn-hero-secondary:hover {
            background: rgba(255, 255, 255, 0.2) !important;
            border-color: #ffffff !important;
            color: #ffffff !important;
            transform: translateY(-3px) !important;
            text-decoration: none !important;
        }

        /* Partnership Card Design */
        .adtea-partner-card {
            background: linear-gradient(135deg, #071329 0%, #0d1e3d 50%, #152e5a 100%);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 24px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 45px rgba(7, 19, 41, 0.18), 0 4px 12px rgba(0, 0, 0, 0.06);
            padding: 48px 36px;
            color: #ffffff;
        }
        .adtea-partner-card::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -60px;
            width: 320px;
            height: 320px;
            background: radial-gradient(circle, rgba(255, 123, 65, 0.24) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .adtea-partner-card::after {
            content: '';
            position: absolute;
            bottom: -110px;
            left: -50px;
            width: 320px;
            height: 320px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.22) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .adtea-partner-badge {
            background: rgba(255, 123, 65, 0.16);
            color: #ff9d6c;
            border: 1px solid rgba(255, 123, 65, 0.42);
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            border-radius: 50rem;
            padding: 6px 18px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 18px;
        }
        .adtea-partner-title {
            color: #ffffff;
            font-size: 1.85rem;
            font-weight: 800;
            letter-spacing: -0.3px;
            line-height: 1.3;
            margin-bottom: 14px;
        }
        .adtea-partner-title .highlight {
            background: linear-gradient(135deg, #ff9d6c 0%, #ff7b41 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .adtea-partner-desc {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.05rem;
            line-height: 1.65;
            max-width: 680px;
            margin: 0 auto 24px;
        }
        .adtea-partner-perks {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }
        .adtea-partner-perk {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            color: #ffffff;
            font-size: 0.85rem;
            font-weight: 600;
            border-radius: 50rem;
            padding: 7px 16px;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            transition: all 0.25s ease;
        }
        .adtea-partner-perk:hover {
            background: rgba(255, 255, 255, 0.14);
            border-color: rgba(255, 123, 65, 0.5);
            transform: translateY(-2px);
        }
        .adtea-partner-actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 14px;
        }
        .adtea-partner-note {
            margin-top: 22px;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.65);
        }
        .adtea-partner-note a {
            color: #ff9d6c;
            text-decoration: underline;
            transition: color 0.2s ease;
        }
        .adtea-partner-note a:hover {
            color: #ffffff;
        }

        @media (max-width: 767px) {
            .adtea-reg-hero {
                padding: 50px 0 80px;
            }
            .adtea-reg-hero h1 {
                font-size: 1.6rem !important;
            }
            .adtea-reg-body {
                margin-top: -45px;
            }
            .adtea-partner-card {
                padding: 34px 20px;
                border-radius: 20px;
            }
            .adtea-partner-title {
                font-size: 1.45rem;
            }
            .adtea-partner-actions {
                flex-direction: column;
                width: 100%;
            }
            .adtea-partner-actions a {
                width: 100%;
            }
        }
    </style>

    <!-- Registration Hero -->
    <div class="adtea-reg-hero">
        <div class="container position-relative" style="z-index: 2;">
            <span class="adtea-reg-hero-chip mb-3">
                <i class="fas fa-gift"></i> 100% Free Registration
            </span>
            <h1 class="display-4 mt-2 mb-3" style="line-height: 1.15;">
                Register for <span style="color: #ff7b41;">ADTEA 2026</span>
            </h1>
            <p class="lead mx-auto" style="max-width: 720px; font-size: 1.05rem; line-height: 1.7;">
                The 2026 Airport Drivers Tourism Education Summit — 1st December 2026 at the Lagos International Airport. Airport drivers, tourism &amp; hospitality stakeholders and general attendees all register here.
            </p>
  
        </div>
    </div>

    <!-- Registration Form (shared partial) -->
    <div class="adtea-reg-body">
        @include('frontend.partials.adtea-registration-form', ['registrationFormSource' => 'register'])
    </div>

    <!-- Partnership note -->
    <div class="pb-100" style="background-color: #f1f5f9; margin-top: -30px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="adtea-partner-card text-center position-relative">
                        <div class="position-relative" style="z-index: 2;">
                            
                            
                            <h3 class="adtea-partner-title">
                                Want to Sponsor or Partner with <span class="highlight">ADTEA 2026</span>?
                            </h3>
                            <p class="adtea-partner-desc">
                                Position your organization at the forefront of aviation hospitality. Connect with 300+ frontline airport drivers, transport executives, and key tourism decision-makers.
                            </p>
                             

                            <div class="adtea-partner-actions">
                                <a href="{{ route('adtea-page') }}#sponsor-inquiry" class="adtea-btn-hero-primary">
                                    <span>Reach out through the Partnership Desk</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="{{ route('adtea-page') }}#sponsorship" class="adtea-btn-hero-secondary">
                                    <i class="fas fa-award"></i>
                                    <span>Explore Sponsorship Packages</span>
                                </a>
                            </div>

                            <div class="adtea-partner-note">
                                <i class="fas fa-info-circle me-1"></i> Custom co-branding opportunities available. Speak with the secretariat at <a href="mailto:info@tourismafrikania.com">info@tourismafrikania.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        @include('frontend.partials.adtea-registration-scripts')
    </script>
@endpush
