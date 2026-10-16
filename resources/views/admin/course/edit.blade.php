@extends('layouts.master-2')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Grid Card -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Course</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Course</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Course</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xxl-12 col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <form action="{{ route('admin.course.update', $courses->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Name</label> 
                            <input type="text" class="form-control @error('name') is-invalid  @enderror" id="exampleInputEmail1" value="{{ $courses->name }}" name="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Course Category</label> 
                            <select name="category_id" class="form-control @error('category_id') is-invalid  @enderror"  id="" required>
                               <option selected>Select</option>
                               @foreach ($coursecategory as $course_categorys)
                                   <option value="{{ $course_categorys->id }}" {{ $courses->category_id == $course_categorys->id ? 'selected' : '' }}>{{ $course_categorys->name }}</option>
                               @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Description</label> 
                            <textarea name="description" id="body" class="form-control @error('description') is-invalid  @enderror" cols="30" rows="10">{!! $courses->description !!}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Image</label> 
                            <input type="file" class="form-control @error('image') is-invalid  @enderror" value="{{ $courses->image }}" id="exampleInputEmail1" name="image">
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
