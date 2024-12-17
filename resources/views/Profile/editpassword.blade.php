@extends('Layout.profileapp')

@section('content')
    <section class="p-8 flex justify-center mt-16">
        <div class="w-full max-w-lg bg-white border border-hulk rounded-lg p-6">
            <h3 class="font-semibold text-lg mb-6">Ubah Kata Sandi Anda</h3>

            <!-- Tampilkan pesan sukses -->
            @if (session('success'))
                <div class="mb-4 text-green-600 font-medium">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tampilkan pesan error -->
            @if ($errors->any())
                <div class="mb-4 text-red-600 font-medium">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Ubah Kata Sandi -->
            <form method="POST" action="{{ route('profile.updatePassword') }}">
                @csrf

                <!-- Current Password -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Kata sandi saat ini</label>
                    <div class="flex items-center border border-hulk rounded-lg p-2">
                        <span class="text-hulk mr-2">
                            <i class="bi bi-lock-fill"></i>
                        </span>
                        <input type="password" name="current_password" class="w-full border-none focus:outline-none" placeholder="Kata sandi saat ini" required>
                    </div>
                </div>

                <!-- New Password -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Kata sandi baru</label>
                    <div class="flex items-center border border-hulk rounded-lg p-2">
                        <span class="text-hulk mr-2">
                            <i class="bi bi-lock-fill"></i>
                        </span>
                        <input type="password" name="new_password" class="w-full border-none focus:outline-none" placeholder="Kata sandi baru" required>
                    </div>
                </div>

                <!-- Confirm New Password -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Konfirmasi kata sandi baru</label>
                    <div class="flex items-center border border-hulk rounded-lg p-2">
                        <span class="text-hulk mr-2">
                            <i class="bi bi-lock-fill"></i>
                        </span>
                        <input type="password" name="new_password_confirmation" class="w-full border-none focus:outline-none" placeholder="Konfirmasi kata sandi baru" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex space-x-4">
                    <button type="submit" class="px-6 py-2 bg-hulk text-white rounded-full hover:bg-old-hulk font-semibold">
                        Ubah
                    </button>
                    <a href="{{ route('profile.keamanan') }}" id="backButton" class="px-6 py-2 border-2 border-old-hulk text-hulk rounded-full hover:bg-old-hulk font-semibold hover:text-white">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </section>
  
  	<script>
    // Variabel untuk memantau apakah form telah diubah
    let isFormChanged = false;

    // Tambahkan event listener pada semua input di dalam form
    document.querySelectorAll('form input').forEach(input => {
        input.addEventListener('input', function () {
            isFormChanged = true; // Tandai bahwa form telah diubah
        });
    });

    // Tombol "Kembali"
    document.getElementById('backButton').addEventListener('click', function (event) {
        // Mencegah navigasi default
        event.preventDefault();

        if (isFormChanged) {
            // Jika form telah diubah, tampilkan konfirmasi
            const userConfirmed = confirm('Apakah Anda yakin ingin kembali tanpa menyimpan perubahan?');
            if (userConfirmed) {
                // Jika pengguna setuju, navigasikan ke halaman target
                window.location.href = this.href;
            }
        } else {
            // Jika form tidak diubah, navigasikan langsung
            window.location.href = this.href;
        }
    });

  </script>
  @endsection
