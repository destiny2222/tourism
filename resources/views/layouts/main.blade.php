@php
    $getCategory = App\Models\CourseCategory::select('id', 'name', 'slug')->get();
@endphp

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('head') - Tourism Afrikania</title>
    <link rel="pingback" href="https://tourismafrikania.net/xmlrpc.php">
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='Ahtes' />
    <link rel='dns-prefetch' href='Ahtes' />
    <meta name="author" content="Dexnovate">
    <link rel="alternate" type="application/rss+xml" title="TourismAfrikania &raquo; Feed"
        href="https://tourismafrikanianig.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="TourismAfrikania &raquo; Comments Feed"
        href="https://tourismafrikanianig.com/comments/feed/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Tourism Afrikania is an African Global Hospitality and Tourism
    Management brand dedicated to promoting hospitality and tourism
    education in Africa. We aim to enable African economic growth by
    helping business owners achieve their profitability goals through career
    mentorship, training, marketing solutions, and general travel, tourism,
    and hotel management. Our initiatives bring together secondary and
    tertiary students, travel agencies, tour operators, airlines, hotels,
    hospitality vendors, CEOs, hotel managers, and industry enthusiasts for
    tourism mentorship and career guidance in travel, hospitality, and
    tourism management as an academic field.">
    <meta name="keywords"
        content="Ahtes,tertiary students, travel agencies, tour operators, airlines, hotels,
    hospitality vendors, CEOs, hotel managers,tourism, tourism and hospitality management, African Hospitality and Tourism Education Summit
African Hospitality and Tourism Education Summit,Tourism Education Summit,Hospitality And Tourism Summit,African Hospitality and Tourism Education Summit,Tourism Afrikania">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://www.tourismafrikanianig.com/assets/img/logo/preloader.png">
    <meta property="og:image" content="https://www.tourismafrikanianig.com/assets/img/logo/preloader.png" />
    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/css/preloader.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    {!! NoCaptcha::renderJs() !!}
    <style>
        .invalid {
            border-color: red;
        }
        /* Bi-directional Scroll Reveal Animations (Scroll Down & Scroll Up) */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(35px);
            transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1), transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1), transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal-right {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1), transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal-zoom {
            opacity: 0;
            transform: scale(0.92);
            transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1), transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal-active {
            opacity: 1 !important;
            transform: translateY(0) translateX(0) scale(1) !important;
        }
    </style>
</head>

<body>


    <!-- header-area -->
    @yield('header-area')
    <!-- header-area-end -->

    <!-- main-area -->
    <main>
        @yield('content')
    </main>
    <!-- main-area-end -->

    <!-- footer area start -->
    <!-- footer-area-start -->
    <footer>
        <div class="footer-area pt-100">
            <div class="container">
                <div class="footer-main">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget f-w1 mb-40">
                                <div class="footer-img">
                                    <a href="/"> <img width="100" src="/assets/img/logo/footer-logo.png"
                                            alt="footer-logo"></a>
                                    <p>Tourism Afrikania is an African Global Hospitality and Tourism Management brand
                                        dedicated to promoting hospitality and tourism education in Africa</p>
                                </div>
                                <div class="footer-icon">
                                    <a href="https://www.facebook.com/profile.php?id=100069358551177"><i
                                            class="fab fa-facebook-f"></i></a>
                                    {{-- <a href="#"><i class="fab fa-twitter"></i></a> --}}
                                    <a href="https://www.instagram.com/tourism_afrikania/"><i
                                            class="fab fa-instagram"></i></a>
                                    <a
                                        href="https://www.linkedin.com/in/african-hospitality-and-tourism-education-summit-2b3591301/">
                                        <i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget f-w2 mb-40">
                                <h3>Quick link</h3>
                                <div class="">
                                    <ul>
                                        <li><a href='/about'>About us</a></li>
                                        <li><a href="/buildafrika">Build Afrika Winners</a></li>
                                        <li><a href='/service'>Service</a></li>
                                        <li><a href='/event'>Event</a></li>
                                        <li><a href='/blog'>Blog</a></li>
                                        <li><a href="{{ route('adtea-page') }}">Airport Drivers Ambassador</a></li>
                                        <li><a href="/community">Community</a></li>
                                        <li><a href="/gallery">Gallery</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget f-w3 mb-40">
                                <h3>Browse Courses</h3>
                                <ul>
                                    @foreach ($getCategory as $key => $item)
                                        <li><a href='{{ route('courses.showByCategory', $item->slug) }}'
                                                class="text-capitalize">{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->



    <!-- JS here -->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script  src="/assets/js/meanmenu.js"></script>
    <script  src="/assets/js/swiper-bundle.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script  src="/assets/js/counterup.min.js"></script>
    <!-- Owl Carousel JS -->
    <script  src="/assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 50,
                    easing: 'ease-in-out'
                });
            }
        });
    </script>
    <script>
        const preLoader = document.getElementById('loading');
        if (preLoader) {
            window.addEventListener('load', function() {
                setTimeout(() => {
                    preLoader.style.display = 'none';
                }, 300);
            });
        }
    </script>
    <script>
        if ($("#partner-slider-area").length) {
            $("#partner-slider-area").owlCarousel({
                autoplayHoverPause: true,
                autoplaySpeed: 1500,
                autoplay: true,
                loop: true,
                dots: false,
                margin: 30,
                responsive: {
                    0: { items: 2 },
                    576: { items: 2 },
                    768: { items: 4 },
                    992: { items: 5 },
                    1200: { items: 6 },
                },
            });
        }
    </script>
    <script>
        const modalOverlay = document.getElementById('modalOverlay');
        if (modalOverlay) {
            window.addEventListener('load', () => {
                setTimeout(() => {
                    modalOverlay.classList.add('active');
                }, 3000);
            });
            modalOverlay.addEventListener('click', (e) => {
                if (e.target === modalOverlay) {
                    closeModal();
                }
            });
        }

        function closeModal() {
            const m = document.getElementById('modalOverlay');
            if (m) m.style.display = 'none';
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observerOptions = {
                root: null,
                rootMargin: "0px 0px -30px 0px",
                threshold: 0.1
            };

            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("reveal-active");
                    } else {
                        const rect = entry.target.getBoundingClientRect();
                        if (rect.top > window.innerHeight || rect.bottom < 0) {
                            entry.target.classList.remove("reveal-active");
                        }
                    }
                });
            }, observerOptions);

            document.querySelectorAll(".reveal-on-scroll, .reveal-left, .reveal-right, .reveal-zoom").forEach(el => {
                revealObserver.observe(el);
            });
        });
    </script>
    @stack('scripts')
    @include('partials.message')
    @include('vendor.sweetalert.alert')
</body>

</html>
