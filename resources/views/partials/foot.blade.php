<footer class="w-full bg-green-111 text-white py-8 px-6 sm:px-12">
    <div class="container mx-auto flex flex-wrap justify-between items-center space-y-8 sm:space-y-0">
        <!-- Logo and Description -->
        <div class="w-full sm:w-1/3 flex flex-col items-center sm:items-start space-y-4">
            <span class="text-3xl font-bold">WebBelajar</span>
            <p class="text-sm sm:text-base text-gray-100 text-center sm:text-left lg:pr-4">
                Platform belajar online yang membantu pelajar memahami materi dengan lebih fleksibel dan menyenangkan.
            </p>
        </div>

        <!-- Navigation Links -->
        <div class="w-full sm:w-1/3 flex flex-col items-center space-y-2 sm:space-y-4 sm:items-start">
            <span class="text-xl font-semibold">Navigasi</span>
            <a href="/aboutus" class="text-sm sm:text-base text-gray-100 hover:underline">About Us</a>
            <a href="/info" class="text-sm sm:text-base text-gray-100 hover:underline">Informasi Pengembang</a>
        </div>

        <!-- Contact Info -->
        <div class="w-full sm:w-1/3 flex flex-col items-center space-y-4 sm:items-start">
            <span class="text-xl font-semibold">Kontak</span>
            <div class="flex items-center space-x-2">
                <img src="{{ URL('pictures/mail.png') }}" alt="icon-email" class="w-6 h-6">
                <span class="text-sm sm:text-base text-gray-100">WebBelajar.service@gmail.com</span>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="mt-8 text-center border-t border-gray-500 pt-4">
        <p class="text-sm text-gray-100">2024 WebBelajar</p>
    </div>
</footer>