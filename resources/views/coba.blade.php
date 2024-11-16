<div class="flex flex-row justify-between">
    <p>Soal 1</p>
    <!-- button hapus -->
</div>
<textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[1280px] border-gray-200 resize-none"
    name="question" id="question" rows="1" placeholder="Masukkan Soal"></textarea>
<div class="space-y-5 w-full">



    <!--button tambah opsi -->
    <br><br>
    <button id="create-opsi">Tambahkan opsi</button>
    <!-- opsi -->
    <div id="tambah-opsi" class="flex flex-col w-full space-y-3">
        <p class="font-thin">Opsi 1</p>
        <label class="inline-flex items-center w-full">
            <input name="true" type="checkbox" class="accent-green-111 w-6 h-6 border-0 rounded-md focus:ring-0">
            <span class="ml-2 w-[1280px]" name="jawaban">
                <textarea required
                    class="outline-green-111 rounded border-2 p-2 w-[300px] sm:w-full border-gray-200 resize-none"
                    name="pilgan" id="pilgan" rows="1" placeholder="Masukkan jawaban"></textarea>
            </span>
            <button>
                <img src="" class="w-[20px] h-[25px]" alt="">
            </button>
        </label>
    </div>
    <script>
        const existingDiv = document.getElementById('tambah-opsi');
        const button = document.getElementById('create-opsi');

        button.addEventListener('click', () => {
            // Create a new div element
            const newDiv = document.createElement('div');

            // Copy the content from the existing div
            newDiv.innerHTML = existingDiv.innerHTML;

            // Append the new div to the body
            document.body.appendChild(newDiv);
            if
    });
    </script>
</div>