@extends('Layout.kreasiapp')

@section('content')
    <!-- Intro Section -->
    <div class="mx-auto flex flex-col items-center justify-center px-4 mt-28">
        <!-- Text Section -->
        <div class="text-center mb-6">
            <h1 class="text-lg font-bold md:text-xl lg:text-2xl">Deteksi Sampah-mu dan Mulai Daur Ulang!</h1>
        </div>
        <div class="mb-16">
            <p class="text-base md:text-lg lg:text-xl px-6 md:px-12 lg:px-24">
                Yuk, kenali kategori sampahmu! Pilih dan unggah foto sampah dari penyimpananmu. Tunggu beberapa saat dan hasilnya akan muncul.
            </p>
        </div>

        <!-- Upload Section -->
        <div class="w-full h-auto px-4 lg:px-0">
            <div class="flex flex-col justify-center items-center">
                <!-- Upload Form -->
                <form id="predictionForm" method="POST" enctype="multipart/form-data" action="{{ route('predict') }}">
                    @csrf
                    <label class="block text-black font-semibold mb-2 w-full max-w-4xl">
                        <div class="border-2 border-dashed border-hulk rounded-xl w-full h-48 md:h-64 lg:h-[380px] flex justify-center items-center">
                            <input type="file" id="image" name="image" class="hidden" required onchange="previewImage(event)">
                            <img id="imagePreview" src="{{ asset('images/upload.webp') }}" alt="Preview Gambar" class="object-cover w-12 h-12 md:w-16 md:h-16 lg:w-[197px] lg:h-[177px]">
                        </div>
                    </label>
                    <p class="text-sm md:text-base font-normal text-gray text-center mt-4">
                        Petunjuk: Untuk hasil yang akurat, pastikan hanya ada satu objek yang terlihat jelas dalam foto.
                    </p>
                    <div class="flex justify-center mt-4">
                        <button type="submit" class="border-2 px-4 py-2 border-hulk font-medium text-hulk rounded-full text-sm md:text-base lg:text-lg hover:bg-old-hulk hover:text-white">
                            Unggah dan Prediksi
                        </button>
                    </div>
                </form>
            </div>
        </div>

    <h1 class="text-center text-2xl font-bold mt-8">Hasil Prediksi</h1>
        <!-- Menampilkan Hasil Prediksi -->
        @if(isset($predictedCategory))
            <p class="text-center mt-4 text-gray-600">
                Kategori Sampah: <strong>{{ $predictedCategory }}</strong>
            </p>

            <!-- Rekomendasi Kreasi -->
            @if($recommendedCrafts->isEmpty())
                <p class="text-center text-gray-500 mt-6">
                    Tidak ada kreasi yang tersedia untuk kategori ini.
                </p>
            @else
            <div class="mt-5">
                <h2 class="text-lg font-semibold mb-4">Rekomendasi Kreasi:</h2>
                <div id="kreasi-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach($recommendedCrafts as $craft)
                    <a href="{{ route('artikel.kreasi', $craft->id) }}" class="mt-2 inline-block">
                            <div class="craft bg-gradient-to-b from-birumuda to-krem border rounded-lg hover:shadow-lg p-4 hover:border-old-hulk">
                                <img src="{{ asset('storage/' . $craft->foto_kreasi) }}" alt="{{ $craft->judul_kreasi }}" class="w-full h-40 object-cover rounded-lg mb-4">
                                <h3 class="text-lg font-bold">{{ $craft->judul_kreasi }}</h3>
                                <p class="text-sm text-gray-600">Penulis: {{ $craft->author }}</p>
                                <p class="text-sm text-gray-600">Kategori: {{ $craft->kategori_kreasi }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="flex flex-row gap-6 justify-center items-center">
                <button id="load-more" class="mt-8 w-[150px] bg-hulk text-white px-4 py-2 rounded-lg hover:bg-old-hulk">Lebih Banyak</button>
            </div>
        @else
            <p class="text-center text-red-500 mt-6">
                Kategori prediksi tidak ditemukan. Silakan unggah gambar untuk prediksi.
            </p>
        @endif

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const loadMoreButton = document.getElementById('load-more');
                const loadLessButton = document.getElementById('load-less');
                const kreasiContainer = document.getElementById('kreasi-container');
                const kreasiItems = Array.from(kreasiContainer.getElementsByClassName('craft'));
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

    <!-- Description Section -->
    <div class="mt-8 text-center">
        <p class="text-gray-700">
            Sistem ini menggunakan kecerdasan buatan untuk mendeteksi jenis sampah dari gambar. Pastikan gambar yang diunggah berkualitas baik dan hanya menampilkan satu objek.
        </p>
    </div>

    <!-- Description Section -->
    <div class="text-left mt-8 mb-24 px-4 md:px-16 lg:px-24">
        <p class="text-base md:text-lg lg:text-xl">
            Sistem berbasis AI untuk membantu mengenali kategori sampah yang dimiliki dan bagaimana mengolah sampah menjadi kerajinan tangan yang bernilai. Pertama-tama, ambil gambar atau unggah ke sistem, lalu sistem akan mengklasifikasikan gambar dan menghasilkan termasuk kategori sampah dan rekomendasi kreasi. Coba sekarang!
        </p>
    </div>
</div>

    <!-- JS -->
    <script>

        // Fungsi Preview
        function previewImage(event) {
            const fileInput = event.target.files[0]; // Ambil file dari input
            const allowedExtensions = ['image/jpeg', 'image/jpg']; // Format yang diizinkan
            const imagePreview = document.getElementById('imagePreview'); // Elemen gambar untuk preview

            // Validasi format file
            if (!allowedExtensions.includes(fileInput.type)) {
                alert('Hanya file dengan format JPG atau JPEG yang diizinkan!');
                event.target.value = ''; // Reset input jika format tidak valid
                imagePreview.src = "{{ asset('images/upload.webp') }}"; // Kembalikan gambar default
                imagePreview.classList.remove('w-full', 'h-full', 'rounded-md', 'object-cover'); // Hapus styling
                return;
            }

            const reader = new FileReader(); // Membuat FileReader untuk membaca file gambar

            reader.onload = function () {
                imagePreview.src = reader.result; // Menampilkan hasil file yang dibaca ke src gambar
                imagePreview.classList.add('w-full', 'h-full', 'rounded-md', 'object-cover'); // Tambahkan styling
            };

            reader.readAsDataURL(fileInput); // Membaca file gambar yang dipilih
        }

        // AJAX agar tidak ter-reload
        // Event Listener untuk Tombol Upload
        document.getElementById('uploadSubmitBtn').addEventListener('click', function () {
            const fileInput = document.getElementById('fileToUpload');
            const formData = new FormData();
            formData.append('fileToUpload', fileInput.files[0]);

            // AJAX untuk Upload File
            fetch('/upload', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Tampilkan Rekomendasi Artikel
                    const recommendationSection = document.getElementById('recommendationSection');
                    const articleRecommendation = document.getElementById('articleRecommendation');
                    articleRecommendation.textContent = data.article; // Artikel dari response
                    recommendationSection.classList.remove('hidden'); // Tampilkan bagian rekomendasi
                } else {
                    alert('Gagal mengunggah file. Silakan coba lagi.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan. Silakan coba lagi.');
            });
        });

        //hasil
        function toggleExtraCards() {
            const moreButton = document.getElementById('moreButton');
            const extraCards = document.getElementById('extraCards');

            moreButton.addEventListener('click', function () {
                extraCards.classList.toggle('hidden');
                moreButton.textContent = extraCards.classList.contains('hidden') ? 'Lebih Banyak' : 'Lebih Sedikit';
            });
        }

        function checkRowsVisibility() {
            const itemsContainer = document.getElementById('itemsContainer');
            const moreButton = document.getElementById('moreButton');
            const items = itemsContainer.querySelectorAll('.item');
            const itemsPerRow = 3; // Misalnya, 3 item per baris (sesuai grid Tailwind)

            // Tampilkan tombol hanya jika ada lebih dari 2 baris
            if (items.length > itemsPerRow * 2) {
                moreButton.classList.remove('hidden');
            } else {
                moreButton.classList.add('hidden');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            checkRowsVisibility();
            toggleExtraCards();
        });
    </script>
@endsection


