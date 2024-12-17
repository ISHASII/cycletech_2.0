@extends('Layout.profileapp')

@section('content')
<section class="p-8 flex flex-col lg:flex-row gap-8 mt-16">
    <!-- Sidebar -->
    <div class="w-full h-64 lg:w-1/4 bg-white border border-hulk rounded-lg p-4">
        <h2 class="font-semibold text-xl mb-4">Profil</h2>
        <ul class="space-y-4">
            <li>
               <a href="{{ route('profile.nasabah')}}" class="text-black hover:text-old-hulk">Profil Saya</a>
            </li>
            <li>
                <a href="{{ route('profile.keamanan')}}" class="text-hulk font-semibold">Keamanan</a>
            </li>
            <li>
                <div class="mt-20">
                    <a href="javascript:void(0)" onclick="openOverlay()" class="text-red-600 hover:font-medium hover:text-red-700">Hapus Akun</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- Account Detail Content -->
    <div class="w-full lg:w-3/4 bg-white border border-old-hulk rounded-lg p-6">
        <h3 class="font-semibold text-lg mb-4">Detail Akun</h3>

        <!-- Email Information -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium">Alamat Email</label>
            <p class="text-gray-800">{{ $user->email }}</p>
        </div>

        <!-- Password Section -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium">Kata Sandi</label>
            <div class="flex items-center border border-old-hulk rounded-lg p-2 mt-2">
                <span class="text-hulk mr-2">
                    <i class="bi bi-lock-fill"></i>
                </span>
                <input id="password-field" type="password" class="w-full border-none focus:outline-none" value="{{ $user->password_plaintext }}" disabled>
                <button type="button" id="toggle-password" class="text-hulk hover:text-hulk focus:outline-none ml-2">
                    <i id="eye-closed" class="bi bi-eye-slash-fill hidden"></i>
                    <i id="eye-open" class="bi bi-eye-fill"></i>
                </button>
            </div>
        </div>

        <!-- Change Password Button -->
        <a href="{{ route('profile.password') }}" class="px-6 py-2 font-medium border-2 border-old-hulk text-hulk rounded-full hover:bg-hulk hover:text-white">Ubah Kata Sandi</a>
    </div>
</section>

<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center flex hidden">
    <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
        <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Akun ini?</h2>
        <form id="delete-account-form" action="{{ route('profile.deleteAccount') }}" method="POST">
            @csrf
            <div class="flex justify-center space-x-4">
                <button type="submit" class="px-4 py-2 border-2 border-hulk text-hulk rounded hover:bg-red-100">
                    Ya
                </button>
                <button type="button" onclick="closeOverlay()" class="px-4 py-2 border-2 border-red-600 text-red-600 rounded hover:bg-green-100">
                    Tidak
                </button>
            </div>
        </form>
    </div>
</div>
</section>

<script>
    function openOverlay() {
        const overlay = document.getElementById('overlay');
        overlay.classList.remove('hidden');
    }

    function closeOverlay() {
        const overlay = document.getElementById('overlay');
        overlay.classList.add('hidden');
    }

    document.getElementById('toggle-password').addEventListener('click', function () {
        const passwordField = document.getElementById('password-field');
        const eyeOpenIcon = document.getElementById('eye-open');
        const eyeClosedIcon = document.getElementById('eye-closed');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeOpenIcon.classList.add('hidden'); // Sembunyikan ikon mata terbuka
            eyeClosedIcon.classList.remove('hidden'); // Tampilkan ikon mata tertutup
        } else {
            passwordField.type = 'password';
            eyeOpenIcon.classList.remove('hidden'); // Tampilkan ikon mata terbuka
            eyeClosedIcon.classList.add('hidden'); // Sembunyikan ikon mata tertutup
        }
    });
</script>
@endsection

