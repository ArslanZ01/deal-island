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
        Schema::create('user_roles', function (Blueprint $table) {
            $table->integer('id')->unsigned()->primary();
            $table->string('name');
        });

        DB::table('user_roles')->insert([
            [ 'id' => 0, 'name' => 'Empty' ],
            [ 'id' => 1, 'name' => 'Root' ],
            [ 'id' => 2, 'name' => 'Admin' ],
            [ 'id' => 3, 'name' => 'Manager' ],
            [ 'id' => 4, 'name' => 'Support' ],
            [ 'id' => 5, 'name' => 'Hunter' ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
};
