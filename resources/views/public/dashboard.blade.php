@extends('public.layouts.public')
@section('title')
{{ Auth::user()->first_name  }}
@endsection

@section('styles')
<!-- BEGIN: Vendor CSS-->


<!-- END: Vendor CSS-->

<!-- BEGIN: Page CSS-->


<!-- END: Page CSS-->
@endsection

@section('content')

<!-- Slider -->
<section>
    <div id="main-carousel" class="carousel slide" data-ride="carousel" style="position: relative;">
        <div id="main-carousel-overlay"></div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="main-caroousel-images" src="{{ asset('images/1.png') }}" height="480"
                    style="background: orange;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="main-caroousel-images" src="{{ asset('images/2.jpg') }}" height="480"
                    style="background: red;" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="main-caroousel-images" src="{{ asset('images/3.jpg') }}" height="480"
                    style="background: blue;" alt="Third slide">
            </div>
        </div>
        <div id="main-slider-featured">
            <div class="main-slider-featured-details">
                <span id="main-slider-featured-details-featured-word">FEATURED</span>
                <p id="main-slider-featured-details-featured-heading">Avarax-E - Self-Cleaning & Most Affordable E-bike
                </p>
                <p id="main-slider-featured-details-featured-description">
                    Ultra-lightweight and powerful ebike with 65 miles of range and speed of 28mph.
                </p>
            </div>

            <div id="main-carousel-controls">
                <a href="#main-carousel" role="button" data-slide="prev">
                    <div id="main-carousel-controls-left" class="main-carousel-controls-dir">

                        <svg viewBox="0 0 8 12" id="main-carousel-controls-left-caret"
                            class="main-carousel-controls-dir-caret">
                            <path
                                d="M7.294 2.706a.997.997 0 00-.005-1.417L6.711.711a1.01 1.01 0 00-1.423 0L.712 5.289a1.01 1.01 0 000 1.424l4.576 4.576a1 1 0 001.423.001l.578-.578a1 1 0 00.005-1.417L4 6l3.294-3.294z">
                            </path>
                        </svg>

                    </div>
                </a>

                <a href="#main-carousel" role="button" data-slide="next">
                    <div id="main-carousel-controls-right" class="main-carousel-controls-dir">

                        <svg viewBox="0 0 8 12" id="main-carousel-controls-right-caret"
                            class="main-carousel-controls-dir-caret">
                            <path
                                d="M.706 9.294a.997.997 0 00.005 1.417l.578.578a1.01 1.01 0 001.423 0l4.576-4.577a1.01 1.01 0 000-1.424L2.712.712A1 1 0 001.289.71l-.578.578a1 1 0 00-.005 1.417L4 6 .706 9.294z">
                            </path>
                        </svg>


                    </div>
                </a>

            </div>
        </div>
    </div>
</section>


