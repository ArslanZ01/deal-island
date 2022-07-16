@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Order') }}</div>

                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="enter-tab" data-bs-toggle="tab" data-bs-target="#enter" type="button" role="tab" aria-controls="enter" aria-selected="true">Enter</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="import-tab" data-bs-toggle="tab" data-bs-target="#import" type="button" role="tab" aria-controls="import" aria-selected="false">Import</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="enter" role="tabpanel" aria-labelledby="enter-tab">
                            <form>
                                <div class="mb-3">
                                    <label for="" class="form-label"></label>
                                    <input type="" class="form-control" id="">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="tab-pane fade show active" id="import" role="tabpanel" aria-labelledby="import-tab">
                            <form class="mt-3" method="post" action="{{ route('ebay-orders.import') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="ebay_orders_sheet" class="form-label">Order Sheet</label>
                                    <input class="form-control" type="file" id="ebay_orders_sheet" name="ebay_orders_sheet">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
