@extends('layouts.app')

@section('styles')
    <style>
        .bg-lightred {
            background-color: #ffcccb;
        }
        .bg-lightgreen {
            background-color: #90ee90;
        }
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
                        <form method="post" action="{{ route('listings.store') }}">
                            @csrf
                            <fieldset class="border rounded p-2 mb-3">
                                <legend class="float-none w-auto px-1">Set 1</legend>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="product_id" class="form-label">Product ID</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Search</span>
                                            <input type="text" class="form-control" id="product_id" name="product_id">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Verify</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="product_link" class="form-label">Product Link</label>
                                        <textarea type="text" rows="1" class="form-control" id="product_link" name="product_link"></textarea>
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
                                        <label for="product_price" class="form-label">Product Price</label>
                                        <input type="number" class="form-control" id="product_price" name="product_price">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="our_selling_price" class="form-label">Our Selling Price</label>
                                        <input type="number" class="form-control" id="our_selling_price" name="our_selling_price">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="border rounded p-2 mb-3">
                                <legend class="float-none w-auto px-1" data-bs-toggle="collapse" data-bs-target="#collapseExample" role="button">Set 3</legend>
                                <div class="collapse" id="collapseExample">
                                    <div class="row">
                                        <div class="col-3 mb-3" hidden>
                                            <label for="product_tax" class="form-label">Tax and Fees Type</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-3 mb-3">
                                            <label for="product_tax" class="form-label">Product Tax</label>
                                            <input type="number" class="form-control" id="product_tax" name="product_tax">
                                        </div>
                                        <div class="col-3 mb-3">
                                            <label for="ebay_sales_tax" class="form-label">eBay Sales Tax</label>
                                            <input type="number" class="form-control" id="ebay_sales_tax" name="ebay_sales_tax">
                                        </div>
                                        <div class="col-3 mb-3">
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
                                            <label for="product_discounted_price" class="form-label">Product Discounted Price</label>
                                            <input type="number" class="form-control" id="product_discounted_price" name="product_discounted_price">
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label for="total_discounted_price" class="form-label">Total Discounted Price</label>
                                            <input type="number" class="form-control" id="total_discounted_price" name="total_discounted_price">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="border rounded p-2 mb-3">
                                <legend class="float-none w-auto px-1">Set 4</legend>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="profit" class="form-label">Profit</label>
                                        <input type="number" class="form-control" id="profit" name="profit">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="profit_roi" class="form-label">Profit ROI</label>
                                        <input type="number" class="form-control" id="profit_roi" name="profit_roi">
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
                            <fieldset class="border rounded p-2 mb-3">
                                <legend class="float-none w-auto px-1">Set 5</legend>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="profit" class="form-label">Profit</label>
                                        <input type="number" class="form-control" id="profit" name="profit">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="alert alert-warning text-center" role="alert">
                                Pending
                            </div>
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
        $('input[name="competitors"], input[name="sales"], input[name="ebay_competitor_price"], input[name="product_price"], input[name="our_selling_price"]').on('input', function () {
            $('input[name="product_tax"]').val(parseFloat($('input[name="product_price"]').val())*0.1);
            $('input[name="ebay_sales_tax"]').val(parseFloat($('input[name="our_selling_price"]').val())*0.1);
            $('input[name="ebay_fees"]').val(((parseFloat($('input[name="our_selling_price"]').val())+parseFloat($('input[name="ebay_sales_tax"]').val()))*12.55/100)+0.3);
            $('input[name="total_cost_price"]').val(parseFloat($('input[name="product_price"]').val())+parseFloat($('input[name="product_tax"]').val())+parseFloat($('input[name="ebay_fees"]').val()));
            $('input[name="product_discounted_price"]').val((parseFloat($('input[name="product_price"]').val())+parseFloat($('input[name="product_tax"]').val()))-((parseFloat($('input[name="product_price"]').val())+parseFloat($('input[name="product_tax"]').val()))*30/100));
            $('input[name="total_discounted_price"]').val(parseFloat($('input[name="product_discounted_price"]').val())+parseFloat($('input[name="ebay_fees"]').val()));
            $('input[name="profit"]').val(parseFloat($('input[name="our_selling_price"]').val())-parseFloat($('input[name="total_discounted_price"]').val()));
            $('input[name="profit_roi"]').val(parseFloat($('input[name="profit"]').val())*100/parseFloat($('input[name="our_selling_price"]').val()));
            $('input[name="autods_profit_percentage"]').val((parseFloat($('input[name="our_selling_price"]').val())-parseFloat($('input[name="product_price"]').val()))*100/parseFloat($('input[name="product_price"]').val()));

            if ($('input[name="profit"]').val() != '' && $('input[name="our_selling_price"]').val() != '') {
                if (parseFloat($('input[name="profit"]').val()) >= parseFloat($('input[name="our_selling_price"]').val())*15/100)
                    $('.alert').removeClass('alert-warning').removeClass('alert-danger').addClass('alert-success').text('Approved');
                else
                    $('.alert').removeClass('alert-warning').removeClass('alert-success').addClass('alert-danger').text('Rejected');
            }
            else
                $('.alert').removeClass('alert-success').removeClass('alert-danger').addClass('alert-warning').text('Pending');
        });
    </script>
@endsection
