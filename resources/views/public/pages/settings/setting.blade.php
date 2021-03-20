@extends('public.layouts.public')
@section('title')
{{ Auth::user()->first_name  }}
@endsection

@section('styles')
<!-- BEGIN: Vendor CSS-->
<style>
    .profile-nav {
        margin: 40px 0px;
        /* display: flex; */
        width: 100%;
        display: block;
        height: 10px;
    }

    .profile-nav ul {
        list-style: none;
        display: flex;
        justify-content: start;
        justify-content: space-evenly;
        width: 30%;
        font-weight: 800;
    }

    .profile-nav ul li {
        padding: 10px 0px;
    }

    .profile-nav ul li a:hover {
        color: #e51075;
        border-bottom: 2px solid #e51075;
    }

    .profile-nav ul li active {
        color: #e51075;
        border-bottom: 2px solid #e51075;
    }

    .btn-save {
        padding: 8px 30px;
        border: none;
        background: #e51075;
        color: white;
        font-size: 20px;
        border-radius: 10px;
    }

    .btn-save:hover {
        opacity: .8;
    }
</style>

<!-- END: Vendor CSS-->

<!-- BEGIN: Page CSS-->


<!-- END: Page CSS-->
@endsection

@section('content')
@if(Session::has('error'))
<div class="alert alert-danger">
    <strong>{{ Session::get('error') }}</strong>
</div>
@endif
@if(Session::has('message'))
<div class="alert alert-info">
    <strong>{{ Session::get('message') }}</strong>
</div>
@endif
<section class="mt-5 mb-5">
    <div class="container">
        <h2 class="font-weight-bold">{{ Auth::user()->first_name }}</h2>

        <nav class="profile-nav">
            <ul class="">
                <li><a href="{{ Route('setting') }}" class="">Profile</a></li>
                <li><a href="{{ Route('edit-setting') }}" class="hre">Settings</a></li>
                {{-- <li><a href="" class="hre">Emails</a></li>
                <li><a href="" class="hre">Interest</a></li> --}}
            </ul>
        </nav>
        <hr>

        <form action="{{ url('edit-settings') }}" method="POST">
            @csrf
            <div class="bg-light p-2">
                <h2 class="font-weight-bold">Update Your Password</h2>
                <hr>


                <label for="" class="text-muted">Current Password</label>
                <input type="password" name="current_password" id="current_password" placeholder="Current Password"
                    class="form-control w-50 @error('current_password') is-invalid @enderror">
                @error('current_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="" class="text-muted">New Password</label>
                <input type="password" name="password" id="password"
                    class="form-control w-50 @error('password') is-invalid @enderror" placeholder="New Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="" class="text-muted">Password Confirm</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="form-control w-50 @error('password_confirmation') is-invalid @enderror"
                    placeholder="Confirm Password">
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>


            <div class="w-75 d-flex justify-content-start">
                <button class="btn-save">Save</button>
            </div>
        </form>


        <div class="bg-light p-2 mt-5 w-75">
            <h2 class="font-weight-bold">Deactivate Your Account</h2>
            <hr>
            <p>By deactivating your account, you will no longer be able to log in, manage any contributions, and will
                lose any draft campaigns. Please review our Privacy Policy for how we store data.

                If you need to change your subscription settings, visit your email preferences. If you would like
                changes made to your account because of privacy laws enacted in your country or region, please submit a
                request.</p>
            <div class="w-75 d-flex justify-content-start">
                <a href="{{ url('deactivate_aacount') }}" class="btn-save">Deactivate Your Account</a>
            </div>
        </div>
    </div>
</section>
@endsection



@section('scripts')

<!-- BEGIN: Vendor JS-->

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page JS-->

<!-- BEGIN Page JS-->

@endsection
