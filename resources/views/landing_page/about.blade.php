@extends('layout.main')

@section('title', 'About - Solusi Energi Berkelanjutan')

@section('content')
    {{-- Title --}}
    <section class="relative bg-gray-800 h-60 flex items-center px-6 lg:px-28 -mt-[120px]">
        <img src="{{ asset('assets/bg-uni.webp') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative container">
            <h1 class="text-5xl text-white mt-20">Tentang Kami</h1>
        </div>
    </section>

    <div class="w-full h-6 bg-orange-400"></div>

    {{-- Section 1 --}}
    <section class="container mx-auto px-5 lg:px-28 py-20 bg-[#F4F4F4]">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('assets/profile.webp') }}" alt="Fasilitas PT Rajawali Chakti Utama"
                    class="w-full h-auto rounded-2xl shadow-lg">
            </div>

            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    PT Rajawali Chakti Utama
                </h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>
                        PT Rajawali Chakti Utama adalah perusahaan energi yang berfokus pada penyediaan solusi energi bersih
                        berbasis CNG (Compressed Natural Gas) di Indonesia. Dengan visi menjadi pemimpin pasar energi ramah
                        lingkungan, perusahaan ini berkomitmen menghadirkan layanan dan produk berkualitas tinggi yang
                        memenuhi kebutuhan pelanggan, sekaligus mendukung pembangunan berkelanjutan.
                    </p>
                    <p>
                        CNG yang ditawarkan lebih ramah lingkungan, mampu menekan emisi hingga 90% dan membantu efisiensi
                        biaya produksi hingga 30-40%, menjadikannya pilihan energi yang bersih, aman, dan hemat untuk
                        industri maupun transportasi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 2 --}}
    <section class="py-16 px-5 lg:px-28">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-orange-500 p-6">
                        <h3 class="text-white text-3xl font-bold text-center">Visi</h3>
                    </div>
                    <div class="bg-white p-8 flex-grow">
                        <ul class="space-y-5 list-disc list-inside text-gray-700">
                            <li>
                                Menjadi pemimpin pasar dalam penyediaan solusi energi bersih berbasis CNG di Indonesia,
                                dengan jaringan distribusi yang luas dan terpercaya.
                            </li>
                            <li>
                                Menjadi mitra energi yang terpercaya bagi pelanggan, dengan menyediakan produk dan layanan
                                berkualitas tinggi yang memenuhi kebutuhan dan harapan mereka.
                            </li>
                            <li>
                                Menjadi perusahaan energi yang bertanggung jawab secara sosial dan lingkungan, dengan
                                menerapkan praktik bisnis yang berkelanjutan dan berkontribusi pada pembangunan
                                berkelanjutan.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-orange-500 p-6">
                        <h3 class="text-white text-3xl font-bold text-center">Misi</h3>
                    </div>
                    <div class="bg-white p-8 flex-grow">
                        <ul class="space-y-5 list-disc list-inside text-gray-700">
                            <li>
                                Membangun stasiun pengisian (mother station) CNG yang strategis di sepanjang jalur
                                transportasi umum, serta menyediakan layanan purna jual yang cepat dan efisien.
                            </li>
                            <li>
                                Mengembangkan dan memperluas infrastruktur CNG yang modern dan efisien, guna memastikan
                                ketersediaan pasokan gas yang stabil dan terjangkau.
                            </li>
                            <li>
                                Membangun kemitraan strategis dengan berbagai pihak, termasuk pemerintah, pemasok, dan
                                pelanggan, untuk memperkuat posisi perusahaan di pasar.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-16 lg:px-28">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-10">
                Legalitas Perusahaan
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

                @foreach ($legal as $document)
                    <a href="{{ asset($document['logo']) }}" target="_blank" rel="noopener noreferrer"
                        class="block bg-white p-3 rounded-xl shadow-md hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                        <img src="{{ asset($document['logo']) }}" alt="Dokumen Legalitas {{ $document['name'] }}"
                            class="w-full h-auto object-cover rounded-lg">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
