@extends('layout.main')

@section('title', 'Services - RAJAWALI CHAKTI UTAMA')

@section('content')
    {{-- Hero Section --}}
    <section class="relative bg-gray-800 h-52 lg:h-60 flex items-center px-6 lg:px-28 -mt-[120px]">
        <img src="{{ asset('assets/bg-detail.png') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative container mx-auto mt-28 lg:mt-20">
            <div class="flex items-center space-x-2">
                {{-- Ikon "Kembali" --}}
                <a href="{{ route('service') }}" class="flex-shrink-0 text-white transition-transform hover:scale-110">
                    <div class="w-10 h-10 rounded-full border-2 border-white flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                    </div>
                </a>

                {{-- Judul Halaman --}}
                <h1 class="text-lg sm:text-2xl lg:text-4xl text-white font-semibold">
                    {{ $service->title }}
                </h1>
            </div>
        </div>
    </section>

    {{-- Konten Utama --}}
    <section class="px-6 sm:px-10 lg:px-20 bg-white py-12 sm:py-16">
        <div class="container mx-auto px-0 sm:px-4">

            {{-- Deskripsi + CTA --}}
            <div class="flex flex-col md:flex-row justify-between items-start gap-6 md:gap-8 mb-10">

                <div class="max-w-3xl">
                    <p class="text-gray-600 leading-relaxed text-sm sm:text-base">
                        {{ $service->description }}
                    </p>
                </div>

                <div class="flex-shrink-0 w-full md:w-auto mt-4 md:mt-0">
                    <a href="#"
                        class="block text-center md:inline-block bg-orange-500 text-white font-semibold px-6 sm:px-8 py-3 rounded-lg shadow-md hover:bg-orange-600 transition-colors">
                        Hubungi Kami
                    </a>
                </div>
            </div>

            {{-- Gambar --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <div>
                    <img src="{{ asset($service->image) }}" alt="Ilustrasi Stasiun Gas"
                        class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-xl shadow-lg">
                </div>
                <div>
                    <img src="{{ asset($service->image) }}" alt="Ilustrasi Stasiun Gas"
                        class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-xl shadow-lg">
                </div>
            </div>

        </div>
    </section>
@endsection
