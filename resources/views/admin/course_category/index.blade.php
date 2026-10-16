@extends('layouts.master-2')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Grid Card -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Course Category</h1>
        <div class="ms-md-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Course Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Course Category</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="row mb-4">
            <div class="col-xl-12">
                <a href="javascript:void()" data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-primary">Add </a>
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($course_category  as $course_categorys)
                                <tr scope="row">
                                    <th>{{  $loop->index + 1 }}</th>
                                    <td>{{  $course_categorys['name'] }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $course_categorys->id }}" class="btn btn-sm btn-info btn-wave">
                                                <i class="ri-edit-line"></i>
                                                Edit
                                            </button>
                                            <form action="{{   route('admin.course.category.delete', $course_categorys->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger btn-wave">
                                                    <i class="ri-delete-bin-line align-middle  d-inline-block"></i>Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @include('admin.course_category.edit')    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div> <!--End::row-1 --> 
</div>
@include('admin.course_category.create')
@endsection
