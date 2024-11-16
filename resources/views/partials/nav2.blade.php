<nav class="top-0 transition-all duration-300 ease-in-out">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">
        <!-- Logo -->
        <a href="/home" class="text-2xl lg:text-3xl font-bold text-gray-800">WebBelajar</a>

        <!-- Navbar Links -->
        <div id="nav-content" class="hidden sm:flex items-center space-x-6 text-gray-600">
            <a href="{{ route('quizguest.index') }}" class="font-medium hover:text-green-500">Quiz</a>
            <a href="/modul" class="font-medium hover:text-green-500">Modul</a>
            <a href="/aboutus" class="font-medium hover:text-green-500">About Us</a>
        </div>

        <!-- Auth Buttons -->
        <div class="hidden sm:flex items-center">
            @if(Auth::check())
                <form action="/profile" method="GET">
                    @csrf
                    <button class="text-gray-800 font-medium hover:text-green-500">
                        {{ Auth::user()->name }}
                    </button>
                </form>
            @else
                <form action="/login" method="GET">
                    @csrf
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        Sign In
                    </button>
                </form>
            @endif
        </div>

        <!-- Hamburger Icon -->
        <button id="hamburger-btn" class="sm:hidden focus:outline-none">
            <img src="{{ URL('pictures/hamburgerbutton.png') }}" alt="Menu" class="w-8 h-8">
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden fixed inset-0 z-40 bg-white transition-all duration-500 ease-in-out">
        <div class="w-4/5 h-full flex flex-col space-y-6 py-8 px-6">
            <div class="flex flex-wrap justify-between items-center">
                <a class="text-2xl lg:text-2xl font-bold text-gray-800">WebBelajar</a>
                <!-- Close Button -->
                <button id="close-menu" class="self-end focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Links -->
            <!-- Auth Buttons (Mobile) -->
            @if(Auth::check())
                <form action="/profile" method="GET">
                    @csrf
                    <button class="text-xl font-medium text-gray-700 hover:text-green-500">
                        {{ Auth::user()->name }}
                    </button>
                </form>
            @else
                <form action="/login" method="GET">
                    @csrf
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        Sign In
                    </button>
                </form>
            @endif
            <a href="/home" class="text-xl font-medium text-gray-700 hover:text-green-500">Beranda</a>
            <a href="/aboutus" class="text-xl font-medium text-gray-700 hover:text-green-500">About Us</a>
            <a href="{{ route('quizguest.index') }}"
                class="text-xl font-medium text-gray-700 hover:text-green-500">Quiz</a>
            <a href="/modul" class="text-xl font-medium text-gray-700 hover:text-green-500">Modul</a>
        </div>
    </div>
</nav>

<script>
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');

    hamburgerBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });

    // Close menu when clicking outside
    mobileMenu.addEventListener('click', (e) => {
        if (e.target === mobileMenu) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>
