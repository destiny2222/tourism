@extends('layouts.main')
@section('head', 'About Us')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'About Us')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->

    <!-- about area start -->
    <section class="about__area pt-120 pb-120 p-relative">
        <div class="container">
           <div class="row">
           <div class="col-xxl-5 col-xl-5 col-lg-5">
                  <div class="student-choose-wrapper position-relative mb-30">
                     
                     <div class="shap-03">
                        <img src="assets/img/shape/student-shape-03.png" alt="image not found">
                     </div>
                     <div class="shap-05">
                        <img src="assets/img/shape/student-shape-05.png" alt="image not found">
                     </div>
                     <div class="row g-3">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <img src="/about4.png" class="img-fluid small-img" alt="Small Image 1">
                                </div>
                                <div class="col-12 mt-3">
                                    <img src="/about2.jpg" class="img-fluid small-img" alt="Small Image 2">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="/mike.jpg" class="img-fluid large-img d-none d-lg-block" alt="Large Image">
                        </div>
                    </div>
                  </div>
               </div>
              <div class="col-xxl-7 col-xl-7 col-lg-7">
                 <div class="about__content">
                    <div class="section__title-wrapper mb-15">
                       <span class="section__title-pre">Meet</span>
                       <h2 class="section__title">The Founder</h2>
                    </div>
                    <p>
                        Mike Chimezie is an astute and passionate Hospitality and Tourism Education Promoter. A graduate of Hospitality and Tourism Management from the Prestigious University of Port Harcourt (UNIPORT), Mike serves as the Chief Editor,Diplomats Magazine; a sessional quarterly magazine for the Hospitality and Tourism Management Department of the Faculty of Management Sciences,UNIPORT. A vibrant Departmental Students President in his under graduate days, Mike currently run a Leisure and Tourism Management Masters Programme (in view) and have in his kitty several professional certifications and membership.
                    </p>
                    <p>
                        He is a Travel Agency Management Graduate at Aeroport College of Aviation and
                       Travel Management, UNSDG Certified Member, Professional Member, Hospitality
                       and Tourism Management Association of Nigeria, Graduate Member, Nigeria
                       Institute of Management, Trained Hospitality Distribution and Revenue Manager
                       by Institute of Hospitality UK-Nigeria, a bonafide member of the FCT Tourism
                       Volunteers Network and a certified Human Resources Professional.
                       Mike is the Co-Founder of Tourism Afrikania, a global Hospitality and Tourism
                       Management brand that Promotes Hospitality and Tourism Education on Africa.
                       He is Proudly Nigerian.
                    </p>
                    <span><b>Amb. Chimezie Mike</b> <br> <span class="text-warning">Convener - AHTES 2024</span></span>
                 </div>
              </div>
           </div>
        </div>
    </section>
    <!-- about area end -->


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about__content py-5">
                        <h2 class="text-center">ABOUT AHTES</h2>
                        <p >
                            The African Hospitality and Tourism Education Summit (AHTES) is a premier platform dedicated to advancing innovation, capacity building, and excellence in hospitality and tourism education across Africa. 
                        </p>
                        <p >
                            Registered with the Federal Ministry of Trade and Investment and recognized by major agencies and institutions in Nigeria and beyond, AHTES is committed to promoting standardized hospitality and tourism education. 
                        </p>
                        <p >
                            Our mission is to promote, recognize, and connect students to standard hospitality and tourism institutions, including aviation schools and culinary schools, ensuring they bring value to African hospitality and tourism businesses for sustainable economic development.
                        </p>
                        <p >
                            AHTES inspires investment in educational innovations, drives institutional growth, and establishes connections between academia and industry for business development and solutions through research and development. We also identify and promote hospitality and tourism talents by organizing competitions that foster business innovations and practical solutions.  

                            We are passionate about producing well-equipped hospitality and tourism graduates who will boldly champion business solutions and drive Africa’s economic transformation. 
                        </p>
                        <p >
                            Join us in shaping the future of hospitality and tourism excellence in Africa! 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- course area start -->
     <section class="course__area  pb-90 grey-bg-3">
        <div class="container">
           <div class="row">
              <div class="col-xxl-12">
                 <div class="section__title-wrapper text-center mb-60">
                    <span class="section__title-pre">Mission & goal</span>
                    <h2 class="section__title section__title-44">Our Mandate</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6">
                          <div class="blog-wrapper transition-3 position-relative mb-30">
                             <div class="blog-content-wrapper">
                                <div class="blog-content">
                                <h2 class="course__title" style="font-size: 40px;color:;">
                                    Our Vission
                                </h2>
                                   <p>
                                      To be the leading platform driving innovation, knowledge, and global opportunities in hospitality , aviation,travel and tourism education across africa.  
                                    </p>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-xl-6 col-lg-6 col-md-6">
                          <div class="blog-wrapper transition-3 position-relative mb-30">
                             <div class="blog-content-wrapper">
                                <div class="blog-content">
                                <h2 class="course__title" style="font-size: 40px;color:;">
                                    Mission
                                </h2>
                                   <p>
                                      To connect participants with leading institutions in hospitality, aviation ,travel , and tourism . Through mentorshiip , career developemt opportunities , and community enagement, AHTES and Tourism Afrikania advance hospitality and tourism education as a viable and rewarding career path.
                                    </p>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-xl-6 col-lg-6 col-md-6">
                          <div class="blog-wrapper position-relative mb-30">
                             <div class="blog-content-wrapper">
                                <div class="blog-content">
                                <h2 class="course__title" style="font-size: 40px;color:;">
                                    Goal
                                </h2>
                                   <p>
                                    Our overarching goal is to establish a prominent presence within
                                    educational institutions offering hospitality and tourism programs
                                    across Africa. We aspire to expand the reach of our Build Afrika
                                    Career Contest to engage a wider audience and provide
                                    comprehensive training and mentorship to students seeking
                                    technical expertise within the industry. Furthermore, we strive to
                                    create an enabling environment for students to apply and refine the
                                    skills they acquire, ultimately bridging the talent gap in the
                                    hospitality and tourism industry. Through initiatives like the African
                                    Hospitality and Tourism Education Summit - Project Build Afrika, we
                                    aim to mentor and nurture potential employees and entrepreneurs,
                                    facilitating their development and contributing to the growth and
                                    success of the industry.</p>
                                </div>
                             </div>
                          </div>
                       </div>
           </div>
        </div>
     </section>
     <!-- course area end -->


     <section class="research__area pt-60 pb-60">
        <div class="container">
           <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 ">
                    <div class="research__wrapper-2  pb-30">
                        <div class="section__title-wrapper-2">
                            <h3 class="section__title-2">Build Afrika Hospitality and Tourism Competitions:</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 ">
                    <div class="blog-wrapper position-relative mb-30">
                                <div class="blog-content-wrapper">
                                    <div class="blog-content">
                                    <h4 class="course__title" >
                                    <span class="mr-20">
                                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 13.9961V15.1656C26 19.8436 24.8875 21 20.45 21H6.55C2.1125 21 1 19.8305 1 15.1656V6.83443C1 2.16951 2.1125 1 6.55 1H8.5" stroke="#6151FB" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13.5 21.5V25.5" stroke="#6151FB" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1 14.75H26" stroke="#6151FB" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M7.875 26H19.125" stroke="#6151FB" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M20.825 10.2127H14.875C13.15 10.2127 12.575 9.0627 12.575 7.9127V3.5127C12.575 2.1377 13.7 1.0127 15.075 1.0127H20.825C22.1 1.0127 23.125 2.0377 23.125 3.31269V7.9127C23.125 9.1877 22.1 10.2127 20.825 10.2127Z" stroke="#6151FB" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M24.6375 8.39985L23.125 7.33735V3.88735L24.6375 2.82485C25.3875 2.31235 26 2.62485 26 3.53735V7.69985C26 8.61235 25.3875 8.92485 24.6375 8.39985Z" stroke="#6151FB" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>                              
                                    </span>
                                        2020 Achievements 
                                    </h4>
                                    <p>
                                    In 2020, Oyesomi Fatimah, a student of the Department of
                                        Hospitality and Tourism Management at the Federal University
                                        Oye Ekiti (FUOYE), emerged as the winner of the Build Africa 2020
                                        Career Presentation Competition. She won a cash prize of
                                        N100,000 and free UK Institute of Hospitality student
                                        membership registration. The competition was organized for
                                        hospitality and tourism students in tertiary institutions.</p>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 ">
                    <div class="blog-wrapper position-relative mb-30">
                                <div class="blog-content-wrapper">
                                    <div class="blog-content">
                                    <h4 class="course__title" >
                                    <span class="yellow-bg mr-20">
                                        <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4 19.746H6.47299C2.092 19.746 1 18.654 1 14.273V6.47299C1 2.092 2.092 1 6.47299 1H20.162C24.543 1 25.635 2.092 25.635 6.47299" stroke="#F4930E" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M11.3999 25.6218V19.7458" stroke="#F4930E" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1 14.5459H11.4" stroke="#F4930E" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M7.16211 25.6218H11.4001" stroke="#F4930E" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M26.9999 14.3509V21.7739C26.9999 24.8549 26.2329 25.6219 23.152 25.6219H18.537C15.456 25.6219 14.689 24.8549 14.689 21.7739V14.3509C14.689 11.2699 15.456 10.5029 18.537 10.5029H23.152C26.2329 10.5029 26.9999 11.2699 26.9999 14.3509Z" stroke="#F4930E" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M20.8179 21.4359H20.8296" stroke="#F4930E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>                             
                                    </span>
                                        2021 Achievements 
                                    </h4>
                                    <p>
                                        Tourism Afrikania announced the second edition of its annual
                                        education contest, 'Build Afrika.' The initiative brings industry
                                        experts and students together for knowledge sharing,
                                        mentorship, coaching, and education. The competition, held in
                                        July 2021 via Zoom, featured six finalists from various
                                        universities. The winner received a cash prize of 200,000 naira
                                        and became the ambassador of the company. Additionally, the
                                        top three positions received scholarships to study at Aeroport
                                        College of Aviation and Travel Management, Lagos</p>
                                    </div>
                                </div>
                            </div>
                </div>
           </div>
        </div>
     </section>

      <!-- team area start -->
      {{-- <section class="team__area pt-115">
        <div class="container">
           <div class="row align-items-end">
              <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="section__title-wrapper-2 mb-40">
                    <span class="section__title-pre-2">MEET OUR</span>
                    <h3 class="section__title-2">TEAM</h3>
                 </div>
              </div>
           </div>
           <div class="row">
                @foreach ($team as $teams) 
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb">
                            <div class="team__shape">
                                <img src="{{ asset('upload/team/'.$teams->image)  }}" alt="">
                            </div>
                        </div>
                        <div class="team__content">
                            <h3 class="team__title">
                                <a href="#">{{ $teams->name  }}</a>
                            </h3>
                            <span class="team__designation">{{ $teams->position  }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
           </div>
        </div>
     </section> --}}
     <!-- team area end -->

    <!-- brand area start partner__active-->
    {{-- <section class="brand__area pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="brand__wrapper">
                    <div class="section__title-wrapper-2">
                        <span class="section__title-pre-2">partners</span>
                        <h3 class="section__title-2 section__title-2-30">Partners</h3>
                    </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="partner__active owl-carousel">
                        @foreach ($partner as $partners)
                        <div class="brand__item-wrapper pl-100">
                            <div class="brand__item text-center m-img mb-40">
                                <img width="100" height="100" src="{{ asset('upload/partner/'.$partners->image) }}" alt="">
                            </div>
                        </div>
                        @endforeach
                    </div>   
                </div>
            </div>
        </div>
    </section> --}}
    <!-- brand area end -->

   
@endsection    