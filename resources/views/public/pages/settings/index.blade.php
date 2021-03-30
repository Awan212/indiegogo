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
        padding: 10px 40px;
        border: none;
        background: #e51075;
        color: white;
        font-size: 23px;
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

        <form action="{{ url('edit-profile') }}" method="POST">
            @csrf
            <div class="bg-light p-2">
                <h2 class="font-weight-bold">Basic Info</h2>
                <hr>


                <label for="" class="text-muted">First Name</label>
                <input type="text" name="first_name" id="first_name"
                    value="{{ Auth::guard('web')->user()->first_name }}" class="form-control w-50">

                <label for="" class="text-muted">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control w-50"
                    value="{{ Auth::guard('web')->user()->last_name }}">

                <label for="" class="text-muted">Country</label>
                <input type="text" name="country" id="country" class="form-control w-50"
                    value="{{ Auth::guard('web')->user()->country }}">

                <div class="form-group row w-75">
                    <div class="col-sm-6">
                        <label for="" class="text-muted">City</label>
                        <input type="text" name="city" id="city" class="form-control w-100"
                            value="{{ Auth::guard('web')->user()->city }}">
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="text-muted">Postal Code</label>
                        <input type="text" name="postal_code" id="postal_code" class="form-control w-100"
                            value="{{ Auth::guard('web')->user()->postal_code }}">
                    </div>
                </div>
            </div>


            <div class="bg-light p-2">
                <h2 class="font-weight-bold p-1">Your Story</h2>
                <hr>

                <label for="" class="text-muted">Short Description</label>
                <input type="text" name="short_description" id="" class="form-control w-75"
                    value="{{ Auth::guard('web')->user()->short_description }}">

                <label for="" class="text-muted">About Me</label>
                <textarea name="about_me" id="about_me" cols="90" rows="10"
                    class="form-control w-75">{{ Auth::guard('web')->user()->about_me }}</textarea>
            </div>

            <div class="bg-light p-2 mt-2">
                <h2 class="font-weight-bold p-1">Outside Links</h2>
                <hr>

                <label for="" class="text-muted">Facbook Link</label>
                <input type="url" name="facebook_link" id="facebook_link" class="form-control w-75"
                    value="{{ Auth::guard('web')->user()->facebook_link }}">

                <label for="" class="text-muted">Twitter Link</label>
                <input type="url" name="twitter_link" id="twitter_link" class="form-control w-75"
                    value="{{ Auth::guard('web')->user()->twitter_link }}">

                <label for="" class="text-muted">YouTube Link</label>
                <input type="url" name="youtube_link" id="youtube_link" class="form-control w-75"
                    value="{{ Auth::guard('web')->user()->youTube_link }}">

                <label for="" class="text-muted">IMDb Link</label>
                <input type="url" name="imdb_link" id="imdb_link" class="form-control w-75"
                    value="{{ Auth::guard('web')->user()->IMDb_link }}">

                <label for="" class="text-muted">Website Link</label>
                <input type="url" name="website_link" id="website_link" class="form-control w-75"
                    value="{{ Auth::guard('web')->user()->website_link }}">

            </div>

            <div class="w-75 d-flex justify-content-end">
                <button class="btn-save">Save</button>
            </div>
        </form>
    </div>
</section>
@endsection



@section('scripts')

@endsection
