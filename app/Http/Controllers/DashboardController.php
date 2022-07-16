<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request): \Illuminate\Contracts\Support\Renderable
    {
        $data = [];
        $ebay_orders = DB::table('ebay_orders');
        if ($request->filled('from_date')) {
            $data['from_date'] = $request->input('from_date');
            $ebay_orders->whereDate('sale_date', '>', $data['from_date']);
        }
        if ($request->filled('to_date')) {
            $data['to_date'] = $request->input('to_date');
            $ebay_orders->whereDate('sale_date', '<', $data['to_date']);
        }
        if ($request->filled('from_time'))
            $data['from_time'] = $request->input('from_time');
        if ($request->filled('to_time'))
            $data['to_time'] = $request->input('to_time');

        $data['total_orders'] = $ebay_orders->count();
        $data['total_price'] = $ebay_orders->sum('total_price');

        return view('dashboard')->with($data);
    }
}
