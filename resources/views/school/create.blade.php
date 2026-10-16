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
            <div class="card-body">
                <div class="form-group">
                    <label class="tx-medium">Product Name</label>
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="tx-medium">Category</label>
                    <select class="form-control select2">
                        <option label="Choose one">
                        </option>
                        <option value="Party Wear">
                            Party Wear
                        </option>
                        <option value="Casual Wear">
                            Casual Wear
                        </option>
                        <option value="Wedding">
                            Wedding
                        </option>
                        <option value="Festive">
                            Festive
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="tx-medium">Price</label>
                    <input type="text" class="form-control" placeholder="Price">
                </div>
                <div class="ql-wrapper ql-wrapper-demo mb-3">
                    <label class="tx-medium">Product Description</label>
                    <div id="quillEditor">
                    </div>
                </div>
                <label class="tx-medium">Upload Product</label>
                <div class="p-4 border rounded-6 mb-0 form-group">
                    <div>
                        <input id="demo" type="file" name="files" accept="image/jpg, image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple>
                    </div>
                </div>
            </div>
            <div class="card-footer mb-1">
                <a href="javascript:void(0);" class="btn btn-primary">Add Product</a>
                <a href="javascript:void(0);" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->


@endsection