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
        Schema::create('tbl_kemampuan_221040', function (Blueprint $table) {
            $table->id();
            $table->integer('id_deskripsi_221040');
            $table->string('kemampuan_221040');
            
        });

        DB::table('tbl_kemampuan_221040')->insert([
            ['id_deskripsi_221040'=>'1','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'2','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'3','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'4','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'5','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'6','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'7','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'8','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'9','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'10','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'11','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'12','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'13','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'14','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'15','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'16','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'17','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'18','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'19','kemampuan_221040'=>'Microsoft Office'],
            ['id_deskripsi_221040'=>'20','kemampuan_221040'=>'Microsoft Office'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tbl_kemampuan_221040');
    }
};
