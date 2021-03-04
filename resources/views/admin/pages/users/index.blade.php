@extends('admin.layouts.admin')

@section('title')
    User List
@endsection

@section('styles')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/data-list-view.css') }}">
    <!-- END: Page CSS-->

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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>
                            {{ $user->email }}
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

    <style>
        .dt-checkboxes-cell{
            display: none !important
        }

    </style>
@endsection

@section('scripts')

      <!-- BEGIN: Page Vendor JS-->
      <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
      <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
      <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
      <script src="{{ asset("app-assets/vendors/js/extensions/dropzone.min.js") }}"></script>
      <!-- END: Page Vendor JS-->

      <!-- BEGIN: Page JS-->
      <script src="{{ asset('app-assets/js/scripts/ui/data-list-view.js') }}"></script>
      <!-- END: Page JS-->

@endsection
