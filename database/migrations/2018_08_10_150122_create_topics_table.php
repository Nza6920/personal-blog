<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id')->comment('自增主键');
            $table->string('title')->index()->comment('文章标题');
            $table->text('body')->comment('文章内容');
            $table->unsignedInteger('user_id')->index()->comment('发表用户');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('excerpt')->comment('摘要');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
