<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredit', function (Blueprint $table) {
            $table->string('kode_kredit', 15)->primary();
            $table->string('ktp_pembeli', 20)->unique();
            $table->string('kode_paket', 15)->unique();
            $table->string('kode_mobil', 15)->unique();
            $table->date('tgl_kredit');
            $table->string('fotokopi_ktp', 110);
            $table->string('fotokopi_kk', 110);
            $table->string('fotokopi_gaji', 110);
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
        Schema::dropIfExists('kredit2s');
    }
}
