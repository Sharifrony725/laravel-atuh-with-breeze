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
                <a href="http://">Home</a>
            </li>
            <li>
                <a href="http://">Dashboard</a>
            </li>
        </ul>
        <ul class="flex gap-5">
            <li>
                <a href="http://">Login</a>
            </li>
            <li>
                <a href="http://">Register</a>
            </li>
            <li>
                <a href="http://">Sharif Rony</a>
            </li>
            <li>
                <a href="http://">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="container mx-auto mt-5">
        @yield('content')
    </div>
</body>
</html>
