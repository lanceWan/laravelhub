<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0)->comment('用户id');
            $table->string('title')->default('')->comment('标题');
            $table->text('content')->comment('帖子内容');
            $table->integer('reply')->default(0)->comment('回答次数');
            $table->integer('visit')->default(0)->comment('访问次数');
            $table->tinyInteger('is_top')->default(0)->comment('置顶，1为置顶');
            $table->tinyInteger('is_fine')->default(0)->comment('精帖，1为精帖');
            $table->tinyInteger('status')->default(0)->comment('状态，1为正常未结帖，2为结帖，3为删除');
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
        Schema::dropIfExists('topics');
    }
}
