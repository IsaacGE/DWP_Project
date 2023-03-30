@extends('layout.MainLayout')

@section('content')
    <div class="row">
        <div class="col-4 p-5 text-center m-2 rounded-2">
            <h4 class="mb-3">Select your image</h4>
            <form action="{{ route('uploadImage') }}" enctype="multipart/form-data" id="dropzone"
                class="dropzone rounded border border-1 w-100 h-100 items-center 
        d-flex aling-items-cente justify-content-center">
                @csrf
            </form>
        </div>
        <div class="col-7 p-5 text-center m-2 rounded-2 border">
            <h2 class="mb-3">Create a new post</h2>
            <form action="{{ route('Post.Create') }}" method="POST">
                @csrf
                <div class="form-outline mb-2">
                    <input type="text" class="form-control" name="title" maxlength="155" />
                    <label class="form-label" for="title">Title</label>
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-outline mb-2">
                    <textarea class="form-control" name="text" rows="4" maxlength="500"></textarea>
                    <label class="form-label" for="text">Comment</label>
                    @error('text')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <input name="imagePath" type="hidden" value={{ old('imagePath') }} />
                @error('imagePath')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <button class="btn btn-danger" type="submit">Upload post</button>
            </form>
        </div>
    </div>
@endsection
