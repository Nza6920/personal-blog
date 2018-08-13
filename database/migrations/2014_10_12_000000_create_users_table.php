<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('自增主键');
            $table->string('name')->comment('姓名');
            $table->string('email')->unique()->comment('电子邮箱');
            $table->string('password')->comment('密码');
            $table->string('avatar')->comment('头像');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
