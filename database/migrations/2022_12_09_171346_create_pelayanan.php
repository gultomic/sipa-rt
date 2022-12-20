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
        Schema::create('pelayanan_jenis', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->text('catatan');
            $table->timestamps();
        });

        Schema::create('pelayanan_warga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelayanan_id');
            $table->unsignedBigInteger('warga_id');
            $table->string('status')->default('baru');
            $table->json('catatan')->nullable();
            $table->timestamp('selesai')->nullable();
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
        Schema::dropIfExists('pelayanan_jenis');
        Schema::dropIfExists('pelayanan_warga');
    }
};
