<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CycleTech</title>
    <link rel="icon" type="image/x-icon" href="/images/logo 2.webp">
  	<link rel="shortcut icon" href="/images/logo 2.webp" type="image/x-icon">
    <meta property="og:image" content="https://cycletech.site/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="CycleTech">
    <meta property="og:description" content="Cycle Techf adalah solusi cerdas untuk pengelolaan sampah Anda. Kami menyediakan platform lengkap yang tidak hanya mengedukasi, tetapi juga menginspirasi pengelolaan sampah secara kreatif. Dengan fitur deteksi jenis sampah otomatis, Anda dapat mengunggah gambar sampah dan mendapatkan rekomendasi kreasi menarik yang dapat dibuat dari limbah tersebut.">
  	<meta name="google-site-verification" content="vpBr6Qkf4ksqLG4Zpt_lpuXMOm4d5wSaSwqDVEUN14I" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
</head>

<body>
   <!-- Header -->
   <nav class="bg-gradient-to-r from-birumuda to-krem shadow-lg fixed top-0 w-full h-18 z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6 md:px-10">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo 2.webp') }}" alt="Logo" class="w-[55px] h-[55px] rounded-full">
            <h1 class="text-xl font-semibold text-hulk">Cycle Tech</h1>
        </div>

        <!-- Hamburger Menu Icon (Visible on Mobile) -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-black hover:text-hulk focus:outline-none">
                <i class="bi bi-list text-3xl"></i>
            </button>
        </div>

        <!-- Centered Navigation Links for Desktop -->
        <ul id="menu" class="hidden md:flex center-navbar space-x-8 font-medium text-gray-700">
            <li><a href="{{ route('landing.page') }}" class="hover:text-hulk">Beranda</a></li>
            <li><a href="#tentang-kami" class="hover:text-hulk scroll-snap hidden lg:flex">Tentang Kami</a></li>
            <li><a href="#kontak" class="hover:text-hulk">Kontak</a></li>
        </ul>

        <!-- Action Buttons -->
        <div class="hidden md:flex space-x-4">
            <a href="{{ route('login.nasabah') }}" class="ease-in duration-150 border-2 border-hulk text-hulk py-2 px-8 rounded-3xl hover:bg-gradient-to-r from-black to-old-hulk hover:text-white">Masuk</a>
            <a href="{{ route('signin.nasabah') }}" class="border-2 ease-in duration-150 bg-hulk border-hulk text-white py-2 px-8 rounded-3xl hover:bg-gradient-to-r from-black to-old-hulk">Daftar</a>
        </div>
    </div>

    <!-- Dropdown Menu for Mobile (initially hidden) -->
    <ul id="dropdown-menu" class="md:hidden hidden flex-col px-4 items-center space-y-4 bg-white border-t border-gray-200 py-4 font-medium text-gray-700">
        <li><a href="{{ route('landing.page') }}" class="hover:text-hulk">Beranda</a></li>
        <li><a href="#kontak" class="hover:text-hulk">Kontak</a></li>
        <div class="flex gap-4">
            <li><a href="{{ route('login.nasabah') }}" class="flex border-2 border-hulk text-hulk py-2 px-4 rounded-lg hover:bg-gradient-to-r from-black to-old-hulk hover:text-white">Masuk</a></li>
            <li><a href="{{ route('signin.nasabah') }}" class="flex border-2 bg-hulk border-hulk text-white py-2 px-4 rounded-lg hover:bg-gradient-to-r from-black to-old-hulk hover:text-white">Daftar</a></li>
        </div>
    </ul>
</nav>

<!-- JavaScript for Toggle Menu -->
<script>
    document.getElementById("menu-toggle").addEventListener("click", function () {
        var menu = document.getElementById("dropdown-menu");
        if (menu.classList.contains("hidden")) {
            menu.classList.remove("hidden");
        } else {
            menu.classList.add("hidden");
        }
    });
