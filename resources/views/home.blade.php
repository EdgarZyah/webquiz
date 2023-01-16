<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/modul.css')}}">
</head>

<body>
    @include('.nav')
<main>
  <section>
    <div class="bg-white ">
    <div class="container px-6 py-4 mx-auto lg:flex lg:h-[800px] lg:py-20 ">
        <div class="flex flex-col justify-center items-center w-full lg:flex-row lg:w-1/2">
            <div class="max-w-lg">
                <p class="text-xl tracking-wide text-white text-black lg:text-3xl lg:text-4xl">
                    Anak kecil</p>
                    <br>
                    <div class="backdrop-filter backdrop-blur-lg md:backdrop-filter-none bg-green-111">
  <!-- ... -->
                </div>
                <p class="mt-4 text-gray-300 text-gray-600">Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae
                    laudantium quod rem voluptatem eos accusantium cumque.</p>
                <div class="mt-6">
                    <a href="#"
                        class="inline-block px-3 py-2 font-semibold text-center text-white transition-colors duration-200 transform bg-green-111 rounded-md hover:text-green-700">
                        Read More</a>
                </div>
            </div>
        </div>
        <div class="flex items-center self-center justify-center w-full mt-2 lg:h-96 lg:w-1/2">
            <img class="object-cover w-full max-w-2xllg:h-full"
                src="pictures/gambar-hero.png" alt="anak-kecil">
        </div>
    </div>
</div>
  </section>
<section class="flex justify-center mx-auto container relative w-screen bg-contain bg-white">
  <div class="text-center w-3/4">
    <a class="font-extrabold text-4xl">Fitur utama kami</a>
    <br></br>
      <a>Lorem ipsum dolor sit amet consectetur.
          Diam cursus lacus tincidunt fermentum pulvinar nunc sollicitudin scelerisque. Mauris ullamcorper nascetur suspendisse elit vulputate lorem dolor.
          Adipiscing orci et erat eu placerat commodo. Arcu in nec id nibh interdum.</a>
        </div>
</section>
<section class="flex m-auto container relative w-screen bg-contain bg-white">
  <div>
    <a>Quiz</a>
  </div>

  </section>
</main>
      @include('.footer')
      <main class="">
        @yield('container')
</main>
</body>
</html>