<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBackgroundToTopics extends Migration
{
    public function up()
    {
      Schema::table('topics', function (Blueprint $table) {
          $table->string('background')->nullable()->comment('背景图片');
      });
    }

    public function down()
    {
      Schema::table('topics', function (Blueprint $table) {
          $table->dropColumn('background');
      });
    }
}
