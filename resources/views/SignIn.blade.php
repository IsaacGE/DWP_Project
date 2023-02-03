@extends('layout.MainLayout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h3 class="pb-4 fw-bold">Sign in</h3>
                    <form class="p-1" action="{{ route('signIn') }}" method="POST">
                        @csrf
                        @if (session('message'))
                            <div class="alert alert-danger">
                                <small style="text-danger">{{ session('message') }}</small>
                            </div>
                        @endif
                        <div class="mb-3">
                            <div class="form-outline">
                                <input type="email" name="email" class="form-control" />
                                <label class="form-label" for="email">Email address</label>
                            </div>
                            @error('password')
                                <small class="text-danger text-start">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-outline">
                                <input type="password" name="password" class="form-control" />
                                <label class="form-label" for="password">Password</label>
                            </div>
                            @error('password')
                                <small class="text-danger text-start">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-danger gx-md-5">
                            <i class="bi bi-box-arrow-in-right"></i>&nbsp;Sign in
                        </button>
                    </form>
                    <small class="pt-2">Don't have an account?&nbsp;<a href="/signup" class="text-danger fw-bold">Sign
                            up.</a></small>
                </div>
            </div>
        </div>
    </div>
@endsection
