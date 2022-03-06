<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nilai');
            $table->integer('mata_kuliah_id');
            $table->integer('penilaian_id');
            $table->integer('mahasiswa_nim');
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
        Schema::dropIfExists('penilaian_detail');
    }
}
