@extends('Layout.kreasiapp')

@section('content')
    <section class="max-w-4xl mx-auto mt-20 p-8 bg-white rounded-lg shadow-lg">
        <header class="mb-6">
            <h1 class="text-3xl font-semibold text-gray-800 mb-2">Edit Kreasimu</h1>
            <p class="text-gray-600">
                Tunjukkan kreativitasmu! Unggah karya daur ulangmu dan bergabunglah dengan para pencinta lingkungan lainnya.
            </p>
        </header>

        <!-- Form Update -->
        <form action="{{ route('kreasi.update', $kreasi->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Gambar Kreasi -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="fileToUpload">Gambar Kreasi</label>
                <div class="border-2 border-dashed border-hulk rounded-lg h-64 flex items-center justify-center mb-6">
                    @if ($kreasi->foto_kreasi)
                        <img src="{{ asset('storage/' . $kreasi->foto_kreasi) }}" alt="Foto Kreasi" class="object-cover w-24 h-24 rounded-lg">
                    @else
                        <div class="text-gray-500 flex flex-col items-center">
                            <i class="bi bi-image text-3xl"></i>
                            <span>Preview Gambar</span>
                        </div>
                    @endif
                </div>
                <input type="file" name="fileToUpload" id="fileToUpload" class="mt-4 block w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3">
            </div>

            <!-- Judul Kreasi dan Nama Penulis -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul Kreasi</label>
                    <input type="text" name="judul" id="judul" value="{{ $kreasi->judul_kreasi }}" required class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Penulis</label>
                    <input type="text" value="{{ auth('nasabah')->user()->name }}" disabled class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3 cursor-not-allowed">
                </div>
            </div>

            <!-- Kategori dan Tanggal -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <input type="text" name="kategori" id="kategori" value="{{ $kreasi->kategori_kreasi }}" required class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3">
                </div>

                <div>
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" value="{{ $kreasi->tanggal }}" required class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3">
                </div>
            </div>

            <!-- Alat dan Bahan -->
            <div>
                <label for="alat_bahan" class="block text-sm font-medium text-gray-700">Alat dan Bahan</label>
                <textarea name="alat_bahan" id="alat_bahan" rows="5" required class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3">{{ $kreasi->alat_bahan }}</textarea>
            </div>

            <!-- Langkah-langkah -->
            <div>
                <label for="langkah" class="block text-sm font-medium text-gray-700">Langkah-langkah</label>
                <textarea name="langkah" id="langkah" rows="5" required class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3">{{ $kreasi->langkah }}</textarea>
            </div>

            <!-- Tombol Perbarui -->
            <div class="flex justify-end items-end">
                <button type="submit" class="w-[150px] bg-hulk text-white py-2 px-6 rounded-lg hover:bg-old-hulk focus:ring-2 focus:ring-green-400">
                    Perbarui
                </button>    
            </div>
        </form>
        <div class="flex justify-end items-end">
            <form action="{{ route('kreasi.destroy', $kreasi->id) }}" method="POST" class="mt-4" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kreasi ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-[150px] bg-white text-red-500 py-2 px-6 rounded-lg border-2 border-red-500 hover:text-white hover:bg-red-600 focus:ring-red-400">
                    Hapus
                </button>
            </form> 
        </div> 
    </section>


    <script>
        function openModal() {
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        function handleDelete(event) {
            event.preventDefault(); // Prevent form submission to handle redirection manually

            // Simulate successful deletion (replace with an actual AJAX request if needed)
            setTimeout(() => {
                // Redirect to the "Kreasiku" page after deletion
                window.location.href = "{{ route('kreasiku') }}";
            }, 500); // Simulated delay for UX
        }
    </script>

    <script>
            const dropdownButton = document.getElementById('dropdownButton');
            const dropdownMenu = document.getElementById('dropdownMenu');

            dropdownButton.addEventListener('click', () => {
                dropdownMenu.classList.toggle('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!e.target.closest('#dropdownButton') && !e.target.closest('#dropdownMenu')) {
                dropdownMenu.classList.add('hidden');
                }
            });

            function previewImage(event) {
                const preview = document.getElementById('previewImage');
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                    };

                    reader.readAsDataURL(file);
                }
            }
    </script>
@endsection
