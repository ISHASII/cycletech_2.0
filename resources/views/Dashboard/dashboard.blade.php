@extends('Layout.dashboardapp')

@section('content')
    <!-- Hero Section -->
    <section class="bg-white py-10 mt-16">
        <div class="container mx-auto text-left px-4 flex flex-col text-justify max-w-5xl">
            <img src="{{ asset('images/beranda 1.webp') }}" alt="Recycle Bins" class="w-full max-w-5xl mx-auto rounded-lg shadow-lg">
            <p class="text-gray-600 mt-4 mx-auto"><span class="text-3xl font-bold text-gray-800 mt-8"> Cycle Tech </span>hadir untuk membantumu mengubah sampah menjadi sesuatu yang berharga. Kami menyediakan berbagai solusi kreatif untuk mendaur ulang limbah, mengedukasi masyarakat tentang pengelolaan sampah, dan membantu menciptakan lingkungan yang lebih bersih. Bergabunglah dengan kami dalam perjalanan menuju keberlanjutan dan jadilah bagian dari perubahan positif di komunitasmu!</p>
        </div>
    </section>

    <!-- Informasi Fitur Deteksi -->
    <section class="bg-gradient-to-b from-white via-birumuda to-krem py-8 md:py-16">
        <div class="container mx-auto flex flex-col items-center justify-between px-16 md:px-32">
            <div class="text-center mb-6">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Mau Melatih Kreatifitasmu?</h2>
                <p class="text-md md:text-lg text-gray-600">Ayo deteksi jenis sampahmu dan ubah menjadi barang berguna!</p>
            </div>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('deteksi.sampah') }}" class="border-2 ease-in duration-150 bg-hulk border-hulk text-white py-2 px-8 rounded-3xl hover:bg-gradient-to-r from-black to-old-hulk">Mulai Deteksi!</a>
            </div>
        </div>
    </section>

    <!-- Artikel & Informasi Section -->
    <section class="bg-gradient-to-b from-krem to-white py-16">
        <div class="container mx-auto text-center px-10">
            <h2 class="text-2xl font-bold text-center text-gray-800">Artikel & Informasi</h2>
            <!-- Card Artikel -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
                @forelse ($articles as $article)
                    <a href="{{ route('detail.artikel', $article->id) }}" class="block">
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden h-[350px] hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ asset('storage/' . $article->foto) }}" alt="{{ $article->judul_artikel }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-gray-700">{{ $article->judul_artikel }}</h3>
                                <p class="text-gray-600 mt-2">{{ Str::limit($article->isi, 70) }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-gray-600">Belum ada artikel tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

   <!-- Mitra Kami Section -->
   <section class="bg-white py-12">
    <div class="container mx-auto px-6 lg:px-24">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-8">Rekomendasi Pengelola Sampah</h2>
        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-8">
            <a href="https://apsiumkmsampah.id/" class="block" target="_blank">
                <div class="bg-white shadow-lg rounded-lg h-[240px] overflow-hidden hover:shadow-2xl border border-grey hover:border-hulk transition-shadow duration-300">
                    <img src="{{ asset('images/apsi.webp') }}" alt="APSI" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700 text-lg">APSI</h3>
                        <p class="text-gray-600 mt-2 text-sm">Asosiasi Pengusaha Sampah Indonesia</p>
                    </div>
                </div>
            </a>
            <a href="https://www.adupi.org/" class="block" target="_blank">
                <div class="bg-white shadow-lg rounded-lg h-[240px] overflow-hidden hover:shadow-2xl border border-grey hover:border-hulk transition-shadow duration-300">
                    <img src="{{ asset('images/adupi.webp') }}" alt="ADUPI" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700 text-lg">ADUPI</h3>
                        <p class="text-gray-600 mt-2 text-sm">Asosiasi Daur Ulang Plastik Indonesia</p>
                    </div>
                </div>
            </a>
            <a href="https://ibcsd.or.id/" class="block" target="_blank">
                <div class="bg-white shadow-lg rounded-lg h-[240px] overflow-hidden hover:shadow-2xl border border-grey hover:border-hulk transition-shadow duration-300">
                    <img src="{{ asset('images/ibcsd.webp') }}" alt="IBCS" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700 text-lg">IBCSD</h3>
                        <p class="text-gray-600 mt-2 text-sm">Indonesia Business Council for Sustainable Development</p>
                    </div>
                </div>
            </a>
            <a href="https://repurpose.global/" class="block" target="_blank">
                <div class="bg-white shadow-lg rounded-lg h-[240px] overflow-hidden hover:shadow-2xl border border-grey hover:border-hulk transition-shadow duration-300">
                    <img src="{{ asset('images/repurpose.webp') }}" alt="Repurpose" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700 text-lg">RePurpose Global</h3>
                        <p class="text-gray-600 mt-2 text-sm">Global Plastic Action Platform </p>
                    </div>
                </div>
            </a>
        </div>
        </div>
    </section>
    @endsection



