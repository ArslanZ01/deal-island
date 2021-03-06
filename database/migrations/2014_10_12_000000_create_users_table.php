<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->unsigned()->nullable();
            $table->foreign('role')->references('id')->on('user_roles')->onDelete('set null');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [ 'name' => 'Root', 'username' => 'root', 'email'=>'root@email.com', 'password'=>Hash::make('root123'), 'role'=>'1' ],
            [ 'name' => 'Admin', 'username' => 'admin', 'email'=>'admin@email.com', 'password'=>Hash::make('admin123'), 'role'=>'2' ],
            [ 'name' => 'Manager', 'username' => 'manager', 'email'=>'manager@email.com', 'password'=>Hash::make('manager123'), 'role'=>'3' ],
            [ 'name' => 'Support', 'username' => 'support', 'email'=>'support@email.com', 'password'=>Hash::make('support123'), 'role'=>'4' ],
            [ 'name' => 'Hunter', 'username' => 'hunter', 'email'=>'hunter@email.com', 'password'=>Hash::make('hunter123'), 'role'=>'5' ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
