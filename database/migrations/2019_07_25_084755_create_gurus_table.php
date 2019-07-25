<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip', 20)->unique();
            $table->string('nama', 50);
            $table->string('jk', 15);
            $table->string('tmpt_lahir', 25);
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('telp', 15);
            $table->text('foto');
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
        Schema::dropIfExists('guru');
    }
}
