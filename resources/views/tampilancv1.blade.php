<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat CV</title>
    @vite('resources/css/app.css')

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    @include('navbar')


    <div class="grid place-items-center">
        <div class="border-2 border-black w-[600px] h-[700px] mt-20 shadow-2xl flex" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="200">
            <div class="w-1/3 h-full bg-[#FF8080]">
                {{-- <h1 class="text-2xl font-bold text-white text-center pt-5">{{$tes->nama_221040}}</h1> --}}
                <img src="{{ asset('gambar/' . $bio->foto_221040) }}" alt="" class="p-4 rounded-full ml-7"
                    width="80%">
                <h1 class="text-center text-white font-bold ">DATA PRIBADI</h1>
                <h1 class="pl-5 text-white font-bold text-[13px] pt-2">Nama :</h1>
                <h1 class="pl-5 text-white text-[13px] pb-2">{{ $bio->nama_221040 }}</h1>
                <h1 class="pl-5 text-white font-bold text-[13px] pt-2">Tempat/Tanggal Lahir :</h1>
                <h1 class="pl-5 text-white text-[13px] pb-2">{{ $bio->tempatlahir_221040 }}, {{ $bio->ttl_221040 }}</h1>
                <h1 class="pl-5 text-white font-bold text-[13px] pt-2">Alamat :</h1>
                <h1 class="pl-5 text-white text-[13px] pb-2">{{ $bio->alamat_221040 }}</h1>
                <h1 class="pl-5 text-white font-bold text-[13px] pt-2">No Telp/HP :</h1>
                <h1 class="pl-5 text-white text-[13px] pb-2">{{ $bio->nohp_221040 }}</h1>
                <h1 class="pl-5 text-white font-bold text-[13px] pt-2">Email :</h1>
                <h1 class="pl-5 text-white text-[13px] pb-2">{{ $bio->email_221040 }}</h1>
                <h1 class="pl-5 text-white font-bold text-[13px] pt-2">Facebook :</h1>
                <h1 class="pl-5 text-white text-[13px] pb-2">{{ $bio->fb_221040 }}</h1>
                <h1 class="pl-5 text-white font-bold text-[13px] pt-2">Instagram :</h1>
                <h1 class="pl-5 text-white text-[13px] pb-2">{{ $bio->ig_221040 }}</h1>

            </div>

            <div class="h-full w-[400px]">
                <h1 class="text-center pt-10">DAFTAR RIWAYAT HIDUP</h1>
                <h1 class="text-center pb-10 font-bold text-2xl">{{ $bio->nama_221040 }}</h1>
                <h1 class="text-center font-bold">TENTANG SAYA</h1>
                <h1 class="text-center text-[13px] px-3 py-5">{{ $bio->tentang_221040 }}</h1>
                <h1 class="text-center font-bold pb-5">RIWAYAT PENDIDIKAN</h1>


                <table>
                    @forelse ($pend -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $p)
                        <tr>
                            <td class="text-[13px] pl-10">{{ $p->tahunmasuk_pendidikan_221040 }} -
                                {{ $p->tahunkeluar_pendidikan_221040 }}</td>
                                <td width="5%" class="text-white">....</td>
                            <td class="text-[12px] pl-5 w-60">{{ $p->pendidikan_221040 }}</td>
                            
                            
                        </tr>
                    @empty
                        <tr>
                            <td class="text-[12px] pl-5" width="65%">Tidak ada pendidikan</td>
                        </tr>
                    @endforelse

                </table>

                <h1 class="text-center font-bold py-5">PENGALAMAN KERJA</h1>

                <table>
                    @forelse ($peng -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $g)
                        <tr>
                            <td class="text-[13px] pl-10">{{ $g->tahunmasuk_pengalaman_221040 }} -
                                {{ $g->tahunkeluar_pengalaman_221040 }}</td>
                                <td width="5%" class="text-white">....</td>
                            <td class="text-[12px] pl-5 w-60">{{ $g->pengalaman_221040 }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-[12px] pl-5" width="65%">Tidak ada pengalaman</td>
                        </tr>
                    @endforelse
                </table>

                <h1 class="text-center font-bold py-5">KEAHLIAN</h1>
                @forelse ($kema -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $k)
                    <h1 class="text-[12px] pl-10">{{ $k->kemampuan_221040 }}</h1>
                @empty
                    <h1 class="text-[12px] pl-5">Tidak ada keahlian</h1>
                @endforelse

            </div>
        </div>
        <form method="post" action="/cetak" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" name="nama" value="{{ $bio->nama_221040 }}" hidden>
            <input type="text" name="ket" value="ROSE" hidden>
            <input type="submit" value="Download CV"
                class="bg-[#FF8080] text-white py-2 px-10 mb-5 rounded-lg mt-5 hover:bg-pink-500">
        </form>
    </div>





    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
