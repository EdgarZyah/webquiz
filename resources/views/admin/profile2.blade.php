@extends('admin.partials.index')

@section('container')
<section class="w-full flex flex-col items-center py-8 px-6 sm:px-12 bg-gray-50 min-h-screen">
    <div class="w-full max-w-3xl bg-white shadow-lg rounded-lg p-6 sm:p-8">
        <!-- Profile Header -->
        <div class="border-b pb-4 mb-6">
            <h1 class="text-2xl sm:text-3xl font-semibold text-gray-800">Profil</h1>
        </div>

        <!-- Profile Information -->
        <div class="space-y-6">
            <div class="flex items-start sm:items-center gap-4">
                <span class="text-lg font-medium text-gray-600">Nama&nbsp;:</span>
                <p class="text-lg text-gray-800 w-full sm:w-auto">{{ Auth::user()->name }}</p>
            </div>

            <div class="flex items-start sm:items-center gap-4">
                <span class="text-lg font-medium text-gray-600">Email&nbsp;:</span>
                <p class="text-lg text-gray-800 w-full sm:w-auto">{{ Auth::user()->email }}</p>
            </div>
        </div>

        <!-- Logout Button -->
        <div class="mt-8 flex justify-end">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit"
                    class="bg-green-111 px-6 py-2 rounded-lg font-medium text-white hover:bg-green-600 transition duration-300">
                    Logout
                </button>
            </form>
        </div>
    </div>
</section>
@endsection