<!-- Pupoular Projects -->
<section id="popular-projects">
    <div class="container">

        <div id="popular-projects-header">
            <div class="">
                <div id="popular-projects-header-title">Popular Projects</div>
            </div>
        </div>

        <div id="popular-projects-body">
            <div class="row" id="pouplar-projects-cards">


                <div class="col-3">
                    <div class="popular-projects-card">
                        <a href="{{ url('project') }}">
                            <!-- Card Image -->
                            <div class="pouplar-projects-card-img">
                                <img style="width: 100%;"
                                    src="https://c4.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fit,w_auto,g_center,q_auto:best,dpr_1.3,f_auto/voqqeulfbiruky3rxef7"
                                    alt="">
                            </div>

                            <!-- Card Details -->
                            <div class="popular-projects-card-details">
                                <div class="popular-projects-card-details-header">
                                    <div class=" popular-projects-card-details-header-title">
                                        FUNDING
                                    </div>
                                    <div class=" popular-projects-card-details-header-save">
                                        <svg viewBox="0 0 20 20"
                                            class="popular-projects-card-details-header-save-heart">
                                            <path
                                                d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="popular-projects-card-details-body">
                                    <div class="popular-projects-card-details-body-title">
                                        AYA NEO：World’s First 7nm Handheld Gaming Device
                                    </div>
                                    <div class="popular-projects-card-details-body-description">
                                        AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery,
                                        Ergonomic Joystick, Win10 OS
                                    </div>
                                    <div class="popular-projects-card-details-body-type">
                                        <a href="{{ url('home') }}" class="hre">Tech & Innovation</a>
                                    </div>
                                    <div class="popular-projects-card-details-body-sign-up">
                                        Sign up to get early access and special discount!
                                    </div>
                                    <div class="popular-projects-card-details-body-status">
                                        <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;"
                                            id="v-rocket_fillable">
                                            <path fill-rule="evenodd"
                                                d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z">
                                            </path>
                                        </svg> &nbsp;Launching Soon
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="popular-projects-card">
                        <a href="{{ url('project') }}">
                            <!-- Card Image -->
                            <div class="pouplar-projects-card-img">
                                <img style="width: 100%;"
                                    src="https://c4.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fit,w_auto,g_center,q_auto:best,dpr_1.3,f_auto/kj62idppsudcimru1ogc"
                                    alt="">
                            </div>

                            <!-- Card Details -->
                            <div class="popular-projects-card-details">
                                <div class="popular-projects-card-details-header">
                                    <div class=" popular-projects-card-details-header-title">
                                        FUNDING
                                    </div>
                                    <div class=" popular-projects-card-details-header-save">
                                        <svg viewBox="0 0 20 20"
                                            class="popular-projects-card-details-header-save-heart">
                                            <path
                                                d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="popular-projects-card-details-body">
                                    <div class="popular-projects-card-details-body-title">
                                        AYA NEO：World’s First 7nm Handheld Gaming Device
                                    </div>
                                    <div class="popular-projects-card-details-body-description">
                                        AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery,
                                        Ergonomic Joystick, Win10 OS
                                    </div>
                                    <div class="popular-projects-card-details-body-type">
                                        <a href="{{ url('home') }}" class="hre">Home</a>
                                    </div>
                                    <div class="popular-projects-card-details-body-sign-up">
                                        Sign up to get early access and special discount!
                                    </div>
                                    <div class="popular-projects-card-details-body-status">
                                        <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;"
                                            id="v-rocket_fillable">
                                            <path fill-rule="evenodd"
                                                d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z">
                                            </path>
                                        </svg> &nbsp;Launching Soon
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="popular-projects-card">
                        <a href="{{ url('project') }}">
                            <!-- Card Image -->
                            <div class="pouplar-projects-card-img">
                                <img style="width: 100%;"
                                    src="https://c4.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fit,w_auto,g_center,q_auto:best,dpr_1.3,f_auto/zirrjrzq3fs5jkjgxhvt"
                                    alt="">
                            </div>

                            <!-- Card Details -->
                            <div class="popular-projects-card-details">
                                <div class="popular-projects-card-details-header">
                                    <div class=" popular-projects-card-details-header-title">
                                        FUNDING
                                    </div>
                                    <div class=" popular-projects-card-details-header-save">
                                        <svg viewBox="0 0 20 20"
                                            class="popular-projects-card-details-header-save-heart">
                                            <path
                                                d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="popular-projects-card-details-body">
                                    <div class="popular-projects-card-details-body-title">
                                        AYA NEO：World’s First 7nm Handheld Gaming Device
                                    </div>
                                    <div class="popular-projects-card-details-body-description">
                                        AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery,
                                        Ergonomic Joystick, Win10 OS
                                    </div>
                                    <div class="popular-projects-card-details-body-type">
                                        <a href="{{ url('home') }}" class="hre">Home</a>
                                    </div>
                                    <div class="popular-projects-card-details-body-sign-up">
                                        Sign up to get early access and special discount!
                                    </div>
                                    <div class="popular-projects-card-details-body-status">
                                        <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;"
                                            id="v-rocket_fillable">
                                            <path fill-rule="evenodd"
                                                d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z">
                                            </path>
                                        </svg> &nbsp;Launching Soon
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="popular-projects-card">
                        <a href="{{ url('project') }}">
                            <!-- Card Image -->
                            <div class="pouplar-projects-card-img">
                                <img style="width: 100%;"
                                    src="https://c0.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fit,w_auto,g_center,q_auto:best,dpr_1.3,f_auto/ghwerjr3na3znryawhyr"
                                    alt="">
                            </div>

                            <!-- Card Details -->
                            <div class="popular-projects-card-details">
                                <div class="popular-projects-card-details-header">
                                    <div class=" popular-projects-card-details-header-title">
                                        FUNDING
                                    </div>
                                    <div class=" popular-projects-card-details-header-save">
                                        <svg viewBox="0 0 20 20"
                                            class="popular-projects-card-details-header-save-heart">
                                            <path
                                                d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="popular-projects-card-details-body">
                                    <div class="popular-projects-card-details-body-title">
                                        AYA NEO：World’s First 7nm Handheld Gaming Device
                                    </div>
                                    <div class="popular-projects-card-details-body-description">
                                        AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery,
                                        Ergonomic Joystick, Win10 OS
                                    </div>
                                    <div class="popular-projects-card-details-body-type">
                                        <a href="{{ url('home') }}" class="hre">Home</a>
                                    </div>
                                    <div class="popular-projects-card-details-body-sign-up">
                                        Sign up to get early access and special discount!
                                    </div>
                                    <div class="popular-projects-card-details-body-status">
                                        <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;"
                                            id="v-rocket_fillable">
                                            <path fill-rule="evenodd"
                                                d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z">
                                            </path>
                                        </svg> &nbsp;Launching Soon
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- Trendings -->
<section id="trendings">
    <div class="container">
        <div class="row" class="trendings-cards">

            <div class="col-6 trendings-card-container">
                <div class="trendings-card">

                    <div class="trendings-main-image">
                        <img class="trendings-main-image-img"
                            src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1614035747/fkbuqo1rtawruhntjdvk.jpg"
                            alt="">
                    </div>
                    <a href="#">
                        <div class="trendings-card-overlay"></div>

                    </a>
                    <div class="trendings-card-overlay-heading">10 Cool & Clever Finds</div>

                    <div class="trendings-card-title">Our roundup of standout projects</div>
                    <a href="#">
                        <div class="trendings-card-see-collection">SEE THE COLLECTION &nbsp;<svg viewBox="0 0 8 12"
                                style="height: 11px;position:relative;top:-1px" id="v-right_caret">
                                <path
                                    d="M.706 9.294a.997.997 0 00.005 1.417l.578.578a1.01 1.01 0 001.423 0l4.576-4.577a1.01 1.01 0 000-1.424L2.712.712A1 1 0 001.289.71l-.578.578a1 1 0 00-.005 1.417L4 6 .706 9.294z">
                                </path>
                            </svg></div>
                    </a>

                </div>

            </div>

            <div class="col-6 trendings-card-container">
                <div class="trendings-card">

                    <div class="trendings-main-image">
                        <img class="trendings-main-image-img"
                            src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1613763241/lmiafrufd5hv6nu31095.png">
                    </div>
                    <a href="#">
                        <div class="trendings-card-overlay"></div>
                    </a>
                    <div class="trendings-card-overlay-heading">Team Favorites</div>

                    <div class="trendings-card-title">Our roundup of standout projects</div>
                    <a href="#">
                        <div class="trendings-card-see-collection">SEE THE COLLECTION &nbsp;<svg viewBox="0 0 8 12"
                                style="height: 11px;position:relative;top:-1px" id="v-right_caret">
                                <path
                                    d="M.706 9.294a.997.997 0 00.005 1.417l.578.578a1.01 1.01 0 001.423 0l4.576-4.577a1.01 1.01 0 000-1.424L2.712.712A1 1 0 001.289.71l-.578.578a1 1 0 00-.005 1.417L4 6 .706 9.294z">
                                </path>
                            </svg></div>
                    </a>

                </div>

            </div>

            <div class="col-6 trendings-card-container">
                <div class="trendings-card">

                    <div class="trendings-main-image">
                        <img class="trendings-main-image-img"
                            src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1610645828/srw2ffyyagzenfu6pznr.png"
                            alt="">
                    </div>
                    <a href="#">
                        <div class="trendings-card-overlay"></div>
                    </a>
                    <div class="trendings-card-overlay-heading">InDemand Superstars</div>
                    <div class="trendings-card-title">Our roundup of standout projects</div>
                    <a href="#">
                        <div class="trendings-card-see-collection">SEE THE COLLECTION &nbsp;<svg viewBox="0 0 8 12"
                                style="height: 11px;position:relative;top:-1px" id="v-right_caret">
                                <path
                                    d="M.706 9.294a.997.997 0 00.005 1.417l.578.578a1.01 1.01 0 001.423 0l4.576-4.577a1.01 1.01 0 000-1.424L2.712.712A1 1 0 001.289.71l-.578.578a1 1 0 00-.005 1.417L4 6 .706 9.294z">
                                </path>
                            </svg></div>
                    </a>

                </div>

            </div>

            <div class="col-6 trendings-card-container">
                <div class="trendings-card">

                    <div class="trendings-main-image">
                        <img class="trendings-main-image-img"
                            src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1597692648/t5nvsqhmxvwgk8cgrtac.png"
                            alt="">
                    </div>
                    <a href="">
                        <div class="trendings-card-overlay"></div>
                    </a>
                    <div class="trendings-card-overlay-heading">Join the Conversation</div>

                    <div class="trendings-card-title">Our roundup of standout projects</div>
                    <a href="#">
                        <div class="trendings-card-see-collection">SEE THE COLLECTION &nbsp;<svg viewBox="0 0 8 12"
                                style="height: 11px;position:relative;top:-1px" id="v-right_caret">
                                <path
                                    d="M.706 9.294a.997.997 0 00.005 1.417l.578.578a1.01 1.01 0 001.423 0l4.576-4.577a1.01 1.01 0 000-1.424L2.712.712A1 1 0 001.289.71l-.578.578a1 1 0 00-.005 1.417L4 6 .706 9.294z">
                                </path>
                            </svg></div>
                    </a>

                </div>

            </div>

        </div>
    </div>

