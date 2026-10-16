@extends('layouts.main')
@section('head', 'Event Details')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'Event Details')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->
    



     <!-- event details area start -->
     <section class="event__area pb-110 pt-115">
        <div class="container">
           <div class="row">
              <div class="col-xxl-8 col-xl-8 col-lg-8">
                 <div class="event_wrapper">
                    <div class="event__thumb mb-35 w-img">
                        <img src="{{  asset('storage/'.$event->image) }}" class="w-100" alt="">
                    </div>
                    <div class="event__details mb-35">
                       <h3>{{  $event->title }}</h3>
                       <p> {!! html_entity_decode($event->description) !!} </p>
                    </div>
                    <div class="row">
                        @if ($event->speaker   && count($event->speaker) > 0)
                            @foreach ($event->speaker as $speakers)
                                <div class="col-md-4">
                                    <figure>
                                        <img width="200" height="200" src="{{ asset('storage/'.$speakers->image) }}" alt="">
                                    </figure>
                                    <div class="item-speaker-content">
                                        <h5 class="title">{{ $speakers->name }}</h5>
                                        <span class="date">{{ $speakers->position }}</span>
                                    </div>
                                </div>
                             @endforeach
                        @else
                           <h4 class="sidebar__widget-title">No Speakers Available</h4>
                        @endif
                    </div>
                 </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4">
                 <div class="event__sidebar pl-70">
                    <div class="event__sidebar-widget white-bg mb-20">
                       <div class="event__sidebar-shape">
                          <img class="event-sidebar-img-2" src="assets/img/events/event-shape-2.png" alt="">
                          <img class="event-sidebar-img-3" src="assets/img/events/event-shape-3.png" alt="">
                       </div>
                       <div class="event__info">
                          <div class="event__info-content mb-35">
                             <ul>
                                <li class="d-flex align-items-center">
                                   <div class="event__info-icon">
                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                         <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                         <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                      </svg>
                                   </div>
                                   <div class="event__info-item">
                                      <h5><span>Date: </span> {{ $event->date }}</h5>
                                   </div>
                                </li>
                                <li class="d-flex align-items-center">
                                   <div class="event__info-icon">
                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                         <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                         <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                      </svg>
                                   </div>
                                   <div class="event__info-item">
                                      <h5><span>Time:</span>  {{ $event->time }} AM</h5>
                                   </div>
                                </li>
                                <li class="d-flex align-items-center">
                                   <div class="event__info-icon">
                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                         <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                         <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                      </svg>
                                   </div>
                                   <div class="event__info-item">
                                      <h5><span>Venue: </span> {{ $event->location }}</h5>
                                   </div>
                                </li>
                             </ul>
                          </div>
                          <div class="event__join-btn">
                             <a href="{{ route('register-page') }}" class="user-btn-sign-up edu-btn text-center w-100">Register now <i class="far fa-arrow-right"></i></a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- event details area end -->
@endsection