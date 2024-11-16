<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag n drop</title>
    @vite('resources/css/app.css')
</head>

<body class="container sm:w-[1440px] sm:h-[1024px] m-auto gap-5">
    <form id="myform" action="{{route('showdndvalid', [$quiz, $student, $dnd->id])}}" method="POST">
        @csrf
        <div class="container h-fit sm:w-[1280px] sm:h-[960px] px-3 pt-[32px] flex flex-col space-y-[20px]">
            <div class="w-[50px] h-[50px]">
                <a href="#back">
                    <img src="pictures/back button.png" alt="">
                </a>
            </div>

            <div class="container flex-row w-full sm:h-[426px] space-y-[10px] sm:space-x-[20px] flex sm:flex-row">
                <!-- soal -->
                <div class="container bg-gray-300 p-10 shadow-card rounded-xl flex-col flex w-full h-fit gap-10">
                    @foreach ($dnd->matchinganswer as $item)
                        <div class="text-lg flex sm:text-xl sm:m-[10px] w-full justify-between ">
                            <h1 class="text-2xl sm:text-4xl">{{ $item->question }}</h1>
                            <input id="drop1" name="cok"
                                class="bg-white outline-2 m-[10px] flex border-black border-2 w-[200px] h-[40px]"
                                ondrop="drop(event)" ondragover="allowDrop(event)">
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- area jawaban -->
            <div class="container justify-center  mx-auto sm:w-[400px] h-fit flex flex-wrap gap-5">
                @foreach ($dnd->matchinganswer as $tanya)
                    <div id="drag{{ $tanya->matchingansweranswer->id }}" ondrop="drop(event)" ondragover="allowDrop(event)"
                        draggable="true" ondragstart="drag(event)" id="drag1"
                        class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card"
                        value="{{ $tanya->matchingansweranswer->answer }}">
                        {{ $tanya->matchingansweranswer->answer }}
                    </div>
                @endforeach
            </div>
            <!-- dnd 1 js -->
            <script>
                function allowDrop(ev) {
                    ev.preventDefault();
                }

                function drag(ev) {
                    ev.dataTransfer.setData("text", ev.target.id);
                }

                function drop(ev) {
                    ev.preventDefault();
                    var data = ev.dataTransfer.getData("text");
                    ev.target.appendChild(document.getElementById(data));
                }

                function checkAnswers() {
                    let score = 0;
                    const answers = document.getElementsByTagName("input");
                    for (let i = 0; i < answers.length; i++) {
                        if (answers[i].checked) {
                            score += parseInt(answers[i].value);
                        }
                    }
                    alert("Your score is: " + score);
                }
            </script>
        </div>
        <br>
        <!-- next/prev button -->
        <div class="container justify-end w-full sm:w-[1280px] sm:h-[104px] flex flex-col">
            <div class="flex flex-row justify-end rounded-md px-[120px] py-[20px]">
                <button type="button" class="justify-end rounded-sm self-center flex flex-row shadow-card px-3 py-1"
                    onclick="document.getElementById('myform').reset();">Reset</button>
            </div>
            <div class="container justify-end w-[335px] sm:w-[1280px] sm:h-[104px] flex flex-row">
                <a class="hover:brightness-110 hover:scale-105 justify-center mx-[20px] w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]"
                    href="#prev">
                    <img src="{{ URL('pictures/prev.png') }}" alt="">
                </a>
                <a class="hover:brightness-110 hover:scale-105 justify-center w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]"
                    href="#next">
                    <button class="submit-button" type="submit">
                        <img src="{{ URL('pictures/next.png') }}" alt="">
                    </button>
                </a>
            </div>
        </div>
    </form>
</body>

</html>