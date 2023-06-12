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
        Schema::create('detail_mhs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idmhs');
            $table->string('name');
            $table->string('tipe');
            $table->string('kantor');
            $table->string('rentang');
            $table->text('detail')->nullable();
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
        Schema::dropIfExists('detail_mahasiswa');
    }
};
