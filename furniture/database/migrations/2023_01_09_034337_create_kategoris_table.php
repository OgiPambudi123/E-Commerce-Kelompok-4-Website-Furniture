<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kategori');
            $table->string('nama_kategori');
            $table->string('slug_kategori');
            $table->text('deskripsi_kategori');
            $table->string('status');
            $table->string('foto')->nullable();//foto kategori
            $table->unsignedBigInteger('user_id');//user yang mengisi kategori
            $table->foreign('user_id')->nullable()->references('id')->on('users');
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
        Schema::dropIfExists('kategoris');
    }
}
