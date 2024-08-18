<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_cv_221040', function (Blueprint $table) {
            $table->id('id_221040');
            $table->string('ket_221040');
            $table->string('nama_221040');
            $table->string('tanggal_221040');
            $table->timestamps();
        });

        DB::table('tbl_cv_221040')->insert([
            ['ket_221040'=>'SKY','nama_221040'=>'Agus Setiawan','tanggal_221040'=>'2023-12-01'],
            ['ket_221040'=>'SKY','nama_221040'=>'Rani Putri','tanggal_221040'=>'2023-12-03'],
            ['ket_221040'=>'SKY','nama_221040'=>'Budi Susanto','tanggal_221040'=>'2023-12-05'],
            ['ket_221040'=>'SKY','nama_221040'=>'Siti Rahayu','tanggal_221040'=>'2023-12-05'],
            ['ket_221040'=>'ROSE','nama_221040'=>'Adi Nugroho','tanggal_221040'=>'2023-12-10'],
            ['ket_221040'=>'ROSE','nama_221040'=>'Maya Dewi','tanggal_221040'=>'2023-12-12'],
            ['ket_221040'=>'ROSE','nama_221040'=>'Dito Prabowo','tanggal_221040'=>'2023-12-12'],
            ['ket_221040'=>'SKY','nama_221040'=>'Nita Indah','tanggal_221040'=>'2023-12-12'],
            ['ket_221040'=>'STANDART','nama_221040'=>'Irfan Hakim','tanggal_221040'=>'2023-12-15'],
            ['ket_221040'=>'SKY','nama_221040'=>'Rina Amelia','tanggal_221040'=>'2023-12-15'],
            ['ket_221040'=>'ROSE','nama_221040'=>'Fajar Pratama','tanggal_221040'=>'2023-12-15'],
            ['ket_221040'=>'ROSE','nama_221040'=>'Anisa Fitriani','tanggal_221040'=>'2023-12-16'],
            ['ket_221040'=>'STANDART','nama_221040'=>'Dwi Susanto','tanggal_221040'=>'2023-12-16'],
            ['ket_221040'=>'STANDART','nama_221040'=>'Rian Saputra','tanggal_221040'=>'2023-12-20'],
            ['ket_221040'=>'SKY','nama_221040'=>'Desi Anggraini','tanggal_221040'=>'2023-12-23'],
            ['ket_221040'=>'ROSE','nama_221040'=>'Andi Setiawan','tanggal_221040'=>'2023-12-25'],
            ['ket_221040'=>'SKY','nama_221040'=>'Nurul Hidayah','tanggal_221040'=>'2023-12-27'],
            ['ket_221040'=>'SKY','nama_221040'=>'Dedi Prasetyo','tanggal_221040'=>'2023-12-27'],
            ['ket_221040'=>'ROSE','nama_221040'=>'Rini Septiani','tanggal_221040'=>'2024-01-01'],
            ['ket_221040'=>'ROSE','nama_221040'=>'Joko Saputra','tanggal_221040'=>'2024-01-02'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_cv_221040');
    }
};
