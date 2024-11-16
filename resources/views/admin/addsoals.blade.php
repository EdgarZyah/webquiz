@extends('admin.partials.index')

@section('container')
<section>
    <form action="{{ $quiz->id ? route('quiz.update', $quiz->id) : route('quiz.store', $quiz->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @if ($quiz->id)
            @method('PUT')
        @endif
        <div class="container space-y-5 mx-auto px-3 w-full h-full  sm:space-y-16">
            <div
                class="container h-fit space-y-5 justify-start flex flex-col mx-auto sm:w-[1280px] sm:h-[64px] sm:flex-row sm:space-y-0 sm:space-x-20">
                <div name="Title" class="h-fit w-full sm:w-[630px] space-y-3">
                    <p class="">Judul Quiz</p>
                    <textarea required
                        class="outline-green-111 rounded border-2 p-2 w-full sm:w-[630px] border-gray-200 resize-none"
                        name="quiztitle" id="quiztitle" rows="2"
                        placeholder="Masukkan Judul Quiz">{{ old('quiztitle') ?? $quiz->quiztitle }}</textarea>
                </div>
                <div name="Title" class="h-fit w-full space-y-3 sm:w-1/2">
                    <p class="">Kategori</p>
                    <select id="id_category" name="category_id" required class="w-full sm:w-full select-none text-black-primary
                invalid:text-gray-400 focus:outline-green-111 rounded border-2 border-gray-200 box-border h-10 p-2 ">
                        <option disabled selected>Pilih Kategori</option>
                        @foreach ($categories as $cate)
                            <option value="{{ $cate->id }}">{{ $cate->category }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mx-auto sm:w-[1280px] h-[676px] flex flex-col justify-start space-y-5">
                <div name="Title" class=" flex flex-col">
                    <div>
                        <p class="">Deskripsi Quiz</p>
                        <textarea
                            class="w-full sm:w-[630px] outline-green-111 rounded border-2 p-2 border-gray-200 resize-none"
                            name="quizdesc" id="quizedesc" cols="80" rows="6"
                            placeholder="Masukkan Judul Quiz">{{ old('quiztitle') ?? $quiz->quizdesc }}</textarea>
                        <!-- thumbnail pict upload -->
                    </div>
                    <br>

                    <div id="file" class="flex flex-col">
                        <div name="add" class="space-y-3">
                            <input type="file" class="form-control-file" id="media" name="media" autofocus required
                                value="{{ old('media') }}" onchange="previewImage()">
                        </div>
                    </div>
                </div>
                <div class="container flex flex-row w-full sm:w-[1280px] h-[38px] justify-end">
                    <button type="submit" value="Submit">
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