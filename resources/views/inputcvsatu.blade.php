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


    {{-- <div class="text-center font-bold bg-[#FF8080] my-10 mx-64 py-5 text-white" data-aos="fade-up" data-aos-duration="1000"
        data-aos-delay="200">Masukan Data Diri Anda</div>


    <div class="ml-56">
        <form method="post" action="/cv/store" enctype="multipart/form-data" class="pl-12">
            {{ csrf_field() }}
            <div class="flex pb-4" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="w-1/2">
                    <label for="">Nama</label><br>
                    <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="nama">
                </div>
                <div class="w-1/2">
                    <label for="">Tempat Lahir</label><br>
                    <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="lahir">
                </div>
            </div>
            <div class="flex pb-4" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="w-1/2">
                    <label for="">Tanggal Lahir</label><br>
                    <input type="date" class="bg-slate-300 rounded-md py-3 px-5 w-56" name="ttl">
                </div>
                <div class="w-1/2 pb-4">
                    <label for="">Alamat</label><br>
                    <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="alamat">
                </div>
            </div>

            <div class="flex pb-5" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="500">
                <div class="w-1/2">
                    <label for="">Pendidikan</label><br>
                    <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="pendidikan">
                    <div class="flex gap-2">
                        <div class="">
                            <label for="">Tahun Masuk</label><br>
                            <input type="number" class="bg-slate-300 rounded-md py-3 w-28" name="ptm">
                        </div>
                        <div class="">
                            <label for="">Tahun Keluar</label><br>
                            <input type="number" class="bg-slate-300 rounded-md py-3 w-28" name="ptk">
                        </div>
                    </div>
                </div>

                <div class="w-1/2">
                    <label for="">Pengalaman</label><br>
                    <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="pengalaman">
                    <div class="flex gap-2">
                        <div class="">
                            <label for="">Tahun Masuk</label><br>
                            <input type="text" class="bg-slate-300 rounded-md py-3 w-28" name="ppm">
                        </div>
                        <div class="">
                            <label for="">Tahun Keluar</label><br>
                            <input type="text" class="bg-slate-300 rounded-md py-3 w-28" name="ppk">
                        </div>
                    </div>
                </div>
            </div>






            <div>
                <label for="">Keahlian 1</label><br>
                <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="ahli">
            </div>





            <div>
                <label for="">No. Tlp</label><br>
                <input type="number" class="bg-slate-300 rounded-md py-3 px-5" name="nohp">
            </div>


            <div class="flex pb-5" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="w-1/2">
                    <label for="">Email</label><br>
                    <input type="email" class="bg-slate-300 rounded-md py-3 px-5" name="email">
                </div>
                <div class="w-1/2">
                    <label for="">Facebook</label><br>
                    <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="fb">
                </div>
            </div>

            <div class="flex pb-5" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="w-1/2">
                    <label for="">Instagram</label><br>
                    <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="ig">
                </div>
                <div class="w-1/2">
                    <label for="">Foto</label><br>
                    <input type="file" class="bg-slate-300 rounded-md py-3 px-2 w-56" name="fotoo">
                </div>
            </div>


            <div class="flex pb-5" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="w-full">
                    <label for="">Tentang Saya</label><br>
                    <input type="text" class="bg-slate-300 rounded-md py-3 px-5 w-[750px] h-48" name="tentang">
                </div>

            </div>


            <input type="submit" value="Buat"
                class="bg-[#FF8080] py-3 rounded-md px-36 font-bold text-white mx-64 mt-7 hover:bg-[#FF8050]">
        </form>
    </div> --}}

    <div class="text-center font-bold bg-[#FF8080] my-10 mx-64 py-5 text-white" data-aos="fade-up" data-aos-duration="1000"
        data-aos-delay="200">Masukan Data Diri Anda </div>
    <form method="post" action="/cv/store" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="w-full grid place-items-center mb-10">
            <div class=" w-[60%] flex">
                <div class="w-1/2 block">
                    <div class="mb-5">
                        <label for="nama">Nama</label><br>
                        <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5" name="nama">
                    </div>
                    <div class="mb-5">
                        <label for="ttl">Tempat Lahir</label><br>
                        <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5" name="ttl">
                    </div>
                    <div class="mb-5">
                        <label for="tl">Tanggal Lahir</label><br>
                        <input type="date" class="rounded-md bg-slate-200 h-10 w-[80%] px-5" name="tl">
                    </div>
                    <div class="mb-5">
                        <label for="alamat">Alamat</label><br>
                        <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5" name="alamat">
                    </div>
                    <div class="mb-5">
                        <label for="no">No.Hp</label><br>
                        <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5" name="no">
                    </div>
                    <div class="mb-5">
                        <label for="email">Email</label><br>
                        <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5" name="email">
                    </div>
                    <div class="mb-5">
                        <label for="facebook">Facebook</label><br>
                        <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5" name="fb">
                    </div>
                    <div class="mb-5">
                        <label for="ig">Instagram</label><br>
                        <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5" name="ig">
                    </div>
                    <div class="mb-5">
                        <label for="foto">Foto</label><br>
                        <input type="file" class="rounded-md bg-slate-200 h-11 w-[80%] px-5 pt-2" name="fotoo">
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="mb-5">
                        <label for="pendidikan" class="ml-20">Pendidikan</label><br>
                        <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5 float-right"
                            name="pendidikan"><br>
                        <div class="flex gap-5 mt-8 ml-20">
                            <input type="text" placeholder="Tahun Masuk" name="tm-pendidikan"
                                class="rounded-md bg-slate-200 h-10 w-[140px] px-5">
                            <input type="text" placeholder="Tahun Lulus" name="tk-pendidikan"
                                class="rounded-md bg-slate-200 h-10 w-[140px] px-5">
                        </div>
                    </div>
                    <div id="pendidikan-tambahan" class="mb-5"></div>
                    <button type="button" onclick="tambahPendidikan()"
                        class="ml-20 bg-[#FF8080] mb-5 py-2 px-16 hover:bg-pink-600 text-white rounded-md">+ Tambah
                        Pendidikan</button>

                    <div class="mb-5">
                        <label for="pengalaman" class="ml-20">Pengalaman</label><br>
                        <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5 float-right"
                            name="pengalaman">
                        <div class="flex gap-5 mt-14 ml-20">
                            <input type="text" placeholder="Tahun Masuk" name="tm-pengalaman"
                                class="rounded-md bg-slate-200 h-10 w-[140px] px-5">
                            <input type="text" placeholder="Tahun Lulus" name="tk-pengalaman"
                                class="rounded-md bg-slate-200 h-10 w-[140px] px-5">
                        </div>
                    </div>
                    <div id="pengalaman-tambahan" class="mb-5"></div>
                    <button type="button" onclick="tambahpengalaman()"
                        class="ml-20 bg-[#FF8080] mb-5 py-2 px-16 hover:bg-pink-600 text-white rounded-md">+ Tambah
                        Pendidikan</button>

                    <div class="mb-5">
                        <label for="kemampuan" class="ml-20">Kemampuan</label><br>
                        <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5 float-right"
                            name="kemampuan">
                    </div>
                    <div id="kemampuan-tambahan" class="mb-5"></div>
                    <button type="button" onclick="tambahkemampuan()"
                        class="ml-20 bg-[#FF8080] my-5 py-2 px-16 hover:bg-pink-600 text-white rounded-md">+ Tambah
                        Pendidikan</button>

                    <div class="mb-5">
                        <label for="tentang" class="ml-20">Tentang Saya</label><br>
                        <textarea name="tentang" id="" cols="30" rows="4"
                            class="rounded-md bg-slate-200 w-[80%] px-5 float-right"></textarea>
                    </div>
                </div>

            </div>
            <button type="submit"
                class="bg-[#FF8080] py-2 rounded-md px-36 font-bold text-white mx-64 mt-7 hover:bg-[#FF8050]">Buat</button>

        </div>
    </form>


    <script>
        function tambahPendidikan() {
            var pendidikanTambahan = document.getElementById('pendidikan-tambahan');

            var html = `
        <label for="pendidikan" class="ml-20">Pendidikan</label><br>
                    <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5 float-right"
                        name="tpendidikan[]"><br>
                    <div class="flex gap-5 mt-8 ml-20">
                        <input type="text" placeholder="Tahun Masuk" name="ttm-pendidikan[]"
                            class="rounded-md bg-slate-200 h-10 w-[140px] px-5">
                        <input type="text" placeholder="Tahun Lulus" name="ttk-pendidikan[]"
                            class="rounded-md bg-slate-200 h-10 w-[140px] px-5">
                    </div>
    `;

            pendidikanTambahan.innerHTML += html;
        }

        function tambahpengalaman() {
            var pengalamanTambahan = document.getElementById('pengalaman-tambahan');

            var html = `
        <label for="pengalaman" class="ml-20">Pengalaman</label><br>
                    <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5 float-right"
                        name="tpengalaman[]">
                    <div class="flex gap-5 mt-14 ml-20">
                        <input type="text" placeholder="Tahun Masuk" name="ttm-pengalaman[]"
                            class="rounded-md bg-slate-200 h-10 w-[140px] px-5">
                        <input type="text" placeholder="Tahun Lulus" name="ttk-pengalaman[]"
                            class="rounded-md bg-slate-200 h-10 w-[140px] px-5">
                    </div>
    `;

            pengalamanTambahan.innerHTML += html;
        }

        function tambahkemampuan() {
            var kemampuanTambahan = document.getElementById('kemampuan-tambahan');

            var html = `
        <label for="kemampuan" class="ml-20">Kemampuan</label><br>
                    <input type="text" class="rounded-md bg-slate-200 h-10 w-[80%] px-5 float-right"
                        name="tkemampuan[]">
    `;

            kemampuanTambahan.innerHTML += html;
        }
    </script>



    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
