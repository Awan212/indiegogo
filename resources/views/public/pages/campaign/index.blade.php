@extends('public.layouts.public')
@section('title')
Campaign
@endsection
@section('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Scada:wght@400;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poly&display=swap');

    html,
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    /* DEFAULT VARTIABLES */
    :root {
        --public-primary: #e51075;
        --public-font: 'Scada', sans-serif;
        /* Alternative to benton sans */
        --public-admin-primary: #796ab3;
        --public-admin-warning: #fddd86;

    }

    a {
        color: inherit;
    }

    a:hover {
        color: inherit;
        text-decoration: none;
    }

    .login-divider::before {
        content: '';
        position: absolute;
        width: 1px;
        height: 140%;
        left: -10px;
        top: -5px;
        background: #bbb
    }

    /* SIDEBAR */
    #sidebar {
        background: #2a2a2a;
        height: 100%;
        color: #c8c8c8;
        font-family: var(--public-font);
        padding: 70px 0 0 0px;
        letter-spacing: 0.3px;
        text-transform: capitalize;
        overflow-y: auto;
    }

    #sidebar-draft {
        background: var(--public-admin-warning);
        color: #2a2a2a;
        display: inline-block;
        margin-bottom: 8px;
        padding: 0px 8px;
        border-radius: 2px;
        font-size: 15px;
    }

    .down-caret {
        fill: #c8c8c8;
        height: 10px;
    }

    #sidebar-menu-items {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .sidebar-menu-item {
        margin-bottom: 25px;
        padding: 15px 20px;
        overflow: auto;
    }

    .sidebar-menu-item:hover {
        color: #fff;
        background: var(--public-admin-primary);
        fill: #fff !important;
    }

    .sidebar-dropdown-container {
        background: #000;
        margin-top: -25px;
        display: none;

    }

    .sidebar-dropdown-container-items {
        padding: 0;
        margin: 0;
    }

    .sidebar-dropdown-container-item {
        padding: 15px 40px;
    }

    .sidebar-dropdown-container-item:hover {
        background: var(--public-admin-primary);
    }

    .sidebar-dropdown-container-item.active {
        color: #fff;
        font-weight: bold;
        position: relative;

    }

    .sidebar-dropdown-container-item.active::before {
        content: '';
        position: absolute;
        width: 8px;
        background: var(--public-admin-primary);
        left: 0;
        top: 0;
        height: 100%;
    }

    .sidebar-dropdown-container-item:hover {
        color: #fff;
    }

    #breadcrumb-container {
        background: #f5f5f5;
        padding: 30px 40px;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;

    }

    #breadcrumb-container-buttons {
        position: absolute;
        top: 20px;
        right: 40px;
    }

    .breadcrumb-container-button,
    .breadcrumb-container-button2 {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        margin-right: 10px;
        letter-spacing: 0.5px;
        padding: 11px 20px;
        border-radius: 3px;
        width: 168px;
        text-align: center;

    }

    .breadcrumb-container-button {
        color: var(--public-admin-primary);
    }

    .breadcrumb-container-button:hover {
        background: #EEE5F2;
    }

    .breadcrumb-container-button2 {
        background: var(--public-admin-primary);
        color: #fff;

    }

    .breadcrumb-container-button2:hover {
        background: #6653a5;
    }



    #content-container {
        padding: 25px 0 40px 30px;
        max-width: 800px;
    }

    .my-input-group {
        margin-bottom: 50px;
    }

    .input-group-title {
        font-size: 18px;
        font-weight: 600;
    }

    .input-group-desc {
        color: #6a6a6a;
        font-size: 15px;
        margin-top: 6px;
    }

    .input-group-input {
        width: 100%;
        margin-top: 10px;
        padding: 8px 15px;
        outline: none;
        border: 1px solid #c8c8c8;
    }

    .input-group-input:focus {
        border: 1px solid #000;
        transition: border 0.3s;
        font-size: 17px;
    }


    .main-submit {
        font-size: 13px;
        font-weight: 700;
        margin-right: 10px;
        letter-spacing: 0.5px;
        padding: 11px 20px;
        border-radius: 3px;
        width: 168px;
        text-align: center;
        outline: none;
        background: var(--public-admin-primary);
        color: #fff;
        box-shadow: none;
        border: none;
        float: right;
    }

    .main-submit:hover {
        background: #6653a5;
    }

    @media (min-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1246px;
        }
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-2" style="padding-right: 0;">
        <div id="sidebar">
            <ul id="sidebar-menu-items">
                <li class="sidebar-menu-item" style="margin-bottom: 50px;">
                    <div id="sidebar-draft">Draft Campaign</div>
                    <div>My Campaign Title</div>
                </li>
                <a href="#">
                    <li class="sidebar-menu-item">Preview Campaign</li>
                </a>
                <a href="#">
                    <li class="sidebar-menu-item">Pre-Launch Page</li>
                </a>

                <!-- Dropdown menu item start (Be sure to incrment tiggle ids of both before making new dropdwon menu) -->
                <a href="javascript:void(0)">
                    <li class="sidebar-menu-item" data-toggler="1" data-toggled="false">
                        <div class="float-left">Campaign Editor</div>

                        <div class="sidebar-menu-item-dropdown-icon float-right">
                            <svg viewBox="0 0 26 17" class="down-caret">
                                <title>down-caret</title>
                                <path d="M25.8 3.947L22.28.534 13 9.601 3.72.534.2 3.947 13 16.534 25.8 3.947z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>


                    </li>
                </a>
                <div class="sidebar-dropdown-container" data-toggle="1">
                    <ul class="sidebar-dropdown-container-items">
                        <a href="#">
                            <div class="sidebar-dropdown-container-item active">1.Basics</div>
                        </a>
                        <a href="#">
                            <div class="sidebar-dropdown-container-item">2.Content</div>
                        </a>
                        <a href="#">
                            <div class="sidebar-dropdown-container-item">3.Perks</div>
                        </a>
                        <a href="#">
                            <div class="sidebar-dropdown-container-item">4.Items</div>
                        </a>
                        <a href="#">
                            <div class="sidebar-dropdown-container-item">5.Team</div>
                        </a>
                        <a href="#">
                            <div class="sidebar-dropdown-container-item">6.Funding</div>
                        </a>
                        <a href="#">
                            <div class="sidebar-dropdown-container-item">6.Extras</div>
                        </a>
                        <a href="#">
                            <div class="sidebar-dropdown-container-item">6.Settings</div>
                        </a>

                    </ul>
                </div>
                <!-- Dropdown menu item end -->

                <a href="javascript:void(0)">
                    <li class="sidebar-menu-item" data-toggler="2" data-toggled="false">
                        <div class="float-left">Campaign Editor</div>

                        <div class="sidebar-menu-item-dropdown-icon float-right">
                            <svg viewBox="0 0 26 17" class="down-caret">
                                <title>down-caret</title>
                                <path d="M25.8 3.947L22.28.534 13 9.601 3.72.534.2 3.947 13 16.534 25.8 3.947z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>


                    </li>
                </a>
                <div class="sidebar-dropdown-container" data-toggle="2">
                    <ul class="sidebar-dropdown-container-items">
                        <a href="#">
                            <div class="sidebar-dropdown-container-item">1.Educations center</div>
                        </a>
                        <a href="#">
                            <div class="sidebar-dropdown-container-item">2.Experts driectory</div>
                        </a>

                    </ul>
                </div>

            </ul>
        </div>
    </div>
    <div class="col-10" style="padding-left: 0;">
        <!-- Breadcrumbs -->
        <section id="breadcrumb">
            <div id="breadcrumb-container" style="position: relative;">
                <div class="">
                    <div id="breadcrumb-container-title" style="font-weight: 500;font-size: 17px;">Campaign / Basics
                    </div>
                    <div id="breadcrumb-container-buttons">
                        <ul>
                            <a href="">
                                <li class="breadcrumb-container-button">SAVE CAMPAIGN</li>
                            </a>
                            <a href="">
                                <li class="breadcrumb-container-button2">REVIEW &amp; LAUNCH</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content -->
        <section id="content">
            <form action="#">
                <div id="content-container">

                    <div id="content-container-main" style="margin-bottom: 30px;">
                        <div id="content-container-main-title" style="font-size: 30px;">Basics</div>
                        <p>Make a good first impression: introduce your campaign objectives and entice people to
                            learn more. This basic information will represent your campaign on your campaign page,
                            on your campaign card, and in searches.</p>
                    </div>

                    <!-- Input group -->
                    <div class="my-input-group">
                        <div class="input-group-title">Campaign Title <span style="color: #dc3545;">*</span></div>
                        <div class="input-group-desc">What is the title of your campaign?</div>
                        <input type="text" class="input-group-input">
                    </div>

                    <!-- Input group -->
                    <div class="my-input-group">
                        <div class="input-group-title">Campaign Tagline <span style="color: #dc3545;">*</span></div>
                        <div class="input-group-desc">Provide a short description that best describes your campaign
                            to your audience.</div>
                        <input type="text" class="input-group-input">
                    </div>

                    <hr style="background: #ddd; margin-top: 70px; margin-bottom: 50px">
                    <button class="main-submit" type="submit">SAVE &amp; CONTINUE</button>
                </div>
            </form>
        </section>
    </div>
</div>
@endsection


@section('scripts')
<script src="{{ asset('assets/js/projects.js') }}"></script>
@endsection
