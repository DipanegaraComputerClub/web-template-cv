<nav class="w-full " data-aos="fade-down" data-aos-duration="1000" >
    <div class="w-full bg-[#FF8080] py-3 flex justify-between px-20 shadow-2xl">
    <img src="{{asset('gambar/zaily.png')}}" alt="" class="w-28" >
    <ul class="text-white flex gap-10  items-center font-bold">
        <li class="hover:text-cyan-500"><a href="{{route ('utama') }}">Home</a></li>
        <li class="hover:text-cyan-500"><a href="{{route ('input1') }}">Buat CV</a></li>
        <li ><a class="bg-cyan-500 pt-2 pb-3 px-4 rounded-2xl hover:bg-gradient-to-r from-green-300 to-blue-500" href="{{route ('tentang') }}">Tentang</a></li>
    </ul>
    </div>
</nav>