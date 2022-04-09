<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PostApp</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-400">
    <nav class="p-6 bg-white mb-6 flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="" class="p-3">Posts</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">YourName</a>
            </li>
            <li>
                <a href="" class="p-3">Login</a>
            </li>
            <li>
                <a href="" class="p-3">Logout</a>
            </li>
            <li>
                <a href="" class="p-3">Register</a>
            </li>
        </ul>
    </nav>
    <h1 class="text-center bg-red-300 text-2xl font-bold text-gray-800">PostApp New</h1>
    @yield('content')
    
</body>
</html>