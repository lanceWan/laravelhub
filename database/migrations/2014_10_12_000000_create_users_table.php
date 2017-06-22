<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->default('')->comment('呢称');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar')->default('')->comment('头像');
            $table->string('city')->default('')->comment('城市');
            $table->tinyInteger('gender')->default(0)->comment('性别');
            $table->string('sign')->default('')->comment('签名');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
