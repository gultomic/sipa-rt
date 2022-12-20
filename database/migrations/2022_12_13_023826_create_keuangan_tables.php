<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keuangan_jenis', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            // $table->timestamps();
        });

        Schema::create('keuangan_rincian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_id');
            $table->unsignedInteger('nominal');
            $table->string('keterangan');
            $table->string('tipe');
            $table->timestamps();
            $table->index([
                'jenis_id', 'tipe'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keuangan_jenis');
        Schema::dropIfExists('keuangan_rincian');
    }
};
