@extends('layout.main')

@section('title', 'Gallery - Solusi Energi Berkelanjutan')

@section('content')
    <section class="relative bg-gray-800 h-60 flex items-center px-6 lg:px-28 -mt-[120px]">
        <img src="{{ asset('assets/bg-uni.webp') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative container">
            <h1 class="text-5xl text-white mt-20">Galeri</h1>
        </div>
    </section>

    <div class="w-full h-6 bg-orange-400"></div>
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Video</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    {{-- Item Video 1 --}}
                    <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/_a8N2hnf2O0?si=VtGEOevT2MkdohJq"
                            title="YouTube video player 1" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>

                    {{-- Item Video 2 --}}
                    <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/LmZD-TU96q4?si=Msumwo265XutTqrM"
                            title="YouTube video player 2" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>

                </div>
            </div>

            <div class="mt-16">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Foto</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    @for ($i = 0; $i < 3; $i++)
                        <a href="#" class="group block aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('assets/layanan/l3.png') }}"
                                alt="Foto Galeri {{ $i + 1 }}"
                                class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-105">
                        </a>
                    @endfor
                </div>
            </div>

        </div>
    </section>
@endsection
