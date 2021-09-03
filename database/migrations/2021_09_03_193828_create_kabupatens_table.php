<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabupatensTable extends Migration
{
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provinsi_id')->constrained('provinsi');
            $table->string('nama_kabupaten',50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kabupaten');
    }
}