</script>


    <!-- Hero Section with Custom Background Color -->
    <section class="bg-gradient-to-b from-birumuda to-krem mt-20 py-8 md:py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center px-4 md:px-32">
            <div class="md:w-1/2 text-left mx-auto space-y-4 md:space-y-6 md:pr-12">
                <h1 class="text-2xl md:text-4xl font-bold text-gray-800">Bosan dengan Tumpukan Sampah?</h1>
                <p class="text-md md:text-lg text-gray-600">Cycle Tech hadir untuk membantu mengelola dan daur ulang sampah agar bisa digunakan kembali. Yuk bergabung menjadi penyelamat bumi!</p>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center">
                <img src="{{ asset('images/landing 1.webp') }}" alt="Hero Image" class="rounded-xl shadow-lg w-full max-w-xs md:max-w-md">
            </div>
        </div>
    </section>

    <!-- Features Section with Vertical Gradient -->
    <section class="bg-gradient-to-b from-krem to-white py-12 md:py-16">
        <div class="container mx-auto text-center px-4 md:px-64">
            <h2 class="text-center text-xl md:text-2xl font-bold mb-6 md:mb-8">Apa aja sih yang bisa kamu lakukan di sini?</h2>
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8 feature-cards">
                <!-- Card 1 -->
                <div class="relative bg-white p-4 md:p-6 rounded-lg shadow-lg text-center group">
                    <div class="flex justify-center mb-4">
                        <div class="bg-hulk text-white p-4 rounded-full w-14">
                            <i class="bi bi-file-earmark-text w-10 h-10 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Artikel</h3>
                    <p class="text-gray-600">Di sini kamu bisa membaca dan menulis artikel menarik.</p>
                    <div class="absolute inset-0 bg-hulk flex items-center justify-center text-white p-4 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-center">Penasaran dengan isu lingkungan terkini? Temukan artikel tentang pengelolaan sampah, daur ulang, dan solusi ramah lingkungan di sini!</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative bg-white p-4 md:p-6 rounded-lg shadow-lg text-center group">
                    <div class="flex justify-center mb-4">
                        <div class="bg-hulk text-white p-4 rounded-full w-14">
                            <i class="bi bi-brush w-10 h-10 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Kreasi</h3>
                    <p class="text-gray-600">Buat dan bagikan karya kreatifmu di sini.</p>
                    <div class="absolute inset-0 bg-hulk flex items-center justify-center text-white p-4 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-center">Punya ide kreatif untuk mengolah sampah? Bagikan kreasi Anda di sini dan inspirasi orang lain untuk hidup lebih ramah lingkungan.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative bg-white p-4 md:p-6 rounded-lg shadow-lg text-center group">
                    <div class="flex justify-center mb-4">
                        <div class="bg-hulk text-white p-4 rounded-full w-14">
                            <i class="bi bi-camera w-10 h-10 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Kamera Deteksi</h3>
                    <p class="text-gray-600">Gunakan kamera untuk mendeteksi berbagai hal.</p>
                    <div class="absolute inset-0 bg-hulk flex items-center justify-center text-white p-4 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-center">Yuk, belajar memilah sampah dengan benar! Coba fitur kamera deteksi sampah kami sekarang.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-8 md:py-16 bg-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-4 md:px-32">
            <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center mb-8">
                <img src="{{ asset('images/landing 2.webp') }}" alt="Benefits Image" class="rounded-lg shadow-lg w-full max-w-xs md:max-w-md">
            </div>
            <div class="md:w-1/2 text-left mx-auto md:space-y-6 ml-8">
                <h2 class="text-xl md:text-2xl font-bold text-gray-800">Mengapa Harus Bergabung?</h2>
                <ul class="list-decimal ml-6 text-gray-600 space-y-2">
                    <li class="font-medium">Mudah dan Fleksibel</li>
                    <p>Cycle Tech membantu Anda memilah sampah dengan mudah melalui panduan dan fitur deteksi otomatis.</p>
                    <li class="font-medium">Membantu lingkungan dengan daur ulang</li>
                    <p>Dapatkan informasi terbaru tentang pengelolaan sampah dan tips hidup ramah lingkungan.</p>
                    <li class="font-medium">Berbagi kreasi daur ulang dengan komunitas</li>
                    <p>Temukan ide-ide kreatif untuk mendaur ulang sampah menjadi barang yang berguna.</p>
                </ul>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-white py-8 md:py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 md:px-32">
            <div class="md:w-1/2 text-center md:text-left mb-6 md:mb-0">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Siap untuk Mengurangi Sampah?</h2>
                <p class="text-md md:text-lg text-gray-600">Gabung bersama kami sekarang untuk membuat perubahan!</p>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end space-x-4">
                <a href="{{ route('signin.nasabah') }}" class="border-2 ease-in duration-150 bg-hulk border-hulk text-white py-2 px-8 rounded-3xl hover:bg-gradient-to-r from-black to-old-hulk">Bergabung</a>
            </div>
        </div>
    </section>

      <!-- Section: Tim Kami -->
      <section id="tentang-kami" class="lg:grid hidden bg-gradient-to-b from-white to-krem py-10">
        <div class="container mx-auto text-center px-24 md:px-32">
            <h2 class="text-3xl font-bold text-gray-800">Tentang Tim Kami</h2>
            <p class="text-gray-600 mt-4">Berikut adalah tim hebat yang bekerja di balik layar Cycle Tech.</p>

            <!-- Baris Pertama -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 mt-12">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/salma.webp') }}" alt="Member" class="rounded-full w-[200px] h-[200px] object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Salma Salsabila</h3>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/mutia.webp') }}" alt="Member" class="rounded-full w-[200px] h-[200px] object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Mutia Azzahra</h3>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/harry.webp') }}" alt="Member" class="rounded-full w-[200px] h-[200px] object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Harry Bonardo</h3>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/ivan.webp') }}" alt="Member" class="rounded-full w-[200px] h-[200px] object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Ivan Herdianto</h3>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/aprin.webp') }}" alt="Member" class="rounded-full w-[200px] h-[200px] object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Aprinia Salsabila</h3>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/ilham.webp') }}" alt="Member" class="rounded-full w-[200px] h-[200px] object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Ilham Saputra</h3>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/anggita.webp') }}" alt="Member" class="rounded-full w-[200px] h-[200px] object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Anggita Ardilianz</h3>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/rizma.webp') }}" alt="Member" class="rounded-full w-[200px] h-[200px] object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Rizma Agustin</h3>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/velizha.webp') }}" alt="Member" class="rounded-full w-[200px] h-[200px] object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Velizha Sandy</h3>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/danu.webp') }}" alt="Member" class="rounded-full w-[200px] h-[200px] object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Muhammad Danu</h3>
                </div>
            </div>
            </div>
        </div>
    </section>

     <!-- Footer -->
    <section id="kontak">
    <footer class="bg-gradient-to-t from-birumuda to-krem py-10">
        <div class="container mx-auto flex flex-col justify-between items-center xl:px-64 px-24 lg:px-56">
            <div class="mb-6 md:mb-0">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/logo 2.webp') }}" alt="Cycle Tech Logo" class="w-10 h-10 mr-3">
                    <h2 class="text-lg font-bold text-hulk">Cycle Tech</h2>
                </div>
                <p class="mt-4 text-sm text-center md:block">
                    Cycle Tech adalah platform inovatif untuk pengelolaan sampah. </br>
                  	Dengan fitur-fitur canggih, kami memudahkan Anda untuk memilah, mengelola, dan mendaur ulang sampah secara efektif.
                </p>
                <div class="flex justify-center mt-6 space-x-4">
                    <a href="http://wa.me/+6289662348943" target="_blank" class="text-black hover:text-gray-400">
                        <i class="bi bi-telephone-fill"></i>
                    </a>
                    <a href="mailto:cycletech05@gmail.com" target="_blank" class="text-black hover:text-gray-400">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/cycletech.site?igsh=MXhhNGJqMWZoZ21iZA==" target="_blank" class="text-black hover:text-gray-400">
                        <i class="bi bi-instagram w-6 h-6"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <p class="text-sm">© 2024 CycleTech. All Rights Reserved.</p>
        </div>
    </footer>
    </section>
  
  </body>
</html>
