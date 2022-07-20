<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('product_link');
            $table->string('competitor_ebay_link');
            $table->string('our_ebay_link')->nullable();
            $table->integer('competitors');
            $table->integer('sales');
            $table->float('ebay_competitor_price');
            $table->float('product_price');
            $table->float('our_selling_price');
            $table->float('product_tax');
            $table->float('ebay_sales_tax');
            $table->float('ebay_fees');
            $table->float('total_cost_price');
            $table->float('product_discounted_price');
            $table->float('total_discounted_price');
            $table->float('profit');
            $table->float('profit_roi');
            $table->float('autods_profit_percentage');
            $table->text('remarks')->nullable();
            $table->text('comments')->nullable();
            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->bigInteger('updated_by')->unsigned()->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            $table->bigInteger('rejected_by')->unsigned()->nullable();
            $table->foreign('rejected_by')->references('id')->on('users')->onDelete('set null');
            $table->bigInteger('listed_by')->unsigned()->nullable();
            $table->foreign('listed_by')->references('id')->on('users')->onDelete('set null');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
