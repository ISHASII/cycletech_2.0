
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="/images/logo 2.png">
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen">
    <div class="flex flex-col lg:flex-row min-h-screen">
        <!-- Admin Panel Title (clickable for mobile) -->
        <div class="lg:hidden flex justify-between items-center p-4 bg-hulk">
            <!-- Button that toggles the sidebar -->
            <button id="toggleButton" class="text-white font-extrabold text-xl cursor-pointer">
                Admin Panel
            </button>
        </div>

        <!-- Sidebar -->
        <div id="sidebar" class="fixed lg:relative -translate-x-full lg:translate-x-0 transition-transform duration-300 lg:basis-[15%] z-10 bg-hulk w-[75%] lg:w-auto h-auto min-h-screen">
            <div class="px-6 lg:px-6 py-4">
                <div class="px-4 py-6 flex items-center justify-center border-b border-light-white/[0.3]">
                    <h1 class="text-white text-xl leading-6 font-extrabold lg:cursor-default">Admin Panel</h1>
                </div>

                <div class="flex items-center gap-4 py-4 lg:pt-8">
                    <i class="bi bi-speedometer2 text-white"></i>
                    <a href="{{ route('admin.dashboard') }}" class="text-lg lg:text-xl text-white leading-6 hover:font-bold">Dashboard</a>
                </div>
                <div>
                    <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                        <div class="flex items-center gap-4">
                            <i class="bi bi-recycle text-white"></i>
                            <a href="{{ route('admin.categories.index') }}" class="text-lg lg:text-xl leading-6 font-normal text-white hover:font-bold">Kategori Sampah</a>
                        </div>
                        <i class="fa-solid fa-chevron-right text-white hidden lg:block"></i>
                    </div>
                    <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                        <div class="flex items-center gap-4">
                            <i class="bi bi-newspaper text-white"></i>
                            <a href="{{ route('admin.artikel.index') }}" class="text-lg lg:text-xl leading-6 font-normal text-white hover:font-bold">Artikel</a>
                        </div>
                        <i class="fa-solid fa-chevron-right text-white hidden lg:block"></i>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="bi bi-pencil-square text-white"></i>
                        <a href="{{ route('admin.kreasi.index') }}" class="text-lg lg:text-xl leading-6 font-normal text-white hover:font-bold">Kreasi</a>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="bi bi-check2-circle text-white"></i>
                        <a href="{{ route('admin.kreasi.approval') }}" class="text-lg lg:text-xl leading-6 font-normal text-white hover:font-bold">Validasi Kreasi</a>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="bi bi-people-fill text-white"></i>
                        <a href="{{ route('admin.datauser.index') }}" class="text-lg lg:text-xl leading-6 font-normal text-white hover:font-bold">Data Pengguna</a>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="bi bi-gift text-white"></i>
                        <a href="{{ route('admin.rewards.index') }}" class="text-lg lg:text-xl leading-6 font-normal text-white hover:font-bold">Rewards</a>
                    </div>
                </div>

                <div class="flex items-center justify-between gap-4 mt-10 pt-10 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="bi bi-person-fill-gear text-white"></i>
                        <a href="{{ route('admin.dataadmin.index') }}" class="text-xl leading-6 font-normal text-white hover:font-bold">Data Admin</a>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="bi bi-box-arrow-left text-white"></i>
                        <a href="#" id="logoutButton" class="text-xl leading-6 font-normal text-white hover:font-bold">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="basis-full lg:basis-[85%] border p-4 lg:pl-4 lg:pt-4 h-auto">
            @yield('content')
        </div>
    </div>

    <!-- Modal -->
    <div id="logoutModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg max-w-sm w-full p-6">
            <h2 class="text-lg font-semibold text-gray-800">Konfirmasi Logout</h2>
            <p class="text-gray-600 mt-2">Apakah Anda yakin ingin logout?</p>
            <div class="flex justify-end mt-4 space-x-4">
                <button id="cancelLogout" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">
                    Batal
                </button>
                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButton = document.getElementById('toggleButton');
            const sidebar = document.getElementById('sidebar');
            const logoutButton = document.getElementById('logoutButton');
            const logoutModal = document.getElementById('logoutModal');
            const cancelLogout = document.getElementById('cancelLogout');

            toggleButton.addEventListener('click', function () {
                sidebar.classList.toggle('-translate-x-full');
            });

            logoutButton.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default link behavior
                logoutModal.classList.remove('hidden'); // Show modal
            });

            cancelLogout.addEventListener('click', function () {
                logoutModal.classList.add('hidden'); // Hide modal
            });
        });
    </script>
</body>
</html>
