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
        Schema::create('tbl_pendidikan_221040', function (Blueprint $table) {
            $table->id();
            $table->integer('id_deskripsi_221040');
            $table->string('pendidikan_221040');
            $table->integer('tahunmasuk_pendidikan_221040');
            $table->integer('tahunkeluar_pendidikan_221040');
            
        });
        DB::table('tbl_pendidikan_221040')->insert([
            ['id_deskripsi_221040'=>'1','pendidikan_221040'=>'SD Harapan Anak Bangsa','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'1','pendidikan_221040'=>'SMP Mutiara Abadi','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'1','pendidikan_221040'=>'SMA Cendekia Purnama','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'2','pendidikan_222040'=>'SD Pancaran Ilahi','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'2','pendidikan_222040'=>'SMP Kasih Sayang','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'2','pendidikan_222040'=>'SMA Wira Bangsa','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'3','pendidikan_221040'=>'SD Kasih Sayang','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'3','pendidikan_221040'=>'SMP Pesona Ilahi','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'3','pendidikan_221040'=>'SMA Inspirasi Ilmu','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'4','pendidikan_221040'=>'SD Cinta Belajar','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'4','pendidikan_221040'=>'SMP Pertiwi Cerdas','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'4','pendidikan_221040'=>'SMA Budi Utama','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'5','pendidikan_221040'=>'SD Pertiwi Cerdas','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'5','pendidikan_221040'=>'SMP Pelita Nusa','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'5','pendidikan_221040'=>'SMA Surya Dharma','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'6','pendidikan_221040'=>'SD Harapan Bangsa','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'6','pendidikan_221040'=>'SMP Harapan Anak Bangsa','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'6','pendidikan_221040'=>'SMA Nusantara Gemilang','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'7','pendidikan_221040'=>'SD Mekar Bakti','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'7','pendidikan_221040'=>'SMP Megah Cendikia','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'7','pendidikan_221040'=>'SMA Pusaka Harapan','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'8','pendidikan_221040'=>'SD Abdi Pendidikan','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'8','pendidikan_221040'=>'SMP Gemilang','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'8','pendidikan_221040'=>'SMA Cita Bangsa','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'9','pendidikan_221040'=>'SD Gita Sari','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'9','pendidikan_221040'=>'SMP Sakti Perkasa','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'9','pendidikan_221040'=>'SMA Bhakti Cendikia','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'10','pendidikan_221040'=>'SD Pelangi Ilmu','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'10','pendidikan_221040'=>'SMP Ganesha','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'10','pendidikan_221040'=>'SMA Mutiara Ilahi','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'11','pendidikan_221040'=>'SD Pusaka Cendekia','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'11','pendidikan_221040'=>'SMP Pusaka Ilmu','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'11','pendidikan_221040'=>'SMA Gemilang Pendidikan','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'12','pendidikan_221040'=>'SD Seruni Bahagia','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'12','pendidikan_221040'=>'SMP Budi Mulia','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'12','pendidikan_221040'=>'SMA Harapan Mulia','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'13','pendidikan_221040'=>'SD Budi Mulia','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'13','pendidikan_221040'=>'SMP Cendekia Muda','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'13','pendidikan_221040'=>'SMA Sakti Perdana','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'14','pendidikan_221040'=>'SD Mentari Ceria','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'14','pendidikan_221040'=>'SMP Pelita Harapan','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'14','pendidikan_221040'=>'SMA Pesona Cerdas','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'15','pendidikan_221040'=>'SD Nusantara Jaya','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'15','pendidikan_221040'=>'SMP Wira Sakti','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'15','pendidikan_221040'=>'SMA Citra Nusantara','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'16','pendidikan_221040'=>'SD Sinar Pelita','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'16','pendidikan_221040'=>'SMP Nusantara Mandiri','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'16','pendidikan_221040'=>'SMA Bhakti Ilmu','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'17','pendidikan_221040'=>'SD Tunas Bangsa','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'17','pendidikan_221040'=>'SMP Surya Kencana','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'17','pendidikan_221040'=>'SMA Pertiwi Megah','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'18','pendidikan_221040'=>'SD Cendekia Mandiri','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'18','pendidikan_221040'=>'SMP Andalan Bangsa','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'18','pendidikan_221040'=>'SMA Pelita Nusa','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'19','pendidikan_221040'=>'SD Mawar Indah','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'19','pendidikan_221040'=>'SMP Purnama Jaya','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'19','pendidikan_221040'=>'SMA Kasih Sayang','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],

            ['id_deskripsi_221040'=>'20','pendidikan_221040'=>'SD Bina Harapan','tahunmasuk_pendidikan_221040'=>'2005','tahunkeluar_pendidikan_221040'=>'2011'],
            ['id_deskripsi_221040'=>'20','pendidikan_221040'=>'SMP Bina Cerdas','tahunmasuk_pendidikan_221040'=>'2012','tahunkeluar_pendidikan_221040'=>'2016'],
            ['id_deskripsi_221040'=>'20','pendidikan_221040'=>'SMA Inspirasi Anak Bangsa','tahunmasuk_pendidikan_221040'=>'2017','tahunkeluar_pendidikan_221040'=>'2019'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tbl_pendidikan_221040');
    }
};
