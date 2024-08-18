@extends('zsidebar')
@section('konten')
<div class="w-full flex">
    <div class="w-1/2">
        <div class="bg-pink-500 mx-28 py-10 my-10 text-center text-white">
            <h1>Total Pengguna</h1>
            <h1 class="font-bold text-6xl">{{ $total }}</h1>
        </div>
        <div class="bg-pink-500 mx-28 py-10 my-10 text-center text-white">
            <h1>Total Pengguna CV Rose</h1>
            <h1 class="font-bold text-6xl">{{ $total2 }}</h1>
        </div>
        <div></div>
    </div>
    <div class="w-1/2">
        <div class="bg-pink-500 mx-28 py-10 my-10 text-center text-white">
            <h1>Total Penggun CV Sky</h1>
            <h1 class="font-bold text-6xl">{{ $data }}</h1>
        </div>
        <div class="bg-pink-500 mx-28 py-10 my-10 text-center text-white">
            <h1>Total Pengguna CV Standart</h1>
            <h1 class="font-bold text-6xl">{{ $data2 }}</h1>
        </div>
        <div></div>
    </div>
</div>
@endsection