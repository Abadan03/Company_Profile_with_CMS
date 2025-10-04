@extends('layout.main')

@section('title', 'About - RAJAWALI CHAKTI UTAMA')

@section('content')
    {{-- Title --}}
    <section class="relative bg-gray-800 h-48 lg:h-60 flex items-center px-6 lg:px-28 -mt-[120px]">
        <img src="{{ asset('assets/bg-uni.webp') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative container">
            <h1 class="text-2xl lg:text-5xl text-white mt-28 lg:mt-20">{{ __('About_tittle') }}</h1>
        </div>
    </section>

    <div class="w-full h-6 bg-orange-400"></div>

    {{-- Section 1 --}}
    <section class="container mx-auto px-6 lg:px-20 py-20 bg-[#F4F4F4] mt-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('assets/ms.png') }}" alt="Fasilitas PT Rajawali Chakti Utama"
                    class="w-full md:min-h-[350px] object-fit rounded-2xl shadow-lg">
            </div>

            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    PT Rajawali Chakti Utama
                </h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>
                        {{ __('About_desc')}}
                    </p>
                    <p>
                        {{ __('About_desc2') }}
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
                    <div class="bg-orange-500 p-4 lg:p-6">
                        <h3 class="text-white text-3xl font-bold text-center">{{ __('About_vision') }}</h3>
                    </div>
                    <div class="bg-white p-8 flex-grow">
                        <ul class="space-y-5 list-disc list-inside text-gray-700">
                            <li>
                                {{ __('About_vision_details') }}
                            </li>
                            <li>
                                {{ __('About_vision_details2') }}
                            </li>
                            <li>
                                {{ __('About_vision_details3') }}
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-orange-500 p-6">
                        <h3 class="text-white text-3xl font-bold text-center">{{ __('About_mission') }}</h3>
                    </div>
                    <div class="bg-white p-8 flex-grow">
                        <ul class="space-y-5 list-disc list-inside text-gray-700">
                            <li>
                                {{ __('About_mission_details') }}
                            </li>
                            <li>
                                {{ __('About_mission_details2') }}
                            </li>
                            <li>
                               {{ __('About_mission_details3') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="bg-gray-100 py-16 lg:px-28">
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
    </section> --}}
@endsection
