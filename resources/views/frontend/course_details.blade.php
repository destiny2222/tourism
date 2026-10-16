@extends('layouts.main')
@section('head', 'Course')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'Course Details')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


    <!-- course area start -->
    <section class="course__area pt-115 pb-90">
        <div class="container">
           <div class="row">
              <div class="col-xxl-12 col-xl-12 col-lg-12">
                 <div class="course__wrapper">
                    <div class="page__title-content mb-25"> 
                       <span class="breadcrumb__title-pre">{{  $course->category->name }}</span>
                       <h5 class="breadcrumb__title-2">{{  $course->name }}</h5>
                    </div>
                    <div class="course__img w-img mb-30">
                       <img src="{{  asset('storage/'.$course->image)  }}" alt="">
                    </div>
                    <div class="course__tab-content mb-95">
                       <div class="tab-content" id="courseTabContent">
                          <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                             <div class="course__description">
                                <h3>Course Overview</h3>
                                <p>
                                    {!! html_entity_decode($course->description) !!}
                                </p>                            
                             </div>
                          </div>
                        </div>
                    </div>
                    
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- course area end -->



@endsection