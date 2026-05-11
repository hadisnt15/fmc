<section class="relative">

    <!-- WRAPPER TINGGI (INI KUNCINYA) -->
    <div class="h-[30vh] md:h-[40vh] relative">

        <!-- DESKTOP BG -->
        <div class="absolute inset-0 -z-20 opacity-30 hidden md:block">
            <img 
                src="{{ asset('img/bg-beranda4.jpg') }}" 
                class="w-full h-full object-cover object-[center_40%]"
            >
        </div>

        <!-- MOBILE BG -->
        <div class="absolute inset-0 -z-20 md:hidden">
            <img 
                src="{{ asset('img/bg-beranda4.jpg') }}" 
                class="w-full h-full object-cover object-[center_0%]"
            >
        </div>

        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-blue-300/60 -z-10"></div>

        <!-- TEXT -->
        <div class="absolute inset-0 flex items-center justify-center text-center px-6">
            <h1 class="top-[17vh] md:top-[20vh] absolute font-bold leading-tight text-xl md:text-5xl text-white md:text-blue-950/70">
                Berita dan Pengumuman
            </h1>
        </div>

    </div>

</section>