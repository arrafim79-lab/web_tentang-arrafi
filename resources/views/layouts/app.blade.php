<!DOCTYPE html>
<html lang="id" class="scroll-smooth m-0 p-0">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <meta charset="UTF-8">
    <title>Website Pengalaman</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 font-sans bg-white text-black">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-blue-600 text-white px-10 py-4 flex justify-between items-center shadow-lg z-50">

        <h1 class="font-bold text-lg tracking-wide">
            WEB
        </h1>

        <div class="space-x-6 text-sm">
            <a href="#welcome" class="hover:text-cyan-300 transition">Tentang</a>
            <a href="#dashboard" class="hover:text-cyan-300 transition">Projects</a>
            <a href="#tentang" class="hover:text-cyan-300 transition">Cerita</a>
            <a href="#sosmed" class="hover:text-cyan-300 transition">kontak</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="pt-24 text-base md:text-lg">
        @yield('content')
    </div>

</body>
</html>