@extends('partials.index')

@section('container')
<section class="w-full flex flex-col items-center py-8 px-6 sm:px-12 bg-gray-50 min-h-screen">
    <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6 sm:p-8">
        <!-- Container for Biodata -->
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-8">
            <!-- Image Section -->
            <div class="w-full lg:w-1/2 flex justify-center">
                <img src="{{ URL('pictures/portrait.png') }}"
                    class="w-64 h-80 sm:w-96 sm:h-[500px] lg:w-[400px] lg:h-[600px] object-cover rounded-md shadow-md"
                    alt="me">
            </div>

            <!-- Biodata Section -->
            <div class="w-full lg:w-1/2 space-y-6">
                <h1 class="font-inter text-3xl sm:text-4xl lg:text-5xl text-gray-800 text-center lg:text-left">
                    Biodata
                </h1>

                <div class="space-y-4 text-center lg:text-left">
                    <p class="font-inter text-lg sm:text-xl text-gray-700">
                        <span class="font-semibold">Nama:</span> Sati, S.Pd.SD
                    </p>
                    <p class="font-inter text-lg sm:text-xl text-gray-700">
                        <span class="font-semibold">Jabatan:</span> Guru SDN Tambakreja 05 Cilacap Selatan
                    </p>
                    <p class="font-inter text-lg sm:text-xl text-gray-700">
                        <span class="font-semibold">Dosen Pembimbing:</span> Dr. Kuntoro, M.Hum
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection