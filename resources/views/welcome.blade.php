<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

   <!-- aos -->
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

@include('navbar')

<!-- Jumbroton -->
<div class="h-[400px] bg-[#FF8080] grid place-content-center">
      <p class="font-bold text-white text-4xl text-center drop-shadow-md" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Buat CV Kamu lebih Menarik secara Gratis</p>
      <div class="flex gap-5 justify-center pt-10 text-white font-bold text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
        <a href="{{route ('input1') }}" class="py-4 px-8 rounded-full bg-blue-600 hover:bg-blue-800 w-40 drop-shadow-md border-double border-4 border-white">Buat CV</a>
      </div>
      <img src="{{asset('gambar/tes2.png')}}" alt="" class="absolute pl-14 pt-[100px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
  </div>

  <!-- fitur -->
  <div class="pb-20 bg-white">
    <p class="text-center font-bold text-4xl py-10 text-gray-600" data-aos="fade-up" data-aos-duration="1500">INFORMASI</p>
    <!-- content 1 -->
    <div class="flex text-gray-600">
      <div class="w-1/2 pl-36 grid place-content-center">
        <h1 class="font-bold text-2xl" data-aos="fade-right" data-aos-duration="1000">Apa itu CV ?</h1>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam fuga ex laudantium unde? Deleniti, laudantium minus. Esse placeat officia suscipit molestias, reiciendis eum dignissimos facere, illum corporis quod voluptatum veniam!</p>
      </div>
      <div class="w-1/2 grid place-content-center">
      <img src="{{asset('gambar/tes1.png')}}" alt="" data-aos="zoom-in" data-aos-duration="1000">
      </div>
    </div>
    <!-- content 2 -->
    <div class="flex text-gray-600">
      <div class="w-1/2 grid place-content-center">
      <img src="{{asset('gambar/tes5.png')}}" alt="" data-aos="zoom-in">
      </div>
      <div class="w-1/2 pl-36 grid place-content-center mr-16">
        <h1 class="font-bold text-2xl" data-aos="fade-left" data-aos-duration="1000">Peluang mendapat Pekerjaan lebih Besar</h1>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam fuga ex laudantium unde? Deleniti, laudantium minus. Esse placeat officia suscipit molestias, reiciendis eum dignissimos facere, illum corporis quod voluptatum veniam!</p>
      </div>
    </div>
    <!-- content 3 -->
    <div class="flex text-gray-600">
      <div class="w-1/2 pl-36 grid place-content-center ">
        <h1 class="font-bold text-2xl" data-aos="fade-right" data-aos-duration="1000">Atur Lamaran Anda</h1>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam fuga ex laudantium unde? Deleniti, laudantium minus. Esse placeat officia suscipit molestias, reiciendis eum dignissimos facere, illum corporis quod voluptatum veniam!</p>
      </div>
      <div class="w-1/2 grid place-content-center">
      <img src="{{asset('gambar/tes3.png')}}" alt="" data-aos="zoom-in">
      </div>
    </div>

  </div>

  @include('footer')


  <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>