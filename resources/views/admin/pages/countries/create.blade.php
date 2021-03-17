@extends('admin.layouts.admin')

@section('title')
Add Country
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
                    <h4 class="card-title">Add New Country</h4>
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
                        <form class="form-horizontal" method="POST" action="{{ Route('admin.countries.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Name:</label>
                                            <input type="text" name="name" class="form-control" placeholder="Country Name"
                                                value="{{ old('name') }}" required
                                                data-validation-required-message="This name field is required">
                                        </div>
                                    </div>
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
