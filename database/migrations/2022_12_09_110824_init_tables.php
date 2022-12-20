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
        Schema::create('kartu_keluarga', function (Blueprint $table) {
            $table->string('nkk', 16)->unique();
            $table->unsignedTinyInteger('akun_login')->default(1);
            $table->json('refs')->nullable();
            $table->timestamps();
            $table->index(['nkk']);
        });

        Schema::create('data_warga', function (Blueprint $table) {
            $table->string('nik', 16)->unique();
            $table->string('nkk', 16)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('nama');
            $table->string('status_kk')->nullable();
            $table->json('refs')->nullable();
            $table->timestamps();
            $table->index(['nik', 'nkk', 'nama']);
        });

        Schema::create('metadata', function (Blueprint $table) {
            $table->string('identity')->unique();
            $table->json('body');
            $table->index([
                'identity'
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
        Schema::dropIfExists('kartu_keluarga');
        Schema::dropIfExists('data_warga');
        Schema::dropIfExists('metadata');
    }
};
