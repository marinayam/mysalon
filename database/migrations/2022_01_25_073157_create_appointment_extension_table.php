<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentExtensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_extension', function (Blueprint $table) {
            $table->unsignedBigInteger('appointment_id');
            $table->unsignedBigInteger('extension_id');
            $table->primary(['appointment_id','extension_id']);
            // 外部キー制約
            // $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
            // $table->foreign('extension_id')->references('id')->on('extensions')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_extension');
    }
}
