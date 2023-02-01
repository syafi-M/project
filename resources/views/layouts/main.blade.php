<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>{{ $judul }}</title>
</head>

<body class="bg-gradient-to-br from-green-200/70 to-slate-50 w-screen">
    @include('layouts.navbar')
    <div class="bg-white mx-3 w-fit lg:mt-14 lg:mx-20 lg:px-7 lg:py-7 rounded-md shadow-md h-auto max-w-[1440px]">
        @yield('konten')
    </div>
</body>

</html>
