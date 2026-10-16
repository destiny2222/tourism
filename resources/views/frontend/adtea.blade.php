@extends('layouts.main')
@section('head', '2026 Airport Drivers Tourism Education (ADTEA) - Sponsorship & Partnership Proposal')
@section('header-area')
   @include('layouts.subheader')
@endsection

@section('content')
    <!-- 2026 Modern Animated UI Design System -->
    <style>
        :root {
            --adtea-navy: #0B1B3D;
            --adtea-navy-dark: #071329;
            --adtea-navy-light: #152E5A;
            --adtea-orange: #FF7B41;
            --adtea-orange-hover: #e5682e;
            --adtea-gold: #D4AF37;
            --adtea-bg: #F8FAFC;
        }

        /* Compatibility helpers for Bootstrap 4 */
        .me-1 { margin-right: 0.25rem !important; }
        .me-2 { margin-right: 0.5rem !important; }
        .me-3 { margin-right: 1rem !important; }
        .me-4 { margin-right: 1.5rem !important; }
        .ms-1 { margin-left: 0.25rem !important; }
        .ms-2 { margin-left: 0.5rem !important; }
        .ms-3 { margin-left: 1rem !important; }
        .pe-3 { padding-right: 1rem !important; }
        .ps-3 { padding-left: 1rem !important; }
        .pe-4 { padding-right: 1.5rem !important; }
        .ps-4 { padding-left: 1.5rem !important; }
        .border-start { border-left: 1px solid #dee2e6 !important; }
        .border-end { border-right: 1px solid #dee2e6 !important; }
        .rounded-3 { border-radius: 14px !important; }
        .rounded-4 { border-radius: 20px !important; }
        .rounded-pill { border-radius: 50rem !important; }
        .gap-2 { gap: 0.5rem !important; }
        .gap-3 { gap: 1rem !important; }
        .gap-4 { gap: 1.5rem !important; }
        .fs-3 { font-size: 1.75rem !important; }
        .fs-4 { font-size: 1.5rem !important; }
        .fs-5 { font-size: 1.25rem !important; }
        .fs-6 { font-size: 1rem !important; }

        /* Smooth Scroll & Sticky Header Offset */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 130px;
        }
        [id] {
            scroll-margin-top: 130px;
        }

        /* Ambient Glowing Hero Background with Animated Canvas & Mesh */
        .adtea-hero-bg {
            background: linear-gradient(135deg, #071329 0%, #0b1b3d 40%, #152e5a 80%, #1a3668 100%);
            position: relative;
            overflow: hidden;
            color: #ffffff;
            padding-top: 100px;
            padding-bottom: 90px;
        }
        .adtea-hero-bg h1,
        .adtea-hero-bg h2,
        .adtea-hero-bg h4,
        .adtea-hero-bg p.lead {
            color: #ffffff;
        }

        /* Canvas Particle Background */
        #hero-particles-canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            opacity: 0.65;
        }

        .adtea-hero-glow-1 {
            position: absolute;
            top: -120px;
            right: -80px;
            width: 550px;
            height: 550px;
            background: radial-gradient(circle, rgba(255, 123, 65, 0.22) 0%, rgba(255, 123, 65, 0.04) 50%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            animation: driftGlow 10s ease-in-out infinite alternate;
        }
        .adtea-hero-glow-2 {
            position: absolute;
            bottom: -150px;
            left: -100px;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.18) 0%, rgba(37, 99, 235, 0.03) 55%, transparent 75%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            animation: driftGlow2 14s ease-in-out infinite alternate;
        }
        @keyframes driftGlow {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(-40px, 30px) scale(1.12); }
        }
        @keyframes driftGlow2 {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(50px, -40px) scale(1.15); }
        }

        /* Live Radar Beacon Pulse */
        .live-beacon {
            width: 9px;
            height: 9px;
            background: #10b981;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
            position: relative;
            vertical-align: middle;
            box-shadow: 0 0 0 rgba(16, 185, 129, 0.4);
            animation: pulseBeacon 2s cubic-bezier(0.45, 0, 0.55, 1) infinite;
        }
        @keyframes pulseBeacon {
            0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(16, 185, 129, 0); }
            100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
        }

        /* Glassmorphic Theme Quote Banner */
        .adtea-glass-quote {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-left: 4px solid #ff7b41;
            border-radius: 14px;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.25);
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            border-right: 1px solid rgba(255, 255, 255, 0.06);
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            transition: transform 0.3s ease;
        }
        .adtea-glass-quote:hover {
            transform: translateX(4px);
        }

        /* Hero Action Buttons - Specular Sheen Animation */
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
            gap: 10px !important;
            text-decoration: none !important;
            box-shadow: 0 8px 24px rgba(255, 123, 65, 0.38) !important;
            position: relative;
            overflow: hidden;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }
        .adtea-btn-hero-primary::after,
        .hero-event-btn::after {
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
        }

        .adtea-btn-hero-secondary {
            background: rgba(255, 255, 255, 0.1) !important;
            border: 2px solid rgba(255, 255, 255, 0.45) !important;
            color: #ffffff !important;
            padding: 14px 28px !important;
            font-size: 1.02rem !important;
            font-weight: 700 !important;
            border-radius: 12px !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 10px !important;
            text-decoration: none !important;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }
        .adtea-btn-hero-secondary:hover {
            background: #ffffff !important;
            border-color: #ffffff !important;
            color: #0b1b3d !important;
            transform: translateY(-3px) !important;
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.25) !important;
        }
        .adtea-btn-hero-secondary:hover i {
            color: #ff7b41 !important;
        }

        /* 2026 Hero Event Pass Card - Floating Animation */
        .hero-event-card-wrapper {
            position: relative;
        }
        .hero-event-card-2026 {
            background: #ffffff;
            border-radius: 22px;
            box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.45), 0 0 0 1px rgba(255, 255, 255, 0.15);
            overflow: hidden;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease;
            border-top: 5px solid #ff7b41;
            animation: gentleFloat 7s ease-in-out infinite;
            position: relative;
            z-index: 2;
        }
        @keyframes gentleFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        .hero-event-card-2026:hover {
            animation-play-state: paused;
            transform: translateY(-8px) scale(1.01);
            box-shadow: 0 35px 75px -15px rgba(0, 0, 0, 0.55);
        }

        /* Floating Accent Chips around Hero Pass Card */
        .adtea-float-chip-1 {
            position: absolute;
            top: -18px;
            left: -20px;
            background: rgba(11, 27, 61, 0.92);
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 50px;
            border: 1px solid rgba(255, 123, 65, 0.5);
            box-shadow: 0 12px 28px rgba(0,0,0,0.35);
            backdrop-filter: blur(10px);
            font-size: 0.78rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            z-index: 3;
            animation: floatChip1 5s ease-in-out infinite alternate;
        }
        .adtea-float-chip-2 {
            position: absolute;
            bottom: -15px;
            right: -15px;
            background: rgba(255, 255, 255, 0.95);
            color: #0b1b3d;
            padding: 8px 18px;
            border-radius: 50px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 12px 30px rgba(0,0,0,0.22);
            font-size: 0.8rem;
            font-weight: 800;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            z-index: 3;
            animation: floatChip2 6s ease-in-out infinite alternate;
        }
        @keyframes floatChip1 {
            0% { transform: translateY(0) rotate(-2deg); }
            100% { transform: translateY(-8px) rotate(-1deg); }
        }
        @keyframes floatChip2 {
            0% { transform: translateY(0) rotate(1deg); }
            100% { transform: translateY(-7px) rotate(2deg); }
        }

        .hero-event-header {
            background: linear-gradient(135deg, #0b1b3d 0%, #152e5a 100%);
            padding: 24px 26px;
            color: #ffffff;
            position: relative;
        }
        .hero-event-badge {
            background: rgba(255, 123, 65, 0.2);
            color: #ff9d6c;
            border: 1px solid rgba(255, 123, 65, 0.4);
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 50px;
            padding: 4px 12px;
            display: inline-flex;
            align-items: center;
        }
        .hero-event-year {
            font-size: 0.82rem;
            font-weight: 800;
            color: rgba(255, 255, 255, 0.65);
            letter-spacing: 1px;
        }
        .hero-event-title {
            color: #ffffff !important;
            font-weight: 800;
            font-size: 1.45rem;
            margin: 10px 0 3px 0;
            letter-spacing: -0.3px;
        }
        .hero-event-subtitle {
            color: rgba(255, 255, 255, 0.8) !important;
            font-size: 0.84rem;
            margin-bottom: 0;
        }
        .hero-event-body {
            padding: 24px;
            background: #ffffff;
        }
        .hero-spec-tile {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            height: 100%;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .hero-spec-tile:hover {
            background: #ffffff;
            border-color: #ff7b41;
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(255, 123, 65, 0.16);
        }
        .hero-spec-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.05rem;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }
        .hero-spec-tile:hover .hero-spec-icon {
            transform: scale(1.1) rotate(-4deg);
        }
        .hero-spec-icon.icon-amber {
            background: #fffbeb;
            color: #d97706;
            border: 1px solid rgba(217, 119, 6, 0.2);
        }
        .hero-spec-icon.icon-rose {
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }
        .hero-spec-icon.icon-emerald {
            background: #ecfdf5;
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }
        .hero-spec-icon.icon-blue {
            background: #eff6ff;
            color: #2563eb;
            border: 1px solid rgba(37, 99, 235, 0.2);
        }
        .hero-spec-label {
            display: block;
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: #94a3b8;
            text-transform: uppercase;
            line-height: 1.2;
        }
        .hero-spec-val {
            font-size: 0.95rem;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.25;
            margin: 2px 0 1px 0;
        }
        .hero-spec-sub {
            display: block;
            font-size: 0.74rem;
            color: #64748b;
            line-height: 1.1;
        }
        .hero-event-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            padding: 12px 0;
            border-top: 1px dashed #e2e8f0;
            border-bottom: 1px dashed #e2e8f0;
        }
        .hero-event-tags span {
            font-size: 0.76rem;
            font-weight: 600;
            color: #334155;
            background: #f1f5f9;
            border-radius: 6px;
            padding: 4px 10px;
            transition: all 0.2s ease;
        }
        .hero-event-tags span:hover {
            background: #e2e8f0;
            transform: translateY(-1px);
        }
        .hero-event-btn {
            background: linear-gradient(135deg, #0b1b3d 0%, #152e5a 100%);
            color: #ffffff !important;
            font-weight: 700;
            font-size: 0.98rem;
            padding: 14px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none !important;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(11, 27, 61, 0.25);
            margin-top: 14px;
        }
        .hero-event-btn:hover {
            background: linear-gradient(135deg, #ff7b41 0%, #e5581c 100%);
            box-shadow: 0 10px 24px rgba(255, 123, 65, 0.45);
            transform: translateY(-2px);
            color: #ffffff !important;
        }

        /* Live Summit Countdown Banner */
        .adtea-countdown-bar {
            background: linear-gradient(135deg, #050e1d 0%, #0b1b3d 100%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 20px 0;
            color: #ffffff;
            position: relative;
            z-index: 5;
        }
        .countdown-tile {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            padding: 10px 16px;
            min-width: 78px;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
            transition: transform 0.25s ease;
        }
        .countdown-tile:hover {
            transform: translateY(-2px);
            border-color: #ff7b41;
        }
        .countdown-num {
            font-size: 1.6rem;
            font-weight: 800;
            color: #ff7b41;
            line-height: 1;
            font-feature-settings: "tnum";
            font-variant-numeric: tabular-nums;
        }
        .countdown-label {
            font-size: 0.68rem;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: #94a3b8;
            font-weight: 700;
            margin-top: 4px;
            display: block;
        }
        .countdown-separator {
            font-size: 1.5rem;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.3);
            margin: 0 6px;
            align-self: center;
        }

        /* Sticky Quick Navigation Pill Dock */
        .adtea-quick-nav-wrapper {
            position: sticky;
            top: 75px;
            z-index: 100;
            padding: 12px 0;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .quick-nav-pills {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px;
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .quick-nav-pills a {
            color: #475569;
            font-weight: 700;
            font-size: 0.82rem;
            padding: 7px 16px;
            border-radius: 50px;
            background: #f1f5f9;
            border: 1px solid transparent;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .quick-nav-pills a:hover,
        .quick-nav-pills a.active {
            background: #0b1b3d;
            color: #ffffff !important;
            border-color: #0b1b3d;
            box-shadow: 0 4px 12px rgba(11, 27, 61, 0.25);
            transform: translateY(-2px);
        }
        .quick-nav-pills a.nav-cta {
            background: linear-gradient(135deg, #ff7b41 0%, #e5581c 100%);
            color: #ffffff !important;
        }
        .quick-nav-pills a.nav-cta:hover {
            box-shadow: 0 6px 16px rgba(255, 123, 65, 0.4);
        }

        /* Summit Highlights Metrics Strip */
        .adtea-metrics-section {
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            padding: 35px 0;
        }
        .metric-card-2026 {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            height: 100%;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            overflow: hidden;
        }
        .metric-card-2026:hover {
            background: #ffffff;
            border-color: #ff7b41;
            transform: translateY(-4px);
            box-shadow: 0 14px 28px -6px rgba(255, 123, 65, 0.16);
        }
        .metric-card-2026::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 123, 65, 0.08), transparent);
            transform: skewX(-20deg);
            transition: left 0.6s ease;
        }
        .metric-card-2026:hover::after {
            left: 140%;
        }
        .metric-icon-box {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }
        .metric-card-2026:hover .metric-icon-box {
            transform: scale(1.1) rotate(5deg);
        }
        .metric-val {
            font-size: 1.7rem;
            font-weight: 800;
            color: #0b1b3d;
            line-height: 1.1;
            margin-bottom: 2px;
        }
        .metric-title {
            font-size: 0.82rem;
            font-weight: 600;
            color: #64748b;
            margin: 0;
            line-height: 1.3;
        }

        /* 2026 Modern Card Styling with Smooth Hover Elevate & Shimmer */
        .card-2026 {
            background: #ffffff;
            border-radius: 18px;
            border: 1px solid rgba(226, 232, 240, 0.9);
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            overflow: hidden;
        }
        .card-2026:hover {
            transform: translateY(-8px);
            box-shadow: 0 24px 48px -10px rgba(11, 27, 61, 0.14) !important;
            border-color: rgba(255, 123, 65, 0.35);
        }
        .card-2026::after {
            content: '';
            position: absolute;
            top: 0;
            left: -120%;
            width: 60%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
            transform: skewX(-20deg);
            pointer-events: none;
            transition: left 0.7s ease;
        }
        .card-2026:hover::after {
            left: 150%;
        }

        /* Soft Color Badges */
        .adtea-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 14px;
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            border-radius: 50px;
            line-height: 1.3;
        }
        .adtea-badge-primary {
            background: rgba(11, 27, 61, 0.08);
            color: #0b1b3d;
            border: 1px solid rgba(11, 27, 61, 0.18);
        }
        .adtea-badge-orange {
            background: rgba(255, 123, 65, 0.12);
            color: #d9531e;
            border: 1px solid rgba(255, 123, 65, 0.25);
        }
        .adtea-badge-success {
            background: #ecfdf5;
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.25);
        }
        .adtea-badge-danger {
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.25);
        }
        .adtea-badge-warning {
            background: #fffbeb;
            color: #b45309;
            border: 1px solid rgba(245, 158, 11, 0.25);
        }
        .adtea-badge-info {
            background: #f0fdfa;
            color: #0d9488;
            border: 1px solid rgba(13, 148, 136, 0.25);
        }

        /* Modern Icon Boxes */
        .adtea-icon-box {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            flex-shrink: 0;
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .card-2026:hover .adtea-icon-box {
            transform: scale(1.12) rotate(-4deg);
        }
        .icon-box-emerald {
            background: #ecfdf5;
            color: #059669;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }
        .icon-box-rose {
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }
        .icon-box-blue {
            background: #eff6ff;
            color: #2563eb;
            border: 1px solid rgba(37, 99, 235, 0.2);
        }
        .icon-box-amber {
            background: #fffbeb;
            color: #d97706;
            border: 1px solid rgba(217, 119, 6, 0.2);
        }

        /* 7 Understandings Cards */
        .pillar-card-2026 {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            height: 100%;
        }
        .pillar-card-2026:hover {
            transform: translateY(-5px);
            border-color: #ff7b41;
            box-shadow: 0 14px 28px -6px rgba(255, 123, 65, 0.18);
        }
        .pillar-num {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, #0b1b3d 0%, #ff7b41 100%);
            color: #ffffff;
            font-weight: 800;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-right: 14px;
            box-shadow: 0 4px 10px rgba(255, 123, 65, 0.25);
            transition: transform 0.3s ease;
        }
        .pillar-card-2026:hover .pillar-num {
            transform: scale(1.1) rotate(4deg);
        }

        /* Module Checklist Micro-Animation */
        .module-check-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.6;
            transition: transform 0.25s ease;
        }
        .card-2026:hover .module-check-item {
            transform: translateX(4px);
        }
        .module-check-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            flex-shrink: 0;
            margin-right: 12px;
            margin-top: 2px;
            transition: transform 0.3s ease;
        }
        .card-2026:hover .module-check-icon {
            transform: scale(1.15);
        }

        /* Directory Category Pills for Module 3 */
        .cat-tag-2026 {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 10px 14px;
            font-size: 0.88rem;
            font-weight: 600;
            color: #1e293b;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .cat-tag-2026:hover {
            background: #ffffff;
            border-color: #ff7b41;
            transform: translateX(5px) scale(1.02);
            box-shadow: 0 6px 14px rgba(255, 123, 65, 0.15);
        }
        .cat-tag-2026 i {
            color: #d97706;
            margin-right: 10px;
            font-size: 1rem;
            transition: transform 0.25s ease;
        }
        .cat-tag-2026:hover i {
            transform: scale(1.2);
        }

        /* Tier Filter Pills */
        .tier-filter-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 35px;
        }
        .tier-filter-btn {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            color: #475569;
            font-weight: 700;
            padding: 9px 20px;
            border-radius: 50px;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.25s ease;
        }
        .tier-filter-btn:hover,
        .tier-filter-btn.active {
            background: #ff7b41;
            border-color: #ff7b41;
            color: #ffffff;
            box-shadow: 0 6px 16px rgba(255, 123, 65, 0.3);
            transform: translateY(-2px);
        }

        /* Pricing Cards with 2026 Interactive Elevate */
        .pricing-card-2026 {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
            overflow: hidden;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05);
        }
        .pricing-card-2026:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px -10px rgba(11, 27, 61, 0.18) !important;
        }
        .pricing-card-featured {
            border: 2px solid transparent !important;
            background: linear-gradient(#ffffff, #ffffff) padding-box,
                        linear-gradient(135deg, #ff7b41, #ffd700, #ff7b41, #ff5722) border-box !important;
            box-shadow: 0 15px 35px rgba(255, 123, 65, 0.2) !important;
            animation: borderGlow 6s ease-in-out infinite;
        }
        @keyframes borderGlow {
            0%, 100% { box-shadow: 0 15px 35px rgba(255, 123, 65, 0.2); }
            50% { box-shadow: 0 20px 45px rgba(255, 123, 65, 0.35); }
        }

        /* Secondary Tier Cards */
        .tier-card-secondary {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            padding: 28px;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            height: 100%;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .tier-card-secondary:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -10px rgba(15, 23, 42, 0.12);
        }
        .tier-card-supporting {
            border-top: 4px solid #0d9488;
        }
        .tier-card-community {
            border-top: 4px solid #10b981;
        }

        .btn-supporting-cta {
            background: transparent;
            border: 2px solid #0d9488;
            color: #0d9488 !important;
            font-weight: 700;
            border-radius: 10px;
            padding: 12px;
            transition: all 0.3s ease;
            text-align: center;
            display: block;
            text-decoration: none;
            cursor: pointer;
        }
        .btn-supporting-cta:hover {
            background: #0d9488 !important;
            color: #ffffff !important;
            box-shadow: 0 8px 20px rgba(13, 148, 136, 0.3);
            transform: translateY(-2px);
        }

        .btn-community-cta {
            background: transparent;
            border: 2px solid #10b981;
            color: #10b981 !important;
            font-weight: 700;
            border-radius: 10px;
            padding: 12px;
            transition: all 0.3s ease;
            text-align: center;
            display: block;
            text-decoration: none;
            cursor: pointer;
        }
        .btn-community-cta:hover {
            background: #10b981 !important;
            color: #ffffff !important;
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
            transform: translateY(-2px);
        }

        /* Sector Modern Cards */
        .sector-card-2026 {
            background: linear-gradient(145deg, #0b1b3d 0%, #17336b 100%);
            color: white;
            border-radius: 18px;
            padding: 28px 24px;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow: 0 6px 20px rgba(11, 27, 61, 0.15);
            height: 100%;
        }
        .sector-card-2026:hover {
            transform: translateY(-8px);
            background: linear-gradient(145deg, #152e5a 0%, #ff7b41 100%);
            box-shadow: 0 20px 40px rgba(255, 123, 65, 0.3);
            border-color: rgba(255,255,255,0.25);
        }
        .sector-icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.12);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 18px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            transition: transform 0.3s ease;
        }
        .sector-card-2026:hover .sector-icon-circle {
            transform: scale(1.15) rotate(-5deg);
            background: rgba(255, 255, 255, 0.25);
        }

        /* Modality Tag Chip */
        .modality-chip-2026 {
            background: #ffffff;
            color: #0b1b3d;
            font-weight: 700;
            padding: 12px 24px;
            border-radius: 50px;
            font-size: 0.95rem;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            margin: 6px;
        }
        .modality-chip-2026:hover {
            background: #ff7b41;
            color: #ffffff;
            border-color: #ff7b41;
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 12px 24px rgba(255, 123, 65, 0.28);
        }

        .adtea-pill-badge {
            background: rgba(255, 123, 65, 0.2);
            color: #ff9d6c;
            border: 1px solid rgba(255, 123, 65, 0.45);
            font-weight: 700;
            border-radius: 50px;
            padding: 8px 20px;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            letter-spacing: 0.4px;
        }
        .adtea-bank-box {
            background: linear-gradient(135deg, #0b1b3d 0%, #152a4d 100%);
            border-radius: 20px;
            color: white;
            border: 1px solid rgba(255,255,255,0.1);
        }

        /* FAQ 2026 Modern Accordion */
        .adtea-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            margin-bottom: 14px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .adtea-faq-item:hover {
            border-color: #ff7b41;
            box-shadow: 0 8px 22px rgba(255, 123, 65, 0.1);
        }
        .adtea-faq-header {
            padding: 20px 24px;
            font-weight: 700;
            font-size: 1.05rem;
            color: #0b1b3d;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            user-select: none;
        }
        .faq-icon-arrow {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.85rem;
            color: #64748b;
            transition: transform 0.3s ease, background 0.3s ease, color 0.3s ease;
            flex-shrink: 0;
            margin-left: 12px;
        }
        .adtea-faq-item.active .faq-icon-arrow {
            transform: rotate(180deg);
            background: #ff7b41;
            color: #ffffff;
        }
        .adtea-faq-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1), padding 0.3s ease;
            padding: 0 24px;
            color: #475569;
            font-size: 0.98rem;
            line-height: 1.8;
        }
        .adtea-faq-item.active .adtea-faq-body {
            padding: 0 24px 22px 24px;
            max-height: 400px;
        }

        /* Floating Concierge & Back To Top Button with Progress */
        .adtea-floating-tools {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            z-index: 999;
        }
        .floating-whatsapp-btn {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: #25d366;
            color: #ffffff !important;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4);
            text-decoration: none !important;
            position: relative;
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
        }
        .floating-whatsapp-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 30px rgba(37, 211, 102, 0.6);
        }
        .whatsapp-beacon {
            position: absolute;
            top: 2px;
            right: 2px;
            width: 12px;
            height: 12px;
            background: #ff7b41;
            border: 2px solid #ffffff;
            border-radius: 50%;
            animation: pulseBeacon 2s infinite;
        }
        .floating-top-btn {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #0b1b3d;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 6px 20px rgba(11, 27, 61, 0.3);
            border: none;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.3s ease;
            position: relative;
        }
        .floating-top-btn.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .floating-top-btn:hover {
            background: #ff7b41;
            transform: translateY(-3px);
        }
        .scroll-progress-circle {
            position: absolute;
            top: 0;
            left: 0;
            width: 48px;
            height: 48px;
            transform: rotate(-90deg);
        }
        .scroll-progress-circle circle {
            fill: transparent;
            stroke-width: 3;
            stroke-dasharray: 140;
            stroke-dashoffset: 140;
            transition: stroke-dashoffset 0.15s ease;
        }
        .circle-bg {
            stroke: rgba(255, 255, 255, 0.2);
        }
        .circle-bar {
            stroke: #ff7b41;
        }

        /* Form Glow Field Feedback on Selection */
        .tier-highlight-active {
            animation: tierFlash 1.6s ease-in-out infinite alternate !important;
            border-color: #ff7b41 !important;
        }
        @keyframes tierFlash {
            0% { box-shadow: 0 0 0 2px rgba(255, 123, 65, 0.2); }
            100% { box-shadow: 0 0 0 8px rgba(255, 123, 65, 0.45); }
        }

        /* Scroll-Triggered Reveal Animations */
        .adtea-reveal {
            opacity: 0;
            transform: translateY(32px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }
        .adtea-reveal.is-revealed {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        /* Stagger Delays */
        .stagger-1 { transition-delay: 0.08s !important; }
        .stagger-2 { transition-delay: 0.16s !important; }
        .stagger-3 { transition-delay: 0.24s !important; }
        .stagger-4 { transition-delay: 0.32s !important; }
        .stagger-5 { transition-delay: 0.40s !important; }
        .stagger-6 { transition-delay: 0.48s !important; }
        .stagger-7 { transition-delay: 0.56s !important; }

        /* =========================================================
           2026 COMPLETE RESPONSIVE MEDIA QUERIES & MOBILE ARCHITECTURE
           ========================================================= */

        /* Global Mobile Safeguards & Overflow Protection */
        html, body {
            overflow-x: hidden !important;
            max-width: 100vw !important;
            width: 100% !important;
            position: relative;
        }
        *, *::before, *::after {
            box-sizing: border-box;
        }
        img, svg, canvas {
            max-width: 100%;
            height: auto;
        }
        .container, .container-fluid {
            width: 100% !important;
            padding-right: 15px !important;
            padding-left: 15px !important;
        }

        /* 1. Large Tablets & Small Laptops (max-width: 1199px) */
        @media (max-width: 1199px) {
            .hero-event-title {
                font-size: 1.3rem !important;
            }
            .hero-spec-tile {
                padding: 10px 10px !important;
                gap: 8px !important;
            }
            .hero-spec-val {
                font-size: 0.88rem !important;
            }
            .adtea-hero-glow-1, .adtea-hero-glow-2 {
                opacity: 0.45 !important;
            }
            .metric-card-2026 {
                padding: 16px 14px !important;
            }
            .metric-val {
                font-size: 1.45rem !important;
            }
        }

        /* 2. Tablets & Mobile Devices (max-width: 991px) */
        @media (max-width: 991px) {
            html {
                scroll-padding-top: 130px;
            }
            [id] {
                scroll-margin-top: 130px;
            }
            .adtea-hero-bg {
                padding-top: 70px !important;
                padding-bottom: 60px !important;
                text-align: center;
            }
            .adtea-hero-bg .adtea-glass-quote {
                text-align: left;
            }
            .adtea-hero-action-btns {
                justify-content: center !important;
            }
            .adtea-float-chip-1, .adtea-float-chip-2 {
                display: none !important;
            }
            .hero-event-card-wrapper {
                margin-top: 40px;
                max-width: 520px;
                margin-left: auto;
                margin-right: auto;
            }
            /* Quick Nav Pill Dock: Stick cleanly beneath sticky website header (height ~68px) */
            .adtea-quick-nav-wrapper {
                top: 68px !important;
                z-index: 990 !important;
                padding: 8px 0 !important;
                overflow-x: auto !important;
                -webkit-overflow-scrolling: touch !important;
                display: block !important;
            }
            .quick-nav-pills {
                display: flex !important;
                flex-wrap: nowrap !important;
                overflow-x: auto !important;
                justify-content: flex-start !important;
                padding: 2px 14px !important;
                gap: 8px !important;
                -webkit-overflow-scrolling: touch !important;
                scrollbar-width: none !important;
                -ms-overflow-style: none !important;
            }
            .quick-nav-pills::-webkit-scrollbar {
                display: none !important;
                width: 0 !important;
                height: 0 !important;
            }
            .quick-nav-pills li {
                flex-shrink: 0 !important;
            }
            .quick-nav-pills a {
                white-space: nowrap !important;
                font-size: 0.78rem !important;
                padding: 7px 14px !important;
            }
            /* Disable 3D tilt on touch devices */
            .tilt-card {
                transform: none !important;
            }
            .tilt-card:hover {
                transform: translateY(-4px) !important;
            }
            #executive-tiers-row .col-md-6:last-child {
                margin-left: auto;
                margin-right: auto;
            }
        }

        /* 3. Phablets & Mobile Landscape (max-width: 767px) */
        @media (max-width: 767px) {
            html {
                scroll-padding-top: 120px;
            }
            [id] {
                scroll-margin-top: 120px;
            }

            /* Balanced Section Spacings on Mobile (replaces excessive 90px whitespace) */
            .pt-90 { padding-top: 48px !important; }
            .pb-90 { padding-bottom: 48px !important; }
            .pt-100 { padding-top: 52px !important; }
            .pb-100 { padding-bottom: 52px !important; }
            .pb-70 { padding-bottom: 36px !important; }
            .mb-50 { margin-bottom: 26px !important; }
            .mb-30 { margin-bottom: 18px !important; }

            /* Section Titles Scaling */
            .section-title {
                margin-bottom: 26px !important;
            }
            .section-title h2 {
                font-size: 1.65rem !important;
                line-height: 1.25 !important;
            }
            .section-title p.lead {
                font-size: 0.95rem !important;
            }

            /* Hero Typography Scaling */
            .adtea-hero-bg {
                padding-top: 55px !important;
                padding-bottom: 50px !important;
            }
            .adtea-hero-bg h1,
            .adtea-hero-bg .display-4 {
                font-size: 1.8rem !important;
                line-height: 1.25 !important;
                letter-spacing: -0.4px !important;
            }
            .adtea-glass-quote {
                padding: 16px 14px !important;
                margin-bottom: 20px !important;
            }
            .adtea-glass-quote h4 {
                font-size: 1.05rem !important;
                line-height: 1.5 !important;
            }
            .adtea-hero-bg p.lead {
                font-size: 0.95rem !important;
                line-height: 1.6 !important;
            }

            /* Full-width Stacked Hero Buttons on Mobile */
            .adtea-hero-action-btns {
                flex-direction: column !important;
                width: 100% !important;
                gap: 10px !important;
            }
            .adtea-btn-hero-primary,
            .adtea-btn-hero-secondary {
                width: 100% !important;
                margin-right: 0 !important;
                margin-bottom: 0 !important;
                justify-content: center !important;
                padding: 13px 20px !important;
                font-size: 0.96rem !important;
            }

            /* Event Card in Hero */
            .hero-event-card-2026 {
                animation: none !important;
                border-radius: 18px !important;
            }
            .hero-event-header {
                padding: 18px 16px !important;
            }
            .hero-event-title {
                font-size: 1.25rem !important;
            }
            .hero-event-body {
                padding: 18px 14px !important;
            }
            .hero-spec-tile {
                padding: 10px 12px !important;
                gap: 10px !important;
            }
            .hero-spec-icon {
                width: 38px !important;
                height: 38px !important;
                font-size: 0.95rem !important;
            }
            .hero-spec-label {
                font-size: 0.64rem !important;
            }
            .hero-spec-val {
                font-size: 0.9rem !important;
            }
            .hero-spec-sub {
                font-size: 0.72rem !important;
            }

            /* Quick Nav Pill Dock: Stick at top 64px under mobile header */
            .adtea-quick-nav-wrapper {
                top: 64px !important;
                padding: 7px 0 !important;
            }
            .quick-nav-pills a {
                font-size: 0.76rem !important;
                padding: 6px 12px !important;
            }

            /* Driver Theme Quote Banner Strip */
            .adtea-driver-quote-strip {
                padding: 22px 14px !important;
            }
            .adtea-driver-quote-strip h4 {
                font-size: 1.02rem !important;
                line-height: 1.5 !important;
            }

            /* Countdown Bar */
            .adtea-countdown-bar {
                padding: 18px 0 !important;
                text-align: center !important;
            }
            .adtea-countdown-bar .d-flex {
                justify-content: center !important;
                flex-wrap: nowrap !important;
            }
            .countdown-tile {
                flex: 1 1 0 !important;
                min-width: 0 !important;
                max-width: 75px !important;
                padding: 8px 4px !important;
                border-radius: 10px !important;
            }
            .countdown-num {
                font-size: 1.35rem !important;
            }
            .countdown-label {
                font-size: 0.62rem !important;
            }
            .countdown-separator {
                font-size: 1.15rem !important;
                margin: 0 4px !important;
            }

            /* Cards General Padding on Mobile */
            .card-2026,
            .pricing-card-2026,
            .tier-card-secondary {
                padding: 22px 18px !important;
                border-radius: 16px !important;
            }

            /* Metrics Section */
            .metric-card-2026 {
                padding: 14px 16px !important;
                border-radius: 14px !important;
            }
            .metric-icon-box {
                width: 44px !important;
                height: 44px !important;
                font-size: 1.15rem !important;
            }
            .metric-val {
                font-size: 1.4rem !important;
            }
            .metric-title {
                font-size: 0.78rem !important;
            }

            /* Secondary Tiers */
            .tier-card-secondary .d-flex.justify-content-between {
                flex-direction: column !important;
                align-items: flex-start !important;
                gap: 8px !important;
            }
            .tier-card-secondary .text-end {
                text-align: left !important;
            }
            .tier-card-secondary h3 {
                font-size: 1.55rem !important;
            }

            /* Modality Chips */
            .modality-chip-2026 {
                padding: 8px 14px !important;
                font-size: 0.84rem !important;
                margin: 4px !important;
            }

            /* Floating Tools (WhatsApp & Back-to-Top) */
            .adtea-floating-tools {
                bottom: 14px !important;
                right: 14px !important;
                gap: 8px !important;
            }
            .floating-whatsapp-btn {
                width: 44px !important;
                height: 44px !important;
                font-size: 1.25rem !important;
            }
            .floating-top-btn {
                width: 40px !important;
                height: 40px !important;
            }
            .scroll-progress-circle {
                width: 40px !important;
                height: 40px !important;
            }
            .scroll-progress-circle circle {
                cx: 20 !important;
                cy: 20 !important;
                r: 17 !important;
            }
        }

        /* 4. Small Mobile Phones (max-width: 575px) */
        @media (max-width: 575px) {
            .adtea-hero-bg h1,
            .adtea-hero-bg .display-4 {
                font-size: 1.55rem !important;
            }
            .adtea-pill-badge {
                font-size: 0.76rem !important;
                padding: 6px 14px !important;
            }
            .section-title h2 {
                font-size: 1.45rem !important;
            }
            .section-title p.lead {
                font-size: 0.9rem !important;
            }

            /* Spec Tiles inside Hero Card: stack cleanly with full breathing room */
            .hero-spec-tile {
                padding: 10px 12px !important;
            }
            .hero-spec-icon {
                width: 36px !important;
                height: 36px !important;
                font-size: 0.92rem !important;
            }
            .hero-spec-val {
                font-size: 0.9rem !important;
            }

            /* 7 Pillars Understandings Cards */
            .pillar-card-2026 {
                padding: 12px 14px !important;
            }
            .pillar-num {
                width: 34px !important;
                height: 34px !important;
                font-size: 0.85rem !important;
                margin-right: 10px !important;
            }
            .pillar-card-2026 span {
                font-size: 0.86rem !important;
            }

            /* Countdown Bar on Small Phones */
            .countdown-tile {
                padding: 7px 3px !important;
            }
            .countdown-num {
                font-size: 1.2rem !important;
            }
            .countdown-label {
                font-size: 0.58rem !important;
            }
            .countdown-separator {
                font-size: 1rem !important;
                margin: 0 2px !important;
            }

            /* Directory Tags in Module 3 */
            .cat-tag-2026 {
                padding: 8px 10px !important;
                font-size: 0.82rem !important;
                margin-bottom: 6px !important;
            }
            .cat-tag-2026 i {
                font-size: 0.85rem !important;
                margin-right: 6px !important;
            }

            /* Tier Filter Bar */
            .tier-filter-bar {
                flex-direction: column !important;
                width: 100% !important;
                gap: 8px !important;
            }
            .tier-filter-btn {
                width: 100% !important;
                text-align: center !important;
                padding: 9px 16px !important;
            }

            /* Price Display in Tier Cards */
            .pricing-card-2026 h2,
            .pricing-card-2026 .display-6 {
                font-size: 1.75rem !important;
            }

            /* Bank Account Number Box & Card */
            #adtea-acc-num {
                font-size: 1.6rem !important;
                letter-spacing: 2px !important;
            }
            #btn-copy-account {
                padding: 6px 12px !important;
                font-size: 0.78rem !important;
            }
            .contact-detail-list .rounded-3 {
                padding: 12px !important;
            }

            /* Inquiry Form Controls */
            #sponsor-inquiry .card-2026 {
                padding: 20px 15px !important;
            }
            .form-control-lg {
                font-size: 0.92rem !important;
                padding: 10px 12px !important;
            }
            #sponsor-inquiry button[type="submit"] {
                width: 100% !important;
                padding: 13px 18px !important;
            }

            /* FAQ Header */
            .adtea-faq-header {
                padding: 16px 14px !important;
                font-size: 0.94rem !important;
            }
            .adtea-faq-body {
                padding: 0 14px !important;
                font-size: 0.88rem !important;
            }
            .adtea-faq-item.active .adtea-faq-body {
                padding: 0 14px 16px 14px !important;
            }
        }

        /* 5. Ultra Narrow Phones (max-width: 380px) */
        @media (max-width: 380px) {
            .adtea-hero-bg h1,
            .adtea-hero-bg .display-4 {
                font-size: 1.35rem !important;
            }
            .adtea-pill-badge {
                font-size: 0.7rem !important;
                padding: 5px 10px !important;
            }
            .countdown-tile {
                padding: 6px 2px !important;
            }
            .countdown-num {
                font-size: 1.05rem !important;
            }
            .countdown-label {
                font-size: 0.52rem !important;
            }
            .countdown-separator {
                font-size: 0.85rem !important;
                margin: 0 1px !important;
            }
            #adtea-acc-num {
                font-size: 1.28rem !important;
                letter-spacing: 1px !important;
            }
            .modality-chip-2026 {
                width: 100% !important;
                justify-content: center !important;
                margin: 3px 0 !important;
            }
        }

        /* Campaign Slider & Lightbox Showcase */
        .adtea-slider-section {
            background: linear-gradient(180deg, #f8fafc 0%, #ffffff 50%, #f8fafc 100%);
            position: relative;
            overflow: hidden;
        }
        .adtea-campaign-swiper {
            padding: 15px 5px 35px !important;
            overflow: hidden !important;
        }
        .adtea-slide-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(17, 16, 54, 0.08);
            box-shadow: 0 10px 30px rgba(17, 16, 54, 0.08);
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            cursor: pointer;
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .adtea-slide-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(17, 16, 54, 0.16);
            border-color: rgba(255, 123, 65, 0.4);
        }
        .adtea-slide-thumb-wrapper {
            position: relative;
            width: 100%;
            overflow: hidden;
            background: #09132b;
            aspect-ratio: 4/5;
        }
        .adtea-slide-thumb {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
            display: block;
        }
        .adtea-slide-card:hover .adtea-slide-thumb {
            transform: scale(1.05);
        }
        .adtea-slide-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(17, 16, 54, 0.85);
            color: #ffffff;
            border: 1px solid rgba(255, 123, 65, 0.4);
            backdrop-filter: blur(8px);
            font-size: 0.72rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 20px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            z-index: 2;
        }
        .adtea-slide-zoom-btn {
            position: absolute;
            top: 14px;
            right: 14px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 123, 65, 0.95);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.3s ease;
            z-index: 2;
        }
        .adtea-slide-card:hover .adtea-slide-zoom-btn {
            opacity: 1;
            transform: scale(1);
        }
        .adtea-slide-info {
            padding: 16px 18px;
            background: #ffffff;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .adtea-slide-info h4 {
            font-size: 1.02rem;
            font-weight: 700;
            color: #111036;
            margin-bottom: 4px;
            line-height: 1.35;
        }
        .adtea-slide-info p {
            font-size: 0.82rem;
            color: #64748b;
            margin-bottom: 0;
        }
        .adtea-slider-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
            padding: 12px 20px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(17, 16, 54, 0.05);
            border: 1px solid rgba(17, 16, 54, 0.06);
        }
        .adtea-nav-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 1px solid rgba(17, 16, 54, 0.15);
            background: #ffffff;
            color: #111036;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.25s ease;
            font-size: 15px;
        }
        .adtea-nav-btn:hover {
            background: #FF7B41;
            color: #ffffff;
            border-color: #FF7B41;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 123, 65, 0.35);
        }
        .adtea-swiper-pagination {
            position: static !important;
            width: auto !important;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .adtea-swiper-pagination .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            background: #cbd5e1;
            opacity: 1;
            margin: 0 !important;
            transition: all 0.3s ease;
        }
        .adtea-swiper-pagination .swiper-pagination-bullet-active {
            width: 24px;
            border-radius: 6px;
            background: #FF7B41;
        }
        .adtea-slide-counter-badge {
            font-size: 0.85rem;
            font-weight: 700;
            color: #111036;
            background: #f1f5f9;
            padding: 6px 14px;
            border-radius: 20px;
        }
        .adtea-play-pause-btn {
            background: transparent;
            border: 1px solid rgba(17, 16, 54, 0.15);
            border-radius: 20px;
            padding: 5px 14px;
            font-size: 0.82rem;
            font-weight: 600;
            color: #475569;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s ease;
        }
        .adtea-play-pause-btn:hover {
            border-color: #FF7B41;
            color: #FF7B41;
        }

        /* Lightbox Modal */
        .adtea-lightbox-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(9, 19, 43, 0.94);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            z-index: 999999;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .adtea-lightbox-modal.active {
            display: flex;
            opacity: 1;
        }
        .adtea-lightbox-content {
            position: relative;
            max-width: 900px;
            max-height: 90vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .adtea-lightbox-img {
            max-width: 100%;
            max-height: 78vh;
            object-fit: contain;
            border-radius: 12px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
        .adtea-lightbox-caption {
            margin-top: 15px;
            text-align: center;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: 0.3px;
        }
        .adtea-lightbox-caption small {
            display: block;
            color: #FF7B41;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2px;
        }
        .adtea-lightbox-close {
            position: absolute;
            top: -45px;
            right: 0;
            background: rgba(255, 255, 255, 0.15);
            border: none;
            color: #ffffff;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .adtea-lightbox-close:hover {
            background: #FF7B41;
            transform: scale(1.1);
        }
        .adtea-lightbox-prev,
        .adtea-lightbox-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.15);
            border: none;
            color: #ffffff;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.2s ease;
            backdrop-filter: blur(4px);
        }
        .adtea-lightbox-prev { left: -60px; }
        .adtea-lightbox-next { right: -60px; }
        .adtea-lightbox-prev:hover,
        .adtea-lightbox-next:hover {
            background: #FF7B41;
            transform: translateY(-50%) scale(1.1);
        }
        @media (max-width: 991px) {
            .adtea-lightbox-prev { left: 10px; }
            .adtea-lightbox-next { right: 10px; }
            .adtea-lightbox-close { top: -40px; right: 10px; }
        }
    </style>

    <!-- Floating Concierge and Back to Top Button -->
    <div class="adtea-floating-tools">
        <a href="https://wa.me/2347062081248?text=Hello%20Tourism%20Afrikania,%20I%20would%20like%20to%20inquire%20about%20partnering%20with%20the%202026%20ADTEA%20Summit" target="_blank" class="floating-whatsapp-btn" title="Chat with ADTEA Director on WhatsApp">
            <i class="fab fa-whatsapp"></i>
            <span class="whatsapp-beacon"></span>
        </a>

        <button type="button" class="floating-top-btn" id="adteaBackToTop" title="Back to top" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
            <svg class="scroll-progress-circle" width="48" height="48">
                <circle class="circle-bg" cx="24" cy="24" r="21"></circle>
                <circle class="circle-bar" id="scrollProgressCircle" cx="24" cy="24" r="21"></circle>
            </svg>
            
            <i class="fas fa-arrow-up" style="position: relative; z-index: 2;"></i>
        </button>
    </div>

    <!-- Premium Hero Section with Constellation Canvas & Ambient Glow Orbs -->
    <div class="adtea-hero-bg">
        <canvas id="hero-particles-canvas"></canvas>
        <div class="adtea-hero-glow-1"></div>
        <div class="adtea-hero-glow-2"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 mb-5 mb-lg-0 adtea-reveal">
                    <div class="mb-3">
                        <span class="adtea-pill-badge shadow-sm">
                            <span class="live-beacon"></span>
                            <i class="fas fa-calendar-alt me-2 text-warning"></i> 1st December 2026 &bull; Lagos International Airport
                        </span>
                    </div>
                    <h1 class="display-4 font-weight-bold text-white mb-3" style="line-height: 1.15; letter-spacing: -0.5px;">
                        2026 AIRPORT DRIVERS <br>
                        <span style="color: #ff7b41;">TOURISM EDUCATION</span> (ADTEA)
                    </h1>

                    <div class="adtea-glass-quote p-4 mb-4">
                        <small class="text-uppercase font-weight-bold text-warning d-block mb-1" style="letter-spacing: 1px;">
                            <i class="fas fa-quote-left me-2"></i> Official Programme Theme
                        </small>
                        <h4 class="text-white font-italic mb-0 fw-normal" style="font-size: 1.2rem; line-height: 1.6;">
                            "Creating a Better Tourist Experience Through Tourism Impact Awareness"
                        </h4>
                    </div>

                    <p class="lead text-light mb-4" style="font-size: 1.05rem; opacity: 0.9; line-height: 1.8;">
                        Organised by <strong>Tourism Afrikania</strong> in partnership with <strong>AHTES (African Hospitality & Tourism Education Summit)</strong>. Empowering <strong>300+ frontline transport professionals</strong>—airport taxi drivers, ride-hailing operators, hotel shuttle chauffeurs, and transfer providers.
                    </p>

                    <div class="d-flex flex-wrap align-items-center adtea-hero-action-btns">
                        <a href="{{ route('adtea.register') }}" class="adtea-btn-hero-primary me-3 mb-2">
                            <i class="fas fa-id-badge"></i> Register for Event
                        </a>
                        <a href="#sponsorship" class="adtea-btn-hero-secondary me-3 mb-2">
                            <i class="fas fa-hand-holding-heart"></i> Sponsorship Tiers
                        </a>
                        <a href="#payment-details" class="adtea-btn-hero-secondary mb-2">
                            <i class="fas fa-university"></i> Payment & Contact Info
                        </a>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 adtea-reveal stagger-2">
                    <div class="hero-event-card-wrapper">
                         <img src="/1.2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 

    <!-- Summit Highlights Metrics Strip -->
    <div class="adtea-metrics-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0 adtea-reveal stagger-1">
                    <div class="metric-card-2026">
                        <div class="metric-icon-box icon-box-emerald">
                            <i class="fas fa-id-card-alt"></i>
                        </div>
                        <div>
                            <div class="metric-val"><span class="counter-val" data-target="300">0</span>+</div>
                            <p class="metric-title">Frontline Transport Operators</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0 adtea-reveal stagger-2">
                    <div class="metric-card-2026">
                        <div class="metric-icon-box icon-box-blue">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <div>
                            <div class="metric-val"><span class="counter-val" data-target="100">0</span>%</div>
                            <p class="metric-title">Practical Hospitality Curriculum</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-3 mb-sm-0 adtea-reveal stagger-3">
                    <div class="metric-card-2026">
                        <div class="metric-icon-box icon-box-amber">
                            <i class="fas fa-award"></i>
                        </div>
                        <div>
                            <div class="metric-val"><span class="counter-val" data-target="5">0</span> Tiers</div>
                            <p class="metric-title">Partnership & CSR Categories</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 adtea-reveal stagger-4">
                    <div class="metric-card-2026">
                        <div class="metric-icon-box icon-box-rose">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div>
                            <div class="metric-val">₦5,000,000</div>
                            <p class="metric-title">Lead Presenting Tier Value</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 01: Executive Summary -->
    <div id="executive-summary" class="pt-90 pb-70 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 adtea-reveal">
                    <div class="section-title mb-30 text-center">
                        <span class="text-primary font-weight-bold text-uppercase" style="letter-spacing: 1.5px; color: #ff7b41 !important;">Section 01</span>
                        <h2>Executive <span class="down-mark-line-2">Summary</span></h2>
                    </div>

                    <div class="p-4 p-md-5 rounded-4 shadow-sm mb-4" style="background-color: #f8fafc; border-left: 5px solid #ff7b41;">
                        <p class="lead text-dark font-weight-bold mb-3" style="font-size: 1.15rem; line-height: 1.7;">
                            The 2026 Airport Drivers Tourism Education (ADTEA) is a Tourism Afrikania initiative designed to improve the quality of visitor experiences in Lagos by educating and empowering frontline transport professionals who interact directly with visitors.
                        </p>
                        <p class="text-secondary" style="line-height: 1.8; font-size: 1.02rem;">
                            For many visitors arriving in Lagos, one of their first meaningful interactions with the destination may be with an airport taxi driver, ride-hailing driver, hotel shuttle operator, chauffeur or airport transfer provider. These professionals are more than transportation providers. Their professionalism, communication, attitude, knowledge and ability to responsibly connect visitors with tourism businesses can influence how visitors perceive Lagos and how much they spend within the local tourism economy. <strong>ADTEA was developed from this important reality.</strong>
                        </p>
                        <p class="text-secondary mb-0" style="line-height: 1.8; font-size: 1.02rem;">
                            The programme seeks to position frontline transport professionals as tourism ambassadors, equipping them with relevant knowledge around tourism, visitor experience, professionalism, destination awareness, customer service, conflict management and tourism’s economic impact.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 04: Background & Rationale (2026 Modern Card Design) -->
    <div id="rationale" class="pt-90 pb-90" style="background-color: #f8fafc;">
        <div class="container">
            <div class="section-title mb-50 text-center adtea-reveal">
                <span class="text-primary font-weight-bold text-uppercase" style="letter-spacing: 1.5px; color: #ff7b41 !important;">Section 04</span>
                <h2>Background & <span class="down-mark-line-2">Rationale</span></h2>
                <p class="lead text-secondary mt-3 font-italic" style="max-width: 820px; margin: 0 auto; font-size: 1.1rem;">
                    "A visitor's experience of a destination begins long before they check into a hotel or visit a tourist attraction."
                </p>
            </div>

            <!-- Comparison Cards 2026 -->
            <div class="row mb-5">
                <div class="col-md-6 mb-4 mb-md-0 adtea-reveal stagger-1">
                    <div class="card-2026 p-4 p-lg-5 h-100 tilt-card" style="border-top: 4px solid #10b981; background: #ffffff;">
                        <div class="d-flex align-items-center mb-4">
                            <div class="adtea-icon-box icon-box-emerald me-3">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div>
                                <span class="adtea-badge adtea-badge-success mb-1">
                                    <i class="fas fa-check-circle me-1"></i> Positive Impact
                                </span>
                                <h3 class="font-weight-bold mb-0 text-dark" style="font-size: 1.35rem;">A Well-Trained Driver</h3>
                            </div>
                        </div>
                        <p class="text-secondary mb-3" style="line-height: 1.8; font-size: 1.02rem;">
                            A professional, informed and welcoming driver creates an immediate positive first impression, communicates effectively, demonstrates cultural sensitivity, and responsibly introduces visitors to legitimate tourism experiences.
                        </p>
                        <div class="pt-3 border-top">
                            <div class="d-flex align-items-center mb-2 text-dark font-weight-bold small">
                                <i class="fas fa-check text-success me-2"></i> Boosts destination trust & visitor confidence
                            </div>
                            <div class="d-flex align-items-center text-dark font-weight-bold small">
                                <i class="fas fa-check text-success me-2"></i> Generates local revenue flow across Lagos tourism
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 adtea-reveal stagger-2">
                    <div class="card-2026 p-4 p-lg-5 h-100 tilt-card" style="border-top: 4px solid #ef4444; background: #ffffff;">
                        <div class="d-flex align-items-center mb-4">
                            <div class="adtea-icon-box icon-box-rose me-3">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div>
                                <span class="adtea-badge adtea-badge-danger mb-1">
                                    <i class="fas fa-shield-alt me-1"></i> Systemic Risk
                                </span>
                                <h3 class="font-weight-bold mb-0 text-dark" style="font-size: 1.35rem;">An Untrained Experience</h3>
                            </div>
                        </div>
                        <p class="text-secondary mb-3" style="line-height: 1.8; font-size: 1.02rem;">
                            Poor communication, unprofessional conduct, misinformation, pricing disputes, safety concerns or poor customer service negatively affect the visitor's perception of the entire destination.
                        </p>
                        <div class="pt-3 border-top">
                            <div class="d-flex align-items-center mb-2 text-dark font-weight-bold small">
                                <i class="fas fa-times text-danger me-2"></i> Causes visitor anxiety, disputes & reputational loss
                            </div>
                            <div class="d-flex align-items-center text-dark font-weight-bold small">
                                <i class="fas fa-times text-danger me-2"></i> Deterrents repeat visits and direct economic spending
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 7 Core Learning Understandings 2026 Cards -->
            <div class="text-center mb-4 pt-4 adtea-reveal">
                <span class="adtea-badge adtea-badge-orange mb-2">
                    <i class="fas fa-graduation-cap me-1"></i> Core Capacity Development
                </span>
                <h3 class="font-weight-bold text-dark mb-2">What ADTEA Helps Participants Understand</h3>
                <p class="text-muted">Closing the gap between transportation and tourism education across 7 key pillars:</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-3 adtea-reveal stagger-1">
                    <div class="pillar-card-2026 tilt-card">
                        <div class="pillar-num">01</div>
                        <span class="font-weight-bold text-dark" style="font-size: 0.93rem;">The tourism industry & its value chain</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 adtea-reveal stagger-2">
                    <div class="pillar-card-2026 tilt-card">
                        <div class="pillar-num">02</div>
                        <span class="font-weight-bold text-dark" style="font-size: 0.93rem;">Their role as tourism ambassadors</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 adtea-reveal stagger-3">
                    <div class="pillar-card-2026 tilt-card">
                        <div class="pillar-num">03</div>
                        <span class="font-weight-bold text-dark" style="font-size: 0.93rem;">Importance of visitor experience</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 adtea-reveal stagger-4">
                    <div class="pillar-card-2026 tilt-card">
                        <div class="pillar-num">04</div>
                        <span class="font-weight-bold text-dark" style="font-size: 0.93rem;">Professional standards & communication</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 adtea-reveal stagger-5">
                    <div class="pillar-card-2026 tilt-card">
                        <div class="pillar-num">05</div>
                        <span class="font-weight-bold text-dark" style="font-size: 0.93rem;">Responsible destination promotion</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 adtea-reveal stagger-6">
                    <div class="pillar-card-2026 tilt-card">
                        <div class="pillar-num">06</div>
                        <span class="font-weight-bold text-dark" style="font-size: 0.93rem;">Customer service & conflict management</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-3 adtea-reveal stagger-7">
                    <div class="pillar-card-2026 tilt-card">
                        <div class="pillar-num">07</div>
                        <span class="font-weight-bold text-dark" style="font-size: 0.93rem;">How visitor spending drives wider economy</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 07: Key Programme Focus Areas (2026 Modern Card Design) -->
    <div id="curriculum" class="pt-90 pb-90 bg-white">
        <div class="container">
            <div class="section-title mb-50 text-center adtea-reveal">
                <span class="text-primary font-weight-bold text-uppercase" style="letter-spacing: 1.5px; color: #ff7b41 !important;">Section 07</span>
                <h2>Key Programme <span class="down-mark-line-2">Focus Areas</span></h2>
                <p class="text-muted mt-2">Comprehensive curriculum designed specifically for frontline airport transport operators.</p>
            </div>

            <div class="row">
                <!-- Module 1 -->
                <div class="col-lg-6 mb-4 adtea-reveal stagger-1">
                    <div class="card-2026 p-4 p-lg-5 h-100 tilt-card" style="border-top: 4px solid #2563eb;">
                        <div class="d-flex align-items-center mb-4">
                            <div class="adtea-icon-box icon-box-blue me-3">
                                <i class="fas fa-globe-africa"></i>
                            </div>
                            <div>
                                <span class="adtea-badge adtea-badge-primary mb-1">
                                    <i class="fas fa-book-open me-1"></i> Module 01
                                </span>
                                <h3 class="font-weight-bold text-dark mb-0" style="font-size: 1.25rem;">1. Understanding Tourism</h3>
                            </div>
                        </div>
                        <p class="text-muted small mb-3">Mastering the tourism ecosystem and economic multiplier effect:</p>
                        <div class="module-check-item">
                            <span class="module-check-icon icon-box-blue"><i class="fas fa-check"></i></span>
                            <span>The tourism value chain & visitor economic flows</span>
                        </div>
                        <div class="module-check-item">
                            <span class="module-check-icon icon-box-blue"><i class="fas fa-check"></i></span>
                            <span>Visitor spending & local business revenue impact</span>
                        </div>
                        <div class="module-check-item">
                            <span class="module-check-icon icon-box-blue"><i class="fas fa-check"></i></span>
                            <span>Relationship between transportation & tourism growth</span>
                        </div>
                        <div class="module-check-item mb-0">
                            <span class="module-check-icon icon-box-blue"><i class="fas fa-check"></i></span>
                            <span>How tourism expansion creates direct income opportunities</span>
                        </div>
                    </div>
                </div>

                <!-- Module 2 -->
                <div class="col-lg-6 mb-4 adtea-reveal stagger-2">
                    <div class="card-2026 p-4 p-lg-5 h-100 tilt-card" style="border-top: 4px solid #059669;">
                        <div class="d-flex align-items-center mb-4">
                            <div class="adtea-icon-box icon-box-emerald me-3">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div>
                                <span class="adtea-badge adtea-badge-success mb-1">
                                    <i class="fas fa-award me-1"></i> Module 02
                                </span>
                                <h3 class="font-weight-bold text-dark mb-0" style="font-size: 1.25rem;">2. Driver as a Tourism Ambassador</h3>
                            </div>
                        </div>
                        <p class="text-muted small mb-3">Professional conduct, hospitality standards and first impressions:</p>
                        <div class="module-check-item">
                            <span class="module-check-icon icon-box-emerald"><i class="fas fa-check"></i></span>
                            <span>First impressions, welcoming attitude & personal grooming</span>
                        </div>
                        <div class="module-check-item">
                            <span class="module-check-icon icon-box-emerald"><i class="fas fa-check"></i></span>
                            <span>Communication skills, body language & active listening</span>
                        </div>
                        <div class="module-check-item">
                            <span class="module-check-icon icon-box-emerald"><i class="fas fa-check"></i></span>
                            <span>Cultural sensitivity, luggage etiquette & visitor respect</span>
                        </div>
                        <div class="module-check-item mb-0">
                            <span class="module-check-icon icon-box-emerald"><i class="fas fa-check"></i></span>
                            <span>Building trust, safety assurance & professional integrity</span>
                        </div>
                    </div>
                </div>

                <!-- Module 3 -->
                <div class="col-lg-6 mb-4 adtea-reveal stagger-1">
                    <div class="card-2026 p-4 p-lg-5 h-100 tilt-card" style="border-top: 4px solid #d97706;">
                        <div class="d-flex align-items-center mb-3">
                            <div class="adtea-icon-box icon-box-amber me-3">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div>
                                <span class="adtea-badge adtea-badge-warning mb-1">
                                    <i class="fas fa-compass me-1"></i> Module 03
                                </span>
                                <h3 class="font-weight-bold text-dark mb-0" style="font-size: 1.25rem;">3. Selling Lagos Responsibly</h3>
                            </div>
                        </div>
                        <p class="text-muted small mb-3">Guiding visitors to authentic local offerings without acting as a licensed tour guide:</p>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="cat-tag-2026"><i class="fas fa-hotel"></i> <span>Hotels & Lodging</span></div>
                                <div class="cat-tag-2026"><i class="fas fa-landmark"></i> <span>Attractions</span></div>
                                <div class="cat-tag-2026"><i class="fas fa-umbrella-beach"></i> <span>Beaches & Resorts</span></div>
                                <div class="cat-tag-2026"><i class="fas fa-university"></i> <span>Museums</span></div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="cat-tag-2026"><i class="fas fa-shopping-bag"></i> <span>Markets & Crafts</span></div>
                                <div class="cat-tag-2026"><i class="fas fa-palette"></i> <span>Arts & Culture</span></div>
                                <div class="cat-tag-2026"><i class="fas fa-utensils"></i> <span>Restaurants</span></div>
                                <div class="cat-tag-2026"><i class="fas fa-ticket-alt"></i> <span>Events & Music</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Module 4 -->
                <div class="col-lg-6 mb-4 adtea-reveal stagger-2">
                    <div class="card-2026 p-4 p-lg-5 h-100 tilt-card" style="border-top: 4px solid #dc2626;">
                        <div class="d-flex align-items-center mb-4">
                            <div class="adtea-icon-box icon-box-rose me-3">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <span class="adtea-badge adtea-badge-danger mb-1">
                                    <i class="fas fa-shield-alt me-1"></i> Module 04
                                </span>
                                <h3 class="font-weight-bold text-dark mb-0" style="font-size: 1.25rem;">4. Conflict & Customer Management</h3>
                            </div>
                        </div>
                        <p class="text-muted small mb-3">Handling difficult interactions, safety protocols, and route management:</p>
                        <div class="module-check-item">
                            <span class="module-check-icon icon-box-rose"><i class="fas fa-check"></i></span>
                            <span>Managing complaints & handling demanding passengers</span>
                        </div>
                        <div class="module-check-item">
                            <span class="module-check-icon icon-box-rose"><i class="fas fa-check"></i></span>
                            <span>Handling traffic delays, flight changes & route updates</span>
                        </div>
                        <div class="module-check-item">
                            <span class="module-check-icon icon-box-rose"><i class="fas fa-check"></i></span>
                            <span>Resolving fare disputes & payment issues transparently</span>
                        </div>
                        <div class="module-check-item mb-0">
                            <span class="module-check-icon icon-box-rose"><i class="fas fa-check"></i></span>
                            <span>Passenger safety compliance & emergency alert protocols</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 08: Visual Campaign Story & Official Summit Posters Slider -->
    <div id="campaign-slides" class="adtea-slider-section pt-90 pb-90">
        <div class="container">
            <div class="section-title mb-40 text-center adtea-reveal">
                <span class="text-primary font-weight-bold text-uppercase" style="letter-spacing: 1.5px; color: #ff7b41 !important;">Campaign Story &amp; Visuals</span>
                <h2>Official 2026 Summit <span class="down-mark-line-2">Posters &amp; Slides</span></h2>
                <p class="lead text-secondary mt-2" style="max-width: 760px; margin: 0 auto;">
                    Explore the official media posters and campaign slides designed to inspire drivers, stakeholders, and airport visitors for the December 2026 Summit.
                </p>
            </div>

            <!-- Swiper Carousel Container -->
            <div class="swiper-container adtea-campaign-swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="adtea-slide-card" onclick="openAdteaLightbox(0)">
                            <div class="adtea-slide-thumb-wrapper">
                                <span class="adtea-slide-badge"><i class="fas fa-tag me-1"></i> Poster 01</span>
                                <span class="adtea-slide-zoom-btn" title="View Fullscreen"><i class="fas fa-search-plus"></i></span>
                                <img src="/1.1.png" alt="Together We Create A Stronger Airport Experience" class="adtea-slide-thumb" loading="lazy">
                            </div>
                            <div class="adtea-slide-info">
                                <div>
                                    <small class="text-primary font-weight-bold text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px;">Summit Vision</small>
                                    <h4>A Stronger Airport Experience</h4>
                                </div>
                                <p>Fostering seamless collaboration between airport drivers and tourists.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="adtea-slide-card" onclick="openAdteaLightbox(1)">
                            <div class="adtea-slide-thumb-wrapper">
                                <span class="adtea-slide-badge"><i class="fas fa-tag me-1"></i> Poster 02</span>
                                <span class="adtea-slide-zoom-btn" title="View Fullscreen"><i class="fas fa-search-plus"></i></span>
                                <img src="/1.2.png" alt="1st Dec 2026 Summit Launch in Lagos" class="adtea-slide-thumb" loading="lazy">
                            </div>
                            <div class="adtea-slide-info">
                                <div>
                                    <small class="text-primary font-weight-bold text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px;">Event Launch</small>
                                    <h4>1st Dec 2026 &bull; Lagos Gathering</h4>
                                </div>
                                <p>Convening 300+ drivers at the gateway of Nigeria's commercial hub.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="adtea-slide-card" onclick="openAdteaLightbox(2)">
                            <div class="adtea-slide-thumb-wrapper">
                                <span class="adtea-slide-badge"><i class="fas fa-tag me-1"></i> Poster 03</span>
                                <span class="adtea-slide-zoom-btn" title="View Fullscreen"><i class="fas fa-search-plus"></i></span>
                                <img src="/1.3.png" alt="Drivers Can Do More Than Drive" class="adtea-slide-thumb" loading="lazy">
                            </div>
                            <div class="adtea-slide-info">
                                <div>
                                    <small class="text-primary font-weight-bold text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px;">Empowerment</small>
                                    <h4>Drivers Do More Than Drive</h4>
                                </div>
                                <p>Elevating transport professionals into certified cultural guides.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="adtea-slide-card" onclick="openAdteaLightbox(3)">
                            <div class="adtea-slide-thumb-wrapper">
                                <span class="adtea-slide-badge"><i class="fas fa-tag me-1"></i> Poster 04</span>
                                <span class="adtea-slide-zoom-btn" title="View Fullscreen"><i class="fas fa-search-plus"></i></span>
                                <img src="/1.4.png" alt="From The Moment A Tourist Leaves The Airport" class="adtea-slide-thumb" loading="lazy">
                            </div>
                            <div class="adtea-slide-info">
                                <div>
                                    <small class="text-primary font-weight-bold text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px;">First Impressions</small>
                                    <h4>The First 15 Minutes Matter</h4>
                                </div>
                                <p>Transforming the journey from terminal to hotel into hospitality.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="swiper-slide">
                        <div class="adtea-slide-card" onclick="openAdteaLightbox(4)">
                            <div class="adtea-slide-thumb-wrapper">
                                <span class="adtea-slide-badge"><i class="fas fa-tag me-1"></i> Poster 05</span>
                                <span class="adtea-slide-zoom-btn" title="View Fullscreen"><i class="fas fa-search-plus"></i></span>
                                <img src="/1.5.png" alt="Airport Drivers As Destination Ambassadors" class="adtea-slide-thumb" loading="lazy">
                            </div>
                            <div class="adtea-slide-info">
                                <div>
                                    <small class="text-primary font-weight-bold text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px;">Ambassadorship</small>
                                    <h4>Frontline Destination Ambassadors</h4>
                                </div>
                                <p>Official ambassadors advocating Nigerian culture and tourism sites.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div class="swiper-slide">
                        <div class="adtea-slide-card" onclick="openAdteaLightbox(5)">
                            <div class="adtea-slide-thumb-wrapper">
                                <span class="adtea-slide-badge"><i class="fas fa-tag me-1"></i> Poster 06</span>
                                <span class="adtea-slide-zoom-btn" title="View Fullscreen"><i class="fas fa-search-plus"></i></span>
                                <img src="/1.6.png" alt="Are You Ready To Become An Ambassador?" class="adtea-slide-thumb" loading="lazy">
                            </div>
                            <div class="adtea-slide-info">
                                <div>
                                    <small class="text-primary font-weight-bold text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px;">Call To Action</small>
                                    <h4>Ready To Lead The Way?</h4>
                                </div>
                                <p>Enrollment pathways for airport drivers seeking certified recognition.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 7 -->
                    <div class="swiper-slide">
                        <div class="adtea-slide-card" onclick="openAdteaLightbox(6)">
                            <div class="adtea-slide-thumb-wrapper">
                                <span class="adtea-slide-badge"><i class="fas fa-tag me-1"></i> Poster 07</span>
                                <span class="adtea-slide-zoom-btn" title="View Fullscreen"><i class="fas fa-search-plus"></i></span>
                                <img src="/1.7.png" alt="Airport Fleet and Uniformed Drivers" class="adtea-slide-thumb" loading="lazy">
                            </div>
                            <div class="adtea-slide-info">
                                <div>
                                    <small class="text-primary font-weight-bold text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px;">Fleet Standards</small>
                                    <h4>World-Class Airport Fleet</h4>
                                </div>
                                <p>Standardized service, customer excellence, and safety ethics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fullscreen Lightbox Modal -->
    <div id="adteaLightboxModal" class="adtea-lightbox-modal" onclick="handleLightboxBackdrop(event)">
        <div class="adtea-lightbox-content">
            <button type="button" class="adtea-lightbox-close" onclick="closeAdteaLightbox()" aria-label="Close Lightbox">&times;</button>
            <button type="button" class="adtea-lightbox-prev" onclick="changeLightboxSlide(-1)" aria-label="Previous Image">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button type="button" class="adtea-lightbox-next" onclick="changeLightboxSlide(1)" aria-label="Next Image">
                <i class="fas fa-chevron-right"></i>
            </button>
            <img src="/1.1.png" alt="Enlarged Campaign Poster" id="adteaLightboxImg" class="adtea-lightbox-img">
            <div class="adtea-lightbox-caption" id="adteaLightboxCaption">
                <small id="adteaLightboxTag">Poster 01 of 07</small>
                <span id="adteaLightboxTitle">A Stronger Airport Experience</span>
            </div>
        </div>
    </div>

    <!-- Section 11 & 12: Official Sponsorship Investment Tiers (2026 Pricing Cards) -->
    <div id="sponsorship" class="pt-90 pb-90" style="background-color: #f8fafc;">
        <div class="container">
            <div class="section-title mb-30 text-center adtea-reveal">
                <span class="text-primary font-weight-bold text-uppercase" style="letter-spacing: 1.5px; color: #ff7b41 !important;">Section 11 & 12</span>
                <h2>Sponsorship & Investment <span class="down-mark-line-2">Tiers</span></h2>
                <p class="lead text-secondary mt-2" style="max-width: 750px; margin: 0 auto;">
                    Flexible sponsorship categories tailored for corporate brands, public sector institutions, and industry leaders.
                </p>
            </div>

            <!-- Interactive Tier Filter Tabs -->
            <div class="tier-filter-bar adtea-reveal">
                <button type="button" class="tier-filter-btn active" onclick="filterTiers('all', this);">
                    <i class="fas fa-th-large me-1"></i> All Tiers (5)
                </button>
                <button type="button" class="tier-filter-btn" onclick="filterTiers('executive', this);">
                    <i class="fas fa-crown me-1"></i> Executive Tiers (₦5M - ₦1M)
                </button>
                <button type="button" class="tier-filter-btn" onclick="filterTiers('community', this);">
                    <i class="fas fa-hands-helping me-1"></i> Community & SME (₦500k - ₦250k)
                </button>
            </div>

            <!-- Top 3 Tiers (Presenting, Gold, Silver) -->
            <div class="row align-items-stretch mb-4" id="executive-tiers-row">
                <!-- Presenting Partner (₦5,000,000) -->
                <div class="col-lg-4 col-md-6 mb-4 tier-col tier-exec adtea-reveal stagger-1">
                    <div class="pricing-card-2026 pricing-card-featured tilt-card">
                        <div class="p-4 text-white text-center position-relative" style="background: linear-gradient(135deg, #0b1b3d 0%, #17356d 100%);">
                            <span class="adtea-badge mb-2" style="background: #ff7b41; color: #ffffff; border: none; font-size: 0.72rem;">
                                <i class="fas fa-crown me-1 text-warning"></i> Top Tier Partner
                            </span>
                            <h3 class="text-white font-weight-bold mb-1">Presenting Partner</h3>
                            <div class="d-flex align-items-baseline justify-content-center mt-2">
                                <h2 class="text-warning display-6 font-weight-bold mb-0">₦5,000,000</h2>
                            </div>
                            <small class="text-light opacity-75 d-block mt-1">Exclusive Lead Summit Partner</small>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column justify-content-between">
                            <ul class="list-unstyled text-secondary mb-4" style="line-height: 2.1; font-size: 0.95rem;">
                                <li class="mb-2"><i class="fas fa-star text-warning me-2"></i> <strong>Official Presenting Partner Designation</strong></li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Premium Logo on All Event Banners & Backdrop</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Prominent Venue Branding & Display Booth</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Keynote / Goodwill Address Slot</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Dedicated CSR & Media PR Package</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Full Post-Event Impact Report & Plaque</li>
                            </ul>
                            <button type="button" onclick="selectTierAndScroll('Presenting Partner (₦5,000,000)');" class="adtea-btn-hero-primary w-100 py-3 text-center justify-content-center font-weight-bold shadow-sm" style="border-radius: 10px; border: none;">
                                Apply as Presenting Partner <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Gold Partner (₦2,000,000) -->
                <div class="col-lg-4 col-md-6 mb-4 tier-col tier-exec adtea-reveal stagger-2">
                    <div class="pricing-card-2026 tilt-card">
                        <div class="p-4 text-white text-center" style="background: linear-gradient(135deg, #1e293b 0%, #334155 100%); border-bottom: 3px solid #d4af37;">
                            <span class="adtea-badge mb-2" style="background: rgba(212, 175, 55, 0.2); color: #ffd700; border: 1px solid rgba(212, 175, 55, 0.4);">
                                <i class="fas fa-medal me-1"></i> Premier Tier
                            </span>
                            <h3 class="text-white font-weight-bold mb-1">Gold Partner</h3>
                            <div class="d-flex align-items-baseline justify-content-center mt-2">
                                <h2 class="text-white display-6 font-weight-bold mb-0">₦2,000,000</h2>
                            </div>
                            <small class="text-light opacity-75 d-block mt-1">High-Impact Corporate Sponsorship</small>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column justify-content-between">
                            <ul class="list-unstyled text-secondary mb-4" style="line-height: 2.1; font-size: 0.95rem;">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Official Gold Partner Recognition</strong></li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Prominent Logo Placement on Event Materials</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Venue Branding & Verbal MC Acknowledgement</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Presentation / Speaking Slot</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Branded Activation Booth</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Certificate & Plaque of Appreciation</li>
                            </ul>
                            <button type="button" onclick="selectTierAndScroll('Gold Partner (₦2,000,000)');" class="btn btn-primary w-100 py-3 font-weight-bold shadow-sm" style="background-color: #0b1b3d; border: none; border-radius: 10px;">
                                Apply as Gold Partner <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Silver Partner (₦1,000,000) -->
                <div class="col-lg-4 col-md-6 mb-4 tier-col tier-exec adtea-reveal stagger-3">
                    <div class="pricing-card-2026 tilt-card">
                        <div class="p-4 text-white text-center" style="background: linear-gradient(135deg, #334155 0%, #475569 100%); border-bottom: 3px solid #94a3b8;">
                            <span class="adtea-badge mb-2" style="background: rgba(255, 255, 255, 0.15); color: #ffffff; border: 1px solid rgba(255, 255, 255, 0.3);">
                                <i class="fas fa-shield-alt me-1"></i> Corporate Tier
                            </span>
                            <h3 class="text-white font-weight-bold mb-1">Silver Partner</h3>
                            <div class="d-flex align-items-baseline justify-content-center mt-2">
                                <h2 class="text-white display-6 font-weight-bold mb-0">₦1,000,000</h2>
                            </div>
                            <small class="text-light opacity-75 d-block mt-1">Strategic Brand Association</small>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column justify-content-between">
                            <ul class="list-unstyled text-secondary mb-4" style="line-height: 2.1; font-size: 0.95rem;">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> <strong>Official Silver Partner Recognition</strong></li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Logo Placement on Selected Materials</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> On-site Partner Recognition & Mention</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Distribution of Approved Branded Materials</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Certificate of Appreciation</li>
                            </ul>
                            <button type="button" onclick="selectTierAndScroll('Silver Partner (₦1,000,000)');" class="btn btn-secondary w-100 py-3 font-weight-bold shadow-sm" style="border-radius: 10px; background-color: #475569; border: none;">
                                Apply as Silver Partner <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Supporting & Community Partner Tiers -->
            <div class="row" id="community-tiers-row">
                <!-- Supporting Partner (₦500,000) -->
                <div class="col-lg-6 mb-4 tier-col tier-comm adtea-reveal stagger-1">
                    <div class="tier-card-secondary tier-card-supporting tilt-card">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="adtea-badge adtea-badge-info mb-1">
                                        <i class="fas fa-hand-holding-usd me-1"></i> Supporting Tier
                                    </span>
                                    <h4 class="font-weight-bold text-dark mb-0">Supporting Partner</h4>
                                </div>
                                <div class="text-end">
                                    <h3 class="font-weight-bold mb-0" style="color: #0d9488; font-size: 1.85rem;">₦500,000</h3>
                                    <small class="text-muted">Targeted Sponsorship</small>
                                </div>
                            </div>
                            <ul class="list-unstyled text-secondary my-4" style="line-height: 2.1; font-size: 0.95rem;">
                                <li class="mb-2"><i class="fas fa-check-circle text-info me-2"></i> Official Supporting Partner recognition & logo placement</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-info me-2"></i> On-site recognition & social media acknowledgement</li>
                                <li><i class="fas fa-check-circle text-info me-2"></i> Certificate of appreciation & post-event impact report</li>
                            </ul>
                        </div>
                        <button type="button" onclick="selectTierAndScroll('Supporting Partner (₦500,000)');" class="btn-supporting-cta w-100">
                            Apply as Supporting Partner <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>

                <!-- Community Partner (₦250,000) -->
                <div class="col-lg-6 mb-4 tier-col tier-comm adtea-reveal stagger-2">
                    <div class="tier-card-secondary tier-card-community tilt-card">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="adtea-badge adtea-badge-success mb-1">
                                        <i class="fas fa-hands-helping me-1"></i> Community Tier
                                    </span>
                                    <h4 class="font-weight-bold text-dark mb-0">Community Partner</h4>
                                </div>
                                <div class="text-end">
                                    <h3 class="font-weight-bold mb-0 text-success" style="font-size: 1.85rem;">₦250,000</h3>
                                    <small class="text-muted">Grassroots Support</small>
                                </div>
                            </div>
                            <ul class="list-unstyled text-secondary my-4" style="line-height: 2.1; font-size: 0.95rem;">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Official Community Partner recognition</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Logo/name inclusion on partner materials</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> On-site acknowledgement & certificate</li>
                            </ul>
                        </div>
                        <button type="button" onclick="selectTierAndScroll('Community Partner (₦250,000)');" class="btn-community-cta w-100">
                            Apply as Community Partner <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 14 & 15: Why Partner & Partnership Modalities (2026 Modern Cards) -->
    <div id="modalities" class="pt-90 pb-90 bg-white">
        <div class="container">
            <div class="section-title mb-50 text-center adtea-reveal">
                <span class="text-primary font-weight-bold text-uppercase" style="letter-spacing: 1.5px; color: #ff7b41 !important;">Section 14 & 15</span>
                <h2>Partnership <span class="down-mark-line-2">Modalities & Sectors</span></h2>
                <p class="text-muted mt-2">Connecting across four key sectors of the African tourism ecosystem.</p>
            </div>

            <div class="row mb-5">
                <div class="col-md-3 col-sm-6 mb-4 adtea-reveal stagger-1">
                    <div class="sector-card-2026 text-center tilt-card">
                        <div class="sector-icon-circle mx-auto">
                            <i class="fas fa-landmark text-warning"></i>
                        </div>
                        <h5 class="text-white font-weight-bold mb-2">Government & Public Sector</h5>
                        <p class="text-light small mb-0 opacity-75">Workforce development & visitor experience enhancement.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4 adtea-reveal stagger-2">
                    <div class="sector-card-2026 text-center tilt-card">
                        <div class="sector-icon-circle mx-auto">
                            <i class="fas fa-hotel text-warning"></i>
                        </div>
                        <h5 class="text-white font-weight-bold mb-2">Tourism & Industry Partners</h5>
                        <p class="text-light small mb-0 opacity-75">Connects businesses directly with frontline transport leaders.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4 adtea-reveal stagger-3">
                    <div class="sector-card-2026 text-center tilt-card">
                        <div class="sector-icon-circle mx-auto">
                            <i class="fas fa-briefcase text-warning"></i>
                        </div>
                        <h5 class="text-white font-weight-bold mb-2">Corporate Partners</h5>
                        <p class="text-light small mb-0 opacity-75">High-impact CSR/ESG engagement with tourism communities.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4 adtea-reveal stagger-4">
                    <div class="sector-card-2026 text-center tilt-card">
                        <div class="sector-icon-circle mx-auto">
                            <i class="fas fa-graduation-cap text-warning"></i>
                        </div>
                        <h5 class="text-white font-weight-bold mb-2">Education & Professional</h5>
                        <p class="text-light small mb-0 opacity-75">Knowledge exchange & industry-academia development.</p>
                    </div>
                </div>
            </div>

            <!-- Modern 2026 Modality Tag Chips -->
            <div class="text-center pt-3 adtea-reveal">
                <h4 class="font-weight-bold text-dark mb-4">We Welcome Partnerships Through:</h4>
                <div class="d-flex flex-wrap justify-content-center">
                    <span class="modality-chip-2026"><i class="fas fa-coins me-2 text-warning fs-5"></i> Financial Sponsorship</span>
                    <span class="modality-chip-2026"><i class="fas fa-handshake me-2 text-primary fs-5"></i> Strategic Partnership</span>
                    <span class="modality-chip-2026"><i class="fas fa-box-open me-2 text-success fs-5"></i> In-Kind Support</span>
                    <span class="modality-chip-2026"><i class="fas fa-cogs me-2 text-info fs-5"></i> Technical Support</span>
                    <span class="modality-chip-2026"><i class="fas fa-bullhorn me-2 text-danger fs-5"></i> Media Partnership</span>
                    <span class="modality-chip-2026"><i class="fas fa-users me-2 text-secondary fs-5"></i> Industry Collaboration</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 13: Frequently Asked Questions (Interactive 2026 Accordion) -->
    <div id="faq" class="pt-90 pb-90" style="background-color: #f8fafc;">
        <div class="container">
            <div class="section-title mb-50 text-center adtea-reveal">
                <span class="text-primary font-weight-bold text-uppercase" style="letter-spacing: 1.5px; color: #ff7b41 !important;">Questions & Answers</span>
                <h2>Frequently Asked <span class="down-mark-line-2">Questions</span></h2>
                <p class="text-muted mt-2">Everything you need to know about partnering or sponsoring ADTEA 2026.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 adtea-reveal">
                    <!-- FAQ 1 -->
                    <div class="adtea-faq-item active">
                        <div class="adtea-faq-header" onclick="toggleFaq(this);">
                            <span><i class="fas fa-question-circle text-primary me-2"></i> Who is eligible to sponsor or partner with ADTEA 2026?</span>
                            <span class="faq-icon-arrow"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="adtea-faq-body">
                            Sponsorship is open to corporate brands, airlines, financial institutions, telecom networks, automotive companies, hotel and hospitality chains, state/federal tourism boards, development agencies, and CSR foundations seeking high-visibility engagement with frontline workers and international travellers.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="adtea-faq-item">
                        <div class="adtea-faq-header" onclick="toggleFaq(this);">
                            <span><i class="fas fa-question-circle text-primary me-2"></i> Can sponsors showcase physical products or vehicles to drivers?</span>
                            <span class="faq-icon-arrow"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="adtea-faq-body">
                            Yes. Presenting, Gold, and Silver Partners receive on-site exhibition space, activation booth opportunities, and vehicle display privileges directly inside the summit arrivals corridor venue at Lagos International Airport.
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="adtea-faq-item">
                        <div class="adtea-faq-header" onclick="toggleFaq(this);">
                            <span><i class="fas fa-question-circle text-primary me-2"></i> How are the 300+ airport drivers selected and verified?</span>
                            <span class="faq-icon-arrow"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="adtea-faq-body">
                            Drivers are vetted in coordination with registered airport transport associations, accredited hotel shuttle operators, licensed ride-hailing cooperatives, and aviation terminal dispatch networks to ensure legitimate, active frontline participation.
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="adtea-faq-item">
                        <div class="adtea-faq-header" onclick="toggleFaq(this);">
                            <span><i class="fas fa-question-circle text-primary me-2"></i> What media and PR visibility will our brand receive?</span>
                            <span class="faq-icon-arrow"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="adtea-faq-body">
                            Sponsors will be featured in pre-event press releases, national aviation and tourism industry coverage, branded participant delegate packs, stage backdrop banners, digital post-event documentary reels, and an official CSR impact report.
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="adtea-faq-item">
                        <div class="adtea-faq-header" onclick="toggleFaq(this);">
                            <span><i class="fas fa-question-circle text-primary me-2"></i> What is the official invoice and payment procedure?</span>
                            <span class="faq-icon-arrow"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="adtea-faq-body">
                            Organizations can request an official partnership invoice by submitting the inquiry form below or contacting the secretariat directly. Payments are processed securely into the official Tourism Afrikania corporate account with United Bank for Africa (UBA).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 16: Official Bank Account & Contact Card -->
    <div id="payment-details" class="pt-90 pb-90" style="background-color: #f8fafc; scroll-margin-top: 130px;">
        <div class="container">
            <div class="section-title mb-50 text-center adtea-reveal">
                <span class="text-primary font-weight-bold text-uppercase" style="letter-spacing: 1.5px; color: #ff7b41 !important;">Section 16</span>
                <h2>Official Secretariat & <span class="down-mark-line-2">Bank Details</span></h2>
                <p class="text-muted mt-2">Verified corporate account coordinates and direct convener secretariat for partner remittance.</p>
            </div>

            <div class="row align-items-stretch">
                <!-- Left: Official Organiser & Secretariat Details -->
                <div class="col-lg-6 mb-4 adtea-reveal stagger-1">
                    <div class="card-2026 p-4 p-lg-5 h-100 tilt-card" style="border-top: 5px solid #ff7b41; background: #ffffff;">
                        <div class="d-flex align-items-center mb-4">
                            <div class="adtea-icon-box icon-box-amber me-3">
                                <i class="fas fa-building"></i>
                            </div>
                            <div>
                                <span class="adtea-badge adtea-badge-orange mb-1">
                                    <i class="fas fa-certificate me-1"></i> Summit Convener
                                </span>
                                <h3 class="font-weight-bold mb-0" style="color: #0b1b3d; font-size: 1.45rem;">Tourism Afrikania</h3>
                            </div>
                        </div>

                        <p class="text-secondary small mb-4" style="line-height: 1.7; font-size: 0.95rem;">
                            <em>African Global Brand Promoting Hospitality & Tourism Education</em>, in partnership with <strong>AHTES (African Hospitality & Tourism Education Summit)</strong>.
                        </p>

                        <div class="contact-detail-list">
                            <div class="d-flex align-items-start mb-3 p-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                                <div class="me-3 mt-1 text-warning" style="font-size: 1.15rem;">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <small class="text-muted text-uppercase font-weight-bold d-block" style="font-size: 0.72rem; letter-spacing: 0.5px;">Headquarters Address</small>
                                    <span class="font-weight-bold" style="color: #1e293b; font-size: 0.92rem;">No. 8 Onobanjo Street, off Sterling Bank, Oworoshoki, Kosofe, Lagos, Nigeria</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-3 p-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                                <div class="me-3 mt-1 text-primary" style="font-size: 1.15rem;">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <small class="text-muted text-uppercase font-weight-bold d-block" style="font-size: 0.72rem; letter-spacing: 0.5px;">Official Email</small>
                                    <a href="mailto:info@tourismafrikanianig.com" class="font-weight-bold" style="color: #0b1b3d; font-size: 0.95rem; text-decoration: none;">info@tourismafrikanianig.com</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-3 p-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                                <div class="me-3 mt-1 text-success" style="font-size: 1.15rem;">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <small class="text-muted text-uppercase font-weight-bold d-block" style="font-size: 0.72rem; letter-spacing: 0.5px;">Secretariat Phone / Hotline</small>
                                    <a href="tel:+2347062081248" class="font-weight-bold" style="color: #0b1b3d; font-size: 0.95rem; text-decoration: none;">+234 706 208 1248</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-start p-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                                <div class="me-3 mt-1 text-info" style="font-size: 1.15rem;">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div>
                                    <small class="text-muted text-uppercase font-weight-bold d-block" style="font-size: 0.72rem; letter-spacing: 0.5px;">Official Web Portal</small>
                                    <a href="https://www.tourismafrikanianig.com" target="_blank" class="font-weight-bold" style="color: #0b1b3d; font-size: 0.95rem; text-decoration: none;">www.tourismafrikanianig.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Official Partnership Payment Account -->
                <div class="col-lg-6 mb-4 adtea-reveal stagger-2">
                    <div class="card-2026 p-4 p-lg-5 h-100 tilt-card" style="border-top: 5px solid #10b981; background: #ffffff;">
                        <div class="d-flex align-items-center mb-4">
                            <div class="adtea-icon-box icon-box-emerald me-3">
                                <i class="fas fa-university"></i>
                            </div>
                            <div>
                                <span class="adtea-badge adtea-badge-success mb-1">
                                    <i class="fas fa-shield-alt me-1"></i> Verified Naira Account
                                </span>
                                <h3 class="font-weight-bold mb-0" style="color: #0b1b3d; font-size: 1.45rem;">Partnership Remittance</h3>
                            </div>
                        </div>

                        <div class="mb-4">
                            <small class="text-muted d-block text-uppercase font-weight-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Designated Financial Institution</small>
                            <h4 class="font-weight-bold mb-0" style="color: #0b1b3d; font-size: 1.35rem;">UBA (United Bank for Africa)</h4>
                        </div>

                        <!-- Account Highlight Box with Animated Glow -->
                        <div class="adtea-bank-box p-4 rounded-4 mb-4" style="background: linear-gradient(135deg, #0b1b3d 0%, #152e5a 100%); color: #ffffff; box-shadow: 0 12px 28px rgba(11,27,61,0.25); position: relative; overflow: hidden;">
                            <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: radial-gradient(circle, rgba(255,123,65,0.3) 0%, transparent 70%); border-radius: 50%;"></div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <small class="text-uppercase font-weight-bold" style="color: #ff9d6c; font-size: 0.75rem; letter-spacing: 0.8px;">
                                    <i class="fas fa-lock me-1"></i> Official Corporate Account
                                </small>
                                <span class="badge" style="background: rgba(16, 185, 129, 0.2); color: #34d399; font-size: 0.72rem; border: 1px solid rgba(16,185,129,0.3);">
                                    Active &bull; NGN
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 my-2">
                                <div>
                                    <h2 class="font-weight-bold mb-0" id="adtea-acc-num" style="letter-spacing: 3px; color: #ffffff; font-size: 2.1rem; font-family: monospace;">1022266397</h2>
                                </div>
                                <button type="button" class="btn btn-sm font-weight-bold px-3 py-2 shadow-sm" id="btn-copy-account" onclick="copyAccountNumber();" style="background: #ff7b41; color: #ffffff; border: none; border-radius: 8px; transition: all 0.25s ease;">
                                    <i class="fas fa-copy me-1"></i> Copy
                                </button>
                            </div>

                            <div class="pt-2 border-top" style="border-color: rgba(255,255,255,0.15) !important;">
                                <small class="d-block" style="color: rgba(255,255,255,0.7); font-size: 0.75rem;">Account Beneficiary Name</small>
                                <div class="font-weight-bold" style="color: #ffffff; font-size: 1.05rem;">Tourism Afrikania</div>
                            </div>
                        </div>

                        <div class="p-3 rounded-3" style="background: #ecfdf5; border: 1px solid rgba(16,185,129,0.25);">
                            <div class="d-flex align-items-center text-success font-weight-bold small mb-1">
                                <i class="fas fa-check-circle me-2"></i> Official Summit Settlement Coordinates
                            </div>
                            <small class="text-muted d-block" style="line-height: 1.5; font-size: 0.8rem;">
                                Payments can be made directly via online bank transfer, NIBSS Instant Payment, or corporate cheque. Please reference "ADTEA 2026 - [Your Organization]" when initiating remittance.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.partials.adtea-registration-form')


    <!-- Section 16: Sponsorship Request Form -->
    <div id="sponsor-inquiry" class="pt-90 pb-100" style="background-color: #f8fafc; scroll-margin-top: 130px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 adtea-reveal">
                    <div class="card-2026 p-4 p-md-5 border-0 shadow-lg">
                        <div class="text-center mb-4">
                            <span class="adtea-badge adtea-badge-orange mb-2">
                                <i class="fas fa-paper-plane me-1"></i> Get In Touch
                            </span>
                            <h2 class="font-weight-bold text-dark mt-1">ADTEA 2026 Partnership Inquiry</h2>
                            <p class="text-muted">Fill out the form below to connect with Tourism Afrikania or request the official sponsorship proposal package.</p>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success rounded-3 p-3 mb-4 d-flex align-items-center">
                                <i class="fas fa-check-circle fa-lg text-success me-2"></i>
                                <div>{{ session('success') }}</div>
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

                        <form action="{{ route('adtea.inquiry.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-bold text-dark">Full Name / Organization</label>
                                    <input type="text" name="name" class="form-control form-control-lg rounded-3" placeholder="Your Name or Company" required style="border-color: #e2e8f0;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-bold text-dark">Email Address</label>
                                    <input type="email" name="email" class="form-control form-control-lg rounded-3" placeholder="name@company.com" required style="border-color: #e2e8f0;">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-bold text-dark">Phone Number</label>
                                    <input type="text" name="phone" class="form-control form-control-lg rounded-3" placeholder="+234 800 000 0000" required style="border-color: #e2e8f0;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-bold text-dark">Investment Tier / Category</label>
                                    <select name="type" id="partnershipTierSelect" class="form-select form-control form-control-lg rounded-3" style="border-color: #e2e8f0;">
                                        <option value="Presenting Partner (₦5,000,000)">Presenting Partner (₦5,000,000)</option>
                                        <option value="Gold Partner (₦2,000,000)">Gold Partner (₦2,000,000)</option>
                                        <option value="Silver Partner (₦1,000,000)">Silver Partner (₦1,000,000)</option>
                                        <option value="Supporting Partner (₦500,000)">Supporting Partner (₦500,000)</option>
                                        <option value="Community Partner (₦250,000)">Community Partner (₦250,000)</option>
                                        <option value="In-Kind / Strategic Partner">In-Kind / Strategic Partner</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label font-weight-bold text-dark">Message / Partnership Details</label>
                                <textarea name="message" class="form-control form-control-lg rounded-3" rows="4" placeholder="Tell us how you would like to support or partner with ADTEA..." style="border-color: #e2e8f0;"></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="adtea-btn-hero-primary px-5 py-3 font-weight-bold shadow" style="border: none; border-radius: 12px; cursor: pointer;">
                                    <i class="fas fa-paper-plane me-2"></i> Submit Partnership Request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // 1. Particle Constellation Canvas in Hero
            initHeroParticles();

            // 2. Countdown Timer to 1st December 2026
            initCountdown();

            // 3. Smooth Scroll-Triggered Reveal Animations using IntersectionObserver
            const revealElements = document.querySelectorAll('.adtea-reveal');
            if ('IntersectionObserver' in window) {
                const revealObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-revealed');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    root: null,
                    threshold: 0.1,
                    rootMargin: '0px 0px -40px 0px'
                });

                revealElements.forEach(el => revealObserver.observe(el));
            } else {
                revealElements.forEach(el => el.classList.add('is-revealed'));
            }

            // 4. Animated Counter Numbers
            const counters = document.querySelectorAll('.counter-val');
            let countersStarted = false;
            function startCounters() {
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const duration = 1800; // ms
                    const startTime = performance.now();

                    function updateCount(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const easeOut = 1 - Math.pow(1 - progress, 3);
                        const current = Math.floor(easeOut * target);

                        counter.innerText = current.toLocaleString();

                        if (progress < 1) {
                            requestAnimationFrame(updateCount);
                        } else {
                            counter.innerText = target.toLocaleString();
                        }
                    }
                    requestAnimationFrame(updateCount);
                });
            }

            if ('IntersectionObserver' in window && counters.length > 0) {
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && !countersStarted) {
                            countersStarted = true;
                            startCounters();
                        }
                    });
                }, { threshold: 0.2 });

                counters.forEach(counter => counterObserver.observe(counter));
            }

            // 5. Subtle 3D Card Hover Tilt Effect for Featured Cards (only on hoverable devices)
            if (window.matchMedia('(hover: hover)').matches) {
                const tiltCards = document.querySelectorAll('.tilt-card');
                tiltCards.forEach(card => {
                    let bounds;
                    function rotateToMouse(e) {
                        const mouseX = e.clientX;
                        const mouseY = e.clientY;
                        const leftX = mouseX - bounds.x;
                        const topY = mouseY - bounds.y;
                        const center = {
                            x: leftX - bounds.width / 2,
                            y: topY - bounds.height / 2
                        };

                        card.style.transform = `
                            perspective(1000px)
                            rotateX(${-(center.y / bounds.height) * 8}deg)
                            rotateY(${(center.x / bounds.width) * 8}deg)
                            translateY(-6px)
                            scale3d(1.015, 1.015, 1.015)
                        `;
                    }

                    card.addEventListener('mouseenter', () => {
                        bounds = card.getBoundingClientRect();
                        card.style.transition = 'transform 0.12s ease-out, box-shadow 0.3s ease';
                        document.addEventListener('mousemove', rotateToMouse);
                    });

                    card.addEventListener('mouseleave', () => {
                        document.removeEventListener('mousemove', rotateToMouse);
                        card.style.transition = 'transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease';
                        card.style.transform = '';
                    });
                });
            }

            // 6. Scroll Progress and Back-to-Top Button
            const backToTopBtn = document.getElementById('adteaBackToTop');
            const progressCircle = document.getElementById('scrollProgressCircle');
            const totalDash = 132;

            window.addEventListener('scroll', function () {
                const scrollTop = window.scrollY || document.documentElement.scrollTop;
                const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrollFraction = scrollHeight > 0 ? scrollTop / scrollHeight : 0;

                if (scrollTop > 400) {
                    backToTopBtn.classList.add('visible');
                } else {
                    backToTopBtn.classList.remove('visible');
                }

                if (progressCircle) {
                    const offset = totalDash - (scrollFraction * totalDash);
                    progressCircle.style.strokeDashoffset = offset;
                }

                // Update Active Quick Nav Link
                updateQuickNavActive();
            }, { passive: true });

            // Initialize Campaign Swiper Carousel
            initCampaignSlider();
        });

        // 7. Particle Constellation Canvas Implementation
        function initHeroParticles() {
            const canvas = document.getElementById('hero-particles-canvas');
            if (!canvas) return;
            const ctx = canvas.getContext('2d');
            let width, height;
            let particles = [];
            const particleCount = 42;

            function resize() {
                width = canvas.width = canvas.parentElement.offsetWidth;
                height = canvas.height = canvas.parentElement.offsetHeight;
            }
            resize();
            window.addEventListener('resize', resize);

            class Particle {
                constructor() {
                    this.x = Math.random() * width;
                    this.y = Math.random() * height;
                    this.vx = (Math.random() - 0.5) * 0.7;
                    this.vy = (Math.random() - 0.5) * 0.7;
                    this.radius = Math.random() * 2 + 1;
                    this.alpha = Math.random() * 0.5 + 0.2;
                }
                update() {
                    this.x += this.vx;
                    this.y += this.vy;
                    if (this.x < 0 || this.x > width) this.vx *= -1;
                    if (this.y < 0 || this.y > height) this.vy *= -1;
                }
                draw() {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(255, 123, 65, ${this.alpha})`;
                    ctx.fill();
                }
            }

            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }

            function animate() {
                ctx.clearRect(0, 0, width, height);

                for (let i = 0; i < particles.length; i++) {
                    particles[i].update();
                    particles[i].draw();

                    for (let j = i + 1; j < particles.length; j++) {
                        const dx = particles[i].x - particles[j].x;
                        const dy = particles[i].y - particles[j].y;
                        const dist = Math.sqrt(dx * dx + dy * dy);

                        if (dist < 110) {
                            ctx.beginPath();
                            ctx.moveTo(particles[i].x, particles[i].y);
                            ctx.lineTo(particles[j].x, particles[j].y);
                            ctx.strokeStyle = `rgba(255, 255, 255, ${0.15 * (1 - dist / 110)})`;
                            ctx.lineWidth = 0.8;
                            ctx.stroke();
                        }
                    }
                }
                requestAnimationFrame(animate);
            }
            animate();
        }

        // 8. Countdown Timer to 1st December 2026
        function initCountdown() {
            const targetDate = new Date('December 1, 2026 09:00:00 GMT+0100').getTime();

            function update() {
                const now = new Date().getTime();
                const difference = targetDate - now;

                if (difference > 0) {
                    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const mins = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                    const secs = Math.floor((difference % (1000 * 60)) / 1000);

                    const dEl = document.getElementById('cd-days');
                    const hEl = document.getElementById('cd-hours');
                    const mEl = document.getElementById('cd-mins');
                    const sEl = document.getElementById('cd-secs');

                    if (dEl) dEl.innerText = days < 10 ? '0' + days : days;
                    if (hEl) hEl.innerText = hours < 10 ? '0' + hours : hours;
                    if (mEl) mEl.innerText = mins < 10 ? '0' + mins : mins;
                    if (sEl) sEl.innerText = secs < 10 ? '0' + secs : secs;
                }
            }
            update();
            setInterval(update, 1000);
        }

        // 9. Copy Account Number with Animated Ripple Feedback
        function copyAccountNumber() {
            const accNum = '1022266397';
            const btn = document.getElementById('btn-copy-account');
            navigator.clipboard.writeText(accNum).then(() => {
                btn.classList.remove('btn-outline-secondary');
                btn.classList.add('btn-success');
                btn.innerHTML = '<i class="fas fa-check me-1"></i> Copied!';
                btn.style.transform = 'scale(1.08)';

                setTimeout(() => {
                    btn.classList.remove('btn-success');
                    btn.classList.add('btn-outline-secondary');
                    btn.innerHTML = '<i class="fas fa-copy me-1"></i> Copy';
                    btn.style.transform = 'scale(1)';
                }, 2200);
            }).catch(err => {
                console.error('Clipboard copy error:', err);
            });
        }

        // 10. Filter Sponsorship Tiers (All, Executive, Community)
        function filterTiers(category, btn) {
            document.querySelectorAll('.tier-filter-btn').forEach(b => b.classList.remove('active'));
            if (btn) btn.classList.add('active');

            const execRow = document.getElementById('executive-tiers-row');
            const commRow = document.getElementById('community-tiers-row');

            if (category === 'executive') {
                if (execRow) execRow.style.display = 'flex';
                if (commRow) commRow.style.display = 'none';
            } else if (category === 'community') {
                if (execRow) execRow.style.display = 'none';
                if (commRow) commRow.style.display = 'flex';
            } else {
                if (execRow) execRow.style.display = 'flex';
                if (commRow) commRow.style.display = 'flex';
            }
        }

        // 11. Select Tier and Smooth Scroll to Form
        function selectTierAndScroll(tierName) {
            const selectEl = document.getElementById('partnershipTierSelect');
            const inquirySection = document.getElementById('sponsor-inquiry');

            if (selectEl) {
                selectEl.value = tierName;
                selectEl.classList.add('tier-highlight-active');
                setTimeout(() => {
                    selectEl.classList.remove('tier-highlight-active');
                }, 2500);
            }

            if (inquirySection) {
                inquirySection.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // 12. FAQ Accordion Toggle
        function toggleFaq(headerEl) {
            const item = headerEl.parentElement;
            const wasActive = item.classList.contains('active');

            document.querySelectorAll('.adtea-faq-item').forEach(el => {
                el.classList.remove('active');
            });

            if (!wasActive) {
                item.classList.add('active');
            }
        }

        // 13. Update Quick Nav Active Item on Scroll
        function updateQuickNavActive() {
            const sections = document.querySelectorAll('div[id]');
            const scrollPos = window.scrollY + 160;

            sections.forEach(section => {
                const top = section.offsetTop;
                const height = section.offsetHeight;
                const id = section.getAttribute('id');
                const link = document.querySelector(`.quick-nav-pills a[href="#${id}"]`);

                if (link && scrollPos >= top && scrollPos < top + height) {
                    document.querySelectorAll('.quick-nav-pills a').forEach(l => l.classList.remove('active'));
                    link.classList.add('active');
                    // Smoothly keep active pill visible inside mobile swipeable container
                    if (window.innerWidth <= 991) {
                        link.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                    }
                }
            });
        }

        // 14. ADTEA Visual Campaign Swiper Slider & Lightbox
        let adteaSwiperInstance = null;
        let adteaSliderPlaying = true;
        const adteaSlideData = [
            { img: '/1.1.png', tag: 'Poster 01 of 07', title: 'Together We Create A Stronger Airport Experience' },
            { img: '/1.2.png', tag: 'Poster 02 of 07', title: '1st Dec 2026 Summit Launch in Lagos' },
            { img: '/1.3.png', tag: 'Poster 03 of 07', title: 'Drivers Can Do More Than Drive — Ambassadors' },
            { img: '/1.4.png', tag: 'Poster 04 of 07', title: 'The Crucial First 15 Minutes From The Airport' },
            { img: '/1.5.png', tag: 'Poster 05 of 07', title: 'Airport Drivers As Tourist Destination Ambassadors' },
            { img: '/1.6.png', tag: 'Poster 06 of 07', title: 'Are You Ready To Become A Tourism Ambassador?' },
            { img: '/1.7.png', tag: 'Poster 07 of 07', title: 'World-Class Airport Fleet & Driver Uniform Standards' }
        ];
        let currentLightboxIndex = 0;

        function initCampaignSlider() {
            const swiperEl = document.querySelector('.adtea-campaign-swiper');
            if (!swiperEl || typeof Swiper === 'undefined') return;

            adteaSwiperInstance = new Swiper('.adtea-campaign-swiper', {
                slidesPerView: 1.15,
                spaceBetween: 16,
                loop: true,
                speed: 700,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: '.adtea-swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: '.adtea-swiper-next',
                    prevEl: '.adtea-swiper-prev',
                },
                breakpoints: {
                    576: {
                        slidesPerView: 2.15,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 25,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 28,
                    }
                },
                on: {
                    slideChange: function() {
                        const counter = document.getElementById('adtea-slide-counter');
                        if (counter) {
                            counter.innerText = (this.realIndex + 1) + ' / ' + adteaSlideData.length;
                        }
                    }
                }
            });
        }

        function toggleAdteaSliderAutoplay() {
            if (!adteaSwiperInstance || !adteaSwiperInstance.autoplay) return;
            const btn = document.getElementById('adteaPlayPauseBtn');
            if (adteaSliderPlaying) {
                adteaSwiperInstance.autoplay.stop();
                adteaSliderPlaying = false;
                if (btn) btn.innerHTML = '<i class="fas fa-play"></i> <span>Play</span>';
            } else {
                adteaSwiperInstance.autoplay.start();
                adteaSliderPlaying = true;
                if (btn) btn.innerHTML = '<i class="fas fa-pause"></i> <span>Pause</span>';
            }
        }

        function openAdteaLightbox(index) {
            currentLightboxIndex = index;
            updateLightboxContent();
            const modal = document.getElementById('adteaLightboxModal');
            if (modal) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeAdteaLightbox() {
            const modal = document.getElementById('adteaLightboxModal');
            if (modal) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        function changeLightboxSlide(direction) {
            currentLightboxIndex = (currentLightboxIndex + direction + adteaSlideData.length) % adteaSlideData.length;
            updateLightboxContent();
        }

        function updateLightboxContent() {
            const data = adteaSlideData[currentLightboxIndex];
            const img = document.getElementById('adteaLightboxImg');
            const tag = document.getElementById('adteaLightboxTag');
            const title = document.getElementById('adteaLightboxTitle');

            if (img) img.src = data.img;
            if (tag) tag.innerText = data.tag;
            if (title) title.innerText = data.title;
        }

        function handleLightboxBackdrop(e) {
            if (e.target.id === 'adteaLightboxModal') {
                closeAdteaLightbox();
            }
        }

        // Keyboard events for lightbox
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('adteaLightboxModal');
            if (!modal || !modal.classList.contains('active')) return;

            if (e.key === 'Escape') closeAdteaLightbox();
            if (e.key === 'ArrowLeft') changeLightboxSlide(-1);
            if (e.key === 'ArrowRight') changeLightboxSlide(1);
        });

        @include('frontend.partials.adtea-registration-scripts')
    </script>
@endpush
