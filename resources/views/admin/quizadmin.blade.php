@extends('admin.partials.index')

@section('container')
<section> <!-- ini quiz guest -->
    <div class="container space-y-5 m-auto px-3 sm:px-0 sm:w-[1440px] h-full sm:space-y-[32px]">
        <div
            class="container font-inter text-2xl text-black h-fit relative flex flex-wrap justify-between sm:text-3xl sm:h-[40px]">
            <h1>Daftar Quiz</h1>
            <a href="/quiz/create" class="self-center">
                <img class="w-6 h-6 bg-blend-color-burn hover:shadow-sm sm:w-8 sm:h-8"
                    src="{{ URL('Pictures/plus.png') }}" alt="whatsapp">
            </a>
        </div>
        <!-- cardsection -->
        <div
            class="container mx-auto sm:mx-10 flex flex-wrap sm:flex-row space-x-3 w-[360px] h-fit pb-[10px] space-y-10 sm:w-[1280px] sm:flex-wrap sm:space-y-20">
            @foreach ($quizs as $quiz)
                <!-- card1 -->
                <a type="button" onclick="toggleModal('modal-'+{{ $quiz->id }})">
                    <div class="container m-auto flex flex-col justify-start h-fit
                            w-[300px] mx-auto sm:w-[400px] sm:space-y-5 sm:h-fit shadow-card
                            rounded-[10px] bg-white">
                        <div class="w-full flex flex-col justify-center mx-auto">
                            <img class="my-[15px] rounded-[10px] mx-auto px-[10px] sm:w-[350px] sm:h-[185px]  "
                                src="{{ asset('storage/' . $quiz->media) }}" alt="thumbnail-modul">
                            <h1
                                class="flex text-black justify-start px-3 sm:px-7 font-inter text-[18px] sm:text-[24px] sm:text-3xl ">
                                {{ $quiz->quiztitle }}
                            </h1>
                            <p
                                class="text-[16px] sm:text-[20px] flex flex-col font-poppins text-grey-fade justify-start px-3 sm:px-7">
                                {{ substr(strip_tags($quiz->quizdesc), 0, 28) }}...
                            </p>


                            <!-- tombol kalo login -->
                            <div class="container mx-auto w-full px-6 text-center pb-5 h-auto flex space-y-2 flex-col">
                                <a class="text-[12px] sm:text-[18px] mx-auto sm:py-1 font-inter text-black hover:scale-105
                                        hover:text-green-111 border-2 rounded-[4px] sm:rounded-[6px] w-full"
                                    href="{{ route('showhasil', $quiz) }}">
                                    <span>Review</span>
                                </a>
                                <a class="text-[12px] sm:text-[18px] mx-auto sm:py-1 font-inter text-black hover:scale-105
                                        hover:text-green-111 border-2 rounded-[4px] sm:rounded-[6px] w-full"
                                    href="/quiz/{{ $quiz->id }}/edit">
                                    <span>Edit</span>
                                </a>
                                <a class="text-[12px] sm:text-[18px] mx-auto sm:py-1 font-inter text-black hover:scale-105
                                        hover:text-green-111 border-2 rounded-[4px] sm:rounded-[6px] w-full"
                                    href="{{ route('quiz.show', $quiz) }}">
                                    <span>Add & Edit Soal</span>
                                </a>
                                <button onclick="togglekonfirm('modal-id'+{{ $quiz->id }})" class="text-[12px] sm:text-[18px] mx-auto
                                    sm:py-1 bg-red-redFF6767 font-inter text-black hover:scale-105 hover:text-white
                                    rounded-[4px] sm:rounded-[6px] w-full" href="#">
                                    <span>Delete</span>
                                </button>
                            </div>
                        </div>

                        <!-- action="/quiz/{{ $quiz->id }}" method="post" -->
                        <!-- tanda panah klo bukan admin -->
                    </div>
                </a>
                <!-- card end -->
                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                    id="modal-{{ $quiz->id }}">
                    <div id="card" class="container flex flex-col justify-start py-5 mx-6 z-10 w-full h-[400px] sm:w-[491px] sm:h-[654px]
                                        rounded-[10px] shadow-card bg-white space-y-2 sm:space-y-3">
                        <div class="flex flex-col px-5 self-end">
                            <!-- back button -->
                            <button class="background-transparent font-bold uppercase text-sm outline-none
                                                focus:outline-none transition-all duration-150"
                                onclick="toggleModal('modal-'+{{ $quiz->id }})">
                                <img class="hover:scale-110 rounded-[10px] m-auto w-[16px] h-[16px] sm:w-[32px] sm:h-[32px]"
                                    src="pictures/cross.png" alt="backcard">
                            </button>
                        </div>
                        <!-- body -->
                        <div class="container mx-auto w-full px-6 h-full flex space-y-2 flex-col">
                            <img class="self-center mx-auto rounded-[10px] px-[10px] w-[300px] h-[150px] sm:w-[450px] sm:h-[250px]  "
                                src="{{ asset('storage/' . $quiz->media) }}" alt="thumbnail-modul">
                            <h1 class="flex font-inter sm:text-3xl text-black self-start font-medium text-[20px]">
                                {{ $quiz->quiztitle }}
                            </h1>
                            <p
                                class="font-poppins text-grey-fade text-[18px] sm:text-[20px] flex flex-col font-light self-start">
                                {{ $quiz->quizdesc }}
                            </p>
                        </div>
                        <!-- button -->

                        <div class="container mx-auto w-full px-6 text-center h-full flex flex-col justify-end gap-3">
                            <a class="font-inter text-black text-[12px] sm:text-[18px] mx-auto sm:py-1 hover:scale-105
                                      hover:text-green-111 border-2 rounded-[4px] sm:rounded-[6px] w-full"
                                href="/quiz/{{ $quiz->id }}/edit">
                                <span>Edit</span>
                            </a>
                            <div action="" type="button" onclick="togglekonfirm('modal-id'+{{ $quiz->id }})">
                                <button class="font-inter text-black text-[12px] sm:text-[18px] mx-auto sm:py-1 bg-red-redFF6767 hover:scale-105
                                      hover:text-white rounded-[4px] sm:rounded-[6px] w-full" href="">
                                    <span>Delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="hidden overflow-x-hidden m-auto overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                    id="modal-id{{ $quiz->id }}">
                    <div id="modal-id{{ $quiz->id }}" class="container m-auto flex flex-col justify-start py-5 z-10 px-5 w-full h-fit sm:w-[800px]
                                        rounded-[10px] shadow-card bg-white space-y-2 mx-4 sm:space-y-3">
                        <div class="flex flex-col px-2 self-center w-full">
                            <!-- text  -->
                            <div
                                class="w-full flex justify-center font-inter p-3 sm:text-3xl text-2xl text-[14px] text-black">
                                <p>Apakah anda yakin ingin menghapus quiz?</p>
                            </div>
                            <!-- button  -->
                            <div class="flex flex-row w-full gap-3 m-auto">
                                <div type="button" class="w-1/2" onkeydown="myFunction(event)"
                                    onclick="togglekonfirm('modal-id'+{{ $quiz->id }})">
                                    <button
                                        class="font-inter text-black text-[12px] sm:text-[18px] mx-auto sm:py-1 hover:scale-105
                                      hover:text-green-111 border-2 rounded-[4px] sm:rounded-[6px] h-fit py-2 px-3 w-full">Batal</button>
                                </div>
                                <div type="button" class="w-1/2">
                                    <form action="/quiz/{{ $quiz->id }}" method="post">
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
                <!-- js modal -->
                <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-{{ $quiz->id }}-backdrop"></div>
                <div class="hidden opacity-25 my-auto fixed inset-0 z-40 bg-black" id="modal-id{{ $quiz->id }}-backdrop">
                </div>
                <script type="text/javascript">
                    var modal = document.getElementById(modal + {{ $quiz->id }});
                    function toggleModal(modalID) {
                        document.getElementById(modalID).classList.toggle("hidden");
                        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                        document.getElementById(modalID).classList.toggle("flex");
                        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                        event.preventDefault();
                    }
                    function togglekonfirm(modalID) {
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

    <!-- js modal -->

    <div class=" py-10 flex mx-auto flex-row space-x-2 justify-center" href="#home">
        {{ $quizs->links() }}
    </div>
</section>
@endsection