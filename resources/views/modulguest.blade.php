@extends('partials.index')

@section('container')
    <section>
        <div class="container space-y-5 m-auto px-3 sm:px-0 sm:w-[1440px] sm:space-y-[32px]">
            <div
                class="container h-fit space-y-5 justify-start flex m-auto sm:w-[1280px] lg:flex-row sm:space-y-0 sm:space-x-20">
                <div class="h-fit mx-auto pt-5 flex flex-wrap justify-between font-inter text-2xl text-black sm:text-3xl sm:w-[1280px] sm:h-[40px]">
                    <h1>Daftar modul</h1>
                </div>
            </div>
            <!-- cardsection -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($moduls as $modul)
                    <!-- Card -->
                    <a href="#" class="block">
                        <div type="button" onclick="toggleModal('modal-{{ $modul->id }}')"
                            class="bg-white shadow-card rounded-lg overflow-hidden hover:shadow-lg transition duration-200">
                            <img src="{{ URL('pictures/templatemodul.png') }}" alt="thumbnail-modul"
                                class="w-full h-32 sm:h-48 object-cover">
                            <div class="p-4 space-y-2">
                                <h1 class="text-lg font-medium text-black sm:text-xl">
                                    {{ $modul->moduletitle }}
                                </h1>
                                <p class="text-sm text-gray-600 sm:text-base">
                                    {{ $modul->moduledesc }}
                                </p>
                            </div>
                            <div class="flex justify-end p-4">
                                <img src="{{ URL('pictures/go.png') }}" alt="Go"
                                    class="w-6 h-6 sm:w-8 sm:h-8">
                            </div>
                        </div>
                    </a>
                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                        id="modal-{{$modul->id}}">
                        <div id="card"
                            class="container flex flex-col justify-start py-5 mx-10 z-10 w-full h-[400px] sm:w-[491px] sm:h-[654px]
                                    rounded-[10px] shadow-card bg-white space-y-2 sm:space-y-3">
                            <div class="flex flex-col px-5 self-end">
                                <!-- back button -->
                                <button
                                    class="background-transparent font-bold uppercase text-sm outline-none
                                            focus:outline-none transition-all duration-150"
                                    onclick="toggleModal('modal-'+{{$modul->id}})">
                                    <img class="hover:scale-110 rounded-[10px] m-auto w-[16px] h-[16px] sm:w-[32px] sm:h-[32px]"
                                        src="{{ URL('pictures/cross.png') }}" alt="backcard">
                                </button>
                            </div>
                            <!-- body -->
                            <div class="container mx-auto w-full px-6 h-full flex space-y-2 flex-col">
                                <img class="self-center mx-auto rounded-[10px] px-[10px] w-[300px] h-[150px] sm:w-[450px] sm:h-[250px]  "
                                    src="{{ URL('pictures/templatemodul.png') }}" alt="thumbnail-modul">
                                <h1 class="flex self-start font-medium text-[16px] sm:text-3xl ">{{ $modul->moduletitle }}
                                </h1>
                                <p class="text-[12px] sm:text-[20px] flex flex-col font-light self-start">{{ $modul->moduledesc }}</p>
                            </div>
                            <!-- button masuk -->
                            <div class="container mx-auto w-full px-6 text-center h-full flex flex-col justify-end">
                                <a class="text-[12px] sm:text-[18px] mx-auto sm:py-1
                                            hover:scale-105 text-white bg-green-111 border-2 rounded-[4px] sm:rounded-[6px] w-full"
                                    href="{{route('modul.show',$modul->id)}}">
                                    <span>masuk</span>
                                </a>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <!-- js modal -->
                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-{{$modul->id}}-backdrop"></div>
                    <script type="text/javascript">
                        var modal = document.getElementById(modal+{{$modul->id}});
                        function toggleModal(modalID) {
                            document.getElementById(modalID).classList.toggle("hidden");
                            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                            document.getElementById(modalID).classList.toggle("flex");
                            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                            event.preventDefault();
                        }
                    </script>
                @endforeach
            </div>

        </div>
        <div class=" py-10 flex mx-auto flex-row space-x-2 justify-center" href="#home">
            {{ $moduls->links() }}
        </div>
    </section>
@endsection