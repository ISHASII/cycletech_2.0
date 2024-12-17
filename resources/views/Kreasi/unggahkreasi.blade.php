@extends('Layout.kreasiapp')

@section('content')
    <!-- Unggah Kreasi -->
    <div class="max-w-4xl mx-auto mt-20 p-6">
        <nav class="text-sm text-gray-600 mb-4">
            <a href="{{ route('kreasi') }}" class="hover:underline">Kreasi</a> > <span class="text-gray-800">Unggah Kreasi</span>
        </nav>
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Unggah Kreasimu</h1>
            <p class="text-gray-600">Tunjukkan kreativitasmu! Unggah karya daur ulangmu dan bergabunglah dengan para pecinta lingkungan lainnya.</p>
        </header>

        {{-- Form Isi --}}
        <form id="uploadForm" action="{{ route('nasabah.kreasi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <!-- Unggah Foto -->
            <div class="border-2 border-dashed border-hulk rounded-lg h-64 flex items-center justify-center mb-6 relative">
                <label for="fileToUpload" class="flex flex-col items-center cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 mb-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v4a2 2 0 002 2h12a2 2 0 002-2v-4M16 12l-4-4m0 0l-4 4m4-4v12"/>
                    </svg>
                    <span class="text-sm text-gray-500">Unggah Foto Kreasi</span>
                    <input type="file" id="fileToUpload" name="fileToUpload" class="hidden" accept="image/*" required>
                </label>

                <!-- image preview -->
                <img id="previewImage" class="absolute inset-0 w-full h-full object-cover rounded-lg hidden" alt="Preview Gambar">
            </div>

            <div class="border-t-2 border-hulk mb-6"></div>

            <!-- Fields lainnya -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul Kreasi</label>
                    <input id="judul" name="judul" type="text" class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3" required>
                </div>
                <div>
                    <label for="penulis" class="block text-sm font-medium text-gray-700">Nama Penulis</label>
                    <input id="penulis" name="penulis" type="text" value="{{ auth()->guard('nasabah')->check() ? auth()->guard('nasabah')->user()->name : 'Guest' }}" readonly class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3 cursor-not-allowed">
                </div>
                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select id="kategori" name="kategori" class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3" required>
                        <option value="" disabled selected>Pilih Kategori</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input id="tanggal" name="tanggal" type="date" class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3" required>
                </div>
            </div>
  
            <div>
                <label for="alat_bahan" class="block text-sm font-medium text-gray-700">Alat dan Bahan</label>
                <textarea id="alat_bahan" name="alat_bahan" rows="4" class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3" required></textarea>
            </div>

            <div>
                <label for="langkah" class="block text-sm font-medium text-gray-700">Langkah-langkah</label>
                <textarea id="langkah" name="langkah" rows="4" class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3" required></textarea>
            </div>

            <div class="flex justify-between mt-6">
                <!-- Tombol Kembali -->
                <a href="{{ route('kreasi') }}" class="px-6 py-2 text-center bg-white border border-hulk text-gray-700 rounded-lg hover:bg-old-hulk hover:text-white transition duration-200">
                    Kembali
                </a>

                <!-- Tombol Unggah -->
                <button type="submit" class="px-6 py-2 text-center bg-white border border-hulk text-gray-700 rounded-lg hover:bg-old-hulk hover:text-white transition duration-200">
                    Unggah
                </button>
            </div>
        </form>
    </div>

    <script>
        // Fungsi untuk menampilkan preview gambar
        document.getElementById('fileToUpload').addEventListener('change', function (event) {
            const file = event.target.files[0];
            const preview = document.getElementById('previewImage');

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.classList.add('hidden');
            }
        });
    </script>

    <!-- JS -->
    <script>
        // Fungsi untuk menampilkan preview gambar
        function previewImage(event) {
            const fileInput = event.target; // Input file
            const file = fileInput.files[0]; // File pertama yang dipilih
            const preview = document.getElementById('previewImage'); // Elemen gambar preview

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result; // Set URL gambar
                    preview.classList.remove('hidden'); // Tampilkan gambar
                };
                reader.readAsDataURL(file); // Baca file sebagai URL data

            } else {
                preview.src = ''; // Kosongkan src jika tidak ada file
                preview.classList.add('hidden'); // Sembunyikan gambar
            }
        }

        // Validasi saat form di-submit
        document.getElementById('uploadForm').addEventListener('submit', function (event) {
            // Ambil semua input yang wajib diisi
            const requiredInputs = document.querySelectorAll('#uploadForm [required]');
            let formIsValid = true;
            let firstInvalidInput = null;

            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    formIsValid = false;

                    // Tandai input yang tidak valid
                    input.classList.add('border-red-500');
                    input.classList.add('bg-red-100');

                    if (!firstInvalidInput) {
                        firstInvalidInput = input;
                    }
                } else {
                    // Hilangkan tanda kesalahan jika input sudah diisi
                    input.classList.remove('border-red-500');
                    input.classList.remove('bg-red-100');
                }
            });

            if (!formIsValid) {
                alert('Harap isi semua bidang yang wajib diisi!');
                event.preventDefault(); // Cegah pengiriman form

                // Gulir ke input pertama yang tidak valid
                firstInvalidInput?.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstInvalidInput?.focus();
            }
        });

        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton?.addEventListener('click', () => {
            dropdownMenu?.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest('#dropdownButton') && !e.target.closest('#dropdownMenu')) {
                dropdownMenu?.classList.add('hidden');
            }
        });
    </script>
@endsection
