<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class EBayOrderController extends Controller
{
    public function create(Request $request)
    {
        return view('ebay_orders.create');
    }

    public function import(Request $request)
    {
        $request->validate([
            'ebay_orders_sheet' => 'required'
        ]);

        $ebay_orders_sheet = Excel::toArray([], $request->file('ebay_orders_sheet')->getRealPath());

        $column = [];
        foreach ($ebay_orders_sheet as $ebay_orders) {
            foreach ($ebay_orders as $index=>$ebay_order) {
                if ($index == 1) {
                    foreach ($ebay_order as $value)
                        $column[] = str_replace(' ', '_', strtolower($value));
                }
                if ($index > 2 && $index < sizeof($ebay_orders)-3) {
                    if (DB::table('ebay_orders')->where('sales_record_number', $ebay_order[0])->count() > 0)
                        continue;
                    foreach ($ebay_order as $key=>$value) {
                        if (in_array($column[$key], ['sold_via_promoted_listings','ebay_collected_tax_and_fees_included_in_total','feedback_left','feedback_received','global_shipping_program','click_and_collect','ebay_plus','authenticity_verification_program','ebay_vault_program','ebay_fulfillment_program']))
                            $ebay_order[$key] = strtolower($value)=='yes';
                        if (in_array($column[$key], ['sold_for','shipping_and_handling','ebay_collect_and_remit_tax_rate','seller_collected_tax','ebay_collected_tax','electronic_waste_recycling_fee','mattress_recycling_fee','battery_recycling_fee','white_goods_disposal_tax','tire_recycling_fee','additional_fee','total_price']))
                            $ebay_order[$key] = str_replace('$', '', $value);
                        if (str_contains($column[$key], 'date'))
                            $ebay_order[$key] = Carbon::parse($value);
                    }
                    try {
                        DB::table('ebay_orders')->insert(array_combine($column, $ebay_order));
                    }
                    catch (exception $e) {
                        return redirect()->back()->with('error', 'Orders Imported UnSuccessfully'."\n".$e->getMessage());
                    }
                }
            }
        }

        return redirect()->back()->with('success', 'Orders Imported Successfully');
//        return redirect()->route('ebay-orders.list')->with('ebay_orders_list', $data);
    }

    public function list(Request $request)
    {
        return view('ebay_orders.list')->with('ebay_orders', DB::table('ebay_orders')->get());
    }
}
