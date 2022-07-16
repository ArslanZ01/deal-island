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
                <div class="card-header">
                    {{ __('Dashboard') }}
                    <button type="button" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Filter</button>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-header">Orders</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">{{ $total_orders }}</h1>
                                    <p class="card-text text-end">${{ $total_price }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" hidden>
                            <div class="card text-white bg-secondary mb-3">
                                <div class="card-header">Expired</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-header">Completed</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                            </div>
                        <div class="col-3">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-header">Rejected</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card text-dark bg-warning mb-3">
                                <div class="card-header">Pending</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" hidden>
                            <div class="card text-dark bg-info mb-3">
                                <div class="card-header">Listed</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" hidden>
                            <div class="card text-dark bg-light mb-3">
                                <div class="card-header">Results</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" hidden>
                            <div class="card text-white bg-dark mb-3">
                                <div class="card-header">Reports</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" hidden>
                            <div class="card text-dark bg-violet mb-3">
                                <div class="card-header">OK</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" hidden>
                            <div class="card text-dark bg-pink mb-3">
                                <div class="card-header">OK</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" hidden>
                            <div class="card text-white bg-purple mb-3">
                                <div class="card-header">OK</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" hidden>
                            <div class="card text-white bg-hotpink mb-3">
                                <div class="card-header">OK</div>
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-end">100$</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modals')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Filter Dashboard</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="get" action="{{ route('home') }}" id="apply_filter">
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="">From</span>
                            <input type="date" class="form-control" name="from_date" value="{{ isset($from_date)?$from_date:'' }}" placeholder="" aria-label="" aria-describedby="">
                        </div>
                    </div>

                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="to_date" value="{{ isset($to_date)?$to_date:'' }}" placeholder="" aria-label="" aria-describedby="">
                            <span class="input-group-text" id="">To</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="">From</span>
                            <input type="time" class="form-control" name="from_time" placeholder="" aria-label="" aria-describedby="">
                        </div>
                    </div>

                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="time" class="form-control" name="to_time" placeholder="" aria-label="" aria-describedby="">
                            <span class="input-group-text" id="">To</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-primary" onclick="$('#apply_filter').submit()">Apply</button>
        </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

</script>
@endsection

