<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rajawali Bhakti Utama')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            /* Properti ini bagus untuk smooth scroll secara umum */
            scroll-behavior: smooth;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('layout.components.navbar')

    <main>
        @yield('content')
    </main>

    @include('layout.components.footer')

    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-center space-y-3">

        <button id="scrollTopBtn" title="Kembali ke atas"
            class="hidden p-3 bg-orange-500 text-white rounded-lg shadow-lg transition-transform hover:scale-110 hover:bg-orange-600 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>

        <a href="https://wa.me/622183705680" target="_blank"
            rel="noopener noreferrer" title="Hubungi via WhatsApp"
            class="p-4 bg-yellow-400 text-white rounded-xl shadow-lg transition-transform hover:scale-110 hover:bg-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.886-.001 2.269.655 4.505 1.905 6.385l-1.292 4.72zm7.04-3.466c-.197-.099-1.17-.578-1.353-.646-.182-.068-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.31-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.329 1.12.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943s-.182-.133-.38-.232z" />
            </svg>
        </a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const scrollTopBtn = document.getElementById('scrollTopBtn');

            if (scrollTopBtn) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 300) {
                        scrollTopBtn.classList.remove('hidden');
                    } else {
                        scrollTopBtn.classList.add('hidden');
                    }
                });

                // Fungsi untuk scroll ke atas saat tombol diklik
                scrollTopBtn.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>
</body>

</html>
