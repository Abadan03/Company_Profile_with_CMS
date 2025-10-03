<header id="main-header" class="sticky top-0 left-0 w-full z-50 lg:px-20 transition-colors duration-300">
    <nav class="container mx-auto px-6 py-4" aria-label="Main Navigation">
        <div class="hidden lg:flex items-center text-white text-sm my-4">
            <a href="{{ route('lang.switch', 'en') }}"
                class="{{ app()->getLocale() == 'en' ? 'font-bold underline' : 'hover:underline' }}">
                English
            </a>
            <span class="mx-2">|</span>
            <a href="{{ route('lang.switch', 'id') }}"
                class="{{ app()->getLocale() == 'id' ? 'font-bold underline' : 'hover:underline' }}">
                Indonesia
            </a>
        </div>


        <div class="flex items-center justify-between">
            <ul class="hidden lg:flex items-baseline">
                {{-- dekstop --}}
                <li>
                    <a href="{{ route('home') }}" @class([
                        'border-b-2 font-bold' => Route::is('home'),
                        'text-white hover:border-b-2 me-5 transition-colors',
                    ])>
                        {{ __('Beranda') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" @class([
                        'border-b-2 font-bold' => Route::is('about'),
                        'text-white hover:border-b-2 me-5 transition-colors',
                    ])>
                        {{ __('Tentang_kami') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('service') }}" @class([
                        'border-b-2 font-bold' => Route::is('service'),
                        'text-white hover:border-b-2 me-5 transition-colors',
                    ])>
                        {{ __('Produk_dan_Layanan') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('organization') }}" @class([
                        'border-b-2 font-bold' => Route::is('organization'),
                        'text-white hover:border-b-2 me-5 transition-colors',
                    ])>
                        {{ __('Struktur_organisasi') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('article') }}" @class([
                        'border-b-2 font-bold' => Route::is('article'),
                        'text-white hover:border-b-2 me-5 transition-colors',
                    ])>
                        {{ __('Berita_dan_Artikel') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('gallery') }}" @class([
                        'border-b-2 font-bold' => Route::is('gallery'),
                        'text-white hover:border-b-2 transition-colors',
                    ])>
                        {{ __('Galeri') }}
                    </a>
                </li>
            </ul>

            <div class="flex-1 flex lg:justify-end">
                <a href="#" class="flex items-center space-x-2">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo Icon">
                    <span class="text-white font-bold text-sm lg:text-lg tracking-wider">PT. RAJAWALI CHAKTI
                        UTAMA</span>
                </a>
            </div>

            <div class="lg:hidden flex items-center ml-4">
                <button id="mobile-menu-button" aria-expanded="false" aria-controls="mobile-menu"
                    class="text-white focus:outline-none" aria-label="Toggle menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
</header>

<div id="mobile-menu" class="hidden fixed inset-0 bg-[#141414] z-[100] flex-col transition-opacity duration-300">
    {{-- menu mobile  --}}
    <div class="flex items-center justify-between p-4 border-b border-gray-800">
        <a href="#" class="flex items-center space-x-2">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo Icon">
            <span class="text-white font-bold text-lg">PT. RAJAWALI CHAKTI UTAMA</span>
        </a>
        <button id="close-menu-button" class="text-orange-500" aria-label="Close menu">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div class="flex-grow p-4 space-y-2">
        <a href="{{ route('home') }}" @class([
            'flex justify-between items-center py-4',
            'text-orange-500 font-bold' => Route::is('home'),
            'text-white' => !Route::is('home'),
        ])>
            {{ __('Beranda') }}
            <svg class="w-5 h-5 {{ Route::is('home') ? 'text-orange-500' : 'text-gray-500' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>

        <a href="{{ route('about') }}" @class([
            'flex justify-between items-center py-4',
            'text-orange-500 font-bold' => Route::is('about'),
            'text-white' => !Route::is('about'),
        ])>
            {{ __('Tentang_kami') }}
            <svg class="w-5 h-5 {{ Route::is('about') ? 'text-orange-500' : 'text-gray-500' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>

        <a href="{{ route('service') }}" @class([
            'flex justify-between items-center py-4',
            'text-orange-500 font-bold' => Route::is('service'),
            'text-white' => !Route::is('service'),
        ])>
            {{ __('Produk_dan_Layanan') }}
            <svg class="w-5 h-5 {{ Route::is('service') ? 'text-orange-500' : 'text-gray-500' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>

        <a href="{{ route('organization') }}" @class([
            'flex justify-between items-center py-4',
            'text-orange-500 font-bold' => Route::is('organization'),
            'text-white' => !Route::is('organization'),
        ])>
            {{ __('Struktur_organisasi') }}
            <svg class="w-5 h-5 {{ Route::is('organization') ? 'text-orange-500' : 'text-gray-500' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>

        <a href="{{ route('article') }}" @class([
            'flex justify-between items-center py-4',
            'text-orange-500 font-bold' => Route::is('article'),
            'text-white' => !Route::is('article'),
        ])>
            {{ __('Berita_dan_Artikel') }}
            <svg class="w-5 h-5 {{ Route::is('article') ? 'text-orange-500' : 'text-gray-500' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>

        <a href="{{ route('gallery') }}" @class([
            'flex justify-between items-center py-4',
            'text-orange-500 font-bold' => Route::is('gallery'),
            'text-white' => !Route::is('gallery'),
        ])>
            {{ __('Galeri') }}
            <svg class="w-5 h-5 {{ Route::is('gallery') ? 'text-orange-500' : 'text-gray-500' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>

    <div class="p-4 mt-auto">
        <div class="flex items-center text-white text-sm">
            <a href="#" class="hover:underline">English</a>
            <span class="mx-2">|</span>
            <a href="#" class="font-bold underline">Indonesia</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMenuButton = document.getElementById('close-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        function toggleMenu(show) {
            if (show) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('flex');
                mobileMenuButton.setAttribute('aria-expanded', 'true');
            } else {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            }
        }

        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => toggleMenu(true));
        }
        if (closeMenuButton) {
            closeMenuButton.addEventListener('click', () => toggleMenu(false));
        }

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                if (!mobileMenu.classList.contains('hidden')) {
                    toggleMenu(false);
                }
            }
        });


        const header = document.getElementById('main-header');

        function handleHeaderScroll() {
            if (window.scrollY > 50) {
                header.classList.add('bg-gray-800/90', 'backdrop-blur-md', 'shadow-lg');
            } else {
                header.classList.remove('bg-gray-800/90', 'backdrop-blur-md', 'shadow-lg');
            }
        }

        window.addEventListener('scroll', handleHeaderScroll);

        handleHeaderScroll();
    });
</script>
