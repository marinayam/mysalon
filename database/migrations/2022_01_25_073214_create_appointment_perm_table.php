<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentPermTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_perm', function (Blueprint $table) {
            $table->unsignedBigInteger('appointment_id');
            $table->unsignedBigInteger('perm_id');
            $table->primary(['appointment_id','perm_id']);
            // 外部キー制約
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
            $table->foreign('perm_id')->references('id')->on('perms')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_perm');
    }
}
