@extends('admin.layouts.admin')

@section('title')
Update Category
@endsection

@section('styles')
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
                    <h4 class="card-title">Update Category</h4>
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
                        <form class="form-horizontal" method="POST" action="{{ Route('admin.main-categories.update',$category->id) }}"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Title:</label>
                                            <input type="text" name="title" class="form-control" placeholder="Title"
                                                value="{{ $category->title }}" required
                                                data-validation-required-message="This title field is required">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Sub Title</label>
                                            <input type="text" name="sub_title" class="form-control"
                                                placeholder="Sub Title" required value="{{ $category->sub_title }}"
                                                data-validation-required-message="This sub title field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="">Image:</label>
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <label for="">Adult Confirmation:</label>
                                    <ul>
                                        <li class="d-inline-block">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-success">
                                                    <input type="checkbox" name="adult_confirmation" @if($category->adult_confirmation == 1) checked @else @endif value="1">
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
