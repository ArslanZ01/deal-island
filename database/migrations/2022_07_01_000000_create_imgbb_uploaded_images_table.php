<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgbb_uploaded_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_id');
            $table->string('title');
            $table->string('url_viewer');
            $table->string('url');
            $table->string('display_url');
            $table->integer('width');
            $table->integer('height');
            $table->integer('size');
            $table->integer('time');
            $table->integer('expiration');
            $table->text('image');
            $table->text('thumb');
            $table->text('medium');
            $table->string('delete_url');
            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imgbb_uploaded_images');
    }
};
