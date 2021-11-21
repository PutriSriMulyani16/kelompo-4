<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_officer');
            $table->unsignedBigInteger('id_students');
            $table->date('tanggalpembayaran');
            $table->string('bulanbayar');
            $table->string('tahunbayar');
            $table->unsignedBigInteger('id_spp');
            $table->string('jumlahbayar');
            $table->string('deskripsi')->null();

            $table->foreign('id_officer')->references('id')->on('officer');
            $table->foreign('id_students')->references('id')->on('students');
            $table->foreign('id_spp')->references('id')->on('spp');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
