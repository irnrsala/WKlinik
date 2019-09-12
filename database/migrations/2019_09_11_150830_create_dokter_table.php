<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('spesialis');
            $table->string('alamat');
            $table->string('telp');
            // $table->dateTime('dateAccepted')->default(now()->toDateTimeString());
            $table->date('tanggalMulai');
            $table->string('foto');
            $table->enum('status', ['aktif', 'non Aktif']);
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
        Schema::dropIfExists('dokter');
    }
}
