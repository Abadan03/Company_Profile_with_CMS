@extends('layout.main')

@section('title', 'About - Solusi Energi Berkelanjutan')

@section('content')
    {{-- Title --}}
    <section class="relative bg-gray-800 h-60 flex items-center px-6 lg:px-28 -mt-[120px]">
        <img src="{{ asset('assets/bg-uni.webp') }}" alt="Container Yard"
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative container">
            <h1 class="text-5xl text-white mt-20">Berita & Artikel</h1>
        </div>
    </section>

    <div class="w-full h-6 bg-orange-400"></div>


@endsection
