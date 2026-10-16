@extends('layouts.main')
@section('head', $Coursecategory->name)
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', $Coursecategory->name)
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


    <section class="course-area p-relative pt-110 pb-90">
        <div class="container">
           <div class="row">
              <div class="col-xl-5 col-lg-5 f-left">
                 <div class="section-title mb-50">
                    <h2>{{ $Coursecategory->name }}</h2>
                 </div>
              </div>
           </div>
           <div class="row grid course-main-items">
            @forelse ($Coursecategory->courses as $course)
              <div class="col-xl-4 col-lg-4 col-md-6 grid-item c-2">
                 <div class="eduman-course-main-wrapper mb-30">
                    <div class="eduman-course-thumb w-img">
                       <a href="{{ route('course-details',$course->slug) }}"><img
                             src="{{ asset('storage/'.$course->image)  }}" alt="course-img"></a>
                    </div>
                    <div class="eduman-course-wraper">
                       <div class="eduman-course-heading">
                          <a href="{{ route('course-details', $course->slug) }}" class="course-link-color-1">{{ $Coursecategory->name }}</a>
                       </div>
                       <div class="eduman-course-text">
                          <h3><a href="{{ route('course-details', $course->slug) }}">{{ $course->name }}</a></h3>
                       </div>
                       <div class="eduman-course-meta">
                          <p>{!! \Str::limit($course->description, 200) !!}</p>
                       </div>
                    </div>
                    <div class="eduman-course-footer">
                       <div class="course-deteals-btn">
                          <a href="{{ route('course-details', $course->slug) }}"><span class="me-2">View Details</span><i
                                class="far fa-arrow-right"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
              @empty
              <h4 class="title text-center">No Courses List</h4>
              @endforelse
           </div>
        </div>
     </section>

   
@endsection
