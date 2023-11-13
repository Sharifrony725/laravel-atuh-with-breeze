<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Auth</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="flex justify-between bg-white p-6 items-center">
        <ul class="flex gap-5">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
        </ul>
        <ul class="flex gap-5">
        @auth
            <li>
                <a href="#">{{ auth()->user()->name }}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit" >Logout</button>
                </form>

            </li>
         @endauth
         @guest()
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}">Register</a>
            </li>
         @endguest
        </ul>
    </nav>
    <div class="container mx-auto mt-5">
        @yield('content')
    </div>
</body>
</html>
