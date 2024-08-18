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


    <div >
      <center>
      <div><img src="{{asset('gambar/Maudy.jpeg')}}" width="200px" class="py-10" alt=""></div>
    
      <h1 class="font-bold text-2xl">SAZHA DAMAYANTI</h1>
      <h1 class="pt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat omnis sapiente vero modi corporis saepe natus repudiandae odio nam reprehenderit.</h1>
    </center>
    </div>


    
    

    <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>