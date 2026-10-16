@php
   $getCategory =  App\Models\CourseCategory::all();
@endphp

   <!-- cart mini area start -->
   {{-- <div class="cartmini__area">
      <div class="cartmini__wrapper">
         <div class="cartmini__title">
            <h4>Shopping cart</h4>
         </div>
         <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
         </div>
         <div class="cartmini__widget">
            <div class="cartmini__inner">
               <ul>
                  <li>
                     <div class="cartmini__thumb">
                        <a href="course.html">
                           <img src="assets/img/products/product-thumb-01.png" alt="image not found">
                        </a>
                     </div>
                     <div class="cartmini__content">
                        <h5><a href="course.html">Turn Yourself</a></h5>
                        <div class="product-quantity mt-10 mb-10">
                           <span class="cart-minus">-</span>
                           <input class="cart-input" type="text" value="1">
                           <span class="cart-plus">+</span>
                        </div>
                        <div class="product__sm-price-wrapper">
                           <span class="product__sm-price">$24.00</span>
                        </div>
                     </div>
                     <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                  </li>
                  <li>
                     <div class="cartmini__thumb">
                        <a href="course.html">
                           <img src="assets/img/products/product-thumb-02.png" alt="image not found">
                        </a>
                     </div>
                     <div class="cartmini__content">
                        <h5><a href="course.html">Art of Not Giving</a></h5>
                        <div class="product-quantity mt-10 mb-10">
                           <span class="cart-minus">-</span>
                           <input class="cart-input" type="text" value="1">
                           <span class="cart-plus">+</span>
                        </div>
                        <div class="product__sm-price-wrapper">
                           <span class="product__sm-price">$12.00</span>
                        </div>
                     </div>
                     <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                  </li>
                  <li>
                     <div class="cartmini__thumb">
                        <a href="course.html">
                           <img src="assets/img/products/product-thumb-03.png" alt="image not found">
                        </a>
                     </div>
                     <div class="cartmini__content">
                        <h5><a href="course.html">Attract Women</a></h5>
                        <div class="product-quantity mt-10 mb-10">
                           <span class="cart-minus">-</span>
                           <input class="cart-input" type="text" value="1">
                           <span class="cart-plus">+</span>
                        </div>
                        <div class="product__sm-price-wrapper">
                           <span class="product__sm-price">$42.00</span>
                        </div>
                     </div>
                     <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                  </li>
               </ul>
            </div>
            <div class="cartmini__checkout">
               <div class="cartmini__checkout-title mb-30">
                  <h4>Subtotal:</h4>
                  <span>$78.00</span>
               </div>
            </div>
            <div class="cartmini__viewcart">
               <a href="cart.html" class="edu-sec-btn">View cart</a>
               <a href="checkout.html" class="edu-sec-btn">Checkout</a>
           </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div> --}}
   <!-- cart mini area end -->

   <!-- side toggle start -->
   <div class="fix">
      <div class="side-info">
         <div class="side-info-content">
            <div class="offset-widget offset-logo mb-40">
               <div class="row align-items-center">
                  <div class="col-9">
                     <a href="index.html">
                        <img src="/assets/img/logo/logo-black.png" width="100" alt="Logo">
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
   <header>
    <!-- header-top start-->
    <div class="header-top-area d-none d-lg-block">
       <div class="container-fluid">
          <div class="header-top-inner">
             <div class="row align-items-center">
                <div class="col-xl-8 col-lg-8">
                   <div class="header-top-icon">
                      <a href="tel:+2347062081248"><i class="fas fa-phone"></i>+2347062081248</a>
                      <a href="mailto:info@tourismafrikanianig.com"><i class="fal fa-envelope"></i>info@tourismafrikanianig.com</a>
                      <i class="fal fa-map-marker-alt"></i><span>Victoria Island Lagos</span>
                   </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                   <div class="header-top-login d-flex f-right">
                      <div class="header-user-login p-relative d-none">
                         <span><a class="user-btn-sign-up" href="#">Login / Register</a></span>
                      </div>
                      <div class="header-social">
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
             </div>
          </div>
       </div>
    </div>
    <!-- header-top end -->
    <div class="header-area sticky-header">
       <div class="container-fluid">
          <div class="header-main-wrapper">
             <div class="row align-items-center">
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-5 col-sm-9 col-9">
                   <div class="header-left d-flex align-items-center">
                      <div class="header-logo me-4 flex-shrink-0">
                         <a href="/"><img src="/assets/img/logo/logo-black.png" width="70" alt="logo"></a>
                      </div>
                      <div class="main-menu d-none d-xl-block">
                         <nav id="mobile-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="menu-item-has-children"><a href="#!">Company</a>
                                   <ul class="sub-menu">
                                      <li><a href='/about' class="text-capitalize">About Us</a></li>
                                      <li><a href='/service' class="text-capitalize">Services</a></li>
                                      <li><a href='/adtea' class="text-capitalize">Airport Drivers Ambassador</a></li>
                                      <li><a href='/buildafrika' class="text-capitalize">Build Afrika Winners</a></li>
                                      <li><a href="/contestant">Build Afrika Contestant</a></li>
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
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-7 col-sm-3 col-3">
                   <div class="header-right d-flex align-items-center justify-content-end">
                      <div class="header-search d-none d-xxl-block mr-30">
                         <form action="{{ route('search') }}">
                            <div class="search-icon p-relative">
                               <input type="text" name="search" placeholder="Search courses...">
                               <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                         </form>
                      </div>
                      <div class="cart-wrapper mr-30">
                         {{-- <a href="javascript:void(0);" class="cart-toggle-btn">
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
                         </a> --}}
                      </div>
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