<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_periode')->constrained('periode');
            $table->foreignId('id_donatur')->constrained('donatur');
            $table->string('nama_periode', 100);
            $table->string('nominal_donasi', 11);
            $table->string('nama_donatur', 50);
            $table->string('nomor_rekening', 100);
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
        Schema::dropIfExists('invoice');
    }
}
