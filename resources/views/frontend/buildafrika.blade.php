@extends('layouts.main')
@section('head', 'Build Afrika Winners')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'Build Afrika Winners')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


<!-- services-area -->
<section class="services__area-five services__bg-five" data-background="assets/img/bg/inner_services_bg02.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-40">
                    <h2 class="section__title section__title-44">Our Build Afrika Student Winners</h2>
                </div>
            </div>
        </div>
        <div class="services-item-wrap">
            <div class="row justify-content-center">
                @foreach ($winners as $winner)     
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="services-item shine-animate-item">
                            <div class="services-thumb">
                                <a class='shine-animate' href='javascript:void()'>
                                    <img src="{{ asset('storage/'.$winner->image) }}" alt="">
                                </a>
                            </div>
                            <div class="services-content">
                                <div class="icon">
                                    {{  $winner->position  }}
                                </div>
                                <h4 class="title"><a href="javascript:void()">{{ $winner->name }}</a></h4>
                                <p class="m-0 p-0" style="color:#F67B4B;">{{  $winner->edition }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- services-area-end -->



@endsection    