@extends('partials.index')

@section('container')
<section>
    <div class="bg-white">
        <div class="container px-6 py-4 mx-auto lg:flex lg:h-[800px] lg:py-20">
            <div class="flex flex-col justify-center items-center w-full lg:flex-row lg:w-1/2">
                <div class="max-w-lg">
                    <p class="font-inter text-2xl pt-5 sm:pt-0 sm:text-4xl text-black tracking-wide">
                        "Get Rid From Sadness With Study"
                    </p>
                    <br>
                    <p class="mt-4 font-poppins">
                        WebBelajar adalah platform digital inovatif yang dirancang khusus untuk membantu pelajar dalam
                        mengakses berbagai materi pembelajaran secara online. Dengan berbagai fitur interaktif,
                        WebBelajar memungkinkan pelajar untuk belajar kapan saja dan di mana saja dengan pengalaman
                        belajar yang fleksibel dan menyenangkan!
                    </p>
                    <div class="mt-6">
                        <button
                            class="inline-block px-3 py-2 font-inter text-xs text-center text-white bg-green-111 rounded-md focus:shadow-card">
                            Read More
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex self-center w-full mt-2 lg:w-1/2">
                <img class="object-cover w-full max-w-2xl lg:h-full" src="{{ URL('pictures/gambarhero.png') }}"
                    alt="anak-kecil">
            </div>
        </div>
    </div>
</section>

<section class="flex justify-center mx-auto">
    <div class="text-center w-3/4">
        <p class="font-inter text-2xl sm:text-4xl text-black">Fitur utama kami</p>
        <p class="font-poppins text-xl text-grey-fade mt-4">Kami menyediakan dua fitur utama yaitu quiz dan modul</p>
    </div>
</section>

<section>
    <div class="container gap-[60px] px-6 py-4 mx-auto lg:flex lg:h-[800px] lg:py-20">
        <div class="flex flex-col justify-center items-center w-full lg:flex-row lg:w-1/2">
            <div class="max-w-lg space-y-[24px] shadow-sm">
                <img class="object-cover w-[40px]" src="{{ URL('pictures/puzzle.png') }}" alt="icon-quiz">
                <h1 class="font-inter text-2xl text-black">Quiz</h1>
                <p class="font-poppins text-xl text-grey-fade">
                    Untuk mengukur pemahaman, WebBelajar menawarkan berbagai quiz yang dapat membantu pelajar menguji
                    pengetahuan mereka setelah menyelesaikan modul pembelajaran, sehingga pelajar dapat terus berkembang
                    dan memperdalam materi yang telah dipelajari.
                </p>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center w-full lg:flex-row lg:w-1/2">
            <div class="max-w-lg space-y-[24px]">
                <img class="object-cover w-[40px]" src="{{ URL('pictures/buku.png') }}" alt="icon-modul">
                <h1 class="font-inter text-2xl text-black">Modul</h1>
                <p class="font-poppins text-xl text-grey-fade">
                    Di dalam fitur modul, pelajar bisa menggunakan fitur ini untuk menambah wawasan dengan cara membaca
                    modul pembelajaran yang disediakan.
                </p>
            </div>
        </div>
    </div>
</section>

<footer class="w-full static bottom-0">
    <div
        class="bg-green-111 text-white py-[80px] px-[50px] gap-5 mx-auto sm:px-[80px] sm:py-[55px] sm:h-[200px] flex flex-col sm:flex-row justify-between">
        <div class="flex flex-col">
            <span class="text-4xl font-medium">WebBelajar</span>
        </div>
        <div class="flex flex-col gap-3">
            <a href="/aboutus" class="text-xl hover:underline">About Us</a>
            <a href="/info" class="text-xl hover:underline">Info Pengembang</a>
        </div>
        <div class="flex flex-col gap-3">
            <span class="text-2xl">Contact</span>
            <div class="flex items-center gap-2">
                <img src="{{ URL('pictures/mail.png') }}" class="w-[32px] h-[32px]" alt="icon-email">
                <span class="text-xl">WebBelajar.service@gmail.com</span>
            </div>
        </div>
    </div>
</footer>
@endsection