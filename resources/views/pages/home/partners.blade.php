<section class="relative overflow-hidden px-6 py-8">
    <div class="max-w-7xl mx-auto">
        <div class="py-2">
            <h1 class="text-center font-bold text-blue-900 text-2xl">Mitra Kerja Sama Fakultas</h1>
        </div>
        <div class="py-2">
            <p class="text-center text-blue-800 text-lg">
                Fakultas Keperawatan dan Ilmu Kesehatan UM Banjarmasin berkerjasama dengan berbagai pihak baik lembaga bahasa, lembaga dan institusi pendidikan. Selain itu UM Banjarmasin juga berkerjasama dengan Universitas luar negeri dalam hal pertukaran mahasiswa asing.
            </p>
        </div>
        <div class="relative w-full overflow-hidden before:absolute before:left-0 before:top-0 before:h-full before:w-20 before:bg-gradient-to-r before:from-white before:to-transparent after:absolute after:right-0 after:top-0 after:h-full after:w-20 after:bg-gradient-to-l after:from-white after:to-transparent">
            <!-- TRACK -->
            <div class="flex w-max animate-marquee gap-10 h-15">         
                <!-- LIST LOGO (ulang 2x biar infinite) -->
                @for ($i = 1; $i <= 17; $i++)
                    <div class="p-3 bg-white rounded-xl">
                        <img src="{{ asset('img/partners/mitra'.$i.'.png') }}" 
                            class="h-12 hover:scale-110 opacity-60 hover:opacity-100 transform duration-300 hover:-translate-y-1 object-contain transition">
                    </div>
                @endfor

                @for ($i = 1; $i <= 17; $i++)
                    <div class="p-3 bg-white rounded-xl">
                        <img src="{{ asset('img/partners/mitra'.$i.'.png') }}" 
                            class="h-12 hover:scale-110 opacity-60 hover:opacity-100 transform duration-300 hover:-translate-y-1 object-contain transition">
                    </div>
                @endfor

            </div>

        </div>

    </div>
</section>

<script>
    new Swiper('.swiper', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: { slidesPerView: 3 },
            768: { slidesPerView: 4 },
            1024: { slidesPerView: 5 },
        }
    });
</script>