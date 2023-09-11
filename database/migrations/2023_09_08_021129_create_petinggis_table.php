<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetinggisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petinggi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_petinggi');
            $table->string('slug_petinggi');
            $table->text('isi');
            $table->date('publish');
            $table->string('gambar');
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
        Schema::dropIfExists('petinggi');
    }
}
