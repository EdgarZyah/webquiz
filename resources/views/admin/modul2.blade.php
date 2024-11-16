@extends('admin.partials.index')

@section('container')
    <section>
        <div class="container space-y-5 m-auto px-3 sm:px-0 sm:w-[1440px] h-full sm:space-y-[32px]">
            <div
                class="container font-inter text-2xl text-black h-fit relative flex flex-wrap justify-between sm:text-3xl sm:h-[40px]">
                <h1>Daftar Modul</h1>
                <a href="/module/create" class="self-center">
                    <img class="w-6 h-6 bg-blend-color-burn hover:ring-1 hover:ring-green-111 sm:w-8 sm:h-8"
                        src="{{ URL('pictures/plus.png') }}" alt="whatsapp">
                </a>
            </div>
        <div
            class="hidden container h-fit space-x-3 justify-start flex m-auto sm:w-[1280px] lg:flex-row sm:space-y-0 sm:space-x-5">
            <a class="hover:text-green-111 focus:text-green-111" href="#">Terbaru</a>
            <a class="hover:text-green-111 focus:text-green-111" href="#">Mudah</a>
            <a class="hover:text-green-111 focus:text-green-111" href="#">Sedang</a>
            <a class="hover:text-green-111 focus:text-green-111" href="#">Sulit</a>
        </div>
        <!-- cardsection -->
        <div
            class="container mx-auto flex flex-wrap sm:flex-row space-x-2 w-[360px] h-fit pb-[10px] space-y-3 sm:w-[1280px] sm:flex-wrap sm:space-y-5">
            <!-- card1 -->
            @foreach ( $moduls as $modul )
            <a href="#">
                <div
                    class="container w-[150px] m-auto pb-5 flex flex-col justify-start h-fit sm:w-[400px] sm:space-y-3 sm:h-fit shadow-card rounded-[10px] bg-white">
                    <div>
                        <img class="my-[15px] mx-auto rounded-[10px] px-[10px] sm:w-[350px] sm:h-[185px]  "
                            src="{{ URL('pictures/templatemodul.png') }}" alt="thumbnail-modul">
                        <h1 class="flex justify-start px-3 sm:px-7 font-medium text-[12px] sm:text-[16px] sm:text-3xl ">
                            {{ $modul->moduletitle}}</h1>
                        <p class="text-[8px] sm:text-[20px] flex flex-col font-light justify-start px-3 sm:px-7">
                            deskripsi Quiz</p>
                    </div>
                    <!-- tombol kalo login -->
                    <div class="container mx-auto w-full px-6 text-center h-auto flex space-y-2 flex-col">
                        <a class="text-[12px] sm:text-[18px] mx-auto sm:py-1 text-gray-700 hover:scale-105
                      hover:text-green-111 border-2 rounded-[4px] sm:rounded-[6px] w-full"
                            href="/module/{{ $modul->id}}/edit">
                            <span>Edit</span>
                        </a>
                        <div type="button" onclick="togglekonfirm('modal-id'+{{ $modul->id }})">
                            <button class="font-inter text-black text-[12px] sm:text-[18px] mx-auto sm:py-1 bg-red-redFF6767 hover:scale-105
                                  hover:text-white rounded-[4px] sm:rounded-[6px] w-full" href="">
                                <span>Delete</span>
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            
            <!-- card end -->
            <div class="hidden overflow-x-hidden m-auto overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="modal-id{{ $modul->id }}">
                <div id="modal-id{{ $modul->id }}" class="container m-auto flex flex-col justify-start py-5 z-10 px-5 w-full h-fit sm:w-[800px]
                                    rounded-[10px] shadow-card bg-white space-y-2 mx-4 sm:space-y-3">
                    <div class="flex flex-col px-2 self-center w-full">
                        <!-- text  -->
                        <div
                            class="w-full flex justify-center font-inter p-3 sm:text-3xl text-2xl text-[14px] text-black">
                            <p>Apakah anda yakin ingin menghapus quiz ini?</p>
                        </div>
                        <!-- button  -->
                        <div class="flex flex-row w-full gap-3 m-auto">
                            <div type="button" class="w-1/2" onkeydown="myFunction(event)"
                                onclick="togglekonfirm('modal-id'+{{ $modul->id }})">
                                <button
                                    class="font-inter text-black text-[12px] sm:text-[18px] mx-auto sm:py-1 hover:scale-105
                                  hover:text-green-111 border-2 rounded-[4px] sm:rounded-[6px] h-fit py-2 px-3 w-full">Batal</button>
                            </div>
                            <div type="button" class="w-1/2">
                                <form action="/module/{{ $modul->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="font-inter text-black text-[12px] sm:text-[18px] mx-auto sm:py-1 bg-red-redFF6767 hover:scale-105
                                  hover:text-white rounded-[4px] sm:rounded-[6px] h-fit py-2 px-3 w-full">
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id{{$modul->id}}-backdrop"></div>
                    <script type="text/javascript">
                        function togglekonfirm(modalID) {
                            document.getElementById(modalID).classList.toggle("hidden");
                            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                            document.getElementById(modalID).classList.toggle("flex");
                            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                            event.preventDefault();
                        }
                    </script>
@endforeach
    <div class=" py-10 flex mx-auto flex-row space-x-2 justify-center" href="#home">
      {{ $moduls->links() }}
    </div>
  </div>
</section>
@endsection