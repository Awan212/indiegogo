@extends('admin.layouts.admin')

@section('title')
Add Country Bank
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
                    <h4 class="card-title">Add New Country Bank</h4>
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
                        <form class="form-horizontal" method="POST" action="{{ Route('admin.country-banks.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Country:</label>
                                            <select
                                                name="country"
                                                id="country"
                                                class="form-control"
                                                required
                                            >
                                            <option value=""  selected disabled>Choose country ...</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}"
                                                    {{ $country->id == old('country') ? 'selected' : '' }}
                                                >
                                                    {{ $country->name }}
                                                </option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Bank Name:</label>
                                            <input type="text"
                                                name="bank_name"
                                                class="form-control"
                                                placeholder="Bank Name"
                                                value="{{ old('bank_name') }}"
                                                required
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Country Currency:</label>
                                            <input type="text"
                                                name="currency"
                                                class="form-control"
                                                placeholder="Country Currency"
                                                value="{{ old('currency') }}"
                                                required
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Transfer Fee applicable:</label>
                                            <select
                                                name="is_applicable"
                                                id="is_applicable"
                                                class="form-control"
                                                required
                                            >
                                                <option value=""  selected disabled>Is transfer fee applicable?</option>
                                                <option value="1" {{ old('is_applicable') == 1 ? 'selected' : ''  }}>
                                                    Yes
                                                </option>
                                                <option value="0" {{ old('is_applicable') == 0 ? 'selected' : ''  }} >
                                                    No
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 d-none" id="transfer_fee">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="">Transfer Fee:</label>
                                            <input type="number"
                                                name="transfer_fee"
                                                class="form-control"
                                                placeholder="Transfer Fee"
                                                value="{{ old('transfer_fee') }}"
                                            >
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

@section('scripts')
<script>
    $(document).ready(function(){
        $("#is_applicable").on('change', function(){
            if($("#is_applicable").val() == 1)
            {
                $("#transfer_fee").removeClass('d-none');
            }
            else
            {
                $("#transfer_fee").addClass('d-none');
            }
        })
    });
</script>
@endsection
