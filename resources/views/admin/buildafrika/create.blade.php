@extends('layouts.master-2')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Grid Card -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Build Afrika</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Build Afrika</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Build Afrika</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xxl-12 col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title"> Upload </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.buildafrika.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Name</label> 
                            <input type="text" class="form-control @error('name') is-invalid  @enderror" id="exampleInputEmail1" name="name">
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                 {{ $message }}
                              </span>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleInputPassword1" class="form-label">Position</label> 
                            <input type="text" class="form-control @error('position') is-invalid  @enderror" name="position" id="exampleInputPassword1">
                            @error('position')
                                <span class="invalid-feedback" role="alert">
                                {{ $message }}
                                </span>
                            @enderror 
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleCheck1" class="form-label">Edition</label>
                            <input type="text" class="form-control @error('edition') is-invalid  @enderror" name="edition" id="exampleCheck1">
                            @error('edition')
                                <span class="invalid-feedback" role="alert">
                                {{ $message }}
                                </span>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="image-file">Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid  @enderror" id="image-file">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg form-control">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!--End::row-1 --> 

</div>
@endsection
