@extends('admin.layouts.admin')

@section('title')
    User List
@endsection

@section('styles')
        <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/data-list-view.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->
@endsection

@section('content')
     <!-- Data list view starts -->
     <section id="data-list-view" class="data-list-view-header">
        <!-- DataTable starts -->
        <div class="table-responsive">
            <table class="table data-list-view">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Email Verified At</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td class="product-name">{{ $user->first_name }}</td>
                        <td class="product-category">{{ $user->last_name }}</td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                           {{ $user->email_verified_at->diffForHumans() }}
                        </td>
                        <td class="product-action">
                            <span class="action-delete"><i class="feather icon-trash"></i></span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- DataTable ends -->
    </section>
    <!-- Data list view end -->
@endsection

@section('scripts')
      <!-- BEGIN: Vendor JS-->
      <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
      <!-- BEGIN Vendor JS-->

      <!-- BEGIN: Page Vendor JS-->
      <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
      <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
      <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
      <!-- END: Page Vendor JS-->

      <!-- BEGIN: Theme JS-->
      <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
      <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
      <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
      <!-- END: Theme JS-->

      <!-- BEGIN: Page JS-->
      <script src="{{ asset('app-assets/js/scripts/ui/data-list-view.js') }}"></script>
      <!-- END: Page JS-->

@endsection
