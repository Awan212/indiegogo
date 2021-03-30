@extends('public.layouts.public')

@section('title')
Login
@endsection
@section('styles')
<style>
    .login-form {
        width: 500px;
    }

    .login-form label {
        font-size: 14px;
        font-weight: 700;
        margin-top: 10px;
    }

    .login-form .form-control {
        font-size: 18px;
        font-weight: 200;
        margin: 0px;
        border: none;
        outline: #e51075;
    }

    .forget-pass {
        margin: 16px 0px;
        font-weight: 600;
        text-decoration: underline;
    }

    .btn-login {
        display: block;
        border: none;
        width: 100%;
        height: 38px;
        font-size: 20px;
        font-weight: 700;
        background: #e51075;
        color: white;
        text-align: center;
        border-radius: 5px;
    }

    .btn-login:hover {
        opacity: .9;
    }

    .or-text {
        font-size: 18px;
    }

    .btn-facebook {
        display: block;
        width: 100%;
        border: none;
        text-align: center;
        background: #405c9d;
        padding: 7px;
        color: white;
        font-weight: 700;
        height: 38px;
    }

    .btn-linkden {
        display: block;
        width: 100%;
        height: 38px;
        border: none;
        text-align: center;
        background: #405c9d;
        padding: 7px;
        color: white;
        font-weight: 700;
        margin-top: 20px;
    }
</style>
@endsection

@section('content')

<section class="mt-5">
    <div class="login-form m-auto">
        <form method="post" action="{{ route('login') }}">
            @csrf
            <h2 class="text-center font-weight-bold">Welcome Back!</h2>
            <p class="text-muted text-center">Log in to continue.</p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="password">Password</label>
            <input type="password" name="password" id="password"
                class="form-control @error('password') is-invalid @enderror">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <p class="forget-pass text-right"><a href="{{ route('password.request') }}">Forget your password?</a></p>

            <button class="btn-login">LOG IN</button>
        </form>
        <p class="text-muted text-center m-2 or-text">OR</p>
        <a href="{{ url('auth/redirect','facebook') }}" class="btn-facebook">Continue with Facebbok</a>
        <a href="{{ url('auth/redirect','linkedin') }}" class="btn-linkden">Continue with Linkedin</a>

        <p class="mt-5 text-center">New to Indiegogo? <a href="{{ route('register') }}" class="h5">Sign up</a></p>
    </div>
</section>
@endsection
