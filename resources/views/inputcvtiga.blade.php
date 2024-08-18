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

   
    <div class="text-center font-bold bg-[#EEF296] my-10 mx-64 py-5 text-white">Masukan Data Diri Anda</div>
    

<div class="ml-56">
<form method="post" action="/cv/store3" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="flex pb-4">
    <div class="w-1/2" >
        <label for="">Nama</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="nama">
    </div>
    <div class="w-1/2">
    <label for="">Tempat Lahir</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="lahir">
    </div>
</div>
<div class="flex pb-4">
    <div class="w-1/2" >
        <label for="">Tanggal Lahir</label><br>
        <input type="date" class="bg-slate-300 rounded-md py-3 px-5" name="ttl">
    </div>
    <div class="w-1/2 pb-4">
    <label for="">Alamat</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="alamat">
    </div>
</div>
<div class="flex pb-4">
    <div class="w-1/2" >
        <label for="">Pendidikan 1</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="pendidikan">
    </div>
    <div class="w-1/2">
    <label for="">Kemampuan 1</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="kemampuan">
    </div>
</div>

<div class="flex pb-4">
    <div class="w-1/2" >
        <label for="">Pendidikan 2</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="pendidikan2">
    </div>
    <div class="w-1/2">
    <label for="">kemampuan 2</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="kemampuan2">
    </div>
</div>

<div class="flex pb-4">
    <div class="w-1/2" >
        <label for="">Pendidikan 3</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="pendidikan3">
    </div>
    <div class="w-1/2">
    <label for="">kemampuan 3</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="kemampuan3">
    </div>
</div>

<div class="flex pb-4">
    <div class="w-1/2" >
        <label for="">Pengalaman</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="pengalaman">
    </div>
    <div class="w-1/2">
    <label for="">No Telepon</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="nohp">
    </div>
</div>
<div class="flex pb-4">
    <div class="w-1/2" >
        <label for="">Foto</label><br>
        <input type="file" class="bg-slate-300 rounded-md py-3 px-5" name="fotoo">
    </div>
    <div class="w-1/2">
    <label for="">Email</label><br>
        <input type="text" class="bg-slate-300 rounded-md py-3 px-5" name="email">
    </div>
</div>


<input type="submit" value="Buat" class="bg-[#EEF296] py-3 rounded-md px-36 font-bold text-white mx-64 mt-7 hover:bg-[#FF8050]">
</form>
</div>


    

    <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>