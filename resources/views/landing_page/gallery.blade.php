@extends('layout.main')

@section('title', 'Gallery - RAJAWALI CHAKTI UTAMA')

@section('content')
    <section class="relative bg-gray-800 h-48 lg:h-60 flex items-center px-6 lg:px-28 -mt-[120px]">
        <img src="{{ asset('assets/bg-uni.webp') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative container">
            <h1 class="text-2xl lg:text-5xl text-white mt-28 lg:mt-20">Galeri</h1>
        </div>
    </section>

    <div class="w-full h-6 bg-orange-400"></div>

    {{-- <section class="bg-gray-50 py-16 px-6 lg:px-20">
        <div class="container mx-auto px-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Video</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    Item Video 1
                    <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/_a8N2hnf2O0?si=VtGEOevT2MkdohJq"
                            title="YouTube video player 1" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>

                    Item Video 2
                    <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/LmZD-TU96q4?si=Msumwo265XutTqrM"
                            title="YouTube video player 2" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    <section class="bg-white py-16 px-6 lg:px-20">
        <div class="container justify-center mx-auto px-4 align-middle">

            <h2 class="text-2xl font-bold text-gray-800 mb-6">Foto</h2>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 justify-center align-middle">

                {{-- Kiri: 2 foto berdampingan --}}
                {{-- 1. Diubah dari `grid grid-cols-2` menjadi `flex` --}}
                <div class="lg:col-span-3 flex gap-6 h-full">

                    <a href="#" class="group block w-full max-h-[500px] rounded-xl overflow-hidden shadow-lg">
                        {{-- 2. Dihapus `div` pembungkus `aspect-[16/9]` agar tinggi bisa fleksibel --}}
                        <img src="{{ asset('assets/galeri/g1.png') }}" alt="Foto Galeri 1"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        {{-- 3. Ditambahkan `h-full` --}}
                    </a>

                    <a href="#" class="group block w-full max-h-[500px] rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ asset('assets/galeri/g2.png') }}" alt="Foto Galeri 2"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        {{-- 3. Ditambahkan `h-full` --}}
                    </a>
                </div>

                {{-- Kanan: 2 foto bertumpuk (Tidak ada perubahan di sini) --}}
                <div class="grid grid-rows-2 gap-6">
                    <a href="#" class="group block rounded-xl overflow-hidden shadow-lg">
                        <div class="aspect-[16/12]">
                            <img src="{{ asset('assets/galeri/g3.png') }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        </div>
                    </a>
                    <a href="#" class="group block rounded-xl overflow-hidden shadow-lg">
                        <div class="aspect-[16/12]">
                            <img src="{{ asset('assets/galeri/g4.png') }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


@endsection
