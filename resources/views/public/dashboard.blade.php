@extends('public.layouts.public')
@section('title')
{{ Auth::user()->first_name  }} {{ Auth::user()->last_name  }}
@endsection

@section('styles')
    <!-- BEGIN: Vendor CSS-->


    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->


    <!-- END: Page CSS-->
@endsection

@section('content')
<!-- Dashboard Analytics Start -->
<section >
    User Dasboard
</section>
<!-- Dashboard Analytics end -->
@endsection



@section('scripts')

<!-- BEGIN: Vendor JS-->

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page JS-->

<!-- BEGIN Page JS-->

@endsection
