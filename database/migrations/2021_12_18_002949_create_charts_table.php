<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->date('birthday');//生年月日を保存するカラム
            $table->string('zip');//郵便番号を保存するカラム
            $table->string('pref');//都道府県を保存するカラム
            $table->string('addr01');//市区町村を保存するカラム
            $table->string('addr02')->nullable();//建物名・その他を保存するカラム
            $table->string('trouble');//お化粧品や施術でのトラブルの経験を保存するカラム
            $table->string('concern');//目元・眉・肌で気になる点を保存するカラム
            $table->string('allergy');//アレルギーを保存するカラム
            $table->string('record');//今までの施術や手術のご経験を保存するカラム
            $table->string('body_concern');//体調の問題を保存するカラム
            $table->string('comment')->nullable();;//管理者がコメントを保存するカラム
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
        Schema::dropIfExists('charts');
    }
}
