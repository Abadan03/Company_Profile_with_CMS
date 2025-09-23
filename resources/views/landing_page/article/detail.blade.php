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

    <section class="bg-white py-12 px-6 lg:px-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-12">
                <article class="lg:col-span-2">
                    {{-- Breadcrumbs --}}
                    <nav class="text-sm text-gray-500 mb-4">
                        <a href="{{ route('article') }}" class="hover:underline">Berita & Artikel</a>
                        <span class="mx-2">></span>
                        <a href="{{ route('article') }}" class="hover:underline">Berita</a>
                        <span class="mx-2">></span>
                        <span class="text-gray-700">{{ $article->title }}</span>
                    </nav>

                    {{-- Judul Artikel --}}
                    <h1 class="text-4xl font-bold text-gray-900 leading-tight">
                        {{ $article->title }}
                    </h1>

                    {{-- Meta Info --}}
                    <p class="mt-2 text-sm text-gray-600">
                        Berita <span class="mx-2">|</span> Senin, 23 September 2025
                    </p>

                    {{-- Gambar Utama --}}
                    <img src="{{ asset($article->thumbnail_url) }}" alt="CNG Energi Berkelanjutan"
                        class="mt-6 w-full h-auto rounded-xl shadow-lg">

                    {{-- Isi Artikel --}}
                    <div class="prose lg:prose-lg max-w-none mt-8 text-gray-700 leading-relaxed">
                        <p>
                            <strong>Jakarta</strong> – {{ $article->description }}
                        </p>
                    </div>

                    {{-- Tags --}}
                    <div class="mt-8 flex items-center space-x-4">
                        <a href="#" class="text-sm text-orange-600 font-semibold hover:underline">#EnergiBersih</a>
                        <a href="#" class="text-sm text-orange-600 font-semibold hover:underline">#CNGIndonesia</a>
                        <a href="#" class="text-sm text-orange-600 font-semibold hover:underline">#TransisiEnergi</a>
                    </div>
                </article>

                <aside class="lg:col-span-1 mt-12 lg:mt-0">
                    <div class="sticky top-28">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Berita terkait</h2>
                        <div class="space-y-6">

                            {{-- Ambil semua artikel KECUALI yang sedang aktif, lalu pilih 2 secara acak --}}
                            @foreach ($allArticles->where('id', '!=', $article->id)->random(2) as $relatedArticle)
                                <a href="{{ route('article.show', $relatedArticle->id) }}"
                                    class="group block bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md hover:-translate-y-1">

                                    {{-- Gunakan data dari $relatedArticle --}}
                                    <img src="{{ asset($relatedArticle->thumbnail_url) }}"
                                        alt="{{ $relatedArticle->title }}" class="w-full h-32 object-cover">

                                    <div class="p-4">
                                        <p class="text-xs text-gray-500">
                                            {{ $relatedArticle->category->name }} |
                                            {{ $relatedArticle->published_at->translatedFormat('l, d F Y') }}
                                        </p>
                                        <h3 class="my-3 font-semibold text-gray-800 line-clamp-2">
                                            {{ $relatedArticle->title }}
                                        </h3>
                                        <hr>
                                        <p class="my-5 text-gray-600 line-clamp-2">
                                            {{ $relatedArticle->description }}
                                        </p>
                                        <div class="mt-4 text-right">
                                            <div
                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full border-2 border-orange-400 text-orange-400 transition-colors group-hover:bg-orange-400 group-hover:text-white">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M13 7l5 5-5 5M6 12h12"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
