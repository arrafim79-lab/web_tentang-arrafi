@extends('layouts.app')

@section('content')

<!-- WELCOME -->
<section id="welcome" class="relative min-h-screen flex items-center bg-blue-600 text-white px-16">

    <div class="max-w-6xl mx-auto w-full flex items-center justify-between">

        <!-- Kiri -->
        <div class="max-w-xl">
            <h1 class="text-5xl font-bold mb-4">
                WEBSITE KISAH ARRAFI
            </h1>

            <p class="text-xl mb-6">
                <span id="typing"></span>
            </p>

            <a href="#tentang" class="bg-white text-blue-600 px-6 py-3 rounded-full hover:bg-gray-200 transition">
                Cerita Saya
            </a>
        </div>

        <!-- Kanan (Foto BULAT & TENGAHIN) -->
        <div class="flex justify-center items-center w-[400px]">
            <img src="/images/profile.jpg" 
     alt="profile"
     class="w-64 h-64 object-cover rounded-full border-4 border-white shadow-lg float-animation">
        </div>

    </div>
<div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-center">

    <a href="#dashboard" class="text-white text-3xl scroll-arrow">
        <i class="fas fa-chevron-down"></i>
    </a>

</div>
</section>


<!-- DASHBOARD -->
<section id="dashboard" class="min-h-screen flex items-center bg-white px-10">

    <div class="max-w-5xl mx-auto w-full text-center">

        <h1 class="text-4xl font-bold text-black mb-4">
            Project Saya
        </h1>

        <p class="text-gray-600 mb-12">
            Ini adalah project website yang saya buat selama liburan
        </p>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- PROJECT 1 -->
            <div class="bg-gray-100 p-4 rounded-xl shadow-lg hover:scale-105 transition">
                <img src="/images/project1.png" class="rounded-lg mb-4 w-full h-56 object-cover">

                <a href="https://arrafim-portfolio.vercel.app" target="_blank"
                   class="block text-center bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">
                    Lihat Web
                </a>
            </div>

            <!-- PROJECT 2 -->
            <div class="bg-gray-100 p-4 rounded-xl shadow-lg hover:scale-105 transition">
                <img src="/images/project2.png" class="rounded-lg mb-4 w-full h-56 object-cover">

                <a href="https://arrafim-portfolio.vercel.app" target="_blank"
                   class="block text-center bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg">
                    Lihat Web
                </a>
            </div>

        </div>

    </div>

</section>


<!-- TENTANG -->
<section id="tentang" class="min-h-screen flex items-center bg-blue-600 text-white px-10 overflow-hidden">

    <div class="max-w-6xl mx-auto w-full text-center">

        <!-- Judul -->
        <h1 class="text-4xl font-bold mb-4">
            Cerita Saya
        </h1>

        <!-- Bio -->
        <p class="mb-12 max-w-3xl mx-auto">
            Perkenalkan nama saya Muhammad Arrafi dengan NIM 2523256 kelas PTIK 6B. 
            Aktivitas saya selama liburan adalah bermain game, beribadah, menolong orang tua, 
            membuat beberapa project website dan silaturahmi ke tempat saudara.
        </p>

        <!-- Gallery -->
        <div id="gallery" class="grid md:grid-cols-5 gap-6">

            <!-- 1 -->
            <div class="text-center">
                <img src="/images/aktivitas1.png" class="w-full h-48 object-cover rounded-lg shadow-lg mb-2">
                <p>Bermain Game</p>
            </div>

            <!-- 2 -->
            <div class="text-center">
                <img src="/images/aktivitas2.jpeg" class="w-full h-48 object-cover rounded-lg shadow-lg mb-2">
                <p>Beribadah</p>
            </div>

            <!-- 3 -->
            <div class="text-center">
                <img src="/images/aktivitas3.jpg" class="w-full h-48 object-cover rounded-lg shadow-lg mb-2">
                <p>Menolong Orang Tua</p>
            </div>

            <!-- 4 -->
            <div class="text-center">
                <img src="/images/aktivitas4.jpg" class="w-full h-48 object-cover rounded-lg shadow-lg mb-2">
                <p>Membuat Website</p>
            </div>

            <!-- 5 -->
            <div class="text-center">
                <img src="/images/aktivitas5.jpeg" class="w-full h-48 object-cover rounded-lg shadow-lg mb-2">
                <p>Silaturahmi</p>
            </div>

        </div>

    </div>

</section>


<!-- SOSMED -->
<section id="sosmed" class="min-h-screen flex items-center bg-white px-10">
    <div class="max-w-3xl mx-auto text-center">

        <h1 class="text-4xl font-bold mb-6 text-black">
            Sosial Media
        </h1>

        <div class="bg-gray-100 p-8 rounded shadow flex justify-center gap-12 text-center">

    <!-- Instagram -->
    <div>
        <a href="https://instagram.com/muhamadrfi_" target="_blank" class="text-pink-500 text-4xl hover:scale-110 transition">
            <i class="fab fa-instagram"></i>
        </a>
        <p class="mt-3 font-semibold text-black">Instagram</p>
        <p class="text-gray-600 text-sm">@muhamadrfi_</p>
    </div>

    <!-- GitHub -->
    <div>
        <a href="https://github.com/arrafim79-lab" target="_blank" class="text-black text-4xl hover:scale-110 transition">
            <i class="fab fa-github"></i>
        </a>
        <p class="mt-3 font-semibold text-black">GitHub</p>
        <p class="text-gray-600 text-sm">arrafim79-lab</p>
    </div>

    <!-- WhatsApp -->
    <div>
        <a href="https://wa.me/6289513604544" target="_blank" class="text-green-500 text-4xl hover:scale-110 transition">
            <i class="fab fa-whatsapp"></i>
        </a>
        <p class="mt-3 font-semibold text-black">WhatsApp</p>
        <p class="text-gray-600 text-sm">089513604544</p>
    </div>

</div>
</section>


<!-- ANIMASI KETIK -->
<script>
    const text = "Ini adalah website tentang aktivitas saya selama liburan puasa dan lebaran Idul Fitri.";
    let index = 0;

    function type() {
        if (index < text.length) {
            document.getElementById("typing").textContent += text.charAt(index);
            index++;
            setTimeout(type, 50); // kecepatan ngetik
        }
    }

    // jalan sekali pas halaman dibuka
    window.onload = type;
</script>

<style>
@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
    100% {
        transform: translateY(0px);
    }
}

.float-animation {
    animation: float 3s ease-in-out infinite;
}
</style>
<style>
@keyframes floatArrow {
    0% {
        transform: translate(-50%, 0px);
        opacity: 0.7;
    }
    50% {
        transform: translate(-50%, 15px);
        opacity: 1;
    }
    100% {
        transform: translate(-50%, 0px);
        opacity: 0.7;
    }
}

.scroll-arrow {
    display: inline-block;
    animation: floatArrow 2s ease-in-out infinite;
    transition: 0.3s;
}

.scroll-arrow:hover {
    transform: translate(-50%, 10px) scale(1.2);
    text-shadow: 0 0 15px rgba(255,255,255,0.8);
}
</style>

<style>
@keyframes slideIn {
    0% {
        transform: translateX(100%);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

.gallery-animate {
    animation: slideIn 1.5s ease forwards;
}
</style>

<style>
@keyframes slideIn {
    0% {
        transform: translateX(100%);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

.gallery-animate {
    animation: slideIn 1.2s ease forwards;
}
</style>

<script>
    const gallery = document.getElementById("gallery");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                gallery.classList.add("gallery-animate");
            }
        });
    });

    observer.observe(gallery);
</script>

@endsection