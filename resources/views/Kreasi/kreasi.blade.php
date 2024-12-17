@extends('Layout.kreasiapp')

@section('content')
    <!-- Kumpulan Kreasi -->
    <section class="bg-white py-16 mt-6">
        <div class="container mx-auto text-center px-10">
            <h2 class="text-3xl font-bold text-gray-800">Kumpulan Kreasi</h2>
            <p class="text-gray-600 mt-4">Dapatkan inspirasi dan pengetahuan tentang cara mendaur ulang sampah menjadi produk yang bermanfaat.</p>
            <div id="kreasi-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                @if (!isset($kreasis) || $kreasis->isEmpty())
                    <p class="text-gray-600">Belum ada kreasi yang tersedia saat ini.</p>
                @else
                    @foreach ($kreasis as $kreasi)
                        <div class="kreasi bg-gradient-to-b from-birumuda to-krem p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <a href="{{ route('artikel.kreasi', ['id' => $kreasi->id]) }}">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $kreasi->judul_kreasi }}</h3>
                                <img src="{{ asset('storage/' . $kreasi->foto_kreasi) }}" alt="{{ $kreasi->judul_kreasi }}" class="w-full h-48 object-cover rounded-t-lg">
                                <p class="text-gray-600 mt-2">Oleh {{ $kreasi->author }}</p>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="flex flex-row gap-6 justify-center items-center">
                <button id="load-more" class="mt-8 w-[150px] bg-hulk text-white px-4 py-2 rounded-lg hover:bg-old-hulk">Lebih Banyak</button>
                <button id="load-less" class="mt-8 w-[150px] bg-hulk text-white px-4 py-2 rounded-lg hover:bg-old-hulk" style="display: none;">Lebih Sedikit</button>
            </div>   
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreButton = document.getElementById('load-more');
        const loadLessButton = document.getElementById('load-less');
        const kreasiContainer = document.getElementById('kreasi-container');
        const kreasiItems = Array.from(kreasiContainer.getElementsByClassName('kreasi'));
        let visibleItems = 3;

        // Tampilkan hanya 3 kartu pertama saat memuat halaman
        kreasiItems.slice(visibleItems).forEach(item => item.style.display = 'none');

        loadMoreButton.addEventListener('click', function() {
            const hiddenItems = kreasiItems.slice(visibleItems, visibleItems + 3);
            hiddenItems.forEach(item => item.style.display = 'block');
            visibleItems += hiddenItems.length;

            // Sembunyikan tombol "Lebih Banyak" jika semua item sudah ditampilkan
            if (visibleItems >= kreasiItems.length) {
                loadMoreButton.style.display = 'none';
            }

            // Tampilkan tombol "Lebih Sedikit"
            loadLessButton.style.display = 'block';
        });

        loadLessButton.addEventListener('click', function() {
            if (visibleItems > 3) {
                const itemsToHide = kreasiItems.slice(visibleItems - 3, visibleItems);
                itemsToHide.forEach(item => item.style.display = 'none');
                visibleItems -= itemsToHide.length;

                // Sembunyikan tombol "Lebih Sedikit" jika hanya 3 item yang ditampilkan
                if (visibleItems <= 3) {
                    loadLessButton.style.display = 'none';
                }

                // Tampilkan tombol "Lebih Banyak" kembali
                loadMoreButton.style.display = 'block';
            }
        });
    });
    </script>

    <!-- Unggah Kreasimu -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Unggah Kreasimu</h2>
            <p class="text-gray-600 mt-4 mb-8">Tunjukkan kreativitasmu! Unggah karya daur ulangmu dan bergabunglah dengan para pecinta lingkungan lainnya.</p>
            <a href="{{ route('unggah.kreasi') }}" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white mt-8">Selengkapnya</a>
        </div>
    </section>

    <!-- Deteksi Jenis Sampah -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Deteksi Jenis Sampahmu</h2>
            <p class="text-gray-600 mt-4 mb-8">Penasaran ingin tahu jenis sampahmu? Coba fitur deteksi kami sekarang!</p>
            <a href="{{ route('deteksi.sampah') }}" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white mt-8">Selengkapnya</a>
        </div>
    </section>
    @endsection


