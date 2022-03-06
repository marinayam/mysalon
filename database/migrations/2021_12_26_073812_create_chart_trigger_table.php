<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartTriggerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_trigger', function (Blueprint $table) {
            $table->unsignedBigInteger('chart_id');
            $table->unsignedBigInteger('trigger_id');
            $table->primary(['chart_id','trigger_id']);
            // 外部キー制約
            // $table->foreign('chart_id')->references('id')->on('charts')->onDelete('cascade');
            // $table->foreign('trigger_id')->references('id')->on('triggers')->onDelete('cascade');
            });
}
        
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chart_trigger');
    }
}
