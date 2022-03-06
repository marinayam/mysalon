<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentEyebrowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_eyebrow', function (Blueprint $table) {
            $table->unsignedBigInteger('appointment_id');
            $table->unsignedBigInteger('eyebrow_id');
            $table->primary(['appointment_id','eyebrow_id']);
            // 外部キー制約
            // $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
            // $table->foreign('eyebrow_id')->references('id')->on('eyebrows')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_eyebrow');
    }
}
