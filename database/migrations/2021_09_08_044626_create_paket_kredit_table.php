<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketKreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_kredit', function (Blueprint $table) {
            $table->string('kode_paket', 15)->primary();
            $table->float('harga_paket');
            $table->float('uang_muka');
            $table->integer('paket_jml_cicilan');
            $table->float('bunga');
            $table->float('nilai_cicilan');
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
        Schema::dropIfExists('paket_kredit');
    }
}
