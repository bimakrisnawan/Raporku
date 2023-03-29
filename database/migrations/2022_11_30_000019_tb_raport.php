<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class TbRaport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->bigIncrements('nis');
            $table->string('nama');
            $table->string('pass');
            $table->date('tanggal_lahir');
            $table->string('alamat');
        });
        Schema::create('tb_guru', function (Blueprint $table) {
            $table->bigIncrements('nip');
            $table->string('nama');
            $table->string('pass');
        });
        Schema::create('tb_kkm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mat');
            $table->integer('indo');
            $table->integer('ipa');
            $table->integer('ips');
            $table->integer('agama');
            $table->integer('pkn');
        });

        Schema::create('tb_sem1', function (Blueprint $table) {
            $table->bigIncrements('nis');
            $table->foreign('nis')->references('nis')->on('tb_siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mat');
            $table->integer('indo');
            $table->integer('ipa');
            $table->integer('ips');
            $table->integer('agama');
            $table->integer('pkn');
            $table->longText('keterangan');
            $table->float('mean');
        });
        Schema::create('tb_sem2', function (Blueprint $table) {
            $table->bigIncrements('nis');
            $table->foreign('nis')->references('nis')->on('tb_siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mat');
            $table->integer('indo');
            $table->integer('ipa');
            $table->integer('ips');
            $table->integer('agama');
            $table->integer('pkn');
            $table->longText('keterangan');
            $table->float('mean');
        });
        Schema::create('tb_sem3', function (Blueprint $table) {
            $table->bigIncrements('nis');
            $table->foreign('nis')->references('nis')->on('tb_siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mat');
            $table->integer('indo');
            $table->integer('ipa');
            $table->integer('ips');
            $table->integer('agama');
            $table->integer('pkn');
            $table->longText('keterangan');
            $table->float('mean');
        });
        Schema::create('tb_sem4', function (Blueprint $table) {
            $table->bigIncrements('nis');
            $table->foreign('nis')->references('nis')->on('tb_siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mat');
            $table->integer('indo');
            $table->integer('ipa');
            $table->integer('ips');
            $table->integer('agama');
            $table->integer('pkn');
            $table->longText('keterangan');
            $table->float('mean');
        });
        Schema::create('tb_sem5', function (Blueprint $table) {
            $table->bigIncrements('nis');
            $table->foreign('nis')->references('nis')->on('tb_siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mat');
            $table->integer('indo');
            $table->integer('ipa');
            $table->integer('ips');
            $table->integer('agama');
            $table->integer('pkn');
            $table->longText('keterangan');
            $table->float('mean');
        });
        Schema::create('tb_sem6', function (Blueprint $table) {
            $table->bigIncrements('nis');
            $table->foreign('nis')->references('nis')->on('tb_siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mat');
            $table->integer('indo');
            $table->integer('ipa');
            $table->integer('ips');
            $table->integer('agama');
            $table->integer('pkn');
            $table->longText('keterangan');
            $table->float('mean');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
