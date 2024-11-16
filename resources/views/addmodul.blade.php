@extends('partials.index')

@section('container')
<section>
    <div class="container space-y-5 m-auto px-3 sm:w-[1440px] sm:h-[1024px] sm:space-y-16">
        <div
            class="container h-fit space-y-5 justify-start flex flex-col m-auto sm:w-[1280px] lg:h-[64px] lg:flex-row sm:space-y-0 sm:space-x-20">
            <div name="Title" class="h-fit w-full sm:w-[630px] space-y-3">
                <p class="">Judul Modul</p>
                <textarea required
                    class="outline-green-111 rounded border-2 p-2 w-full sm:w-[630px] border-gray-200 resize-none"
                    name="Title" id="Title" rows="2" placeholder="Masukkan Judul Modul"></textarea>
            </div>
        </div>
        <div class="m-auto sm:w-[1280px] h-[676px] flex flex-col justify-start space-y-5">
            <div name="Title" class="space-y-3">
                <p class="">Deskripsi Modul</p>
                <textarea class="w-full sm:w-[630px] outline-green-111 rounded border-2 p-2 border-gray-200 resize-none"
                    name="Title" id="Title" cols="80" rows="6" placeholder="Masukkan Judul Modul"></textarea>
            </div>
            <div name="add" class="space-y-3">
                <p class="">Pilih Thumbnail modul</p>
            </div>
            <div name="add" class="space-y-3">
                <p class="">Add File</p>

                <div id="file" class="flex flex-col">
                    <p><input type="file" name="image" id="file-modul" onchange="loadFile(event)"
                            style="display: none;"></p>
                    <p><label for="file-modul" style="cursor: pointer;">
                            <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Insert file.png" alt="pilgan">
                        </label></p>
                    <p><img id="filemodul" class="w-[300px] h-[200px]" /></p>
                    <script>
                    var loadFile = function(event) {
                        var image = document.getElementById('filemodul');
                        image.src = URL.createObjectURL(event.target.files[0]);
                    };
                    </script>
                </div>
            </div>
            <div class="container flex flex-row w-full sm:w-[1280px] h-[38px] justify-end">
                <button>
                    <img class="w-[130px] h-[38px] hover:scale-105" src="pictures/simpan.png" alt="">
                </button>
            </div>
        </div>
    </div>
</section>
@endsection