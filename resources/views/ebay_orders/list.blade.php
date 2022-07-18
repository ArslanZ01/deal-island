@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 d-flex align-items-stretch">
            <div class="card">
                <div class="card-header">{{ __('eBay Order') }}</div>

                <div style="height: 80vh; overflow-x: auto;" class="card-body">
                    @if(isset($ebay_orders))
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Total Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ebay_orders as $index=>$ebay_order)
                                <tr>
                                    <th scope="row">{{ $index+1 }}</th>
                                    <th scope="row">{{ $ebay_order->item_title }}</th>
                                    <th scope="row">${{ $ebay_order->total_price }}</th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
