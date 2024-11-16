@extends('partials.index')

@section('container')
<section>
    <div
        class="bg-white flex-wrap min-h-screen w-full lg:w-[1024px] mx-auto justify-center space-y-16 py-6 px-6 lg:py-10 lg:px-20">
        <!-- Hero Section -->
        <div class="w-full flex flex-col lg:flex-row items-center space-x-0 lg:space-x-10">
            <!-- Text Content -->
            <div class="flex-col w-full lg:w-1/2 space-y-6">
                <p class="font-inter text-2xl sm:text-4xl text-black tracking-wide">
                    "Get Rid From Sadness With Study"
                </p>
                <p class="font-poppins text-lg sm:text-xl text-gray-600 text-justify">
                    WebBelajar adalah platform digital inovatif yang dirancang khusus untuk membantu pelajar dalam
                    mengakses berbagai materi pembelajaran secara online. Dengan berbagai fitur interaktif,
                    WebBelajar memungkinkan pelajar untuk belajar kapan saja dan di mana saja dengan pengalaman
                    belajar yang fleksibel dan menyenangkan!
                </p>
                <button
                    class="bg-green-600 hover:bg-green-700 px-4 py-2 font-inter text-sm sm:text-base text-white rounded-md focus:ring focus:ring-green-300">
                    Read More
                </button>
            </div>
            <!-- Image Content -->
            <div class="w-full lg:w-1/2 flex justify-center mt-6 lg:mt-0">
                <img class="object-cover w-full max-w-2xl lg:h-auto" src="{{ URL('pictures/gambarhero.png') }}"
                    alt="anak-kecil">
            </div>
        </div>

        <!-- Features Section -->
        <div class="w-full flex flex-col items-center text-center space-y-4">
            <p class="font-inter text-2xl sm:text-4xl text-black">Fitur Utama Kami</p>
            <p class="font-poppins text-lg sm:text-xl text-gray-600">
                Kami menyediakan dua fitur utama yaitu Quiz dan Modul
            </p>
        </div>

        <!-- Features Cards -->
        <div class="flex flex-col lg:flex-row justify-center space-y-10 lg:space-y-0 lg:space-x-10">
            <!-- Quiz Feature -->
            <div class="w-full lg:w-1/2 flex flex-col items-start bg-gray-50 rounded-lg shadow-lg p-6 space-y-4">
                <div class="flex items-center space-x-4">
                    <img class="object-cover w-10" src="{{ URL('pictures/puzzle.png') }}" alt="icon-quiz">
                    <h1 class="font-inter text-2xl text-black">Quiz</h1>
                </div>
                <p class="font-poppins text-lg text-gray-600 text-justify">
                    Untuk mengukur pemahaman, WebBelajar menawarkan berbagai quiz yang dapat membantu pelajar
                    menguji pengetahuan mereka setelah menyelesaikan modul pembelajaran, sehingga pelajar dapat
                    terus berkembang dan memperdalam materi yang telah dipelajari.
                </p>
            </div>

            <!-- Modul Feature -->
            <div class="w-full lg:w-1/2 flex flex-col items-start bg-gray-50 rounded-lg shadow-lg p-6 space-y-4">
                <div class="flex items-center space-x-4">
                    <img class="object-cover w-10" src="{{ URL('pictures/puzzle.png') }}" alt="icon-modul">
                    <h1 class="font-inter text-2xl text-black">Modul</h1>
                </div>
                <p class="font-poppins text-lg text-gray-600 text-justify">
                    Di dalam fitur Modul, pelajar dapat memanfaatkan sarana ini untuk memperluas pengetahuan dan
                    wawasan mereka dengan cara membaca materi pembelajaran yang disediakan. Setiap modul dirancang
                    secara sistematis dan mudah dipahami, mencakup berbagai topik yang relevan dengan kurikulum dan
                    kebutuhan pembelajaran. Modul-modul ini disusun oleh para ahli di bidangnya, sehingga memastikan
                    kualitas informasi yang diberikan tepat, akurat, dan mudah dipelajari.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection