<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEBayOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebay_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('sales_record_number')->unique();
            $table->string('order_number')->nullable();
            $table->string('buyer_username')->nullable();
            $table->string('buyer_name')->nullable();
            $table->string('buyer_email')->nullable();
            $table->string('buyer_note')->nullable();
            $table->string('buyer_address_1')->nullable();
            $table->string('buyer_address_2')->nullable();
            $table->string('buyer_city')->nullable();
            $table->string('buyer_state')->nullable();
            $table->string('buyer_zip')->nullable();
            $table->string('buyer_country')->nullable();
            $table->string('buyer_tax_identifier_name')->nullable();
            $table->string('buyer_tax_identifier_value')->nullable();
            $table->string('ship_to_name')->nullable();
            $table->string('ship_to_phone')->nullable();
            $table->string('ship_to_address_1')->nullable();
            $table->string('ship_to_address_2')->nullable();
            $table->string('ship_to_city')->nullable();
            $table->string('ship_to_state')->nullable();
            $table->string('ship_to_zip')->nullable();
            $table->string('ship_to_country')->nullable();
            $table->bigInteger('item_number')->nullable();
            $table->string('item_title', 80)->nullable();
            $table->string('custom_label')->nullable();
            $table->boolean('sold_via_promoted_listings')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('sold_for')->nullable();
            $table->integer('shipping_and_handling')->nullable();
            $table->string('item_location')->nullable();
            $table->integer('item_zip_code')->nullable();
            $table->string('item_country')->nullable();
            $table->integer('ebay_collect_and_remit_tax_rate')->nullable();
            $table->string('ebay_collect_and_remit_tax_type')->nullable();
            $table->string('ebay_reference_name')->nullable();
            $table->string('ebay_reference_value')->nullable();
            $table->string('tax_status')->nullable();
            $table->integer('seller_collected_tax')->nullable();
            $table->integer('ebay_collected_tax')->nullable();
            $table->integer('electronic_waste_recycling_fee')->nullable();
            $table->integer('mattress_recycling_fee')->nullable();
            $table->integer('battery_recycling_fee')->nullable();
            $table->integer('white_goods_disposal_tax')->nullable();
            $table->integer('tire_recycling_fee')->nullable();
            $table->integer('additional_fee')->nullable();
            $table->integer('total_price')->nullable();
            $table->boolean('ebay_collected_tax_and_fees_included_in_total')->nullable();
            $table->string('payment_method')->nullable();
            $table->date('sale_date')->nullable();
            $table->date('paid_on_date')->nullable();
            $table->date('ship_by_date')->nullable();
            $table->date('minimum_estimated_delivery_date')->nullable();
            $table->date('maximum_estimated_delivery_date')->nullable();
            $table->date('shipped_on_date')->nullable();
            $table->boolean('feedback_left')->nullable();
            $table->boolean('feedback_received')->nullable();
            $table->string('my_item_note')->nullable();
            $table->string('paypal_transaction_id')->nullable();
            $table->string('shipping_service')->nullable();
            $table->string('tracking_number')->nullable();
            $table->bigInteger('transaction_id')->nullable();
            $table->string('variation_details')->nullable();
            $table->boolean('global_shipping_program')->nullable();
            $table->string('global_shipping_reference_id')->nullable();
            $table->boolean('click_and_collect')->nullable();
            $table->string('click_and_collect_reference_number')->nullable();
            $table->boolean('ebay_plus')->nullable();
            $table->boolean('authenticity_verification_program')->nullable();
            $table->string('authenticity_verification_status')->nullable();
            $table->string('authenticity_verification_outcome_reason')->nullable();
            $table->boolean('ebay_vault_program')->nullable();
            $table->string('vault_fulfillment_type')->nullable();
            $table->boolean('ebay_fulfillment_program')->nullable();
            $table->string('tax_city')->nullable();
            $table->string('tax_state')->nullable();
            $table->string('tax_zip')->nullable();
            $table->string('tax_country')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ebay_orders');
    }
}
