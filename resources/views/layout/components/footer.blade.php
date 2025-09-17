<svg class="hidden">
    <symbol id="icon-phone" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
            d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5h-1.5A13.5 13.5 0 012 3.5z"
            clip-rule="evenodd" />
    </symbol>
    <symbol id="icon-mail" viewBox="0 0 20 20" fill="currentColor">
        <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
        <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
    </symbol>
</svg>


<footer class="bg-[#3A3A3A] text-gray-300 font-sans">
    <div class="container mx-auto px-6 lg:px-20 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <div class="md:col-span-2 lg:col-span-1">
                <div class="flex items-center space-x-1 mb-2">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo Icon">
                    <span class="text-white font-bold text-xl tracking-wider">PT. RAJAWALI CHAKTI UTAMA</span>
                </div>
                <p class="text-sm italic ml-1">for remarkable advancement</p>

                <div class="mt-6 space-y-4 text-sm leading-relaxed">
                    <p>
                        <strong class="text-white">Office:</strong><br>
                        Jl. Jatinegara Barat 1 No.5-6, RT.2/RW.4, Bali Mester, Kecamatan Jatinegara, Kota Jakarta Timur,
                        Daerah Khusus Ibukota, Jakarta 13310
                    </p>
                    <p>
                        <strong class="text-white">Cooperation Hub:</strong><br>
                        Jl. Salihara No.41A, RT.1/RW.3, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota, Jakarta
                        12520
                    </p>
                </div>

                <div class="mt-8 space-y-3 text-sm">
                    <a href="tel:02183705680" class="flex items-center space-x-3 hover:text-white">
                        <svg class="w-5 h-5">
                            <use href="#icon-phone"></use>
                        </svg>
                        <span>021 8370 5680</span>
                    </a>
                    <a href="mailto:info@citosidinc.id" class="flex items-center space-x-3 hover:text-white">
                        <svg class="w-5 h-5">
                            <use href="#icon-mail"></use>
                        </svg>
                        <span>info@citosidinc.id</span>
                    </a>
                </div>
            </div>

            <div class="flex space-x-16">
                <div>
                    <h4 class="font-bold text-white mb-4">Tentang</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white hover:underline">Kebijakan Layanan</a></li>
                        <li><a href="#" class="hover:text-white hover:underline">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Layanan</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white hover:underline">Compressed Natural Gas</a></li>
                        <li><a href="#" class="hover:text-white hover:underline">Mother Station</a></li>
                    </ul>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-white">Ikuti kami dan dapatkan info menarik!</h4>
                <div class="flex items-center space-x-4 mt-4">
                    <a href="#" class="hover:text-white m-0">
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/whatsapp--v1.png" alt="whatsapp"
                            class="w-6 h-6" />
                    </a>
                    <a href="#" class="hover:text-white">
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new--v1.png" alt="instagram"
                            class="w-6 h-6" />
                    </a>
                    <a href="#" class="hover:text-white m-0">
                        <svg class="w-6 h-6">
                            <use href="#icon-mail"></use>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-white m-0">
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png" alt="linkedin"
                            class="w-6 h-6" />
                    </a>
                    <a href="#" class="hover:text-white m-0">
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/tiktok--v1.png" alt="tiktok"
                            class="w-6 h-6" />
                    </a>
                </div>

                <hr class="border-gray-500 my-6">

                <h4 class="font-bold text-white">Dapatkan Informasi Terbaru Dari Kami!</h4>
                <form class="flex mt-4">
                    <input type="email" placeholder="Email Anda"
                        class="w-full rounded-l-md border-0 bg-gray-200 text-gray-800 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                        required>
                    <button type="submit"
                        class="bg-orange-600 text-white font-bold px-5 py-2 rounded-r-md hover:bg-orange-700 transition-colors">Berlangganan</button>
                </form>
            </div>
        </div>
    </div>
</footer>
