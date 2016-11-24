<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_laporans', function (Blueprint $table) {
            $table->increments('id_laporan');
            $table->integer('id_petani');
            $table->integer('id_cek');
            $table->integer('sp36');
            $table->integer('KCLJ');
            $table->integer('KCLN');
            $table->integer('ZA');
            $table->integer('urea');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_laporans');
    }
}
