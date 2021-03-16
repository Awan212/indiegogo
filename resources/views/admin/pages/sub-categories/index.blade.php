@extends('admin.layouts.admin')

@section('title')
Sub Categories
@endsection

@section('styles')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/data-list-view.css') }}">
<!-- END: Page CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
    a{
        font-family: sans-serif;
    }
</style>
@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Data list view starts -->
<section id="data-thumb-view" class="data-thumb-view-header">
    <div class="actions action-btns">
        <div class="dt-buttons btn-group">
            <a href="{{ route('admin.sub-categories.create') }}" class="btn btn-outline-primary" tabindex="0"
                aria-controls="DataTables_Table_0">
                <span>
                    <i class="feather icon-plus"> Add New</i>
                </span>
            </a>
        </div>
    </div>
    <!-- dataTable starts -->

    <div class="table-responsive mt-2">
        @if(Session::has('created'))
        <!-- Alerts with Title start -->
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">
                Created
            </h4>
            <p class="mb-0">
                {{ Session::get('created') }}
            </p>
        </div>
        @endif
        <!-- Alerts with Title end -->
        @if(Session::has('updated'))
        <!-- Alerts with Title start -->
        <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading">
                Updated
            </h4>
            <p class="mb-0">
                {{ Session::get('updated') }}
            </p>
        </div>
        @endif
        <!-- Alerts with Title end -->
        @if(Session::has('removed'))
        <!-- Alerts with Title start -->
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">
                Removed
            </h4>
            <p class="mb-0">
                {{ Session::get('removed') }}
            </p>
        </div>
        @endif
        <!-- Alerts with Title end -->
        <table class="table data-thumb-view">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Main Categproy</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $category )
                <tr>
                    <td class="product-name">{{ $category->title }}</td>
                    <td class="product-category">{{ $category->sub_title }}</td>
                    <td>
                        <div class="chip chip-primary">
                            <div class="chip-body">
                                <div class="chip-text">
                                    {{ $category->categories->title }}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="product-action">
                        <form action="{{ route('admin.sub-categories.edit', $category->id) }}" method="GET">
                            @csrf
                            <button class="btn" class="action-edit"><i class="feather icon-edit"></i></button>
                        </form>
                        <button class="btn remove-user" data-id="{{ $category->id }}"
                            data-action="{{ route('admin.sub-categories.destroy', $category->id) }}"
                            class="action-delete"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
    <!-- dataTable ends -->
</section>
<!-- Data list view end -->
<style>
    .dt-checkboxes-cell {
        display: none !important
    }
</style>
@endsection

@section('scripts')

<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<!-- END: Theme JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/ui/data-list-view.js') }}"></script>
<!-- END: Page JS-->
<script type="text/javascript">
    $("body").on("click",".remove-user",function(){
      var current_object = $(this);
      swal({
          title: "Are you sure?",
          text: "You want to delete this sub category.!",
          type: "error",
          showCancelButton: true,
          dangerMode: true,
          cancelButtonClass: '#DD6B55',
          confirmButtonColor: '#dc3545',
          confirmButtonText: 'Delete!',
      },function (result) {
          if (result) {
              var action = current_object.attr('data-action');
              var token = jQuery('meta[name="csrf-token"]').attr('content');
              var id = current_object.attr('data-id');

              $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
              $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
              $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
              $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
              $('body').find('.remove-form').submit();
          }
      });
  });
</script>
@endsection
