<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name')->comment('客户姓名');
            $table->string('customer_email')->comment('客户邮箱');
            $table->string('subject')->comment('主题');
            $table->text('customer_subscribe')->comment('客户描述')->nullable();
            $table->string('call_back')->comment('是否回访')->nullable();
            $table->text('remark')->comment('备注')->nullable();
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
        Schema::dropIfExists('messages');
    }
}
