@extends('admin.layouts.admin')

@section('title')
New Sub Category
@endsection

@section('styles')
   <!-- BEGIN: Vendor CSS-->
   <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
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
   <!-- END: Page CSS-->

   <!-- BEGIN: Custom CSS-->
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
<style>
    label {
        font-size: 15px;
    }
</style>
@endsection

@section('content')


<!-- Simple Validation start -->
<section class="simple-validation">
    <div class="row">
        <div class="col-md-10 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">New Sub Category</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ Route('admin.sub-categories.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Main Category:</label>
                                            <div class="form-group">
                                                <select class="select2 form-control" name="main_category[]" multiple="multiple" required>
                                                    @for($i=0;  $i<count($categories); $i++)
                                                        <option value="{{ $categories[$i]->id }}" {{ (collect(old('main_category'))->contains($categories[$i]->id)) ? 'selected':'' }} >{{ $categories[$i]->title }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Title:</label>
                                            <input type="text" name="title" class="form-control" placeholder="Title"
                                                value="{{ old('title') }}" required
                                                data-validation-required-message="This title field is required">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Sub Title</label>
                                            <input type="text" name="sub_title" class="form-control"
                                                placeholder="Sub Title" required value="{{ old('sub_title') }}"
                                                data-validation-required-message="This sub title field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="">Image:</label>
                                    <input type="file" name="image" class="form-control" required accept="image/*">
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <label for="">Adult Confirmation:</label>
                                    <ul>
                                        <li class="d-inline-block">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-success">
                                                    <input type="checkbox" name="adult_confirmation" {{ old('adult_confirmation') == 1 ? 'checked' : ''  }}  value="1">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Yes</span>
                                                </div>
                                            </fieldset>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Input Validation end -->

@endsection

@section('scripts')

<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
<!-- END: Page JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
<!-- END: Page JS-->

@endsection
