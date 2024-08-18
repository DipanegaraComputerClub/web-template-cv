


<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-pink-500">

    <div class="w-full flex justify-center">
        <div class="p-5 bg-blue-300 mt-36 rounded-3xl shadow-2xl">
        <form method="POST" action="{{ route('login') }}" >
            @csrf
            <h1 class="text-center font-bold text-pink-500 text-4xl mb-5">LOGIN</h1>
            <h1 class="text-white font-bold">Email</h1>
            <input type="text" name="email" class="bg-gray-300 h-10 rounded-md"><br><br>
            <h1 class="text-white font-bold">Password</h1>
            <input type="password" name="password" class="bg-gray-300 h-10 rounded-md"><br>
            <center>
            <button type="submit" class="mt-5 bg-pink-500 text-white font-bold p-2 rounded-lg">Login</button>
            </center>
        </form>
        </div>
    </div>
    
</body>
</html>