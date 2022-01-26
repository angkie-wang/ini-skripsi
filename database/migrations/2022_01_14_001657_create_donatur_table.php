<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonaturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donatur', function (Blueprint $table) {
            $table->id();
            $table->string('nama_donatur', 50);
            $table->string('email_donatur', 30);
            $table->boolean('anonim')->default(false);
            $table->boolean('alumni')->default(false);
            $table->string('fakultas', 30);
            $table->string('usia', 2);
            $table->string('nomor_wa', 13);
            $table->string('instagram', 20);
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
        Schema::dropIfExists('donatur');
    }
}
