@extends('layout.main')

@section('title', 'About - Solusi Energi Berkelanjutan')

@section('content')
    {{-- Title --}}
    <section class="relative bg-gray-800 h-60 flex items-center px-6 lg:px-28 -mt-[120px]">
        <img src="{{ asset('assets/bg-uni.webp') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative container">
            <h1 class="text-5xl text-white mt-20">Produk & Layanan</h1>
        </div>
    </section>

    <div class="w-full h-6 bg-orange-400"></div>

    {{-- Section 1 --}}
    <section class="bg-[#F4F4F4] overflow-hidden px-6 lg:px-28">
        <div class="container mx-auto px-4 pt-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="text-center lg:text-left">
                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 leading-tight">
                        Solusi Energi Bersih & Efisien
                    </h1>
                    <p class="mt-4 text-gray-600 leading-relaxed max-w-xl mx-auto lg:mx-0">
                        Kami menyediakan layanan berbasis Compressed Natural Gas (CNG) untuk mendukung industri dan
                        transportasi dengan biaya hemat, ramah lingkungan, serta teknologi modern. Dengan pengalaman dan
                        komitmen kami, setiap solusi energi yang ditawarkan selalu mengutamakan keamanan, efisiensi, dan
                        keberlanjutan.
                    </p>

                    <div class="mt-4 flex items-center justify-center lg:justify-start">

                        <div class="flex flex-col items-center text-center me-5">
                            <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                                <img src="{{ asset('assets/icons/leaf.webp') }}" class="w-10 h-10" alt="">
                            </div>
                        </div>

                        <div class="flex flex-col items-center text-center me-5">
                            <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                                <img src="{{ asset('assets/icons/speedo.webp') }}" class="w-10 h-10" alt="">
                            </div>
                        </div>

                        <div class="flex flex-col items-center text-center me-5">
                            <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                                <img src="{{ asset('assets/icons/receipt.webp') }}" class="w-10 h-10" alt="">
                            </div>
                        </div>

                        <div class="flex flex-col items-center text-center me-5">
                            <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                                <img src="{{ asset('assets/icons/clean.webp') }}" class="w-10 h-10" alt="">
                            </div>
                        </div>

                        <div class="flex flex-col items-center text-center me-5">
                            <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                                <img src="{{ asset('assets/icons/protect.webp') }}" class="w-10 h-10" alt="">
                            </div>
                        </div>

                        <div class="flex flex-col items-center text-center me-5">
                            <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                                <img src="{{ asset('assets/icons/hand.webp') }}" class="w-10 h-10" alt="">
                            </div>
                        </div>

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
    <section class="bg-gray-50 py-16 px-6 lg:px-28">
        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <a href="#" class="group relative block aspect-[4/3] rounded-2xl overflow-hidden shadow-lg">

                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110">

                        <div class="absolute inset-0 pointer-events-none">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <div class="absolute inset-0 shadow-[inset_0_-80px_60px_-20px_rgba(249,115,22,0.5)]"></div>
                        </div>

                        <div class="absolute inset-0 flex flex-col justify-end p-6">
                            <div class="flex items-end justify-between">
                                <h3 class="text-white text-xl font-bold w-3/4">
                                    {{ $service['title'] }}
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
        <img src="{{ asset('assets/bg-home1.webp') }}" alt="CNG Transportation"
            class="absolute inset-0 w-full h-full object-cover">

        {{-- Konten --}}
        <div class="relative container px-6 py-40 lg:px-20">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">

                <h2 class="text-white text-3xl font-bold tracking-widest text-center md:text-left">
                    Wujudkan Energi Bersih Bersama Kami
                </h2>

                <a href="#"
                    class="inline-block bg-orange-400 text-white font-bold text-lg px-8 py-2 rounded-md shadow-md transition-transform hover:scale-105 hover:bg-orange-500 flex-shrink-0">
                    Hubungi Kami
                </a>

            </div>
        </div>
    </section>
@endsection
