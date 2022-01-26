<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponDonaturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respon_donatur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_donatur')->constrained('donatur');
            $table->string('nama_donatur', 50);
            $table->text('pertanyaan_satu', 100);
            $table->text('pertanyaan_dua', 100);
            $table->text('pesan', 100);
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
        Schema::dropIfExists('respon_donatur');
    }
}

