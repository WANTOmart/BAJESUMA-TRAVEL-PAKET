<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('armadas', function (Blueprint $table) {

            $table->id();

            $table->string('kode_armada',20)->unique();

            $table->string('nama_armada',100);

            $table->string('merk',100);

            $table->string('tipe',100)->nullable();

            $table->string('plat_nomor',20)->unique();

            $table->year('tahun')->nullable();

            $table->integer('kapasitas')->default(7);

            $table->enum('jenis',[
                'Hiace',
                'Elf',
                'Innova',
                'Avanza',
                'Luxio',
                'Lainnya'
            ])->default('Hiace');

            $table->enum('transmisi',[
                'Manual',
                'Automatic'
            ])->default('Manual');

            $table->enum('status',[
                'Aktif',
                'Perawatan',
                'Tidak Aktif'
            ])->default('Aktif');

            $table->string('warna',50)->nullable();

            $table->string('foto')->nullable();

            $table->text('keterangan')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armadas');
    }
};
