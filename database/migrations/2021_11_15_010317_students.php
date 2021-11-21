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
            $table->string('nama');
            $table->unsignedBigInteger('id_class');
            $table->string('notelpon');
            $table->text('alamat');
            $table->unsignedBigInteger('id_majors');
            $table->unsignedBigInteger('id_spp');

            $table->foreign('id_class')->references('id')->on('classes');
            $table->foreign('id_majors')->references('id')->on('majors');
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
        Schema::dropIfExists('students');
    }
}
