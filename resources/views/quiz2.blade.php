@extends('partials.index')

@section('container')
<section>
    <div class="container space-y-5 m-auto px-3 sm:px-0 sm:w-[1440px] sm:h-max sm:space-y-[32px]">
        <div class="container h-fit space-y-5 justify-start flex m-auto sm:w-[1280px] lg:flex-row sm:space-y-0 sm:space-x-20">
              <div class="container h-fit mx-auto relative flex flex-wrap w-full justify-between font-medium text-2xl sm:text-3xl sm:w-[1280px] sm:h-[40px]">
            <h1>Daftar Quiz</h1>
            <a href="#" class="self-center">
            <img class="w-6 h-6 bg-blend-color-burn hover:ring-1 hover:ring-green-111 sm:w-8 sm:h-8" src="Pictures/plus.png" alt="whatsapp">
        </a>
    </div>
</div>
    <div class="container h-fit space-x-3 justify-start flex m-auto sm:w-[1280px] lg:flex-row sm:space-y-0 sm:space-x-5">
            <a class="hover:text-green-111 focus:text-green-111" href="#">Terbaru</a>
            <a class="hover:text-green-111 focus:text-green-111" href="#">Mudah</a>
            <a class="hover:text-green-111 focus:text-green-111" href="#">Sedang</a>
            <a class="hover:text-green-111 focus:text-green-111" href="#">Sulit</a>
            </div>
            <!-- cardsection -->
            <div class="container mx-auto flex flex-wrap sm:flex-row space-x-2 h-fit pb-[10px] space-y-3 sm:w-[1280px] sm:flex-wrap sm:space-y-5">
            <!-- card1 -->
            <a href="#">
            <div class="container w-[150px] m-auto pb-5 flex flex-col justify-start h-fit sm:w-[400px] sm:space-y-3 sm:h-fit shadow-card rounded-[10px] bg-white">
                    <div>
                    <img class="my-[15px] mx-auto rounded-[10px] px-[10px] sm:w-[350px] sm:h-[185px]  "
                    src="pictures/template.png" alt="thumbnail-modul">
                    <h1 class="flex justify-start px-3 sm:px-7 font-medium text-[12px] sm:text-[16px] sm:text-3xl ">Judul Quiz</h1>
                    <p class="text-[8px] sm:text-[20px] flex flex-col font-light justify-start px-3 sm:px-7">deskripsi Quiz</p>
                    </div>
                    <!-- tombol kalo login -->
                    <div class="container mx-auto w-full px-6 text-center h-auto flex space-y-2 flex-col">
                      <a class="text-[12px] sm:text-[18px] mx-auto sm:py-1 text-gray-700 hover:scale-105
                      hover:text-green-111 border-2 rounded-[4px] sm:rounded-[6px] w-full" href="">
                        <span>Review</span>
                      </a>
                      <a class="text-[12px] sm:text-[18px] mx-auto sm:py-1 text-gray-700 hover:scale-105
                      hover:text-green-111 border-2 rounded-[4px] sm:rounded-[6px] w-full" href="">
                        <span>Edit</span>
                      </a>
                      <a class="text-[12px] sm:text-[18px] mx-auto sm:py-1 bg-red-redFF6767 text-gray-700 hover:scale-105
                      hover:text-white rounded-[4px] sm:rounded-[6px] w-full" href="">
                        <span>Delete</span>
                      </a>
                    <!-- tanda panah klo bukan admin -->
                    <div class="container justify-end w-full h-auto flex pr-3 sm:pr-5 mb-3 sm:mb-5 mt-auto flex-row">
                    <img class="w-[16px] h-[16px] sm:w-[50px] sm:h-[50px]" src="pictures/go.png" alt="">
                </div>
            </div>
          </div>
          </a>
          <!-- card end -->
        </div>
    </div>
    
    <div class="pb-[400px] sm:pb-10 py-10 flex mx-auto flex-row space-x-2 justify-center" href="#home">
                    <a href="#"><img class="h-6 w-6 hover:ring-1 hover:ring-green-111" src="Pictures/arrow-left-line.png" alt="whatsapp"></a>
                    <a class="hover:underline focus:underline" href="#">1</a>
                    <a class="hover:underline focus:underline" href="#">2</a>
                    <a class="hover:underline focus:underline" href="#">3</a>
                    <a>...</a>
                    <a href="#"><img class="h-6 w-6 hover:ring-1 hover:ring-green-111" src="Pictures/arrow-right-line.png" alt="whatsapp"></a>
                </div>
  </div>
</section>
@endsection