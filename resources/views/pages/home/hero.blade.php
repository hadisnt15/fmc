<section class="relative min-h-screen md:min-h-0 md:h-[750px] overflow-hidden">

    <!-- DESKTOP BACKGROUND -->
    <div class="absolute inset-0 -z-20 opacity-30">
        <img 
            src="{{ asset('img/bg-beranda4.jpg') }}" 
            class="w-full h-full object-cover object-center"
            alt="Background"
        >
    </div>

    <!-- DESKTOP OVERLAY -->
    <div class="hidden md:block absolute inset-0 bg-blue-300/60 -z-10"></div>


    <!-- MOBILE BACKGROUND -->
    <div class="absolute inset-0 md:hidden -z-20 overflow-hidden">
        <img 
            src="{{ asset('img/banner.png') }}" 
            class="w-full h-full object-cover translate-y-16"
        >
    </div>

    <!-- MOBILE OVERLAY -->
    <div class="absolute inset-0 md:hidden bg-blue-500/70 -z-10"></div>


    <!-- CONTENT -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 h-full">

        <!-- MOBILE HERO -->
        <div class="flex flex-col justify-center text-white h-full md:hidden py-6">

            <h1 class="font-bold leading-tight text-4xl">
                Menjadi Ruang Tumbuh <br> Akademik dan Profesional
            </h1>

            <p class="mt-4 text-white text-lg font-semibold">
                Menyediakan ruang informasi dan pembelajaran yang mendukung perkembangan akademik mahasiswa. Menjadi jembatan menuju prestasi, inovasi, dan masa depan profesional.
            </p>

            <div class="mt-6 w-full">
                <a class="bg-white text-blue-900 px-5 py-2.5 rounded-lg font-semibold block text-center">
                    Daftar Sekarang
                </a>
            </div>
            <div class="mt-2 w-full">
                <a class="border border-white px-5 py-2.5 rounded-lg w-full block text-center font-semibold">
                    Program Studi
                </a>
            </div>

        </div>

        <!-- DESKTOP HERO -->
        <div class="hidden md:grid md:grid-cols-2 items-center h-full gap-10">

            <div class="text-blue-900 max-w-xl">
                <h1 class="font-bold leading-tight text-4xl">
                    Menjadi Ruang Tumbuh Akademik dan Profesional
                </h1>

                <p class="mt-4 font-semibold">
                    Menyediakan ruang informasi dan pembelajaran yang mendukung perkembangan akademik mahasiswa. Menjadi jembatan menuju prestasi, inovasi, dan masa depan profesional.
                </p>

                <div class="mt-6 flex gap-4">
                    <a class="bg-white text-blue-900 px-6 py-3 rounded-lg font-semibold">
                        Daftar Sekarang
                    </a>

                    <a class="border border-white px-6 py-3 rounded-lg font-semibold">
                        Program Studi
                    </a>
                </div>
            </div>

            <div class="flex justify-center items-end h-full">
                <img 
                    src="{{ asset('img/banner.png') }}" 
                    class="h-[85%] object-contain"
                >
            </div>

        </div>

    </div>

</section>