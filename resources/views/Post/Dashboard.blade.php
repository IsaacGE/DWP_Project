@extends('layout.MainLayout')
@section('title')
    Dashboard
@endsection

@section('content')
@if ($posts->count())
@endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Posts</h5>
            <p class="card-text"></p>
            <button type="button" class="btn btn-primary">Button</button>
        </div>
    </div>
@endsection
