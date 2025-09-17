<header id="main-header" class="sticky top-0 left-0 w-full z-50 lg:px-20 transition-colors duration-300">
    <nav class="container mx-auto px-6 py-4" aria-label="Main Navigation">
        <div class="hidden lg:flex items-center text-white text-sm my-4">
            <a href="#" class="hover:underline">English</a>
            <span class="mx-2">|</span>
            <a href="#" class="font-bold underline">Indonesia</a>
        </div>

        <div class="flex items-center justify-between">
            <ul class="hidden lg:flex items-baseline">
                <li><a href="#" class="text-white border-b-2 font-bold me-5">Beranda</a></li>
                <li><a href="#" class="text-white hover:border-b-2 me-5">Tentang Kami</a>
                </li>
                <li><a href="#" class="text-white hover:border-b-2 me-5">Produk &
                        Layanan</a></li>
                <li><a href="#" class="text-white hover:border-b-2 me-5">Struktur
                        Organisasi</a></li>
                <li><a href="#" class="text-white hover:border-b-2 me-5">Berita &
                        Artikel</a></li>
                <li><a href="#" class="text-white hover:border-b-2">Galeri</a></li>
            </ul>

            <div class="flex-1 flex lg:justify-end">
                <a href="#" class="flex items-center space-x-2">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo Icon">
                    <span class="text-white font-bold text-lg tracking-wider">PT. RAJAWALI BHAKTI UTAMA</span>
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
            <span class="text-white font-bold text-lg">PT. RAJAWALI BHAKTI UTAMA</span>
        </a>
        <button id="close-menu-button" class="text-orange-500" aria-label="Close menu">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div class="flex-grow p-4 space-y-2">
        <a href="#" class="flex justify-between items-center py-4 text-orange-500 font-bold">Beranda <svg
                class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
            </svg> </a>
        <a href="#" class="flex justify-between items-center py-4 text-white">Tentang Kami <svg
                class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
            </svg> </a>
        <a href="#" class="flex justify-between items-center py-4 text-white">Produk & Layanan <svg
                class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
            </svg> </a>
        <a href="#" class="flex justify-between items-center py-4 text-white">Struktur Organisasi <svg
                class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
            </svg> </a>
        <a href="#" class="flex justify-between items-center py-4 text-white">Berita & Artikel <svg
                class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
            </svg> </a>
        <a href="#" class="flex justify-between items-center py-4 text-white">Galeri <svg
                class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
            </svg> </a>
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

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('bg-gray-800/90', 'backdrop-blur-md', 'shadow-lg');
            } else {
                header.classList.remove('bg-gray-800/90', 'backdrop-blur-md', 'shadow-lg');
            }
        });
    });
</script>
