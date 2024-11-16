<nav class="top-0">
    <div class="px-8 py-6 flex justify-between items-center">
        <!-- Logo -->
        <a href="/home">
            <h3 class="text-2xl lg:text-3xl font-medium">WebBelajar</h3>
        </a>

        <!-- Desktop Navigation -->
        <div id="nav-content" class="hidden sm:flex gap-5 text-lg text-gray-600">
            <a href="/profile" class="hover:text-green-500 transition">Profile</a>
            <a href="/quiz" class="hover:text-green-500 transition">Daftar Quiz</a>
            <a href="/module" class="hover:text-green-500 transition">Daftar Modul</a>
        </div>

        <!-- Hamburger Button -->
        <button id="hamburger" class="sm:hidden">
            <img src="{{ URL('pictures/hamburgerbutton.png') }}" alt="Menu" class="w-8 h-8">
        </button>
    </div>

    <!-- Mobile Sidebar -->
    <div id="mobile-nav"
        class="fixed inset-0 transform -translate-x-full transition-transform duration-300">
        <div class="w-64 bg-white h-full shadow-lg">
            <!-- Close Button -->
            <div class="flex justify-between items-center px-6 py-4">
                <h3 class="text-2xl font-medium">WebBelajar</h3>
                <button id="close-nav">
                    <img src="{{ URL('pictures/back button.png') }}" alt="Close" class="w-6 h-6">
                </button>
            </div>
            <!-- Sidebar Links -->
            <div class="flex flex-col space-y-4 mt-6 px-6">
                <a href="/home" class="text-lg text-gray-600 hover:text-green-500">Beranda</a>
                <a href="/profile" class="text-lg text-gray-600 hover:text-green-500">Profile</a>
                <a href="/quiz" class="text-lg text-gray-600 hover:text-green-500">Daftar Quiz</a>
                <a href="/module" class="text-lg text-gray-600 hover:text-green-500">Daftar Modul</a>
            </div>
        </div>
    </div>
</nav>

<script>
    const hamburger = document.getElementById('hamburger');
    const mobileNav = document.getElementById('mobile-nav');
    const closeNav = document.getElementById('close-nav');

    // Buka sidebar
    hamburger.addEventListener('click', () => {
        mobileNav.classList.remove('-translate-x-full');
    });

    // Tutup sidebar
    closeNav.addEventListener('click', () => {
        mobileNav.classList.add('-translate-x-full');
    });

    // Tutup sidebar saat klik di luar
    mobileNav.addEventListener('click', (e) => {
        if (e.target === mobileNav) {
            mobileNav.classList.add('-translate-x-full');
        }
    });
</script>