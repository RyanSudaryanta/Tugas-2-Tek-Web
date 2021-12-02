<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetupDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->unique();
            $table->boolean('jk');
            $table->string('nama', 100);
            $table->string('no_rekening', 16)->unique();
            $table->string('telp', 12);
            $table->string('alamat', 100);
            $table->date('tgllhr');
            $table->timestamps();
        });

        Schema::create('pinjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id');
            $table->date('tgl_peminjaman');
            $table->integer('jml_peminjaman');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('pelanggan_id')->references('id')->on('pelanggan')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id');
            $table->date('tgl_pengembalian');
            $table->integer('jml_pengembalian');
            $table->integer('bunga');
            $table->timestamps();

            $table->foreign('pelanggan_id')->references('id')->on('pelanggan')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
        Schema::dropIfExists('pinjaman');
        Schema::dropIfExists('pengembalian');
    }
}
