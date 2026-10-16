@php
   $getCategory =  App\Models\CourseCategory::all();
@endphp

    <!-- pre loader area start -->
    <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
               <img class="loading-logo" src="/assets/img/logo/preloader.svg" alt="">
            </div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->



   <!-- side toggle start -->
   <div class="fix">
      <div class="side-info">
         <div class="side-info-content">
            <div class="offset-widget offset-logo mb-40">
               <div class="row align-items-center">
                  <div class="col-9">
                     <a href="/">
                        <img src="/assets/img/logo/logo-black.png" width="70" alt="Logo">
                     </a>
                  </div>
                  <div class="col-3 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                  </div>
               </div>
            </div>
            <div class="mobile-menu d-xl-none fix"></div>
            <div class="offset-widget offset_searchbar mb-30">
               <div class="menu-search position-relative ">
                  <form action="{{ route('search') }}" class="filter-search-input">
                     <input type="text" name="search" placeholder="Search keyword">
                     <button type="submit"><i class="fal fa-search"></i></button>
                  </form>
               </div>
            </div>

         </div>
      </div>
   </div>
   <div class="offcanvas-overlay"></div>
   <div class="offcanvas-overlay-white"></div>
   <!-- side toggle end -->


   <!-- header note area start  -->
   <div class="header-note-area p-relative d-none d-md-block">
      <div class="container-fluid">
         <div class="note-text text-center">
            <p class="text-white">AFRICAN HOSPITALITY AND TOURISM EDUCATION SUMMIT NIGERIA 2026 HAPPENING LIVE IN THE CITY OF LAGOs!.</p>
         </div>
      </div>
      <div class="eduman-header-notice-action-close">
         <button><i class="fal fa-times text-white"></i></button>
      </div>
   </div>
   <!-- header note area end -->

   <!-- header-area-start  -->
   <header>
      <div class="header-area header-transparent sticky-header">
         <div class="container-fluid">
            <div class="header-main-wrapper">
               <div class="row align-items-center">
                  <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
                     <div class="header-left d-flex align-items-center">
                        <div class="header-logo">
                           <a href="/"><img src="/assets/img/logo/logo-black.png" alt="logo"></a>
                        </div>
                        <div class="main-menu m-auto d-none d-xl-block">
                           <nav id="mobile-menu">
                              <ul>
                                 <li><a href="/">Home</a></li>
                                 <li class="menu-item-has-children"><a href="#!">Company</a>
                                    <ul class="sub-menu">
                                       <li><a href='/about' class="text-capitalize">About Us</a></li>
                                       <li><a href='/service' class="text-capitalize">Services</a></li>
                                       <li><a href='/adtea' class="text-capitalize">Airport Drivers Ambassador</a></li>
                                       <li><a href="/contestant">Build Afrika Contestant</a></li>
                                       <li><a href='/buildafrika' class="text-capitalize">Build Afrika Winners</a></li>
                                       <li><a href='/gallery' class="text-capitalize">Gallery</a></li>
                                       <li><a href='/community' class="text-capitalize">Community</a></li>
                                       <li><a href="#">shop</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-has-children">
                                    <a href="javascript:void(0)">Courses</a>
                                    <ul class="sub-menu">
                                       @foreach ($getCategory as $key => $item)
                                          <li><a href='{{ route('courses.showByCategory',$item->slug) }}' class="text-capitalize">{{ $item->name }}</a></li>    
                                       @endforeach
                                    </ul>
                                 </li>
                                 <li class="">
                                    <a  href="/event">Event </a>
                                 </li>
                                 <li class="">
                                    <a href="/blog">Blog</a>
                                  </li>
                                  <li class="">
                                     <a href="/adtea">Airport Drivers Ambassador</a>
                                 </li>
                                  <li>
                                    <a href="/contact">Contact</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                     <div class="header-right d-flex align-items-center justify-content-end">
                        <div class="header-search d-none d-xxl-block mr-30">
                           <form action="{{ route('search') }}">
                              <div class="search-icon p-relative">
                                 <input type="text" name="search" placeholder="Search courses...">
                                 <button type="submit"><i class="fas fa-search"></i></button>
                              </div>
                           </form>
                        </div>
                        {{-- <div class="cart-wrapper mr-30">
                           <a href="javascript:void(0);" class="cart-toggle-btn">
                              <div class="header__cart-icon p-relative">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="19.988" height="19.988"
                                    viewBox="0 0 19.988 19.988">
                                    <g id="trolley-cart" transform="translate(-1 -1)">
                                       <path id="Path_36" data-name="Path 36"
                                          d="M1.666,2.333H3.8L6.159,12.344a1.993,1.993,0,0,0,.171,3.98H17.656a.666.666,0,1,0,0-1.333H6.33a.666.666,0,0,1,0-1.333H17.578a1.992,1.992,0,0,0,1.945-1.541l1.412-6a2,2,0,0,0-1.946-2.456H5.486L4.98,1.514A.666.666,0,0,0,4.331,1H1.666a.666.666,0,0,0,0,1.333ZM18.989,5a.677.677,0,0,1,.649.819l-1.412,6a.662.662,0,0,1-.648.514H7.524L5.8,5Z"
                                          transform="translate(0 0)" fill="#141517" />
                                       <path id="Path_37" data-name="Path 37"
                                          d="M20,27a2,2,0,1,0,2-2A2,2,0,0,0,20,27Zm2.665,0A.666.666,0,1,1,22,26.333.666.666,0,0,1,22.665,27Z"
                                          transform="translate(-6.341 -8.01)" fill="#141517" />
                                       <path id="Path_38" data-name="Path 38"
                                          d="M9,27a2,2,0,1,0,2-2A2,2,0,0,0,9,27Zm2.665,0A.666.666,0,1,1,11,26.333.666.666,0,0,1,11.665,27Z"
                                          transform="translate(-2.67 -8.01)" fill="#141517" />
                                    </g>
                                 </svg>
                                 <span class="item-number">3</span>
                              </div>
                           </a>
                        </div> --}}
                        {{-- <div class="user-btn-inner p-relative d-none d-md-block">
                           <div class="user-btn-wrapper">
                              <div class="user-btn-content ">
                                 <a class="user-btn-sign-in" href="#">Sign In</a>
                              </div>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <a class="user-btn-sign-up edu-btn" href="#">Sign Up</a>
                        </div> --}}
                        <div class="menu-bar d-xl-none ml-20">
                           <a class="side-toggle" href="javascript:void(0)">
                              <div class="bar-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-area-end -->