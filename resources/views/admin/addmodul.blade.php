@extends('admin.partials.index')

@section('container')
<section>
    <form action="/module" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container space-y-5 mx-auto px-3 w-full h-full  sm:space-y-16">
            <div
                class="container h-fit space-y-5 justify-start flex flex-col mx-auto sm:h-[64px] sm:flex-row sm:space-y-0 sm:space-x-20">
                <div name="Title" class="h-fit w-full sm:w-[630px] space-y-3">
                    <p class="">Judul Modul</p>
                    <textarea required
                        class="outline-green-111 rounded border-2 p-2 w-full sm:w-[630px] border-gray-200 resize-none"
                        name="moduletitle" id="moduletitle" cols="80" rows="2" placeholder="Masukkan Judul Modul"
                        autofocus required value="{{ old('moduletitle') }}"></textarea>
                </div>
            </div>
            <div class="m-auto h-[676px] flex flex-col justify-start space-y-10">
                <div name="Title" class="space-y-3">
                    <p class="">Deskripsi Modul</p>
                    <textarea
                        class="outline-green-111 rounded border-2 p-2 w-full sm:w-[630px] border-gray-200 resize-none"
                        name="moduledesc" id="moduledesc" cols="80" rows="6" placeholder="Masukkan Judul Modul"
                        autofocus required value="{{ old('moduledesc') }}"></textarea>
                </div>
                <div name="add" class="space-y-3">
                    <input type="file" class="form-control-file" id="media" name="media" autofocus required
                        value="{{ old('media') }}" onchange="previewImage()">
                </div>
                <div name="Title" class="space-y-3">
                    <p class="">Konten Modul (khusus modul berbentuk gambar)</p>
                    <textarea
                        class="outline-green-111 rounded border-2 p-2 w-full sm:w-[630px] border-gray-200 resize-none"
                        name="moduledescimg" id="moduledescimg" cols="80" rows="6" placeholder="Masukkan Judul Modul"
                        autofocus value="{{ old('moduledesc') }}"></textarea>
                </div>
                <div class="container flex flex-row h-[38px] justify-end">
                    <button type="submit">
                        <img class="w-[130px] h-[38px] hover:scale-105" src="{{ URL('Pictures/simpan.png') }}" alt="">
                    </button>
                </div>

            </div>
        </div>
    </form>
</section>
<script>
    function previewImage() {
        const gambar = document.querySelector('#exampleFormControlFile1');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);
        oFReader.onload = function (OFREvent) {
            imgPreview.src = OFREvent.target.result;
        }
    }
</script>
@endsection