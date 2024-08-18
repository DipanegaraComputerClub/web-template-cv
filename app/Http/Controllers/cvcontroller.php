<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class cvcontroller extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function buatcv(){
        return view('buatcv');
    }

    public function inputcvsatu(){
        return view('inputcvsatu');
    }
    public function inputcvdua(){
        return view('inputcvdua');
    }
    public function inputcvtiga(){
        return view('inputcvtiga');
    }

    public function tampilancv1(){
        // mengambil data dari table pegawai
    	$biodata = DB::table('tbl_deskripsi_221040')->latest('id_deskripsi_221040')->first();
        $pendidikan=DB::table('tbl_pendidikan_221040')->get();
        $pengalaman=DB::table('tbl_pengalaman_221040')->get();
        $kemampuan=DB::table('tbl_kemampuan_221040')->get();
 
    	// mengirim data pegawai ke view index
    	return view('tampilancv1',['bio' => $biodata,'pend'=>$pendidikan,'peng'=>$pengalaman,'kema'=>$kemampuan]);
    }
    public function tampilancv2(){
        // mengambil data dari table pegawai
    	$biodata = DB::table('tbl_deskripsi_221040')->latest('id_deskripsi_221040')->first();
        $pendidikan=DB::table('tbl_pendidikan_221040')->get();
        $pengalaman=DB::table('tbl_pengalaman_221040')->get();
        $kemampuan=DB::table('tbl_kemampuan_221040')->get();
 
    	// mengirim data pegawai ke view index
    	return view('tampilancv2',['bio' => $biodata,'pend'=>$pendidikan,'peng'=>$pengalaman,'kema'=>$kemampuan]);
    }
    public function tampilancv3(){
        // mengambil data dari table pegawai
    	$biodata = DB::table('tbl_deskripsi_221040')->latest('id_deskripsi_221040')->first();
        $pendidikan=DB::table('tbl_pendidikan_221040')->get();
        $pengalaman=DB::table('tbl_pengalaman_221040')->get();
        $kemampuan=DB::table('tbl_kemampuan_221040')->get();
 
    	// mengirim data pegawai ke view index
    	return view('tampilancv3',['bio' => $biodata,'pend'=>$pendidikan,'peng'=>$pengalaman,'kema'=>$kemampuan]);
    }
    public function about(){
        return view('tentang');
    }

    public function cetak(Request $request){
        DB::table('tbl_cv_221040')->insert([
            
            'nama_221040' => $request->nama,
            'ket_221040' => $request->ket,
            'tanggal_221040' => now()->toDateString(),
        ]);

        $biodata = DB::table('tbl_deskripsi_221040')->latest('id_deskripsi_221040')->first();
        $pendidikan=DB::table('tbl_pendidikan_221040')->get();
        $pengalaman=DB::table('tbl_pengalaman_221040')->get();
        $kemampuan=DB::table('tbl_kemampuan_221040')->get();

        $pdf = PDF::loadView('cetak1', ['bio' => $biodata,'pend'=>$pendidikan,'peng'=>$pengalaman,'kema'=>$kemampuan]);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('cv.pdf');
        
        
    }

    public function cetak2(Request $request){
        DB::table('tbl_cv_221040')->insert([
            
            'nama_221040' => $request->nama,
            'ket_221040' => $request->ket,
            'tanggal_221040' => now()->toDateString(),
        ]);
        $biodata = DB::table('tbl_deskripsi_221040')->latest('id_deskripsi_221040')->first();
        $pendidikan=DB::table('tbl_pendidikan_221040')->get();
        $pengalaman=DB::table('tbl_pengalaman_221040')->get();
        $kemampuan=DB::table('tbl_kemampuan_221040')->get();

        $pdf = PDF::loadView('cetak2', ['bio' => $biodata,'pend'=>$pendidikan,'peng'=>$pengalaman,'kema'=>$kemampuan]);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('cv.pdf');
    }

    public function cetak3(Request $request){
        DB::table('tbl_cv_221040')->insert([
            
            'nama_221040' => $request->nama,
            'ket_221040' => $request->ket,
            'tanggal_221040' => now()->toDateString(),
            
        ]);
        $biodata = DB::table('tbl_deskripsi_221040')->latest('id_deskripsi_221040')->first();
        $pendidikan=DB::table('tbl_pendidikan_221040')->get();
        $pengalaman=DB::table('tbl_pengalaman_221040')->get();
        $kemampuan=DB::table('tbl_kemampuan_221040')->get();

        $pdf = PDF::loadView('cetak3', ['bio' => $biodata,'pend'=>$pendidikan,'peng'=>$pengalaman,'kema'=>$kemampuan]);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('cv.pdf');
    }

    // admin

    public function admin()
{
    $jumlah = DB::table('tbl_cv_221040')->count();
    $jumlah2 = DB::table('tbl_cv_221040')->where('ket_221040', 'ROSE')->count();
    $data3 = DB::table('tbl_cv_221040')->where('ket_221040', 'SKY')->count();
    $data4 = DB::table('tbl_cv_221040')->where('ket_221040', 'STANDART')->count();

    return view('z1', [
        'data' => $data3,
        'total2' => $jumlah2,
        'total' => $jumlah,
        'data2' => $data4,
    ]);
}

    public function lt(){
        $tampil = DB::table('tbl_cv_221040')->where('ket_221040', 'ROSE')->get();
        $jumlah = DB::table('tbl_cv_221040')->where('ket_221040', 'ROSE')->count();
        return view('z2',['tes' => $tampil],['total' => $jumlah]);
    }
    public function lt2(){
        $tampil = DB::table('tbl_cv_221040')->where('ket_221040', 'SKY')->get();
        $jumlah = DB::table('tbl_cv_221040')->where('ket_221040', 'SKY')->count();
        return view('z3',['tes' => $tampil],['total' => $jumlah]);
    }
    public function lt3(){
        $tampil = DB::table('tbl_cv_221040')->where('ket_221040', 'STANDART')->get();
        $jumlah = DB::table('tbl_cv_221040')->where('ket_221040', 'STANDART')->count();
        return view('z4',['tes' => $tampil],['total' => $jumlah]);
        
    }
    public function lt4(){
        $tampil = DB::table('tbl_cv_221040')->get();
        $jumlah = DB::table('tbl_cv_221040')->count();
        return view('z5',['tes' => $tampil],['total' => $jumlah]);
    }

    public function lp4(){
        $tampil = DB::table('tbl_cv_221040')->get();
        $total = DB::table('tbl_cv_221040')->count();

        $pdf = PDF::loadView('lp4', ['tes' => $tampil],['total' => $total]);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('laporan.pdf');
    }
    public function lp3(){
        $tampil = DB::table('tbl_cv_221040')->where('ket_221040', 'STANDART')->get();
        $total = DB::table('tbl_cv_221040')->where('ket_221040', 'STANDART')->count();

        $pdf = PDF::loadView('lp3', ['tes' => $tampil],['total' => $total]);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('laporan.pdf');
    }
    public function lp2(){
        $tampil = DB::table('tbl_cv_221040')->where('ket_221040', 'SKY')->get();
        $total = DB::table('tbl_cv_221040')->where('ket_221040', 'SKY')->count();

        $pdf = PDF::loadView('lp2', ['tes' => $tampil],['total' => $total]);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('laporan.pdf');
    }
    public function lp1(){
        $tampil = DB::table('tbl_cv_221040')->where('ket_221040', 'ROSE')->get();
        $total = DB::table('tbl_cv_221040')->where('ket_221040', 'ROSE')->count();

        $pdf = PDF::loadView('lp1', ['tes' => $tampil],['total' => $total]);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('laporan.pdf');
    }

    public function formregister(){

        return view('regestrasi');
    }

    public function register(Request $request){
        $request->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'name'=>'required'
        ]);
        $user= new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();
        Auth::login($user);
        return redirect()->intended('/dashboard');
    }

    public function login(){
        if(Auth::check()){
            return redirect('/dashboard');
        }
        return view('login');
    }
    public function masuk(Request $request)
    {
        $tes=$request->only('email','password');
        if(Auth::attempt($tes)){
            return redirect()->intended('/dashboard');
        }
        return redirect()->route('login')->with('error', 'Email atau password salah');

        // $user = DB::table('tbl_user_221040')
        //     ->where('221040_username', $credentials['username'])
        //     ->where('221040_password', $credentials['password'])
        //     ->first();

        // if ($user) {
        //     // Authentication passed
        //     return redirect()->route('admin');
        // }

        // Authentication failed
        // return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

}
