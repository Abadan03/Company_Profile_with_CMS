@extends('layout.main')

@section('title', 'Services - RAJAWALI CHAKTI UTAMA')

@section('content')
    {{-- Title --}}
    <section class="relative bg-gray-800 h-48 lg:h-60 flex items-center px-6 lg:px-20 -mt-[120px]">
        <img src="{{ asset('assets/bg-uni.webp') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative container">
            <h1 class="text-2xl lg:text-5xl text-white mt-28 lg:mt-20">{{ __('Navigation.Produk_dan_Layanan') }}</h1>
        </div>
    </section>

    <div class="w-full h-6 bg-orange-400"></div>

    {{-- Section 1 --}}
    <section class="bg-[#F4F4F4] overflow-hidden px-6 lg:px-28">
        <div class="mx-auto px-4 pt-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div>
                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 leading-tight">
                        {{ __('P&D_tittle') }}
                    </h1>
                    <p class="mt-4 text-gray-600 leading-relaxed max-w-xl mx-auto lg:mx-0">
                        {{ __('P&D_desc') }}
                    </p>
                    <div class="mt-8 grid grid-cols-6 gap-4 place-items-start">
                        @foreach (['leaf', 'speedo', 'receipt', 'clean', 'protect', 'hand'] as $icon)
                            <div class="flex flex-col items-center text-center">
                                <div
                                    class="w-12 h-12 lg:w-16 lg:h-16 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                                    <img src="{{ asset("assets/icons/$icon.webp") }}" class="w-6 h-6 lg:w-8 lg:h-8"
                                        alt="{{ $icon }}">
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

                <div class=" justify-center lg:justify-end hidden lg:flex">
                    <img src="{{ asset('assets/cw.webp') }}" alt="Engineer with hard hat"
                        class="w-full max-w-md lg:max-w-lg h-auto">
                </div>

            </div>
        </div>
    </section>

    {{-- Section 2 --}}
    <section class="bg-gray-50 py-16 px-6 lg:px-20">
        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <a href="{{ route('service.show', ['service' => $service->id]) }}"
                        class="group relative block aspect-[4/3] rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ $service->image }}" alt="{{ $service->title }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110">

                        <div class="absolute inset-0 pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <div class="absolute inset-0 shadow-[inset_0_-80px_60px_-20px_rgba(249,115,22,0.5)]"></div>
                        </div>

                        <div class="absolute inset-0 flex flex-col justify-end p-6">
                            <div class="flex items-end justify-between">
                                <h3 class="text-white text-xl font-bold w-3/4">
                                    {{ $service->title }}
                                </h3>
                                <div
                                    class="w-9 h-9 rounded-full border-2 border-white/80 flex items-center justify-center transition-all duration-300 group-hover:bg-white/20 group-hover:scale-110 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>


    {{-- Section 3 --}}
    <section class="relative bg-gray-800 h-96">
        <img src="{{ asset('assets/mf-station.png') }}" alt="CNG Transportation"
            class="absolute inset-0 w-full h-full object-cover">

        {{-- Konten --}}
        <div class="relative container px-6 py-40 lg:px-20">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">

                <h2 class="text-white text-3xl backdrop-blur-2xl p-4 rounded-2xl shadow-2xl font-bold tracking-widest text-center md:text-left">
                    {{ __('Last_section') }}
                </h2>

                <a href="#"
                    class="inline-block bg-orange-400 text-white font-bold text-lg px-8 py-2 rounded-md shadow-md transition-transform hover:scale-105 hover:bg-orange-500 flex-shrink-0">
                    {{ __('Last_contact') }}
                </a>

            </div>
        </div>
    </section>
@endsection
