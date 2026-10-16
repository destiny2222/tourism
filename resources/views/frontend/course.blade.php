@extends('layouts.main')
@section('head', 'Course')
@section('header-area')
@include('layouts.subheader')
@endsection
@section('content')
@section('breadcrumb', 'Course')
<!-- breadcrumb-area -->
@include('partials.breadcrumb-area')
<!-- breadcrumb-area-end -->



<!-- course-content-start -->
<section class="course-content-area pb-90 pt-120">
    <div class="container">
        <div class="row mb-10">
            @foreach ($course as $courses)
            <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="eduman-course-main-wrapper mb-30">
                   <div class="eduman-course-thumb w-img">
                       <a href="{{ route('course-details', $courses->slug) }}">
                           <img src="{{ asset('storage/'.$courses->image) }}" alt="course-img">
                       </a>
                   </div>
                   <div class="eduman-course-wraper">
                       <div class="eduman-course-heading">
                           <a href="{{ route('course-details', $courses->slug) }}" class="course-link-color-1">{{ $courses->category->name }}</a>
                       </div>
                       <div class="eduman-course-text">
                           <h3><a href="{{ route('course-details', $courses->slug) }}">{{ $courses->name }}</a></h3>
                       </div>
                       <div class="eduman-course-meta">
                           <p>{!! \Str::limit($courses->description, 200) !!}</p>
                       </div>
                   </div>
                   <div class="eduman-course-footer">
                       <div class="course-deteals-btn">
                           <a href="{{ route('course-details', $courses->slug) }}"><span class="me-2">View Details</span><i class="far fa-arrow-right"></i></a>
                       </div>
                   </div>
               </div>
           </div>
               @endforeach
         </div>
         <div class="row">
               <div class="edu-pagination mt-30 mb-20">
                  <ul>
                     {{-- Previous Page Link --}}
                     @if ($course->onFirstPage())
                     <li class="disabled"><span><i class="fal fa-angle-left"></i></span></li>
                     @else
                     <li><a href="{{ $course->previousPageUrl() }}"><i class="fal fa-angle-left"></i></a></li>
                     @endif

                     {{-- Pagination Elements --}}
                     @foreach ($course->links()->elements[0] as $page => $url)
                     @if ($page == $course->currentPage())
                     <li class="active"><a href="#"><span>{{ $page }}</span></a></li>
                     @else
                     <li><a href="{{ $url }}"><span>{{ $page }}</span></a></li>
                     @endif
                     @endforeach

                     {{-- Next Page Link --}}
                     @if ($course->hasMorePages())
                     <li><a href="{{ $course->nextPageUrl() }}"><i class="fal fa-angle-right"></i></a></li>
                     @else
                     <li class="disabled"><span><i class="fal fa-angle-right"></i></span></li>
                     @endif
                  </ul>
               </div>
         </div>
    </div>
</section>
<!-- course-content-end -->


@endsection
