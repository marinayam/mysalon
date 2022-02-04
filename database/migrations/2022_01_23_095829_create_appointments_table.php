<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name01');//名前（漢字）を保存するカラム
            $table->string('name02');//名前（ふりがな）を保存するカラム
            $table->string('tel');//電話番号を保存するカラム
            $table->string('email');//メールアドレスを保存するカラム
            $table->date('date');//日にちを保存するカラム
            $table->time('time');//時刻を保存するカラム
            $table->string('comment')->nullable();;//質問等コメントを保存するカラム
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
        Schema::dropIfExists('appointments');
    }
}