</section>

<!-- Info Banner -->
<section id="info-banner">
    <div class="container">
        <div id="info-banner-main-image">
            <img id="info-banner-main-image-img"
                src="https://c4.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fit,w_auto,g_center,q_auto:best,dpr_1.3,f_auto/homepage/crowdfunding-bg-desktop-lg.jpg"
                alt="">
        </div>
        <div id="info-banner-body">
            <div id="info-banner-body-heading">
                Back the project, take the ride
            </div>
            <div id="info-banner-body-description">
                Indiegogo is your destination for clever innovations in tech, design, and more, often with special perks
                and pricing for early adopters. Back a campaign, share your ideas and feedback with the project team -
                and join the risks and rewards of bringing new products to life.
            </div>
            <a href="#">
                <div id="info-banner-body-learn">
                    LEARN ABOUT CROWDFNDING &nbsp;<svg viewBox="0 0 8 12"
                        style="height: 13px;position:relative;top:-2px" id="v-right_caret">
                        <path
                            d="M.706 9.294a.997.997 0 00.005 1.417l.578.578a1.01 1.01 0 001.423 0l4.576-4.577a1.01 1.01 0 000-1.424L2.712.712A1 1 0 001.289.71l-.578.578a1 1 0 00-.005 1.417L4 6 .706 9.294z">
                        </path>
                    </svg>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- Categories -->
