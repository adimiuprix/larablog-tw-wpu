<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    {{--
    Ini versi lama sebelum install flowbite
    @vite('resources/css/app.css')
    --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Document</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">

    <div class="min-h-full">
        {{-- Memanggil component navbar --}}
        <x-navbar></x-navbar>

        {{-- Memanggil component header
        $title disini adalah variable yang di kirim dari routes, dan di sini di tampilkan,
        tapi untuk menampilkan variable nya di dalam component child nya harus memasukkan variable $slot -> lihat Header. --}}
        <x-header>{{ $title }}</x-header>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{-- Memasukkan semua isi dari content layout menggunakan $slot --}}
                {{-- Content Start --}}
                {{ $slot }}
                {{-- Content End --}}
            </div>
        </main>

    </div>

</body>
</html>
