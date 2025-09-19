@extends('layout.main')

@section('title', 'Home - Solusi Energi Berkelanjutan')

@section('content')
    {{-- Hero Section --}}
    <section class="relative bg-gray-800 h-screen flex items-center lg:px-28 -mt-[120px]">
        <img src="{{ asset('assets/bg-home.png') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">

        <div class="relative container mx-auto px-6 lg:px-20">
            <h1 class="text-white text-4xl lg:text-5xl font-bold leading-tight">{{ $hero->title }}</h1>
            <p class="text-white text-lg my-8 max-w-2xl">
                {{ $hero->content }}
            </p>
            <a href="#"
                class="text-white inline-flex items-center space-x-3 text-lg hover:text-orange-400 transition-colors">
                <span>{{ __('Selengkapnya') }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <path d="m12 16 4-4-4-4" />
                    <path d="M8 12h8" />
                </svg>
            </a>
        </div>
    </section>

    <div class="w-full h-6 bg-orange-400"></div>

    {{-- Section 1 --}}
    <section class="flex flex-col lg:flex-row items-center justify-between gap-10 my-24 lg:px-20">
        <div class="lg:w-1/2 text-center lg:text-left">
            <h2 class="text-2xl font-bold mb-3">Compressed Natural Gas (CNG)</h2>
            <p class="text-sm leading-relaxed">
                CNG merupakan salah satu sumber energi alternatif yang disimpan dalam tekanan tinggi
                dan mulai banyak digunakan sebagai bahan bakar industri dan kendaraan.
                CNG dapat mengurangi emisi Karbondioksida (CO<sub>2</sub>) hingga mencapai 30%,
                emisi Karbon Monoksida (CO) hingga 90% dan Nitrogen Oksida hingga 95%.
            </p>
        </div>

        <div class="lg:w-1/2 flex justify-center">
            <div class="w-full max-w-[530px] aspect-video">
                <iframe class="w-full h-full rounded-lg shadow-md"
                    src="https://www.youtube.com/embed/_a8N2hnf2O0?si=VtGEOevT2MkdohJq" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    {{-- Section 2 --}}
    <section class="container mx-auto px-5 lg:px-20 py-20 bg-[#F4F4F4]">
        <h2 class="text-2xl font-semibold text-center pb-12">Keunggulan Menggunakan CNG</h2>

        {{-- Grid untuk menampung semua item keunggulan --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 mt-12">

            <div class="flex flex-col items-center text-center">
                <div class="w-28 h-28 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                    <img src="{{ asset('assets/icons/leaf.webp') }}" class="w-16 h-16" alt="">
                </div>
                <p class="mt-4 font-medium text-gray-700">Bahan bakar yang ramah lingkungan dan bersih</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="w-28 h-28 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                    <img src="{{ asset('assets/icons/speedo.webp') }}" class="w-16 h-16" alt="">
                </div>
                <p class="mt-4 font-medium text-gray-700">Menghasilkan gas emisi yang rendah</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="w-28 h-28 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                    <img src="{{ asset('assets/icons/receipt.webp') }}" class="w-16 h-16" alt="">
                </div>
                <p class="mt-4 font-medium text-gray-700">Investasi yang murah dan tahan lama</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="w-28 h-28 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                    <img src="{{ asset('assets/icons/clean.webp') }}" class="w-16 h-16" alt="">
                </div>
                <p class="mt-4 font-medium text-gray-700">Mesin produksi lebih bersih</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="w-28 h-28 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                    <img src="{{ asset('assets/icons/protect.webp') }}" class="w-16 h-16" alt="">
                </div>
                <p class="mt-4 font-medium text-gray-700">Bahan bakar yang aman di banding bahan bakar lain.</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="w-28 h-28 bg-orange-500 rounded-full flex items-center justify-center shadow-md">
                    <img src="{{ asset('assets/icons/hand.webp') }}" class="w-16 h-16" alt="">
                </div>
                <p class="mt-4 font-medium text-gray-700">Biaya produksi lebih hemat hingga 30-40%</p>
            </div>
        </div>
    </section>

    {{-- Section 3 --}}
    <section class="container mx-auto px-5 lg:px-20 pt-20">
        <h2 class="text-3xl pb-5">Mother Station</h2>
        <p class="text-md mb-8">
            Kami menyediakan fasilitas lengkap mulai dari proses kompresi gas alam,
            manufaktur tabung CNG, hingga instalasi jaringan pipa, <br> yang didukung
            layanan konsultasi energi profesional untuk memastikan efisiensi dan keamanan.
        </p>

        <div class="w-full h-96 overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/mf-station.png') }}" alt="Mother Station" class="w-full h-full object-cover">
        </div>
    </section>

    {{-- Section 4 --}}
    <section class="container mx-auto px-5 lg:px-20 pt-10 mb-20">
        <h2 class="text-3xl pb-5">Pipeline Infrastructure</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="relative overflow-hidden rounded-xl group shadow-lg">
                <img src="{{ asset('assets/infra.png') }}" alt="Metering System"
                    class="w-full h-64 object-cover transform transition-transform duration-500 group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

                <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center text-white">
                    <span class="text-lg font-medium">Metering System</span>

                    <span
                        class="w-9 h-9 flex items-center justify-center rounded-full border border-white/50 bg-white/10 backdrop-blur-sm transition-transform group-hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                        </svg>
                    </span>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-xl group shadow-lg">
                <img src="{{ asset('assets/infra1.png') }}" alt="Metering Regulating Station"
                    class="w-full h-64 object-cover transform transition-transform duration-500 group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

                <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center text-white">
                    <span class="text-lg font-medium">Metering Regulating Station</span>
                    <span
                        class="w-9 h-9 flex items-center justify-center rounded-full border border-white/50 bg-white/10 backdrop-blur-sm transition-transform group-hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                        </svg>
                    </span>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-xl group shadow-lg">
                <img src="{{ asset('assets/infra2.png') }}" alt="Pressure Reducing System"
                    class="w-full h-64 object-cover transform transition-transform duration-500 group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

                <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center text-white">
                    <span class="text-lg font-medium">Pressure Reducing System</span>
                    <span
                        class="w-9 h-9 flex items-center justify-center rounded-full border border-white/50 bg-white/10 backdrop-blur-sm transition-transform group-hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                        </svg>
                    </span>
                </div>
            </div>

        </div>
    </section>

    {{-- Section 5 --}}
    <section class="bg-white py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-medium text-center mb-10">Klien Kami</h2>
            {{-- LEFT --}}
            <div class="relative w-full overflow-hidden mb-8">
                <div class="marquee-track marquee-left">
                    @foreach ($clients as $client)
                        <div class="flex-shrink-0 mx-8 flex items-center justify-center">
                            <img src="{{ asset($client['logo']) }}" alt="{{ $client['name'] }}" class="max-h-24 w-auto">
                        </div>
                    @endforeach
                  {{-- Dari main --}}
                    {{-- duplikat sekali lagi --}}
                    @foreach ($clients as $client)
                        <div class="flex-shrink-0 mx-8 flex items-center justify-center">
                            <img src="{{ asset($client['logo']) }}" alt="{{ $client['name'] }}" class="max-h-24 w-auto">
                        </div>
                    @endforeach
                </div>
            </div>


                </div>
            </div>

            {{-- RIGHT --}}
            <div class="relative w-full overflow-hidden mb-8">
                <div class="marquee-track marquee-right">
                    {{-- Looping dari controller brok --}}
                    @foreach (array_merge($clients, $clients) as $client)
                        <div class="flex-shrink-0 mx-8 flex items-center justify-center">
                            <img src="{{ asset($client['logo']) }}" alt="{{ $client['name'] }}"
                                class="max-h-24 w-auto">
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    {{-- Section 6 --}}
    <section class="py-16 lg:mx-20">
        <div class="container mx-auto px-4">
            {{-- Header Section --}}
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800">Article</h2>
                <a href="#"
                    class="group flex items-center space-x-2 text-orange-500 font-semibold transition-colors hover:text-orange-600">
                    <span>Selengkapnya</span>
                    <div
                        class="w-8 h-8 rounded-full border-2 border-orange-500 flex items-center justify-center transition-transform group-hover:translate-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                        </svg>
                    </div>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8">
                {{-- Looping -> iso mok jupuk teko controller langsung (kyk section 5) --}}
                @for ($i = 0; $i < 6; $i++)
                    <a href="#"
                        class="block bg-white p-6 rounded-xl border border-gray-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        <div class="flex flex-col h-full">
                            {{-- Tanggal --}}
                            <p class="text-sm text-gray-500">
                                Berita <span class="mx-1">|</span> Senin, 23 September 2025
                            </p>

                            {{-- Judul --}}
                            <h3 class="mt-2 text-md font-bold text-gray-900 leading-tight line-clamp-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            </h3>

                            <hr class="my-4">

                            {{-- Artikel --}}
                            <p class="text-gray-600 text-sm flex-grow line-clamp-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                            </p>

                            <div class="mt-4 text-right">
                                <div
                                    class="inline-flex items-center justify-center w-9 h-9 rounded-full border-2 border-orange-500 text-orange-500 transition-colors group-hover:bg-orange-500 group-hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </section>

    {{-- Section 7 --}}
    <section class="relative bg-gray-800 h-96">
        <img src="{{ asset('assets/bg-home1.webp') }}"
            alt="CNG Transportation" class="absolute inset-0 w-full h-full object-cover">

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
