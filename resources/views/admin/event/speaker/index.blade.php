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
        <div class="row mb-4">
            <div class="col-xl-12">
                <a href="{{ route('admin.event.speaker.create') }}" class="btn btn-primary">Add </a>
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
                                    <th scope="col">event</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($speaker  as $speakers)
                                <tr scope="row">
                                    <td>{{  $loop->index + 1 }}</td>
                                    <td><img width="50" height="50" src="{{ asset('upload/event/speaker/'.$speakers->image) }}" alt=""></td>
                                    <td>{{  \Str::limit($speakers->name, 50) }}</td>
                                    <td>{{ $speakers->position }}</td>
                                    <td>{{ \Str::limit($speakers->event->title, 50) }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-sm btn-info btn-wave"  href="{{ route('admin.event.speaker.edit', $speakers->id ) }}">
                                                <i class="ri-edit-line"></i>
                                                Edit
                                            </a>
                                            <form action="{{   route('admin.event.speaker.delete', $speakers->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger btn-wave">
                                                    <i class="ri-delete-bin-line align-middle  d-inline-block"></i>Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>   
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