<section id="categories">
    <div class="container">

        <div id="categories-header">
            <div id="categories-header-title">
                Which categories interest you?
            </div>
            <div class="categories-header-description">
                Discover projects just for you and get great recommendations when you select your interests.
            </div>
            <a href="#">
                <div id="categories-header-button" style="margin-top: 18px;">
                    SIGN UP AND SELECT INTERESTS
                </div>
            </a>
            <div class="categories-header-description" style="margin-top: 14px;">
                Or explore our top categories
            </div>
        </div>

        <div id="categories-body">
            <div class="row" id="categories-body-categories">

                <div class="col-2">
                    <a href="#">
                        <div class="categories-body-category">
                            <div class="categories-body-category-image">
                                <svg viewBox="0 0 150 150" style="height: 65px;width: 65px" id="v-homepage_home">
                                    <path class="home0"
                                        d="M128.482 67.272H21.224a1 1 0 00-1 1v72.983a1 1 0 001 1h58.547a1 1 0 001-1v-31.872c0-.618.448-1.119 1-1.119h19.852c.552 0 1 .501 1 1.12v31.872a1 1 0 001 1h24.859a1 1 0 001-1V68.273a1 1 0 00-1-1zM57.874 91.885c0 5.927-4.805 10.732-10.732 10.732S36.41 97.812 36.41 91.885c0-.222.02-.44.033-.659.342-5.618 4.994-10.073 10.699-10.073 4.052 0 7.577 2.248 9.404 5.563a10.678 10.678 0 011.328 5.17zm79.873-33.7l-29.928-24.126L75.453 7.966a1 1 0 00-1.258.002L51.94 26.01v-9.054a1 1 0 00-1-1H37.461a1 1 0 00-1 1v21.602L12.249 58.187c-.528.428-.451 1.157-.018 1.533a.968.968 0 00.647.244H137.12c.943 0 1.362-1.187.627-1.779z">
                                    </path>
                                    <path
                                        d="M47.142 81.153c4.052 0 7.578 2.247 9.404 5.563l72.936-16.364v-2.08a1 1 0 00-1-1H21.224a1 1 0 00-1 1v26.593l16.219-3.639c.342-5.618 4.994-10.073 10.699-10.073zm90.605-22.968l-29.928-24.126L75.453 7.966a1 1 0 00-1.258.002L51.94 26.011v-9.054a1 1 0 00-1-1H37.461a1 1 0 00-1 1v21.602L12.249 58.187c-.528.428-.451 1.156-.018 1.533a.967.967 0 00.647.244H137.12c.943 0 1.362-1.186.627-1.778z"
                                        fill="#eb1478"></path>
                                    <path
                                        d="M80.771 109.383c0-.618.448-1.12 1-1.12h19.852c.552 0 1 .502 1 1.12v25.399l15.985 7.473h9.874a1 1 0 001-1V70.352L56.546 86.716a10.678 10.678 0 011.328 5.17c0 5.927-4.805 10.732-10.732 10.732S36.41 97.813 36.41 91.886c0-.222.02-.44.033-.659l-16.22 3.64v1.392l60.547 28.307v-15.183z"
                                        fill="#bf106e"></path>
                                    <path class="home0" fill="#960d56"
                                        d="M103.623 142.255h14.985l-15.985-7.473v6.473a1 1 0 001 1zm-82.4 0h58.548a1 1 0 001-1v-16.69L20.224 96.258v44.997a1 1 0 001 1z">
                                    </path>
                                </svg>
                            </div>
                            <p class="categories-body-category-title">HOME</p>
                        </div>
                    </a>


                </div>

                <div class="col-2">
                    <a href="#">
                        <div class="categories-body-category">
                            <div class="categories-body-category-image">
                                <svg viewBox="0 0 150 150" style="height: 65px;" id="v-homepage_phones_accessories">
                                    <path class="phone0"
                                        d="M118.4 5.4l-86.6-.1c-.6 0-1.1.5-1.1 1.1v31.1l-.1 106c0 .6.5 1.1 1.1 1.1h16l70.6.1c.6 0 1.1-.5 1.1-1.1v-31l.1-106.2c-.1-.5-.5-1-1.1-1zm-50 6.2c0-.5.4-1 1-1h11.3c.5 0 1 .4 1 1v2.5c0 .5-.4 1-1 1H69.4c-.5 0-1-.4-1-1v-2.5zm-30.6.3c.4-2.5 3.2-3.8 5.4-2.5 1.2.7 1.9 2.2 1.7 3.6-.4 2.5-3.2 3.8-5.4 2.5-1.3-.7-1.9-2.2-1.7-3.6zm42.3 123c-.4 2.2-2.2 4-4.5 4.4-3 .6-5.7-1.2-6.5-3.9-.3-.9-.3-1.8-.1-2.8.4-2.2 2.2-4 4.5-4.4 2.6-.5 4.9.8 6.1 2.9.6 1.1.8 2.4.5 3.8zm31.7-28.6v14.3h-7.4l-66.2-.1.1-76.7V20.9l73.6.1-.1 85.3z">
                                    </path>
                                    <circle fill="#fff" transform="rotate(-89.942 74.591 133.82)" class="phone1"
                                        cx="74.6" cy="133.8" r="5.7"></circle>
                                    <path
                                        d="M118.4 5.4l-86.6-.1c-.6 0-1.1.5-1.1 1.1v31.1l7.5 6.4V21l73.6.1-.1 85.2 7.5 6.4.1-106.2c.1-.6-.3-1.1-.9-1.1zM44.9 13c-.4 2.5-3.2 3.8-5.4 2.5-1.2-.7-1.9-2.2-1.7-3.6.4-2.5 3.2-3.8 5.4-2.5 1.3.7 1.9 2.2 1.7 3.6zm36.8 1.1c0 .5-.4 1-1 1H69.4c-.5 0-1-.4-1-1v-2.5c0-.5.4-1 1-1h11.3c.5 0 1 .4 1 1v2.5z"
                                        fill="#eb1478"></path>
                                    <path fill="#fff" class="phone1"
                                        d="M74.6 128.2c-3.1 0-5.7 2.5-5.7 5.7 0 .6.1 1.2.3 1.7l10.4-4.4c-1-1.8-2.9-3-5-3z">
                                    </path>
                                    <path
                                        d="M69 132.7c.4-2.2 2.2-4 4.5-4.4 2.6-.5 4.9.8 6.1 2.9l24.8-10.5-66.2-.1.1-76.7-7.5-6.4-.1 106c0 .6.5 1.1 1.1 1.1h16l21.6-9.1c-.5-.9-.6-1.8-.4-2.8zm50.3-20l-7.5-6.4v11.2l7.5-3.2z"
                                        fill="#bf106e"></path>
                                    <path fill="#bf106e" class="phone0"
                                        d="M119.3 143.6v-29.3l-7.5 3.2v3.1h-7.4l-24.8 10.5c.6 1.1.8 2.4.6 3.8-.4 2.2-2.2 4-4.5 4.4-3 .6-5.7-1.2-6.5-3.9l-21.6 9.1 70.6.1c.6.1 1.1-.4 1.1-1z">
                                    </path>
                                </svg>
                            </div>
                            <p class="categories-body-category-title">PHONES &amp; ACCESSORIES</p>
                        </div>
                    </a>

                </div>

                <div class="col-2">
                    <a href="#">
                        <div class="categories-body-category">
                            <div class="categories-body-category-image">
                                <svg viewBox="0 0 150 150" style="width: 65px;" id="v-homepage_travel_outdoors">
                                    <path class="travel2"
                                        d="M124.31 129.295l-2.733-58.294-.234-5.939a46.178 46.178 0 00-5.937-20.934c-3.477-6.162-11.412-12.983-14.244-14.806-2.832-1.823-5.744-3.5-8.894-4.764 0-.055.003-.11.003-.164 0-.19-.018-.368-.022-.555-.231-12.198-7.923-19.983-17.366-19.983-9.467 0-17.176 7.824-17.37 20.075-.002.156-.017.304-.017.462 0 .085.004.169.005.254-3.143 1.282-5.557 2.781-8.865 4.816S37.878 38.22 34.43 44.44a46.17 46.17 0 00-5.765 20.622l-.18 4.55-.056 1.396-2.734 58.287c-.05 1.266.059 2.499.287 3.69 1.424 7.463 7.973 13.156 15.907 13.156h66.225c7.934 0 14.483-5.693 15.907-13.155.043-.227.062-.46.096-.69.127-.86.207-1.733.194-2.63-.002-.124.001-.247-.004-.372zM64.044 21.83c.863-7.545 5.47-11.584 10.841-11.584 5.36 0 9.957 4.011 10.835 11.53.029.242.065.478.085.729a46.435 46.435 0 00-10.798-1.275h-.004c-3.803 0-7.5.464-11.042 1.33.02-.25.055-.487.083-.73zM83.003 52.5a8 8 0 11-16 0 8 8 0 0116 0zm-45.449 42a1.225 1.225 0 01-1.224-1.225v-3.55c0-.677.548-1.225 1.224-1.225h75.55c.676 0 1.224.548 1.224 1.225v3.55c0 .677-.55 1.225-1.225 1.225h-75.55zm15.737 16v5.851c0 .6-.486 1.086-1.086 1.086h-4.214c-.6 0-1.087-.486-1.087-1.086v-10.199c0-.822.487-1.489 1.086-1.489h54.039c.6 0 1.086.667 1.086 1.489v2.86c0 .821-.486 1.488-1.086 1.488H53.292z">
                                    </path>
                                    <path class="travel2"
                                        d="M28.26 15.298l2.92 20.524a.495.495 0 00.904.205 46.55 46.55 0 0113.852-13.159.988.988 0 00.464-.982l-.15-1.05-1.705-11.984a2.17 2.17 0 00-2.455-1.846L29.529 8.793a2.172 2.172 0 00-1.845 2.457l.576 4.048zm75.607 8.402a46.565 46.565 0 0113.838 13.041c.26.374.836.244.902-.207l1.608-11.096 1.907-13.164a2.172 2.172 0 00-1.84-2.462l-12.555-1.82a2.173 2.173 0 00-2.462 1.839l-.823 5.677-1.044 7.205a.99.99 0 00.467.986z">
                                    </path>

                                    <path class="travel1" fill="#fff"
                                        d="M114.33 93.275v-3.55c0-.677-.548-1.225-1.225-1.225H58.532c3.124 1.96 6.323 3.964 9.572 6h45.002c.676 0 1.225-.548 1.225-1.225z">
                                    </path>
                                    <circle class="travel1" fill="#fff" cx="75.004" cy="52.5" r="8"></circle>
                                    <path fill="#fff" class="travel1"
                                        d="M103.115 109.011v-2.859c0-.822-.486-1.489-1.086-1.489H84.33l9.327 5.837h8.37c.6 0 1.087-.667 1.087-1.489zM75.005 21.23c3.717 0 7.33.446 10.8 1.275-.021-.25-.057-.487-.086-.73-.878-7.518-5.475-11.529-10.834-11.529-5.372 0-9.979 4.04-10.842 11.584-.027.244-.063.48-.083.73A46.423 46.423 0 0175 21.23h.005z">
                                    </path>
                                    <path fill="#eb1478" class="travel3"
                                        d="M113.105 88.5c.676 0 1.225.548 1.225 1.225v3.55c0 .677-.549 1.225-1.225 1.225H68.103c5.322 3.335 10.77 6.747 16.228 10.163h17.698c.6 0 1.086.667 1.086 1.489v2.86c0 .821-.486 1.488-1.086 1.488h-8.37a68844.717 68844.717 0 0030.655 19.168c-.002-.124.002-.247-.003-.373l-2.734-58.294-.235-5.939a46.18 46.18 0 00-5.937-20.934c-3.478-6.162-11.412-12.983-14.244-14.806s-5.744-3.5-8.894-4.764c0-.055.003-.11.003-.164 0-.19-.018-.368-.022-.555-.231-12.198-7.923-19.983-17.366-19.983-9.467 0-17.176 7.824-17.37 20.075-.001.156-.017.305-.017.462 0 .085.004.169.005.254-3.143 1.282-5.557 2.781-8.865 4.816S37.878 38.22 34.43 44.44a46.172 46.172 0 00-5.766 20.622l-.18 4.55c8.037 5.07 18.517 11.656 30.047 18.887h54.574zm-38.101-28a8 8 0 110-16 8 8 0 010 16zm-10.96-38.671c.862-7.545 5.469-11.584 10.84-11.584 5.36 0 9.957 4.011 10.835 11.53.029.242.065.478.085.729a46.434 46.434 0 00-10.798-1.276H75c-3.802 0-7.5.464-11.041 1.33.019-.25.055-.486.083-.729z">
                                    </path>
                                    <path class="travel2"
                                        d="M124.314 129.668c-9.313-5.82-19.854-12.41-30.656-19.168H53.291v5.851c0 .6-.486 1.086-1.086 1.086H47.99c-.6 0-1.086-.486-1.086-1.086v-10.199c0-.822.487-1.489 1.086-1.489h36.341A34563.96 34563.96 0 0168.103 94.5H37.555a1.225 1.225 0 01-1.225-1.225v-3.55c0-.677.548-1.225 1.225-1.225H58.53a13267.05 13267.05 0 01-30.046-18.888l-.055 1.397-2.734 58.286a16.22 16.22 0 00.287 3.691c1.425 7.462 7.973 13.156 15.908 13.156h31.794l50.435-13.845c.128-.859.208-1.732.195-2.628z"
                                        fill="#ab005f"></path>
                                    <path
                                        d="M124.024 132.986c.043-.226.062-.46.096-.689l-50.435 13.845h34.431c7.935 0 14.484-5.693 15.908-13.155z"
                                        fill="#ab005f"></path>
                                    <path class="travel3" fill="#eb1478"
                                        d="M44.547 8.85a2.172 2.172 0 00-2.457-1.844L29.53 8.793a2.173 2.173 0 00-1.846 2.457l.577 4.048 17.991 5.536-1.705-11.983z">
                                    </path>
                                    <path class="travel2"
                                        d="M32.085 36.028a46.55 46.55 0 0113.852-13.16.988.988 0 00.465-.982l-.15-1.05-17.991-5.537 2.92 20.523a.496.496 0 00.904.206z"
                                        fill="#ab005f"></path>
                                    <path class="travel3" fill="#eb1478"
                                        d="M122.123 12.274a2.172 2.172 0 00-1.839-2.462l-12.556-1.82a2.173 2.173 0 00-2.462 1.839l-.822 5.677 15.771 9.93 1.908-13.164z">
                                    </path>
                                    <path class="travel2"
                                        d="M103.867 23.7a46.563 46.563 0 0113.838 13.041c.26.374.836.244.902-.207l1.608-11.096-15.772-9.93-1.044 7.205a.99.99 0 00.467.987z"
                                        fill="#ab005f"></path>

                                </svg>
                            </div>
                            <p class="categories-body-category-title">TRAVEL &AMP; OUTDOORS</p>
                        </div>
                    </a>

                </div>

                <div class="col-2">
                    <a href="#">
                        <div class="categories-body-category">
                            <div class="categories-body-category-image">
                                <svg viewBox="0 0 150 150" style="width: 65px;" id="v-homepage_health_fitness">
                                    <path class="health0"
                                        d="M38.206 39.573l-23.053-9.46c-.377-.155-.846.117-1.047.607L.996 62.666c-.202.49-.06 1.012.318 1.167l23.053 9.46c.377.155.845-.116 1.046-.606l13.11-31.948c.202-.49.059-1.012-.318-1.167zm110.511 45.6L126.85 76.2c-.357-.147-.81.132-1.011.622l-8.418 20.512-4.693 11.435c-.2.489-.074 1.006.284 1.152l21.867 8.973c.358.147.811-.132 1.012-.622l6.54-15.937 6.57-16.01c.202-.49.075-1.006-.282-1.153zm-33.72-31.287c-.226-.111-.448-.229-.683-.327L62.489 31.942c-6.235-2.6-13.398.345-15.998 6.58L30.244 77.471l-.935 2.241-.691 1.658c-2.601 6.235.345 13.397 6.58 15.998l51.824 21.617c6.234 2.601 13.397-.345 15.998-6.58l6.91-16.568 10.963-26.279c2.502-5.999-.14-12.844-5.896-15.671zm-60.102 1.23a8.105 8.105 0 0110.575-4.42 8.097 8.097 0 014.997 6.864 8.098 8.098 0 018.379-1.375 8.095 8.095 0 014.947 6.407 8.055 8.055 0 01-.526 4.17c-2.745 6.686-21.089 10.997-21.089 10.997s-2.216-3.526-4.28-7.957c-2.325-4.995-4.458-11.14-3.003-14.684z">
                                    </path>
                                    <path
                                        d="M78.846 56.184a8.098 8.098 0 00-8.379 1.376 8.098 8.098 0 00-4.997-6.865 8.105 8.105 0 00-10.575 4.421c-1.454 3.544.678 9.69 3.004 14.685a47759.2 47759.2 0 0025.894-7.21 8.095 8.095 0 00-4.947-6.407z"
                                        fill="none"></path>
                                    <path
                                        d="M25.414 72.688l13.11-31.948c.201-.49.059-1.012-.318-1.167l-23.054-9.46c-.377-.154-.846.117-1.047.607L.995 62.667c-.201.49-.059 1.012.318 1.167l23.054 9.461c.377.155.845-.117 1.046-.607zm29.481-17.571a8.105 8.105 0 0110.575-4.421 8.097 8.097 0 014.997 6.864 8.098 8.098 0 018.379-1.376 8.095 8.095 0 014.947 6.407 104940 104940 0 0031.204-8.705c-.226-.112-.448-.23-.684-.327L62.49 31.942c-6.235-2.6-13.398.345-15.998 6.58L30.244 77.471c7.263-2.005 16.87-4.67 27.655-7.67-2.326-4.995-4.459-11.14-3.004-14.684z"
                                        fill="#eb1478"></path>
                                    <path
                                        d="M149 86.327c.201-.49.075-1.006-.283-1.153L126.851 76.2c-.358-.147-.81.132-1.012.622l-8.418 20.512 25.01 5.003 6.57-16.01zm-28.106-16.77c2.502-5.999-.14-12.844-5.896-15.671-10.06 2.808-20.734 5.786-31.205 8.705a8.055 8.055 0 01-.526 4.169c-2.745 6.687-21.089 10.999-21.089 10.999S59.963 74.233 57.9 69.8c-10.785 3-20.392 5.665-27.654 7.67l-.935 2.241 80.623 16.125 10.962-26.28z"
                                        fill="#bf106e"></path>
                                    <path class="health0"
                                        d="M113.011 109.922l21.867 8.974c.358.146.81-.132 1.012-.622l6.54-15.938-25.009-5.002-4.692 11.435c-.2.489-.074 1.006.284 1.152zM35.198 97.368l51.825 21.617c6.235 2.6 13.397-.345 15.998-6.58l6.91-16.568L29.31 79.712l-.691 1.658c-2.6 6.235.345 13.397 6.58 15.998z"
                                        fill="#960d56"></path>
                                </svg>
                            </div>
                            <p class="categories-body-category-title">HEALTH &AMP; FITNESS</p>
                        </div>
                    </a>

                </div>

                <div class="col-2">
                    <a href="#">
                        <div class="categories-body-category">
                            <div class="categories-body-category-image">
                                <svg viewBox="0 0 150 150" style="width: 65px;" id="v-homepage_audio">




                                    <circle class="audio3" cx="60.289" cy="38.128" r="5.338"></circle>


                                    <path fill="#fff" class="audio1"
                                        d="M42.913 102.858c0 17.721 14.366 32.087 32.087 32.087s32.087-14.366 32.087-32.087c0-3.501-.568-6.867-1.605-10.022L71.418 70.975c-16.034 1.781-28.505 15.373-28.505 31.883zm32.085-10.034c5.621 0 10.178 4.557 10.178 10.178 0 5.62-4.557 10.178-10.178 10.178s-10.178-4.557-10.178-10.178c0-5.622 4.557-10.178 10.178-10.178z">
                                    </path>
                                    <circle class="audio2" cx="74.998" cy="103.002" r="10.178" fill="#eb1478"></circle>
                                    <path class="audio3"
                                        d="M120.5 6.142h-91a1 1 0 00-1 1V43.43l42.918 27.544c1.177-.13 2.37-.203 3.582-.203 14.22 0 26.272 9.254 30.482 22.066l16.018 10.28V7.142a1 1 0 00-1-1zM62.296 57.696C49.857 58.928 39.489 48.56 40.721 36.12c.911-9.205 8.357-16.65 17.561-17.562 12.44-1.232 22.807 9.136 21.575 21.575-.911 9.205-8.357 16.65-17.561 17.562z"
                                        fill="#eb1478"></path>
                                    <circle class="audio3" cx="60.289" cy="38.128" r="5.338" fill="#eb1478"></circle>
                                    <path fill="#ab005f" class="audio2"
                                        d="M121.5 103.117l-16.018-10.28a32.038 32.038 0 011.605 10.02c0 1.944-.182 3.844-.513 5.692l14.926-4.907v-.525zm-78.587-.26c0-16.51 12.47-30.1 28.505-31.883L28.5 43.43v90.787l24.468-8.044c-6.188-5.85-10.055-14.128-10.055-23.315z">
                                    </path>
                                    <path fill="#ab005f" class="audio0"
                                        d="M29.5 143.858h91a1 1 0 001-1v-39.216l-14.926 4.907c-2.688 15.005-15.796 26.396-31.574 26.396-8.534 0-16.284-3.338-22.032-8.772L28.5 134.217v8.64a1 1 0 001 1z">
                                    </path>
                                </svg>
                            </div>
                            <p class="categories-body-category-title">AUDIO</p>
                        </div>
                    </a>

                </div>

                <div class="col-2">
                    <a href="#">
                        <div class="categories-body-category">
                            <div class="categories-body-category-image">
                                <svg viewBox="0 0 150 150" style="width: 65px;" id="v-homepage_film">
                                    <path class="film3"
                                        d="M118.153 90.786l-13.466-24.271-1.059-1.909-3.538-6.376a1.464 1.464 0 00-1.99-.57L32.472 94.072a1.464 1.464 0 00-.57 1.99l15.276 27.532.038.068 1.542 2.78 5.805 10.462a1.463 1.463 0 001.99.57l65.628-36.412c.26-.144.457-.357.585-.602a1.46 1.46 0 00-.016-1.388l-4.597-8.285zm29.408-9.255L133.75 56.638l-5.646-10.176a1.464 1.464 0 00-2.374-.263l-14.454 16.267a1.464 1.464 0 00-.185 1.682l8.854 15.959.715 1.29 2.89 5.209c.302.543.914.837 1.527.732l21.45-3.654a1.463 1.463 0 001.034-2.153zM43.743 39.829c.033.457.074.913.132 1.37.043.342.103.684.16 1.026.075.436.149.873.246 1.308.081.364.185.726.284 1.089.111.411.216.824.349 1.232.128.393.285.779.433 1.168.143.375.272.753.433 1.125.213.487.464.965.71 1.444.13.255.241.516.381.769 4.715 8.497 13.551 13.26 22.63 13.18a25.473 25.473 0 0012.17-3.217c.721-.4 1.407-.837 2.073-1.294.177-.121.343-.251.516-.376.481-.347.948-.706 1.398-1.081.192-.16.38-.324.565-.49.423-.373.83-.76 1.222-1.157.163-.165.33-.327.487-.496.445-.474.867-.965 1.271-1.468.08-.097.165-.19.242-.29.482-.619.934-1.257 1.354-1.914.07-.107.128-.22.194-.327a25.37 25.37 0 00.944-1.656c.107-.205.205-.415.306-.623a25.242 25.242 0 001.464-3.72c.063-.207.134-.411.192-.62a25.67 25.67 0 00.83-4.465c.021-.232.03-.465.045-.698.036-.526.06-1.053.063-1.582l-.001-.047a26.239 26.239 0 00-.098-2.29c-.023-.27-.044-.54-.075-.81a25.383 25.383 0 00-.27-1.715c-.035-.19-.059-.38-.099-.569-.009-.039-.012-.078-.02-.116l-.007.002-.003.001a25.579 25.579 0 00-2.63-7.003c-6.86-12.36-22.44-16.822-34.8-9.963-6.497 3.604-10.78 9.624-12.416 16.313-.057.236-.12.47-.17.707-.002-.005-.01-.01-.01-.015-.016.07-.023.142-.037.212a25.84 25.84 0 00-.254 1.492c-.04.273-.08.545-.112.82-.055.486-.092.974-.12 1.463a25.448 25.448 0 00-.025 2.314c.011.32.032.64.056.962zm18.112-15.212c7.36-4.083 16.636-1.427 20.72 5.932.807 1.455 1.278 2.992 1.575 4.542.105.55.168 1.102.212 1.655.464 5.765-2.331 11.533-7.72 14.522-7.36 4.084-16.636 1.428-20.719-5.932-1.832-3.303-2.24-6.979-1.543-10.412.123-.602.29-1.193.481-1.776 1.15-3.501 3.518-6.602 6.995-8.532zM37.26 85.218l.16-.121c.112-.085.225-.17.335-.26a21.654 21.654 0 002.247-2.15c.134-.147.26-.296.44-.507a21.373 21.373 0 001.856-2.498c.044-.069.083-.14.122-.212l.058-.102c.497-.82.95-1.702 1.348-2.623l.072-.16c.045-.094.09-.19.13-.29a21.904 21.904 0 001.083-3.528 21.53 21.53 0 00.457-3.037c.008-.101.011-.202.014-.304l.006-.16c.017-.315.015-.623.02-.934a21.376 21.376 0 00-.064-2.119l-.004-.076a2.937 2.937 0 00-.012-.198c-.1-.99-.289-2.022-.584-3.204a2.194 2.194 0 00-.055-.282s-.793-2.44-1.117-3.119-.548-1.179-.857-1.737C37.11 47.14 23.88 43.35 13.419 49.154A21.483 21.483 0 003.411 61.161l-.033-.022-.368 1.332a4.63 4.63 0 00-.064.285 21.388 21.388 0 00-.368 1.672c-.012.068-.02.136-.04.29a25.608 25.608 0 00-.217 1.756l-.01.244c-.045.67-.062 1.26-.053 1.809 0 .06.005.12.014.247.02.693.058 1.27.12 1.821l.033.207c.087.705.183 1.293.3 1.843.01.049.024.097.039.15A21.688 21.688 0 0023.96 89.822h.194a21.727 21.727 0 0010.367-2.762 21.595 21.595 0 002.738-1.841zm-7.582-6.753a11.749 11.749 0 01-8.99 1.028 11.749 11.749 0 01-7.086-5.632 11.648 11.648 0 01-1.28-7.745 12.24 12.24 0 01.353-1.496c.912-2.936 2.877-5.363 5.531-6.836a11.75 11.75 0 015.717-1.482c4.161 0 8.203 2.196 10.361 6.086.476.858.832 1.825 1.118 3.046.175.745.267 1.495.296 2.24.171 4.39-2.107 8.62-6.017 10.79z">
                                    </path>
                                    <path class="film1"
                                        d="M35.4 65.434c-.286-1.22-.642-2.188-1.118-3.046-2.158-3.89-6.2-6.087-10.36-6.087-1.94 0-3.905.478-5.717 1.483-2.654 1.473-4.619 3.9-5.531 6.835-.973 3.129-.643 6.411.928 9.242a11.748 11.748 0 007.085 5.632 11.75 11.75 0 008.991-1.028c4.575-2.538 6.927-7.896 5.722-13.031z"
                                        fill="#fff"></path>
                                    <path class="film3"
                                        d="M100.09 58.23a1.464 1.464 0 00-1.99-.57L32.472 94.072a1.464 1.464 0 00-.57 1.99l15.276 27.532.038.068 56.412-59.056-3.538-6.376z"
                                        fill="#eb1478"></path>
                                    <path
                                        d="M48.758 126.441l5.805 10.463a1.463 1.463 0 001.99.57l65.628-36.412a1.45 1.45 0 00.585-.602l-74.008 25.982z"
                                        fill="#ab005f"></path>
                                    <path class="film2"
                                        d="M122.75 99.072l-4.597-8.286-13.466-24.271-1.06-1.909-56.411 59.056 1.542 2.78 74.008-25.982a1.46 1.46 0 00-.016-1.388z"
                                        fill="#ab005f"></path>
                                    <path class="film3"
                                        d="M128.104 46.462a1.464 1.464 0 00-2.374-.263l-14.454 16.267a1.464 1.464 0 00-.185 1.682l8.854 15.959 13.805-23.469-5.646-10.176z"
                                        fill="#eb1478"></path>
                                    <path class="film2"
                                        d="M120.66 81.397l2.89 5.209c.302.543.914.837 1.527.732l21.45-3.654a1.464 1.464 0 001.034-2.153L133.75 56.638l-13.805 23.469.715 1.29zM84.363 36.746c.463 5.765-2.333 11.533-7.72 14.522-7.36 4.084-16.637 1.428-20.72-5.932-1.833-3.303-2.242-6.979-1.543-10.412.123-.602.29-1.193.48-1.776l-10.444-1.274c-.058.235-.12.469-.171.706-.002-.005-.01-.01-.01-.015-.016.07-.022.142-.037.212-.103.494-.181.992-.254 1.492-.04.273-.081.545-.112.82-.056.485-.092.974-.12 1.463a25.9 25.9 0 00-.026 2.313c.01.32.032.64.055.962.033.456.073.913.13 1.369.044.343.104.684.162 1.027.074.436.148.873.245 1.307.082.365.186.726.284 1.089.11.411.216.824.349 1.232.127.392.285.779.433 1.168.143.375.272.753.433 1.125.213.487.463.965.709 1.444.13.255.242.516.382.77C51.584 58.856 60.42 63.62 69.5 63.54a25.484 25.484 0 0012.17-3.218c.72-.4 1.407-.837 2.073-1.294.176-.12.342-.25.515-.376.48-.346.948-.705 1.398-1.08a25.72 25.72 0 001.787-1.645c.163-.165.328-.327.486-.496a25.49 25.49 0 001.271-1.468c.078-.098.165-.19.241-.29a25.49 25.49 0 001.354-1.915c.069-.107.128-.22.194-.327.336-.542.652-1.093.945-1.656.107-.205.205-.414.306-.622a26.081 26.081 0 00.936-2.162 25.47 25.47 0 00.527-1.558c.063-.207.133-.411.192-.62a25.72 25.72 0 00.828-4.465c.022-.232.03-.465.046-.698.036-.526.06-1.053.063-1.583v-.047l-10.47-1.277z"
                                        fill="#ab005f"></path>
                                    <path class="film3"
                                        d="M61.855 24.617c7.36-4.083 16.636-1.427 20.72 5.932.807 1.456 1.279 2.992 1.575 4.542.105.55.168 1.102.213 1.655l10.47 1.277a25.88 25.88 0 00-.097-2.29c-.024-.27-.044-.54-.076-.81a24.582 24.582 0 00-.269-1.715c-.035-.19-.059-.38-.099-.569-.008-.038-.012-.077-.02-.115l-.006.002-.003.002a25.565 25.565 0 00-2.63-7.003c-6.859-12.36-22.439-16.822-34.8-9.963-6.497 3.604-10.78 9.625-12.415 16.314l10.444 1.274c1.15-3.5 3.518-6.602 6.995-8.53z"
                                        fill="#eb1478"></path>
                                    <path class="film1"
                                        d="M13.602 73.861a11.748 11.748 0 007.085 5.632 11.75 11.75 0 008.991-1.028c3.91-2.17 6.189-6.4 6.017-10.79l-23.374-1.558a11.655 11.655 0 001.281 7.744z"
                                        fill="#fff"></path>
                                    <path class="film2"
                                        d="M35.696 67.675c.17 4.39-2.107 8.62-6.017 10.79a11.749 11.749 0 01-8.992 1.028 11.748 11.748 0 01-7.085-5.632 11.65 11.65 0 01-1.28-7.744l-9.892-.66c-.047.357-.086.696-.11 1.017l-.01.244a20.79 20.79 0 00-.053 1.809c.001.06.005.121.014.248.02.692.058 1.27.12 1.821l.033.207c.087.705.183 1.293.3 1.843.01.049.024.097.039.15A21.692 21.692 0 0023.96 89.822h.194a21.73 21.73 0 0010.367-2.761 21.589 21.589 0 002.739-1.842l.159-.12c.112-.086.225-.171.335-.26a21.587 21.587 0 002.247-2.151c.133-.146.259-.295.439-.506a21.61 21.61 0 001.857-2.498c.043-.069.083-.14.122-.212l.057-.102c.496-.82.949-1.702 1.348-2.623l.072-.158c.044-.095.088-.19.128-.289a21.933 21.933 0 001.084-3.528c.234-1.064.383-2.058.456-3.036.008-.1.01-.202.014-.303l.005-.159c.017-.315.015-.624.019-.935l-9.909-.66z"
                                        fill="#ab005f"></path>
                                    <path class="film3"
                                        d="M12.674 64.62c.912-2.936 2.877-5.363 5.53-6.836a11.75 11.75 0 015.718-1.482c4.16 0 8.202 2.197 10.36 6.086.476.858.832 1.825 1.118 3.046.175.745.267 1.495.295 2.24l9.91.66a21.715 21.715 0 00-.064-2.12l-.004-.075a3.37 3.37 0 00-.012-.2c-.1-.99-.29-2.022-.585-3.203a2.243 2.243 0 00-.054-.283s-.793-2.44-1.117-3.12-.548-1.178-.857-1.737C37.108 47.14 23.878 43.35 13.417 49.155A21.48 21.48 0 003.409 61.161l-.032-.021-.369 1.331a4.08 4.08 0 00-.064.285 21.476 21.476 0 00-.369 1.672 5.403 5.403 0 00-.04.29c-.043.265-.075.503-.106.739l9.892.66c.09-.502.198-1.002.353-1.498z"
                                        fill="#eb1478"></path>
                                </svg>
                            </div>
                            <p class="categories-body-category-title">FILM</p>
                        </div>
                    </a>

                </div>

            </div>
        </div>

    </div>
