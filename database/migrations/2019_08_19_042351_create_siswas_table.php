<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 100);
            $table->string('jk', 15);
            $table->string('tmpt_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('agama', 50);
            $table->string('alamat');
            $table->string('no_hp', 15);
            $table->text('foto');
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('siswa');
    }
}
