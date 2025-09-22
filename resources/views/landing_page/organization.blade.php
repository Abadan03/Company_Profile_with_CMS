@extends('layout.main')

@section('title', 'Organizations - RAJAWALI CHAKTI UTAMA')

@section('content')
    {{-- Title --}}
    <section class="relative bg-gray-800 h-60 flex items-center px-6 lg:px-28 -mt-[120px]">
        <img src="{{ asset('assets/bg-uni.webp') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative container">
            <h1 class="text-5xl text-white mt-20">Struktur Organisasi</h1>
        </div>
    </section>

    <div class="w-full h-6 bg-orange-400"></div>

    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto rounded-xl shadow-lg overflow-hidden border border-gray-200">

                {{-- Header Kartu Oranye --}}
                <div class="bg-orange-400 p-4 flex items-center justify-center space-x-3 w-full">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo">
                    <h3 class="text-white font-bold text-xl tracking-wider">PT. RAJAWALI CHAKTI UTAMA</h3>
                </div>

                <div class="bg-gray-100 p-8 md:p-16">
                    <img src="{{ asset('assets/struktur.png') }}" alt="Struktur Organisasi PT Rajawali Chakti Utama"
                        class="w-full h-auto">
                </div>

            </div>
        </div>
    </section>

@endsection
