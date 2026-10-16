@extends('layouts.main')
@section('head', 'Event ')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'Event ')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


    <div class="blog-area pt-120 pb-90">
        <div class="container">
           <div class="row">

              <div class="col-xl-8 col-lg-12">
                 <div class="blog-main-wrapper mb-30">
                    <div class="row">
                        @foreach ($event as $events)
                       <div class="col-xl-12 col-lg-6 col-md-12">
                          <div class="blog-wrapper position-relative mb-30">
                             <div class="blog-thumb ">
                                <a href="{{ route('event-details', $events->slug)  }}"><img src="{{ asset('storage/'.$events->image) }}" alt="blog-img"></a>
                             </div>
                             <div class="blog-content-wrapper">
                                {{-- <div class="blog-meta">
                                   <div class="blog-date">
                                      <i class="flaticon-calendar"></i>
                                      <span>23 Jan 2020</span>
                                   </div>
                                </div> --}}
                                <div class="blog-content">
                                   <a href="{{ route('event-details', $events->slug)  }}">
                                      <h3>{{ \Str::limit($events->title, 40) }}</h3>
                                   </a>
                                   <p class="mb-35">{!!  html_entity_decode(\Str::limit($events->description, 250)) !!}</p>
                                   <a class="blog-btn" href="{{ route('event-details', $events->slug)  }}">Read more</a>
                                </div>
                             </div>
                          </div>
                       </div>
                       @endforeach
                    </div>
                    <div class="edu-pagination mt-30 mb-20">
                     <ul>
                        {{-- Previous Page Link --}}
                        @if ($event->onFirstPage())
                           <li class="disabled"><span><i class="fal fa-angle-left"></i></span></li>
                        @else
                           <li><a href="{{ $event->previousPageUrl() }}"><i class="fal fa-angle-left"></i></a></li>
                        @endif
                  
                        {{-- Pagination Elements --}}
                        @foreach ($event->links()->elements[0] as $page => $url)
                           @if ($page == $event->currentPage())
                              <li class="active"><a href="#"><span>{{ $page }}</span></a></li>
                           @else
                              <li><a href="{{ $url }}"><span>{{ $page }}</span></a></li>
                           @endif
                        @endforeach
                  
                        {{-- Next Page Link --}}
                        @if ($event->hasMorePages())
                           <li><a href="{{ $event->nextPageUrl() }}"><i class="fal fa-angle-right"></i></a></li>
                        @else
                           <li class="disabled"><span><i class="fal fa-angle-right"></i></span></li>
                        @endif
                     </ul>
                  </div>
                  
                 </div>

              </div>
              <div class="col-xl-4 col-lg-8 col-md-8">
                 <div class="sidebar-widget-wrapper">
                    {{-- <div class="sidebar__search p-relative mb-30">
                       <form action="#">
                          <input type="text" placeholder="Search for courses...">
                          <button type="submit">
                             <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 584.4 584.4"
                                style="enable-background:new 0 0 584.4 584.4;" xml:space="preserve">
                                <g>
                                   <g>
                                      <path class="st0"
                                         d="M565.7,474.9l-61.1-61.1c-3.8-3.8-8.8-5.9-13.9-5.9c-6.3,0-12.1,3-15.9,8.3c-16.3,22.4-36,42.1-58.4,58.4    c-4.8,3.5-7.8,8.8-8.3,14.5c-0.4,5.6,1.7,11.3,5.8,15.4l61.1,61.1c12.1,12.1,28.2,18.8,45.4,18.8c17.1,0,33.3-6.7,45.4-18.8    C590.7,540.6,590.7,499.9,565.7,474.9z">
                                      </path>
                                      <path class="st1"
                                         d="M254.6,509.1c140.4,0,254.5-114.2,254.5-254.5C509.1,114.2,394.9,0,254.6,0C114.2,0,0,114.2,0,254.5    C0,394.9,114.2,509.1,254.6,509.1z M254.6,76.4c98.2,0,178.1,79.9,178.1,178.1s-79.9,178.1-178.1,178.1S76.4,352.8,76.4,254.5    S156.3,76.4,254.6,76.4z">
                                      </path>
                                   </g>
                                </g>
                             </svg>
                          </button>
                       </form>
                    </div> --}}
                    <div class="sidebar__widget mb-30">
                       <div class="sidebar__widget-head mb-35">
                          <h4 class="sidebar__widget-title">Recent events</h4>
                       </div>
                       <div class="sidebar__widget-content">
                          <div class="rc__event-wrapper">
                           @foreach ($recentevent as $recent)
                             <div class="rc__event d-flex align-items-center mb-35">
                                <div class="rc__thumb mr-20">
                                   <a href="{{ route('event-details', $recent->slug)  }}"><img src="{{ asset('storage/'.$recent->image) }}" alt=""></a>
                                </div>
                                <div class="rc__content">
                                   <div class="rc__meta">
                                      <span>{{ $recent->created_at->format('d M Y') }}</span>
                                   </div>
                                   <h6 class="rc__title"><a href="{{ route('event-details', $recent->slug)  }}">{{ \Str::limit($recent->title, 20) }}</a></h6>
                                </div>
                             </div>
                           @endforeach
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>


@endsection    