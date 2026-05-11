<section class="bg-gradient-to-b from-white to-blue-50 border-t border-blue-100 mt-16">
    
    <footer class="max-w-7xl mx-auto px-6">

        <!-- TOP -->
        <div class="py-10 grid md:grid-cols-3 gap-10 items-start text-blue-900">

            <!-- LOGO -->
            <div class="flex justify-center md:justify-start">
                <img 
                    src="{{ asset('img/Logo-Retina-FKIK-vertical.png') }}" 
                    class="w-44 md:w-52"
                >
            </div>

            <!-- ADDRESS -->
            <div class="text-center md:text-left">
                <h3 class="font-bold text-lg mb-3">
                    Alamat Universitas
                </h3>

                <p class="text-sm leading-relaxed text-blue-800/80">
                    Jl. S. Parman Kompleks RS Islam, Ps. Lama,
                    Kec. Banjarmasin Tengah, Kota Banjarmasin,
                    Kalimantan Selatan 70114
                </p>
            </div>

            <!-- CONTACT -->
            <div class="text-center md:text-right">

                <h3 class="font-bold text-lg mb-3">
                    Kontak Universitas
                </h3>

                <div class="flex flex-col gap-3 items-center md:items-end">

                    <div class="flex items-center gap-2 bg-blue-100 border border-blue-200 rounded-xl px-4 py-2 text-sm shadow-sm w-40">
                        <i class="ri-phone-fill text-blue-700"></i>
                        <span>(555) 802-1234</span>
                    </div>

                    <div class="flex items-center gap-2 bg-blue-100 border border-blue-200 rounded-xl px-4 py-2 text-sm shadow-sm w-40">
                        <i class="ri-mail-fill text-blue-700"></i>
                        <span>fkik@umbjm.ac.id</span>
                    </div>

                </div>

            </div>

        </div>

        <!-- BOTTOM -->
        <div class="border-t border-blue-100 py-5 flex flex-col md:flex-row items-center justify-between gap-4">

            <!-- COPYRIGHT -->
            <div class="text-sm text-blue-900 font-medium text-center md:text-left">
                © {{ date('Y') }} UM Banjarmasin — Fakultas Keperawatan dan Ilmu Kesehatan
            </div>

            <!-- SOCIAL -->
            <div class="flex items-center gap-4 text-xl text-blue-700">

                <a href="#" class="hover:text-blue-500 hover:-translate-y-1 transition">
                    <i class="ri-facebook-fill"></i>
                </a>

                <a href="#" class="hover:text-sky-400 hover:-translate-y-1 transition">
                    <i class="ri-twitter-fill"></i>
                </a>

                <a href="#" class="hover:text-pink-500 hover:-translate-y-1 transition">
                    <i class="ri-instagram-fill"></i>
                </a>

                <a href="#" class="hover:text-red-500 hover:-translate-y-1 transition">
                    <i class="ri-youtube-fill"></i>
                </a>

                <a href="#" class="hover:text-blue-800 hover:-translate-y-1 transition">
                    <i class="ri-linkedin-fill"></i>
                </a>

            </div>

        </div>

        <!-- BACK TO TOP -->
        <div 
            x-data="{ show: false }"
            x-init="window.addEventListener('scroll', () => show = window.scrollY > 300)"
            x-show="show"
            x-transition.opacity.scale
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="fixed bottom-6 right-6 z-50 cursor-pointer"
        >

            <div class="w-12 h-12 flex items-center justify-center bg-blue-600 text-white rounded-full shadow-xl hover:bg-blue-700 hover:-translate-y-1 transition">
                <i class="ri-arrow-up-line text-xl"></i>
            </div>

        </div>

    </footer>

</section>