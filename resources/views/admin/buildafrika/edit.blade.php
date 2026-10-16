
<div class="modal fade" id="exampleModal{{ $buildafrikas->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">{{ __('Edit ') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.buildafrika.update', $buildafrikas->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Name</label> 
                        <input type="text" class="form-control @error('name') is-invalid  @enderror" id="exampleInputEmail1" value="{{ $buildafrikas->name }}" name="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3"> 
                        <label for="exampleInputPassword1" class="form-label">Position</label> 
                        <input type="text" class="form-control @error('position') is-invalid  @enderror" name="position" value="{{ $buildafrikas->position }}" id="exampleInputPassword1">
                        @error('position')
                            <span class="invalid-feedback" role="alert">
                            {{ $message }}
                            </span>
                        @enderror 
                    </div>
                    <div class="mb-3"> 
                        <label for="exampleCheck1" class="form-label">Edition</label>
                        <input type="text" class="form-control @error('edition') is-invalid  @enderror" name="edition" value="{{ $buildafrikas->edition }}" id="exampleCheck1">
                        @error('edition')
                            <span class="invalid-feedback" role="alert">
                            {{ $message }}
                            </span>
                        @enderror
                    </div> 
                    <div class="mb-3">
                        <label for="image-file">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid  @enderror" value="{{ $buildafrikas->image }}" id="image-file">
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
</div>