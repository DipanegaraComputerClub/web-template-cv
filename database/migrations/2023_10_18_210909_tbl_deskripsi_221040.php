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
        Schema::create('tbl_deskripsi_221040', function (Blueprint $table) {
            $table->id('id_deskripsi_221040');
            $table->string('nama_221040');
            $table->string('tempatlahir_221040');
            $table->string('ttl_221040');
            $table->string('alamat_221040');
            $table->string('tentang_221040',1000);
            $table->string('nohp_221040');
            $table->string('email_221040');
            $table->string('fb_221040');
            $table->string('ig_221040');
            $table->string('foto_221040');
            $table->timestamps();
        });

        DB::table('tbl_deskripsi_221040')->insert([
            ['nama_221040' => 'Joko Saputra','tempatlahir_221040' => 'Manado','ttl_221040' => '1989-02-15','alamat_221040'=>'Printis','tentang_221040'=>'Saya adalah individu yang berorientasi pada hasil dengan keahlian dalam manajemen proyek.','nohp_221040'=>'085543210987','email_221040'=>'fa@gmail.com','fb_221040'=>'MerahPutih76','ig_221040'=>'MerahPutih76','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Rini Septiani','tempatlahir_221040' => 'Palu','ttl_221040' => '1990-01-01','alamat_221040'=>'Bontomaru','tentang_221040'=>'Dengan latar belakang pendidikan di bidang teknik, saya memiliki pemahaman yang kuat tentang konsep teknis dan inovasi.','nohp_221040'=>'085102938475','email_221040'=>'lala@gmail.com','fb_221040'=>'BatikExplorer','ig_221040'=>'BatikExplorer','foto_221040'=>'sasa.jpg'],
            ['nama_221040' => 'Dedi Prasetyo','tempatlahir_221040' => 'Makassar','ttl_221040' => '1991-02-02','alamat_221040'=>'Bontoala','tentang_221040'=>'Sebagai pemecah masalah yang kreatif, saya telah berhasil mengidentifikasi dan mengimplementasikan solusi untuk tantangan yang kompleks.','nohp_221040'=>'085678901234','email_221040'=>'zai@gmail.com','fb_221040'=>'NusantaraJaya','ig_221040'=>'NusantaraJaya','foto_221040'=>'akmal.jpg'],
            ['nama_221040' => 'Nurul Hidayah','tempatlahir_221040' => 'Kendari','ttl_221040' => '1992-01-09','alamat_221040'=>'Jenetallasa','tentang_221040'=>'Keahlian komunikasi yang baik memungkinkan saya untuk efektif berinteraksi dengan berbagai pihak, dari tim internal hingga klien eksternal.','nohp_221040'=>'089890123456','email_221040'=>'lila@gmail.com','fb_221040'=>'JakartaRhythm','ig_221040'=>'JakartaRhythm','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Andi Setiawan','tempatlahir_221040' => 'Gorontalo','ttl_221040' => '1993-05-01','alamat_221040'=>'Gowa','tentang_221040'=>'Saya memiliki pengalaman yang solid dalam pengembangan dan pelaksanaan strategi pemasaran yang sukses.','nohp_221040'=>'081456789012','email_221040'=>'rokk@gmail.com','fb_221040'=>'GarudaPatriot','ig_221040'=>'GarudaPatriot','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Desi Anggraini','tempatlahir_221040' => 'Tondano','ttl_221040' => '1999-04-27','alamat_221040'=>'Tombolo','tentang_221040'=>'Kemampuan analisis data saya memungkinkan saya untuk mengambil keputusan berdasarkan informasi yang relevan','nohp_221040'=>'082987654321','email_221040'=>'limm@gmail.com','fb_221040'=>'KopiIndonesia','ig_221040'=>'KopiIndonesia','foto_221040'=>'masruk.jpg'],
            ['nama_221040' => 'Rian Saputra','tempatlahir_221040' => 'Tomohon','ttl_221040' => '1995-11-01','alamat_221040'=>'Sanrangan','tentang_221040'=>'Saya memiliki dedikasi untuk peningkatan berkelanjutan dan selalu mencari peluang untuk pengembangan profesional.','nohp_221040'=>'089345678901','email_221040'=>'agen@gmail.com','fb_221040'=>'WayangWisdom','ig_221040'=>'WayangWisdom','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Dwi Susanto','tempatlahir_221040' => 'Poso','ttl_221040' => '1994-05-04','alamat_221040'=>'Pallangga','tentang_221040'=>'Keterampilan kepemimpinan saya telah terbukti melalui peran saya sebagai koordinator tim dalam proyek-proyek sebelumnya.','nohp_221040'=>'082234567890','email_221040'=>'litus@gmail.com','fb_221040'=>'BambuHarmony','ig_221040'=>'BambuHarmony','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Anisa Fitriani','tempatlahir_221040' => 'Bitung','ttl_221040' => '1996-01-01','alamat_221040'=>'Kanjilo','tentang_221040'=>'Saya memiliki latar belakang dalam manajemen sumber daya manusia, termasuk perekrutan dan pengembangan karyawan.','nohp_221040'=>'085876543210','email_221040'=>'remiu@gmail.com','fb_221040'=>'SatuBangsa','ig_221040'=>'SatuBangsa','foto_221040'=>'sasa.jpg'],
            ['nama_221040' => 'Fajar Pratama','tempatlahir_221040' => 'Luwuk','ttl_221040' => '1990-08-01','alamat_221040'=>'Barombong','tentang_221040'=>'Dengan kecakapan dalam bahasa Inggris, saya dapat dengan mudah berkomunikasi di tingkat internasional.','nohp_221040'=>'089123456789','email_221040'=>'alex@gmail.com','fb_221040'=>'SantaiSore','ig_221040'=>'SantaiSore','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Rina Amelia','tempatlahir_221040' => 'Ampama','ttl_221040' => '1994-08-24','alamat_221040'=>'Veteran','tentang_221040'=>'Saya dikenal sebagai individu yang fleksibel dan mampu beradaptasi dengan perubahan lingkungan kerja.','nohp_221040'=>'081509687432','email_221040'=>'gopal@gmail.com','fb_221040'=>'RendangMaster','ig_221040'=>'RendangMaster','foto_221040'=>'sasa.jpg'],
            ['nama_221040' => 'Irfan Hakim','tempatlahir_221040' => 'Palopo','ttl_221040' => '1990-01-13','alamat_221040'=>'Pettarani','tentang_221040'=>'Kemampuan multitasking saya memungkinkan saya untuk mengelola beberapa tugas sekaligus tanpa mengorbankan kualitas.','nohp_221040'=>'085346507912','email_221040'=>'ying@gmail.com','fb_221040'=>'GudegGourmet','ig_221040'=>'GudegGourmet','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Nita Indah','tempatlahir_221040' => 'Tana Toraja','ttl_221040' => '1999-06-12','alamat_221040'=>'Sudiang','tentang_221040'=>'Saya memiliki pemahaman mendalam tentang industri [sesuaikan dengan industri Anda] dan tren terkini.','nohp_221040'=>'089198204765','email_221040'=>'patrik@gmail.com','fb_221040'=>'AngklungVibes','ig_221040'=>'AngklungVibes','foto_221040'=>'sasa.jpg'],
            ['nama_221040' => 'Dito Prabowo','tempatlahir_221040' => 'Kolaka','ttl_221040' => '1993-11-11','alamat_221040'=>'Daya','tentang_221040'=>'Dedikasi saya terhadap etika kerja yang tinggi telah memberikan kontribusi pada reputasi positif saya di tempat kerja.','nohp_221040'=>'087725346198','email_221040'=>'boy@gmail.com','fb_221040'=>'IndahnyaIndonesia','ig_221040'=>'IndahnyaIndonesia','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Maya Dewi','tempatlahir_221040' => 'Mamuju','ttl_221040' => '1999-01-23','alamat_221040'=>'Raya','tentang_221040'=>'Saya memiliki kemampuan untuk berkolaborasi dengan berbagai tim lintas departemen untuk mencapai tujuan bersama.','nohp_221040'=>'082869130254','email_221040'=>'anis@gmail.com','fb_221040'=>'JelajahNusantara','ig_221040'=>'JelajahNusantara','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Adi Nugroho','tempatlahir_221040' => 'Parigi','ttl_221040' => '2000-01-01','alamat_221040'=>'Manggala','tentang_221040'=>'Saya adalah individu yang proaktif dan memiliki motivasi tinggi untuk mencapai target yang ditetapkan.','nohp_221040'=>'085437891205','email_221040'=>'ganjar@gmail.com','fb_221040'=>'SamudraSpirit','ig_221040'=>'SamudraSpirit','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Siti Rahayu','tempatlahir_221040' => 'Palopo','ttl_221040' => '2003-05-01','alamat_221040'=>'Sinrijala','tentang_221040'=>'Keahlian presentasi saya telah teruji melalui pengalaman berbicara di konferensi dan pelatihan industri.','nohp_221040'=>'081208745631','email_221040'=>'prabowo@gmail.com','fb_221040'=>'TenunTradisi','ig_221040'=>'TenunTradisi','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Budi Susanto','tempatlahir_221040' => 'Bau Bau','ttl_221040' => '1990-01-07','alamat_221040'=>'Tompo bulu','tentang_221040'=>'Saya memiliki kemampuan untuk mengelola waktu dengan efisien dan menghasilkan hasil yang konsisten.','nohp_221040'=>'082654782319','email_221040'=>'joki@gmail.com','fb_221040'=>'SateSensation','ig_221040'=>'SateSensation','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Rani Putri','tempatlahir_221040' => 'Luwu','ttl_221040' => '2001-01-07','alamat_221040'=>'Hertasling','tentang_221040'=>'Saya adalah pemimpin yang visioner, mampu merumuskan strategi jangka panjang untuk pertumbuhan organisasi.','nohp_221040'=>'085912345678','email_221040'=>'gibra@gmail.com','fb_221040'=>'CintaTanahAir','ig_221040'=>'CintaTanahAir','foto_221040'=>'lili.jpg'],
            ['nama_221040' => 'Agus Setiawan','tempatlahir_221040' => 'Gowa','ttl_221040' => '2004-01-08','alamat_221040'=>'Malino','tentang_221040'=>'Saya memiliki kepribadian yang ramah dan mampu menjalin hubungan kerja yang baik dengan rekan tim dan mitra bisnis.','nohp_221040'=>'081573829104','email_221040'=>'amia@gmail.com','fb_221040'=>'KebayaChic','ig_221040'=>'KebayaChic','foto_221040'=>'sasa.jpg'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_deskripsi_221040');
    }
};
