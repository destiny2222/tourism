@extends('layouts.master-2')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Grid Card -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Event</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Event</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Event</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xxl-12 col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <form action="{{ route('admin.event.update', $events->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Event Title</label> 
                            <input type="text" class="form-control @error('title') is-invalid  @enderror" id="exampleInputEmail1" value="{{ $events->title }}" name="title">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Event Date</label> 
                            <input type="date" class="form-control @error('date') is-invalid  @enderror" id="exampleInputEmail1" value="{{ $events->date }}" name="date">
                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Event Time</label> 
                            <input type="time" class="form-control @error('time') is-invalid  @enderror" id="exampleInputEmail1" value="{{ $events->time }}" name="time">
                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Event location</label> 
                            <input type="text" class="form-control @error('location') is-invalid  @enderror" id="exampleInputEmail1" value="{{ $events->location }}" name="location">
                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Description</label> 
                            <textarea name="description" id="body" class="form-control @error('description') is-invalid  @enderror" cols="30" rows="10">{!! $events->description !!}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Image</label> 
                            <input type="file" class="form-control @error('image') is-invalid  @enderror" value="{{ $events->image }}" id="exampleInputEmail1" name="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">{{ __('Featured') }}</label>
                            <select name="is_featured" id="" class="form-control">
                                <option value="1" {{ $events->is_featured == '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $events->is_featured == '0' ? 'selected' : '' }}>Hold</option>
                            </select>                            
                            @error('is_featured')
                              <span class="invalid-feedback" role="alert">
                                 {{ $message }}
                              </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">{{ __('Active') }}</label>
                            <select name="is_active" id="" class="form-control">
                                <option value="1" {{ $events->is_active == '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $events->is_active == '0' ? 'selected' : '' }}>Hold</option>
                            </select>                            
                            @error('is_active')
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
