<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>
<body>
    <div class="w-full bg-pink-500 grid place-items-center h-screen ">
        <div class="bg-white p-5 rounded-sm shadow-lg">
            <form action="{{ route('register') }}" method="POST">
                @csrf
            <h1 class="text-center text-black font-bold py-5">REGISTER</h1>
            <div class="flex gap-2 bg-[#e6e6e6] p-2 rounded-md mb-5">
                {{-- <img src="{{asset('/gambar/user.png')}}" alt="" class="w-5 h-5"> --}}
                <input type="text" name="name" class=" focus:outline-none focus:border-none bg-[#e6e6e6] " placeholder="Nama">
            </div>
            <div class="flex gap-2 bg-[#e6e6e6] p-2 rounded-md">
                {{-- <img src="{{asset('/gambar/mail.png')}}" alt="" class="w-5 h-5"> --}}
                <input type="text" name="email" class=" focus:outline-none focus:border-none bg-[#e6e6e6] " placeholder="Email">
            </div>
            <div class="flex gap-2 bg-[#e6e6e6] p-2 rounded-md my-5">
                {{-- <img src="{{asset('/gambar/padlock.png')}}" alt="" class="w-5 h-5"> --}}
                <input type="password" name="password" class=" focus:outline-none focus:border-none bg-[#e6e6e6] " placeholder="Password">
            </div>
            <center>
            <button class="bg-cyan-600 py-2 px-8 rounded-md text-white" type="submit">DAFTAR</button>
            </center>
            </form>
        </div>
    </div>
</body>
</html>