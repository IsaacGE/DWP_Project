@extends('layout.MainLayout')
@section('title')
    Dashboard
@endsection

@section('content')
    <h3>Posts list</h3>
    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <img src="{{ asset('uploads') . '/' . $post->imagePath }}" class="card-img-top" alt="">
                    </div>
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->text }}</p>
                    <button type="button" class="btn btn-primary">Button</button>
                </div>
            </div>
        @endforeach
    @else
    @endif
@endsection
