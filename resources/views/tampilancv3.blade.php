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
        <div class="border-2 border-black w-[700px] h-[880px] mt-20 shadow-2xl pt-5" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="200">
            <div class="flex">
                <div class="w-2/3 ">
                    <h1 class="text-center text-[20px] font-bold">CURRICULUM VITAE</h1>
                    <div class="flex text-[13px] pt-3">
                        <p class="w-52 pl-10">Nama</p>
                        <p>:</p>
                        <p class="pl-5 ">{{ $bio->nama_221040 }}</p>
                    </div>
                    <div class="flex text-[13px] pt-2">
                        <p class="w-52 pl-10">Tempat/Tanggal Lahir</p>
                        <p>:</p>
                        <p class="pl-5">{{ $bio->tempatlahir_221040 }}, {{ $bio->ttl_221040 }}</p>
                    </div>
                    <div class="flex text-[13px] pt-2">
                        <p class="w-52 pl-10">Alamat</p>
                        <p>:</p>
                        <p class="pl-5">{{ $bio->alamat_221040 }}</p>
                    </div>
                    <div class="flex text-[13px] pt-2">
                        <p class="w-52 pl-10">No Telp/HP</p>
                        <p>:</p>
                        <p class="pl-5">{{ $bio->nohp_221040 }}</p>
                    </div>
                    <div class="flex text-[13px] pt-2">
                        <p class="w-52 pl-10">Email</p>
                        <p>:</p>
                        <p class="pl-5">{{ $bio->email_221040 }}</p>
                    </div>
                    <div class="flex text-[13px] pt-2">
                        <p class="w-52 pl-10">Facebook</p>
                        <p>:</p>
                        <p class="pl-5">{{ $bio->fb_221040 }}</p>
                    </div>
                    <div class="flex text-[13px] pt-2">
                        <p class="w-52 pl-10">Instagram</p>
                        <p>:</p>
                        <p class="pl-5">{{ $bio->ig_221040 }}</p>
                    </div>
                    <h1 class="text-center text-[20px] font-bold pt-5">RIWAYAT PENDIDIKAN</h1>
                    @forelse ($pend -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $p)
                        <div class="flex text-[13px] pt-3">
                            <p class="w-52 pl-10">
                                {{ $p->tahunmasuk_pendidikan_221040 }}-{{ $p->tahunkeluar_pendidikan_221040 }}</p>
                            <p class="text-white">.</p>
                            <p class="">{{ $p->pendidikan_221040 }}</p>
                        </div>
                    @empty
                        <div class="flex text-[13px] pt-3">
                            <p class="pl-5 ">Tidak ada pendidikan</p>
                        </div>
                    @endforelse


                    <h1 class="text-center text-[20px] font-bold pt-5">PENGALAMAN KERJA</h1>

                    @forelse ($peng -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $g)
                        <div class="flex text-[13px] pt-3">
                            <p class="w-52 pl-10">
                                {{ $g->tahunmasuk_pengalaman_221040 }}-{{ $g->tahunkeluar_pengalaman_221040 }}</p>
                            <p class="text-white">.</p>
                            <p class="">{{ $g->pengalaman_221040 }}</p>
                        </div>
                    @empty
                        <div class="flex text-[13px] pt-3">
                            <p class="pl-5 ">Tidak ada pengalaman</p>
                        </div>
                    @endforelse

                    <h1 class="text-center text-[20px] font-bold pt-5">KEAHLIAN</h1>
                    @forelse ($kema -> where('id_deskripsi_221040',$bio -> id_deskripsi_221040) as $k)
                        <div class="flex text-[13px] pt-3">
                            <p class="w-52 pl-10">{{ $k->kemampuan_221040 }}</p>
                        </div>
                    @empty
                        <div class="flex text-[13px] pt-3">
                            <p class="w-52 pl-10">Tidak ada kemampuan</p>
                        </div>
                    @endforelse
                </div>

                <div class="w-2/4 pr-2">
                    <center>
                        <img src="{{ asset('gambar/' . $bio->foto_221040) }}" class="" width="200px"
                            alt="">
                    </center>

                    <h1 class="text-center text-[20px] font-bold pt-5">TENTANG SAYA</h1>
                    <h1 class="text-center">{{ $bio->tentang_221040 }}</h1>
                </div>
            </div>

        </div>
        <form method="post" action="/cetak3" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" name="nama" value="{{ $bio->nama_221040 }}" hidden>
            <input type="text" name="ket" value="STANDART" hidden>
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
