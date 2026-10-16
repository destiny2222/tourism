@extends('layouts.master-2')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Grid Card -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">gallery</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">gallery</a></li>
                    <li class="breadcrumb-item active" aria-current="page">gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xxl-12 col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Image</label> 
                            <input type="file" class="form-control @error('image') is-invalid  @enderror"  id="exampleInputEmail1" name="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0 text-center">
                                <input type="submit" class="btn btn-primary btn-lg w-100" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!--End::row-1 --> 
</div>
@endsection
