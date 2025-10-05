@extends('layout.main')

@section('title', 'Organizations - RAJAWALI CHAKTI UTAMA')

@section('content')
    {{-- Title --}}
    <section class="relative bg-gray-800 h-48 lg:h-60 flex items-center px-6 lg:px-28 -mt-[120px]">
        <img src="{{ asset('assets/bg-uni.webp') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative container">
            <h1 class="text-2xl lg:text-5xl text-white mt-28 lg:mt-20">{{ __('Navigation.Struktur_organisasi') }}</h1>
            {{-- <h1 class="text-2xl lg:text-5xl text-white mt-28 lg:mt-20">Direksi</h1> --}}
        </div>
    </section>

    <div class="w-full h-6 bg-orange-400"></div>

    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto rounded-xl shadow-2xl overflow-hidden border border-gray-200">

                {{-- Header Kartu Oranye --}}
                <div class="bg-orange-400 p-4 flex items-center justify-center space-x-3 w-full">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo">
                    <h3 class="text-white font-bold text-xl tracking-wider">PT. RAJAWALI CHAKTI UTAMA</h3>
                </div>

                <div class="p-6 text-center">
                    <h3 class="font-bold text-xl md:text-2xl tracking-wide text-gray-800">
                        M Farhan Firman Syah
                    </h3>
                    <div class="border-t-2 border-black my-4"></div>
                    <p class="justify-center align-middle"><span class=" font-semibold">Jabatan</span> : Direktur</p>
                </div>

                <div class="bg-gray-100 p-8">
                    <img src="{{ asset('assets/strukture.jpg') }}" alt="Struktur Organisasi PT Rajawali Chakti Utama"
                        class="w-full h-auto">
                </div>

                <div class="p-6">
                    <p class="text-center"> <q> Gas alam adalah napas bumi yang murni, hadir untuk memberi kehidupan dan menerangi peradaban. Ia mengajarkan kita arti kesabaran, karena energi besar lahir dari proses panjang. Seperti gas alam yang tak terlihat namun bermanfaat, begitu pula kehidupan: kebaikan sejati sering datang tanpa disadari, namun selalu meninggalkan cahaya, harapan, dan keseimbangan bagi sesama serta alam semesta. </q></p>
                </div>
            </div>
        </div>
    </section>

@endsection
