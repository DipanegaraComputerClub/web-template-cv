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
        //
        Schema::create('tbl_pengalaman_221040', function (Blueprint $table) {
            $table->id();
            $table->integer('id_deskripsi_221040');
            $table->string('pengalaman_221040');
            $table->integer('tahunmasuk_pengalaman_221040');
            $table->integer('tahunkeluar_pengalaman_221040');
            
        });

        DB::table('tbl_pengalaman_221040')->insert([
            ['id_deskripsi_221040'=>'1','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'1','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'2','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'2','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'3','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'3','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'4','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'4','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'5','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'5','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'6','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'6','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'7','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'7','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'8','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'8','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'9','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'9','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'10','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'10','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'11','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'11','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'12','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'12','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'13','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'13','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'14','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'14','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'15','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'15','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'16','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'16','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'17','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'17','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'18','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'18','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'19','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'19','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],

            ['id_deskripsi_221040'=>'20','pengalaman_221040'=>'Karyawan','tahunmasuk_pengalaman_221040'=>'2019','tahunkeluar_pengalaman_221040'=>'2020'],
            ['id_deskripsi_221040'=>'20','pengalaman_221040'=>'Marketing','tahunmasuk_pengalaman_221040'=>'2021','tahunkeluar_pengalaman_221040'=>'2022'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tbl_pengalaman_221040');
    }
};
