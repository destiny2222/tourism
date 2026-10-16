@extends('layouts.main')
@section('head', 'Registerations')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
@section('breadcrumb', 'AHTES24 Registration')
<!-- breadcrumb-area -->
@include('partials.breadcrumb-area')
<!-- breadcrumb-area-end -->

<section class="py-4">
    <div class="container">
        <div class="row ">
            <div class="col-lg-10 m-auto pt-4 pb-4">
                <h3 class="text-center py-4">AHTES24 Registration Form</h3>
                <div class="card shadow p-3">
                    <form action="{{ route('registration.payment') }}" method="post" id="form">
                        @csrf
                        <fieldset class="mb-4">
                            <strong class="">Contact Information</strong>
                            <div class="form-group mb-4 mt-3">
                                <label for="" class="mb-3">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-3" required name="fname" placeholder="First">
                                <input type="text" class="form-control mb-3" required name="lname" placeholder="Last">
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="mb-3">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control mb-3" required name="email" placeholder="Email Address">
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="mb-3">Phone <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control mb-3" required name="phone" placeholder="Phone Number">
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="mb-3">Country origin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-3" required name="country" placeholder="Country">
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="mb-3">Organization <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-3" required name="organization" placeholder="Organization">
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-3">Position </label>
                                <input name="position" class="form-control mb-3" required type="text" placeholder="Position">
                            </div>
                        </fieldset>
                        <fieldset class="mb-4">
                            <strong class="">Personal Preferences</strong>
                            <div class="form-group mb-4 mt-3">
                                <label class="mb-3">What is your native language? </label>
                                <input name="language" class="form-control mb-3" required type="text" placeholder="Language">
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-3">The event will be in English. Will you require an interpreter? </label>
                                <select name="interpreter" class="form-control mb-3" required>
                                    <option value="" selected>Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-3">Hotel accommodations(Victoria Island Lagos / Lekki) </label><br>
                                <input name="hotel" type="radio" value="No, I will not require any hotel accommodations.">
                                 <label>No, I will not require any hotel accommodations.</label><br>
                                <input name="hotel" type="radio" value="Yes, I would like to reserve a room with a king bed.">
                                 <label>Yes, I would like to reserve a room with a king bed.</label><br>
                                <input name="hotel" type="radio" value="Yes, I would like to reserve a room with double beds.">
                                 <label>Yes, I would like to reserve a room with double beds.</label><br>
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-3">Do you have any dietary restrictions? If so, please provide more details so we can accommodate your needs.</label>
                                <textarea name="Diet" id="" maxlength="300" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label>Are you traveling from outside of Nigeria to attend the formal submit?
                                    please send a request to ahtes@tourismafrikanianig.com or info@tourismafrikanianig.com . </label>
                                <select name="visa" class="form-control" required>
                                    <option value="" selected>Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label>Where did you hear about this event from? <strong style="color: red;">*</strong></label><br>
                                <input name="source" type="radio" value="Facebook"><label>Facebook</label><br>
                                <input name="source" type="radio" value="Instagram"><label>Instagram</label><br>
                                <input name="source" type="radio" value="Word of mouth"><label>Word of mouth</label><br>
                                <input name="source" type="radio" value="Friend, Family or Colleague"><label>Friend, Family or Colleague</label><br>
                                <input name="source" type="radio" value="Travel Ambassador"><label>Travel Ambassador</label><br>
                                <input name="source" type="radio" value="Event Ambassador"><label>Event Ambassador</label><br>
                                <input name="source" type="radio" value="Other"><label>Other</label><br>
                            </div>
                        </fieldset>
                          
                        <fieldset class="mb-4">
                            <label for="">Register as a </label>
                            <select name="register_as" class="form-control" required>
                                 <option value="" selected>Select</option>
                                 <option value="free">Yes</option>
                                 <option value="No">No</option>
                            </select>
                        </fieldset>
                        <div class="form-group mb-4 text-center">
                            <button type="submit" class="btn btn-primary">Continue to Payment</button>
                        </div>
                        {{-- <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> --}}
                        {{-- <div class="form-group pt-4 pb-4 text-center">
                            <button type="submit" class="btn btn-primary">Continue to Payment</button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection