@extends('layouts.master-2')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Grid Card -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Event speaker</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Event speaker</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Event speaker</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xxl-12 col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <form action="{{ route('admin.event.speaker.update', $speaker->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Speaker name</label> 
                            <input type="text" class="form-control @error('name') is-invalid  @enderror" id="exampleInputEmail1" value="{{ $speaker->name }}" name="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Speaker position</label> 
                            <input type="text" class="form-control @error('position') is-invalid  @enderror" id="exampleInputEmail1" value="{{ $speaker->position }}" name="position">
                            @error('position')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Event</label> 
                            <select name="event_id" class="form-control @error('event_id') is-invalid  @enderror"  id="" required>
                                <option selected>Select</option>
                                @foreach ($event as $events)
                                    <option value="{{ $events->id }}" {{ $speaker->event_id == $events->id ? 'selected' : '' }}>{{ $events->title }}</option>
                                @endforeach
                            </select>
                            @error('event_id')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Image</label> 
                            <input type="file" class="form-control @error('image') is-invalid  @enderror" value="{{ $speaker->image }}" id="exampleInputEmail1" name="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0 text-center">
                                <input type="submit" class="btn btn-primary btn-lg" value="Save Change">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!--End::row-1 --> 
</div>
@endsection
