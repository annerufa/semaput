<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_anggotas', function (Blueprint $table) {
            $table->increments('id_petani');
            $table->string('nama_petani');
            $table->string('alamat');
            $table->string('tgl_lahir');
            $table->string('tlp');
            $table->string('username');
            $table->string('password');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_anggotes');
    }
}
