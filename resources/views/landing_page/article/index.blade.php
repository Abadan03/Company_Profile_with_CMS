@extends('layout.main')

@section('title', 'Articles - RAJAWALI CHAKTI UTAMA')

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

    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">

            <form action="{{ route('article') }}" method="GET" class="mb-10">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div>
                        <select name="category"
                            class="w-full rounded-xl border-0 bg-white shadow-sm py-3 px-4 focus:border-orange-500 focus:ring-orange-500">
                            <option value="">Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ request('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <select name="year"
                            class="w-full rounded-xl border-0 bg-white shadow-sm py-3 px-4 focus:border-orange-500 focus:ring-orange-500">
                            <option value="">Tahun</option>
                            {{-- Loop tahun di sini --}}
                        </select>
                    </div>

                    <div>
                        <select name="month"
                            class="w-full rounded-xl border-0 bg-white shadow-sm py-3 px-4 focus:border-orange-500 focus:ring-orange-500">
                            <option value="">Bulan</option>
                            {{-- Loop bulan di sini --}}
                        </select>
                    </div>

                    <div class="relative md:col-span-2">
                        <input type="text" name="search" placeholder="Cari..." value="{{ request('search') }}"
                            class="w-full rounded-xl border-0 bg-white shadow-sm py-3 pl-4 pr-10 focus:border-orange-500 focus:ring-orange-500">
                        <button type="submit"
                            class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-400 hover:text-orange-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>

            {{-- Grid Artikel --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse ($articles as $article)
                    <a href="#"
                        class="group bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1">

                        {{-- Gambar --}}
                        <div class="aspect-video">
                            <img src="{{ $article->thumbnail_url }}" alt="{{ $article->title }}"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        </div>

                        {{-- Konten --}}
                        <div class="p-5 flex flex-col">
                            <div class="flex justify-between text-sm text-gray-500">
                                <span>{{ $article->category->name }}</span>
                                <span>{{ $article->published_at->translatedFormat('l, d F Y') }}</span>
                            </div>

                            <h3 class="mt-2 text-base font-semibold text-gray-900 leading-snug">
                                {{ Str::limit($article->title, 60) }}
                            </h3>

                            <div class="mt-2 border-b border-gray-200"></div>

                            <p class="mt-1 text-sm text-gray-500 leading-relaxed">
                                {{ Str::limit($article->description, 90, '...') }}
                            </p>

                            <div class="mt-4 flex justify-end">
                                <div
                                    class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-orange-400 text-orange-400 transition group-hover:bg-orange-400 group-hover:text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5-5 5M6 12h12" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="md:col-span-2 lg:col-span-4 text-center py-16">
                        <p class="text-gray-500 text-lg">Tidak ada artikel yang ditemukan.</p>
                    </div>
                @endforelse
            </div>


            {{-- Pagination --}}
            <div class="mt-12 bg-white p-4 rounded-lg border border-gray-200">
                {{ $articles->links() }}
            </div>

        </div>
    </section>

@endsection
