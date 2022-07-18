@extends('layouts.app')

@section('styles')
    <style>
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Listing') }}</div>

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
                        <form method="post" action="{{ route('templates.description.show') }}">
                            @csrf
                            <fieldset class="border rounded p-2 mb-3">
                                <legend class="float-none w-auto px-1">Set 1</legend>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="walmart_id" class="form-label">Walmart ID</label>
                                        <input type="text" class="form-control" id="walmart_id" name="walmart_id">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="walmart_link" class="form-label">Walmart Link</label>
                                        <textarea type="text" rows="1" class="form-control" id="walmart_link" name="walmart_link"></textarea>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="competitor_ebay_link" class="form-label">Competitor eBay Link</label>
                                        <textarea type="text" rows="1" class="form-control" id="competitor_ebay_link" name="competitor_ebay_link"></textarea>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="our_ebay_link" class="form-label">Our eBay Link</label>
                                        <textarea type="text" rows="1" class="form-control" id="our_ebay_link" name="our_ebay_link"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="border rounded p-2 mb-3">
                                <legend class="float-none w-auto px-1">Set 2</legend>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="competitors" class="form-label">Competitors</label>
                                        <input type="number" class="form-control" id="competitors" name="competitors">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="sales" class="form-label">Sales</label>
                                        <input type="number" class="form-control" id="sales" name="sales">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="ebay_competitor_price" class="form-label">eBay Competitor Price</label>
                                        <input type="number" class="form-control" id="ebay_competitor_price" name="ebay_competitor_price">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="walmart_price" class="form-label">Walmart Price</label>
                                        <input type="number" class="form-control" id="walmart_price" name="walmart_price">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="our_selling_price" class="form-label">Our Selling Price</label>
                                        <input type="number" class="form-control" id="our_selling_price" name="our_selling_price">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="border rounded p-2 mb-3">
                                <legend class="float-none w-auto px-1">Set 3</legend>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="walmart_tax" class="form-label">Walmart Tax</label>
                                        <input type="number" class="form-control" id="walmart_tax" name="walmart_tax">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="ebay_sales_tax" class="form-label">eBay Sales Tax</label>
                                        <input type="number" class="form-control" id="ebay_sales_tax" name="ebay_sales_tax">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="ebay_fees" class="form-label">eBay Fees</label>
                                        <input type="number" class="form-control" id="ebay_fees" name="ebay_fees">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="total_cost_price" class="form-label">Total Cost Price</label>
                                        <input type="number" class="form-control" id="total_cost_price" name="total_cost_price">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="walmart_discounted_price" class="form-label">Walmart Discounted Price</label>
                                        <input type="number" class="form-control" id="walmart_discounted_price" name="walmart_discounted_price">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="total_discounted_price" class="form-label">Total Discounted Price</label>
                                        <input type="number" class="form-control" id="total_discounted_price" name="total_discounted_price">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="border rounded p-2 mb-3">
                                <legend class="float-none w-auto px-1">Set 4</legend>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="profit_dollars" class="form-label">Profit $</label>
                                        <input type="number" class="form-control" id="profit_dollars" name="profit_dollars">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="profit_roi_percentage" class="form-label">Profit ROI %</label>
                                        <input type="number" class="form-control" id="profit_roi_percentage" name="profit_roi_percentage">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="autods_profit_percentage" class="form-label">AutoDS Profit %</label>
                                        <input type="number" class="form-control" id="autods_profit_percentage" name="autods_profit_percentage">
                                    </div>
                                    <div class="col-4 mb-3" hidden>
                                        <label for="autods_roi_percentage" class="form-label">AutoDS ROI %</label>
                                        <input type="number" class="form-control" id="autods_roi_percentage" name="autods_roi_percentage">
                                    </div>
                                    <div class="col-4 mb-3" hidden>
                                        <label for="output_price" class="form-label">OutPut Price</label>
                                        <input type="number" class="form-control" id="output_price" name="output_price">
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection
