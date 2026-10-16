@extends('layouts.main')
@section('head', 'Contestant')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'Contestant')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


<!--Contestant Section Start-->
<section class="contestant__section ">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="section-title mb-4 text-center">
                    <h2 class="section-title__title">Contestants</h2>
                    <p class="section-title__text">Vote for your favorite contestant below and help them win the competition!</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($contestants as $contestant)
                <div class="col-12  col-sm-12 col-md-6 col-lg-4">
                    <div class="contestant__item">
                        <div class="contestant__item__header">
                            <div class="contestant__item__img">
                                <img src="{{ asset('storage/'.$contestant->photo) }}" alt="">
                            </div>
                            <div class="contestant__item__header__text">
                                <h3 class="contestant__name">{{ $contestant->name }}</h3>
                                <p class="inline">{{ $contestant->institution }}</p>
                            </div>
                        </div>
                        <div class="contestant__item__content">
                            <h4 class="contestant__title">Reason for joining this contest:
</h4>
                            <p>{!! $contestant->description !!}</p>
                            {{-- <div class="contestant__item__btn">
                                <a href="#" class="contestant__btn__primary">Place Your Vote</a>
                            </div> --}}
                        </div>
                        <div class="badge">
                            <a href="{{ route('contestant.details', $contestant->slug) }}" class="contestant__btn__primary">Place Your Vote</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>   
</section>

<!--Contestant Section End-->


@endsection    