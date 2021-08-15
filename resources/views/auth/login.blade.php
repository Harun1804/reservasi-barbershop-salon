@extends('layouts.auth')

@section('title','Login')
@section('content')
<div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8 mx-auto">
        <div class="card border-primary-ijigo">
            <div class="card-body mx-5">
                <h1 class="card-title text-center">Login</h1>
                <form action="{{ route('post.login') }}" class="row" method="post">
                    @csrf
                    <div class="col-md-12 mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control rounded-pill" id="user-email" name="email"
                            required autocomplete="off" />
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control rounded-pill" id="user-password"
                            name="password" required autocomplete="off" />
                    </div>
                    <div class="col-md-6 text-center">
                        <a href="{{ route('register.pelanggan') }}" class="btn btn-register px-5 py-2">Register</a>
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="submit" class="btn btn-login px-5 py-2">
                            Login
                        </button>
                    </div>
                </form>
                <div class="col-md-12 my-4 text-center">
                    <p class="text-muted">Or login with</p>
                    <a href="#" class="btn btn-white px-5 py-2">
                        <img src="{{ asset('assets/icons/google-logo.png') }}" alt="login with google button" />
                    </a>
                </div>
                <div class="col-md-12 my-4 text-center">
                    <a href="#" class="link-dark px-5 py-2">
                        Register sebagai mitra
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
