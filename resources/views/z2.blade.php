@extends('zsidebar')
@section('konten')
<h1 class="text-center py-10 text-2xl font-bold">LAPORAN DATA CV ROSE</h1>
<a href="{{route ('lp1') }}" class="p-2 bg-pink-500 my-6 ml-32 text-white rounded-lg hover:bg-pink-600">Cetak Laporan</a><br><br>
<center>
    
<table class="border-collapse border w-[800px] text-center">
    <thead>
      <tr>
        <th class="border border-slate-300 ">No</th>
        <th class="border border-slate-300 ...">Nama</th>
        <th class="border border-slate-300 ...">Template</th>
        <th class="border border-slate-300 ...">Tanggal</th>
      </tr>
    </thead>
    <tbody>
        @php
            $no=1;
        @endphp
        @foreach($tes as $tess)
      <tr>
        <td class="border border-slate-300 py-3">{{$no++}}</td>
        <td class="border border-slate-300 ...">{{$tess->nama_221040}}</td>
        <td class="border border-slate-300 ...">{{$tess->ket_221040}}</td>
        <td class="border border-slate-300 ...">{{$tess->tanggal_221040}}</td>
      </tr>
      @endforeach
      <tr>
        <td colspan="3" class="border border-slate-300 py-3 font-bold">Total Data</td>
        <td class="border border-slate-300 py-3 font-bold">{{ $total }}</td>
      </tr>
      
    </tbody>
  </table>
</center>
@endsection