<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="flex">
        <div class="w-72 bg-pink-600 pb-72">
            <center>
                <img src="{{asset('gambar/zaily.png')}}" alt="" class="w-36 p-3">
                <hr class="w-[80%] h-2">
            </center>
            
            <h1 class="text-white text-[15px] font-bold py-3 pl-7"><a class="hover:text-zinc-400" href="{{route ('admin') }}" >Dashboard</a></h1>
            <h1 class="text-white text-[15px] font-bold py-3 pl-7"><a class="hover:text-zinc-400" href="{{route ('lt') }}" >Data Template Rose</a></h1>
            <h1 class="text-white text-[15px] font-bold py-3 pl-7"><a class="hover:text-zinc-400" href="{{route ('lt2') }}" >Data Template Sky</a></h1>
            <h1 class="text-white text-[15px] font-bold py-3 pl-7"><a class="hover:text-zinc-400" href="{{route ('lt3') }}" >Data Template Standart</a></h1>
            <h1 class="text-white text-[15px] font-bold py-3 pl-7"><a class="hover:text-zinc-400" href="{{route ('lcetak') }}" >Cetak Laporan</a></h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <h1 class="text-white text-[15px] font-bold py-3 pl-7" ><button class="hover:text-zinc-400" type="sumbit" >Logout</button></h1>
            </form>
        </div>

        <div class="w-full">
            @yield('konten')
        </div>

    </div>
  
</body>
</html>