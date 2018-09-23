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
                'email' => '1484663282@qq.com',
                'password' => bcrypt('nza08157016.'),
                'avatar' => asset('uploads/images/system/avatar.jpg'),
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
