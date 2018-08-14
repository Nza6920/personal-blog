<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class SeedUsersDate extends Migration
{
    public function up()
    {
        $user = [
            [
                'name' => 'pepsi',
                'email' => 'niu@qq.com',
                'password' => bcrypt('123456'),
                'avatar' => asset('uploads/images/avatar.jpg'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        \DB::table('users')->insert($user);
    }

    public function down()
    {

    }
}