</section>

<!-- Journal -->
<section id="journal">
    <div class="container">
        <div id="journal-header">
            <div id="journal-header-heading">From the Journal</div>
            <div id="journal-header-description">Your behind-the-scenes view of the people and stories behind Indiegogo
                projects</div>
        </div>
        <div id="journal-body">
            <div id="journal-cards">
                <div class="row">

                    <div class="col-4 journal-card">
                        <a href="#">
                            <div class="journal-card-image">
                                <img class="journal-card-image-img"
                                    src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1613783147/nrq4pzyxfmwivcxldvlm.png"
                                    alt="">
                            </div>
                        </a>

                        <div class="journal-card-details">
                            <div class="journal-card-details-heading">
                                The Handwarming Story of the Bernie Mittens Project
                            </div>
                            <div class="journal-card-details-description">
                                The star of any presidential inauguration is supposed to be the president, right? How
                                2016.
                            </div>
                            <a href="#">
                                <div class="journal-card-details-read">
                                    Read More <svg viewBox="0 0 8 12" style="height: 10px;" id="v-right_caret">
                                        <path
                                            d="M.706 9.294a.997.997 0 00.005 1.417l.578.578a1.01 1.01 0 001.423 0l4.576-4.577a1.01 1.01 0 000-1.424L2.712.712A1 1 0 001.289.71l-.578.578a1 1 0 00-.005 1.417L4 6 .706 9.294z">
                                        </path>
                                    </svg>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-4 journal-card">
                        <a href="#">
                            <div class="journal-card-image">
                                <img class="journal-card-image-img"
                                    src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1613783543/insjvndarpap36v2dh12.jpg"
                                    alt="">
                            </div>
                        </a>
                        <div class="journal-card-details">
                            <div class="journal-card-details-heading">
                                The Handwarming Story of the Bernie Mittens Project
                            </div>
                            <div class="journal-card-details-description">
                                The star of any presidential inauguration is supposed to be the president, right? How
                                2016.
                            </div>
                            <a href="#">
                                <div class="journal-card-details-read">
                                    Read More <svg viewBox="0 0 8 12" style="height: 10px;" id="v-right_caret">
                                        <path
                                            d="M.706 9.294a.997.997 0 00.005 1.417l.578.578a1.01 1.01 0 001.423 0l4.576-4.577a1.01 1.01 0 000-1.424L2.712.712A1 1 0 001.289.71l-.578.578a1 1 0 00-.005 1.417L4 6 .706 9.294z">
                                        </path>
                                    </svg>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-4 journal-card">
                        <a href="#">
                            <div class="journal-card-image">
                                <img class="journal-card-image-img"
                                    src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1614102019/y53643otrzpgpndgweey.png"
                                    alt="">
                            </div>
                        </a>
                        <div class="journal-card-details">
                            <div class="journal-card-details-heading">
                                The Handwarming Story of the Bernie Mittens Project
                            </div>
                            <div class="journal-card-details-description">
                                The star of any presidential inauguration is supposed to be the president, right? How
                                2016.
                            </div>
                            <a href="#">
                                <div class="journal-card-details-read">
                                    Read More <svg viewBox="0 0 8 12" style="height: 10px;" id="v-right_caret">
                                        <path
                                            d="M.706 9.294a.997.997 0 00.005 1.417l.578.578a1.01 1.01 0 001.423 0l4.576-4.577a1.01 1.01 0 000-1.424L2.712.712A1 1 0 001.289.71l-.578.578a1 1 0 00-.005 1.417L4 6 .706 9.294z">
                                        </path>
                                    </svg>
                                </div>
                            </a>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- clever -->
<section id="clever">
    <div class="container">

        <div id="clever-image">
            <img id="clever-image-img"
                src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fit,w_275,g_center,q_auto:best,dpr_1.3,f_auto/homepage/crowdfunding-crowdsurfing_base.svg"
                alt="">
        </div>

        <div id="clever-details">
            <div id="clever-details-heading">Clever Things For Curious Humans<sup
                    style="font-size: 16px;position: relative; top: -13px">TM</sup></div>
            <div id="clever-details-description">There's no better place to start the hunt for something new and
                special. Begin on Indiegogo to find clever and unconventional things that solve everyday problems large
                and small.</div>

            <div id="clever-details-buttons">
                <a href="#">
                    <div id="clever-details-button1">
                        SIGN UP NOW
                    </div>
                </a>
                <a href="#">
                    <div id="clever-details-button2">
                        LEARN MORE
                    </div>
                </a>

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