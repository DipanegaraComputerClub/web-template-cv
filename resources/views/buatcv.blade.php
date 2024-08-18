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


    <div class="text-center pt-14 pb-10" >
      <h1 class="text-4xl font-bold" data-aos="zoom-in" data-aos-duration="1000">Template CV siap pakai dan bisa dimodifikasi</h1>
      <h1 class="text-4xl font-bold text-cyan-500" data-aos="zoom-in" data-aos-duration="1000">menyesuaikan gaya Anda</h1>

      <div class="flex justify-center mt-14 ">

        <div class="bg-slate-300 w-64 p-3 shadow-lg mx-5 hover:bg-slate-400" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
          <img src="{{asset('gambar/tem1.PNG')}}" alt="">
          <h1 class="text-2xl pb-2">Clasic Pink</h1>
          <a href="{{route ('tp1') }}" class="px-20 py-2 rounded-lg bg-[#FF8080]">Buat</a>
        </div>

        <div class="bg-slate-300 w-64 p-3 shadow-lg mx-5 hover:bg-slate-400" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
          <img src="{{asset('gambar/tes.PNG')}}" alt="">
          <h1 class="text-2xl pb-2">Clasic Blue</h1>
          <a href="{{route ('tp2') }}" class="px-20 py-2 rounded-lg bg-[#FF8080]">Buat</a>
        </div>

        <div class="bg-slate-300 w-64 p-3 shadow-lg mx-5 hover:bg-slate-400" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
          <img src="{{asset('gambar/template2.webp')}}" alt="">
          <h1 class="text-2xl pb-2">Standar</h1>
          <a href="{{route ('tp3') }}" class="px-20 py-2 rounded-lg bg-[#FF8080]">Buat</a>
        </div>
        

    </div>


    
    

    <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>