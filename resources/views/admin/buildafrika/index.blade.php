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
        <div class="row mb-4">
            <div class="col-xl-12">
                <a href="{{ route('admin.buildafrika.create') }}" class="btn btn-primary">Add </a>
            </div>
        </div>
        <div class="col-12 col-xxl-12 col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-bordered">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Edition</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($buildafrika  as $buildafrikas)
                                <tr scope="row">
                                    <th>{{  $loop->index + 1 }}</th>
                                    <th><img src="{{ asset('upload/buildafrika/'.$buildafrikas->image) }}" width="50" height="50" alt=""></th>
                                    <td>{{  $buildafrikas['name'] }}</td>
                                    <td>{{  $buildafrikas['position'] }}</td>
                                    <td>{{  $buildafrikas['edition'] }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $buildafrikas->id }}" class="btn btn-sm btn-info btn-wave">
                                                <i class="ri-edit-line"></i>
                                                Edit
                                            </button>
                                            <form action="{{   route('admin.buildafrika.delete', $buildafrikas->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger btn-wave">
                                                    <i class="ri-delete-bin-line align-middle  d-inline-block"></i>Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @include('admin.buildafrika.edit')    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div> <!--End::row-1 --> 
</div>
@endsection
