@extends('layouts.master')
@section('header-sidebar')
    @include('layouts.s_sidebar')
@endsection
@section('content')

<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Add Product</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
        </ol>
    </div>
</div>
<!-- End Page Header -->

<!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12 col-md-12 col-md-12">
        <div class="card custom-card">
            <form action="{{ route('school-upload-store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label class="tx-medium">School Name</label>
                        <input type="text" name="name" class="form-control" placeholder="School Name">
                    </div>
                    <div class="form-group">
                        <label class="tx-medium">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label class="tx-medium">Phone Number</label>
                        <input type="text"name="phone"  class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label class="tx-medium">Facebook</label>
                        <input type="text"name="facebook"  class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label class="tx-medium">Whatsapp</label>
                        <input type="text"name="whatsapp"  class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label class="tx-medium">Instagram</label>
                        <input type="text"name="instagram"  class="form-control" placeholder="Price">
                    </div>
                    <div class="ql-wrapper ql-wrapper-demo mb-3">
                        <label class="tx-medium">Description(About school)</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <label class="tx-medium">Upload Photo</label>
                    <div class="p-4 border rounded-6 mb-0 form-group">
                        <div>
                            <input   type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="card-footer mb-1">
                    <button type="submit" class="btn btn-primary w-100">Upload</button>
                </div>
            </form>    
        </div>
    </div>
</div>
<!-- End Row -->

@endsection