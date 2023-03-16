@extends('layout.MainLayout')

@section('content')
<div class="row">
    <div class="col-4 p-5 text-center m-2 rounded-2">
        <h4 class="mb-3">Select your image</h4>
        <form  action="{{route ('uploadImage')}}" enctype="multipart/form-data"
        id="dropzone" class="dropzone rounded border border-1 w-100 h-100 items-center 
        d-flex aling-items-cente justify-content-center">
        @csrf
        </form>
    </div> 
    <div class="col-7 p-5 text-center m-2 rounded-2 border">
        <h2 class="mb-3">Create a new post</h2>
        <div class="form-outline m-3">
            <input type="text" class="form-control" name="title" id="title" />
            <label class="form-label" for="title">Title</label>
          </div>
        <div class="form-outline m-3">
            <textarea class="form-control" name="text" id="text" rows="4"></textarea>
            <label class="form-label" for="text">Comment</label>
        </div>
        <a class="btn btn-primary" href="" role="button">Call to action</a>
    </div>
</div>
@endsection