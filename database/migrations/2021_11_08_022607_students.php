<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn');
            $table->varchar('nama');
            $table->unsigneBigInterger('id_class');
            $table->varchar('notelpon');
            $table->text('alamat');
            $table->unsigneBigInterger('id_majors');
            $table->unsigneBigInterger('id_spp');

            $table->foreign('id_class')->references('id_class')->on('classes');
            $table->foreign('id_major')->references('id_major')->on('majors');
            $table->foreign('id_payment')->references('id_payment')->on('payments');
        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
