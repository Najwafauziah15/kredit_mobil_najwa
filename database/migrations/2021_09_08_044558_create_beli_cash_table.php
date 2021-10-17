<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeliCashTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_cash', function (Blueprint $table) {
            $table->string('kode_cash', 15)->primary();
            $table->string('ktp_pembeli', 20)->unique();
            $table->string('kode_mobil', 15)->unique();
            $table->date('cash_tgl');
            $table->float('cash_bayar');
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
        Schema::dropIfExists('beli_cash');
    }
}
