
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">{{ __('Upload Course Category ') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.course.category.store') }}" method="POST" enctype="multipart/form-data">
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
                    <div class="row g-2">
                        <div class="col mb-0 text-center">
                            <input type="submit" class="btn btn-primary btn-lg" value="Save ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>