@extends('layouts.main')
@section('head', 'Community')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'Community')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


     <!-- services-area -->
     <section class="services__area-four services__bg-four" data-background="assets/img/bg/inner_services_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mt-50">
                        <span class="sub-title">Our Student</span>
                        <h2 class="section__title section__title-44"><span class="down-mark-line-2">Community</span></h2>
                    </div>
                </div>
            </div>
            <div class="container teacher-area  fix">
                <div class="row align-items-center justify-content-center ">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-4">
                        <div class="teacher-img position-relative">
                        </div>
                        <img  src="assets/img/teacher/teacher.jpg"
                                alt="image not found" class="img-fluid w-100">
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-4">
                        <div class="teacher-content mr-20">
                            <div class="section-title mb-30">
                                <h2>Tourism Afrikania: <span class="down-mark-line-2">Empowering</span>  Africa's Growth </h2>
                            </div>
                            <p style="text-align:justify;"> Tourism Afrikania is an African Global Hospitality and Tourism Management
                                Company dedicated to promoting hospitality and tourism education across
                                Africa. Our mission is to enable African economic growth by assisting business
                                owners in achieving their profitability goals through comprehensive career
                                mentorship, training, marketing solutions, and general travel and hotel
                                management services.</p></div>
                    </div>
                </div>
                <div class="row justify-content-center pt-100 gutter-24 pb-70">
                    <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 order-lg-2 mb-50">
                        <div class="zoom-thumb position-relative">
                            <img class="zoom-thumb-main-img" src="assets/img/teacher/student.jpg" alt="image not found">
                        </div>
                    </div>
                    <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 order-lg-1 mt-50 ">
                        <div class="zoom-class-wrapper mb-60">
                            <div class="section-title mb-30">
                                <h2> <a href='javascript:void()' style="color:black;">TA  <span class="down-mark-line-2"> Network</span> / Community of Students and Graduates:</a></h2>
                            </div>
                            <div class="zoon-class-text">
                                <p style="text-align:justify;">Our TA Network is a vibrant community that provides invaluable resources and
                                support to students and graduates pursuing careers in the hospitality and
                                tourism industry. By joining our community, you gain access to a wide range of
                                benefits and opportunities tailored to enhance your professional development
                                and accelerate your career growth.</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gutter-24">    
                <div class="col-12 col-lg-10 col-md-10">
                    <div class="services__item-three">
                        <div class="services__content-three">
                        <div class="student-wrapper mb-30">
                            <div class="section-title mb-30">
                                <h2>Key <span class="down-mark-line"> Features</span> of Our Student Community:</h2>
                            </div>
                            <div class="student-choose-list">
                                <ul style="text-align:justify;">
                                <li><i class="far fa-check"></i>Career Mentorship: Receive personalized guidance and support from industry
                                professionals to navigate your career path and achieve your professional goals.</li>
                                <li><i class="far fa-check"></i>Students' Cash Prize Supports / Competitions: Participate in competitions such
                                as Build Afrika to showcase your skills and talents and win cash prizes to
                                support your educational journey.</li>
                                <li><i class="far fa-check"></i>Professional Development Training: Access training opportunities to enhance
                                your skills and stay updated on industry best practices and trends.</li>
                                <li><i class="far fa-check"></i>Professional Skill Acquisition: Acquire practical skills and knowledge through
                                hands-on training and workshops conducted by industry experts.</li>
                                <li><i class="far fa-check"></i>Job / Internship Opportunities: Explore internship and job opportunities in
                                leading hospitality and tourism organizations through our extensive network of
                                industry partners.</li>
                                <li><i class="far fa-check"></i>Business/Entrepreneurship Coaching: Receive guidance and mentorship to
                                develop your entrepreneurial skills and explore business opportunities in the
                                hospitality and tourism sector.</li>
                                <li><i class="far fa-check"></i>Networking: Connect with fellow students, graduates, and industry
                                professionals to expand your professional network and explore collaborative
                                opportunities.</li>
                                <li><i class="far fa-check"></i>Scholarship Opportunities: Apply for scholarships to fund your education and
                                pursue further studies in hospitality and tourism-related fields.</li>
                                <li><i class="far fa-check"></i>Industry News and Trends: Stay informed about the latest news, trends, and
                                developments in the hospitality and tourism industry to remain competitive in
                                the job market.</li>
                                <li><i class="far fa-check"></i>CV / Resume Assistance: Receive assistance in crafting professional resumes
                                and CVs that comply with Applicant Tracking System (ATS) requirements to
                                increase your chances of landing interviews.</li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services__shape-wrap-two">
            <img src="assets/img/services/inner_services_shape01.png" alt="" data-aos="fade-right" data-aos-delay="400">
            <img src="assets/img/services/inner_services_shape02.png" alt="" data-aos="fade-left" data-aos-delay="400">
        </div>
    </section>
    <!-- services-area-end -->


@endsection    