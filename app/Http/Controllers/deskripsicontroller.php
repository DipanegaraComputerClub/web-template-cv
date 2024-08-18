<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deskripsicontroller extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
        'fotoo' => 'required|mimes:jpeg,png,jpg,gif',
        'nama' => 'required',
        'ttl' => 'required',
        'tl' => 'required',
        'alamat' => 'required',
        'no' => 'required',
        'email' => 'required',
        'fb' => 'required',
        'ig' => 'required',
        'tentang' => 'required',
        'pendidikan' => 'required',
        'tm-pendidikan' => 'required',
        'tk-pendidikan' => 'required',
        'pengalaman' => 'required',
        'tm-pengalaman' => 'required',
        'tk-pengalaman' => 'required',
        'kemampuan' => 'required',
        
        // validasi tambahan
        'tpendidikan.*' => 'required',
        'ttm-pendidikan.*' => 'required',
        'ttk-pendidikan.*' => 'required',
        'tpengalaman.*' => 'required',
        'ttm-pengalaman.*' => 'required',
        'ttk-pengalaman.*' => 'required',
        'tkemampuan.*' => 'required',
    ]);
        $image = $request->file('fotoo')->getClientOriginalName();
        $request->fotoo->move(public_path('gambar'),$image);
        $data['fotoo']=$image;
 
        $idbio=DB::table('tbl_deskripsi_221040')->insertGetId([
            
            'nama_221040' => $request->input('nama'),
            'tempatlahir_221040' => $request->input('ttl'),
            'ttl_221040' => $request->input('tl'),
            'alamat_221040' => $request->input('alamat'),
            'nohp_221040' => $request->input('no'),
            'email_221040' => $request->input('email'),
            'fb_221040' => $request->input('fb'),
            'ig_221040' => $request->input('ig'),
            'tentang_221040' => $request->input('tentang'),
            'foto_221040' => $data['fotoo'],
        ]);

        DB::table('tbl_pendidikan_221040')->insert([
            'id_deskripsi_221040'=>$idbio,
            'pendidikan_221040' => $request->input('pendidikan'),
            'tahunmasuk_pendidikan_221040' => $request->input('tm-pendidikan'),
            'tahunkeluar_pendidikan_221040' => $request->input('tk-pendidikan'),
            // ... tambahkan kolom dan nilai sesuai kebutuhan
        ]);

        DB::table('tbl_pengalaman_221040')->insert([
            'id_deskripsi_221040'=>$idbio,
            'pengalaman_221040' => $request->input('pengalaman'),
            'tahunmasuk_pengalaman_221040' => $request->input('tm-pengalaman'),
            'tahunkeluar_pengalaman_221040' => $request->input('tk-pengalaman'),
            // ... tambahkan kolom dan nilai sesuai kebutuhan
        ]);

        DB::table('tbl_kemampuan_221040')->insert([
            'id_deskripsi_221040'=>$idbio,
            'kemampuan_221040' => $request->input('kemampuan'),
            // ... tambahkan kolom dan nilai sesuai kebutuhan
        ]);

        if ($request->has('tpendidikan')) {
            $dataTambahan = [];

            foreach ($request->input('tpendidikan') as $key => $tingkat) {
                $dataTambahan[] = [
                    'id_deskripsi_221040'=>$idbio,
                    'pendidikan_221040' => $tingkat,
                    'tahunmasuk_pendidikan_221040' => $request->input('ttm-pendidikan')[$key],
                    'tahunkeluar_pendidikan_221040' => $request->input('ttk-pendidikan')[$key],
                    // ... tambahkan kolom dan nilai sesuai kebutuhan
                ];
            }

            DB::table('tbl_pendidikan_221040')->insert($dataTambahan);
        }

        if ($request->has('tpengalaman')) {
            $dataTambahan = [];

            foreach ($request->input('tpengalaman') as $key => $tingkat) {
                $dataTambahan[] = [
                    'id_deskripsi_221040'=>$idbio,
                    'pengalaman_221040' => $tingkat,
                    'tahunmasuk_pengalaman_221040' => $request->input('ttm-pengalaman')[$key],
                    'tahunkeluar_pengalaman_221040' => $request->input('ttk-pengalaman')[$key],
                    // ... tambahkan kolom dan nilai sesuai kebutuhan
                ];
            }

            DB::table('tbl_pengalaman_221040')->insert($dataTambahan);
        }

        if ($request->has('tkemampuan')) {
            $dataTambahan = [];

            foreach ($request->input('tkemampuan') as $key => $tingkat) {
                $dataTambahan[] = [
                    'id_deskripsi_221040'=>$idbio,
                    'kemampuan_221040' => $tingkat,
                    // ... tambahkan kolom dan nilai sesuai kebutuhan
                ];
            }

            DB::table('tbl_kemampuan_221040')->insert($dataTambahan);
        }
        
    	return redirect('/buatcv');
    }

    public function store2(Request $request)
    {


 
        DB::table('tbl_cv_221040')->insert([
            
            'nama_221040' => $request->nama,
            'ket_221040' => $request->ket,
        ]);
        
    	return redirect('/template2');
    }

    public function store3(Request $request)
    {

        $request->validate([
        'fotoo' => 'required|mimes:jpeg,png,jpg,gif',
    ]);
        $image = $request->file('fotoo')->getClientOriginalName();
        $request->fotoo->move(public_path('gambar'),$image);
        $data['fotoo']=$image;
 
        DB::table('tbl_deskripsi_221040')->insert([
            
            'nama_221040' => $request->nama,
            'tempatlahir_221040' => $request->lahir,
            'ttl_221040' => $request->ttl,
            'alamat_221040' => $request->alamat,
            'pendidikan_221040' => $request->pendidikan,
            'pendidikan2_221040' => $request->pendidikan2,
            'pendidikan3_221040' => $request->pendidikan3,
            'kemampuan_221040' => $request->kemampuan,
            'kemampuan2_221040' => $request->kemampuan2,
            'kemampuan3_221040' => $request->kemampuan3,
            'pengalaman_221040' => $request->pengalaman,
            'nohp_221040' => $request->nohp,
            'email_221040' => $request->email,
            'foto_221040' => $data['fotoo'],
        ]);
        
    	return redirect('/template3');
    }


}
