@extends('layout.MainLayout')

@section('content')
    <div class="row text-center justify-content-center p-lg-5">
        <div class="col-md-6 p-2">

            <div class="card mb-3">
                <div class="card-body">
                    <form method="post" action="/signup">
                        @csrf
                        <div class="row">
                            <h3 class="pb-4 fw-bold">Sign up</h3>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-outline">
                                        <input type="text" name="name" class="form-control"/>
                                        <label class="form-label" for="name">Name:</label>
                                    </div>
                                    @error('name')
                                        <small class="text-danger text-start">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-outline">
                                        <input type="text" name="username" class="form-control" />
                                        <label class="form-label" for="username">Username:</label>
                                    </div>
                                    @error('username')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-outline">
                                        <input type="email" name="email" class="form-control" />
                                        <label class="form-label" for="email">Email address:</label>
                                    </div>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-outline">
                                        <input type="password" name="password" class="form-control" />
                                        <label class="form-label" for="password">Password:</label>
                                    </div>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
    
                        </div>
                        <button type="submit" id="btnSignUp" class="btn btn-danger gx-md-5">
                            <i class="bi bi-check-circle-fill"></i>&nbsp;Sign up
                        </button>
                    </form>
                    <small>Already have an account?&nbsp;<a href="/signin" class="text-danger fw-bold">Sign in.</a></small>
                </div>
                
            </div>

        </div>

    </div>
@endsection
