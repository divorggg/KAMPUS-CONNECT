<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('pp');
            $table->string('keterampilan');
            $table->string('pengalaman');
            $table->string('pendidikan');
            $table->string('job');
            $table->string('des');
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
        Schema::dropIfExists('mahasiswas');
    }
};
