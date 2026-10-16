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
        <div class="row">
            <div class="col-12  col-sm-12 col-md-12 col-lg-12">
                <div class="contestant__item">
                    <div class="contestant__item__header">
                        <div class="contestant__item__img">
                            <img src="{{ asset('storage/'.$contestant->photo) }}" alt="">
                        </div>
                        <div class="contestant__item__header__text">
                            <h3 class="contestant__name">{{ $contestant->name }}</h3>
                            <p class="">{{ $contestant->institution }}</p>
                        </div>
                    </div>
                    <div class="contestant__item__content">
                        <h4 class="contestant__title">Department:</h4>
                        <p>{{ $contestant->department }}</p>
                        <h4 class="contestant__title">Career</h4>
                        <p>{{ $contestant->career }}</p>
                        <h4 class="contestant__title">Reason for joining this contest:</h4>
                        <p>{!! $contestant->description !!}</p>
                    </div>
                    <form action="{{ route('vote.initiate', $contestant->id) }}" method="post" class="contestant__form">
                        @csrf
                        <input type="number" name="vote_number" class="form-control" id="" placeholder="Enter number of vote" required>
                        <input type="email" placeholder="Enter your email" name="email" class="form-control" required>
                        <input type="submit" value="Vote (Pay ₦100)" class="contestant__btn">
                    </form>
                </div>
            </div>
        </div>
    </div>   
</section>

<!--Contestant Section End-->


@endsection    