<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dbobaju extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {

            // $table->increments('id',10);
            // $table->string('judul', 100);
            // $table->string('email', 100);
            // $table->string('alamat', 100);
            // $table->rememberToken();
            // $table->timestamps();

            $table->increments('id', 10);
            $table->string('judul', 100);
            $table->text('keterangan');
            $table->integer('harga');
            $table->string('gambar1', 100);
            $table->string('gambar2', 100);
            $table->string('gambar3', 100);
            $table->rememberToken();
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
        Schema::dropIfExists('masters');
    }
}
