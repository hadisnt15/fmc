<section>
    <header 
    x-data="{ scrolled: false, open: false }"
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)"
    class="fixed top-0 w-full z-50">

    <!-- WRAPPER -->
    <div 
        :class="scrolled 
            ? 'bg-white shadow-md' 
            : 'md:bg-white/30 bg-white backdrop-blur-md shadow-md'"
        class="transition-[background-color,backdrop-filter,box-shadow] duration-500 ease-out">

        <!-- TOPBAR -->
        <div class="md:block hidden">

            <div 
                x-show="!scrolled"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                class="max-w-7xl mx-auto px-6 py-1 flex items-center justify-between text-sm text-blue-900">

                <div class="flex gap-6">
                    <a>UNIVERSITAS</a>
                    <a>KARIR</a>
                    <a>ALUMNI</a>
                    <a>FAQS</a>
                </div>

                <div class="flex gap-6">
                    <a><i class="ri-phone-fill"></i> (+62) 511 742 2098</a>
                    <a><i class="ri-mail-fill"></i> faculty@corazon.ac.id</a>
                </div>

                <div class="flex gap-3 text-lg">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-twitter-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-youtube-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>

            </div>

        </div>




        <!-- MAIN NAVBAR -->
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- LOGO -->
            <div>
                <img src="{{ asset('img/corazon-2.png') }}" 
                     class="w-36 md:w-40">
            </div>

            <!-- DESKTOP MENU -->
            <nav class="hidden md:flex flex-[5] justify-center gap-12 text-blue-900 font-semibold">
                <a class="{{ request()->routeIs('home') ? 'border-b-2 border-blue-600 pb-1 text-blue-700' : 'hover:text-blue-600 transition' }}" href="/">Beranda</a>
                <a class="{{ request()->routeIs('profile') ? 'border-b-2 border-blue-600 pb-1 text-blue-700' : 'hover:text-blue-600 transition' }}" href="/profilFakultas">Profil Fakultas</a>
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                    <!-- BUTTON -->
                    <a href="{{ route('programs') }}" class="flex items-center gap-1 hover:text-blue-600 transition {{ request()->routeIs('program.show') || request()->is('programStudi') ? 'border-b-2 border-blue-600 pb-1 text-blue-700' : 'hover:text-blue-600' }}" >
                            Program Studi <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <!-- DROPDOWN -->
                    <div x-show="open" x-transition class="absolute top-full left-0 mt-2 w-64 bg-white shadow-lg rounded-xl overflow-hidden z-50">
                        @forelse ($programs as $program)
                            <a href="{{ route('program.show', $program->slug) }}" class="block px-4 py-3 text-sm transition {{ request()->is('program/'.$program->slug) ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-blue-900 hover:bg-blue-50'}}">
                                {{ $program->name }}
                            </a>
                        @empty
                            <div class="px-4 py-3 text-gray-400 text-sm">
                                Belum ada program studi
                            </div>
                        @endforelse
                    </div>
                </div>
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                    <!-- BUTTON -->
                    <button class="flex items-center gap-1 hover:text-blue-600 transition {{ request()->is('beritaDanPengumuman') || request()->is('beritaDanPengumuman/*') ? 'border-b-2 border-blue-600 pb-1 text-blue-700' : 'hover:text-blue-600 transition'}}">
                        Informasi <i class="ri-arrow-down-s-line"></i>
                    </button>
                    <!-- DROPDOWN -->
                    <div x-show="open" x-transition class="absolute top-full left-0 mt-2 w-64 bg-white shadow-lg rounded-xl overflow-hidden z-50">
                        <a href="{{ route('articles') }}" class="block px-4 py-3 hover:bg-blue-50 transition text-sm text-blue-900 {{ request()->is('beritaDanPengumuman/*') ? 'bg-blue-50' : 'bg-white' }}">Berita dan Pengumuman</a>
                        <a href="" class="block px-4 py-3 hover:bg-blue-50 transition text-sm text-blue-900">Agenda</a>
                        <a href="" class="block px-4 py-3 hover:bg-blue-50 transition text-sm text-blue-900">Unduhan</a>
                    </div>
                </div>
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">

                    <!-- BUTTON -->
                    <button class="flex items-center gap-1 hover:text-blue-600 transition">
                        Penjaminan Mutu <i class="ri-arrow-down-s-line"></i>
                    </button>

                    <!-- DROPDOWN -->
                    <div x-show="open" x-transition 
                        class="absolute top-full left-0 mt-0 w-64 bg-white shadow-lg rounded-xl z-50">

                        <a class="block px-4 py-3 hover:bg-blue-50 text-sm">Kebijakan</a>
                        <a class="block px-4 py-3 hover:bg-blue-50 text-sm">Pedoman</a>
                        <a class="block px-4 py-3 hover:bg-blue-50 text-sm">SOP (Standar Operasional Prosedur)</a>

                        <!-- 🔥 SURVEI -->
                        <div class="relative group">

                            <div class="flex justify-between items-center px-4 py-3 hover:bg-blue-50 text-sm cursor-pointer">
                                <span>Survei</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </div>

                            <!-- SUBMENU -->
                            <div class="absolute top-0 left-full w-56 bg-white shadow-lg rounded-xl 
                                        opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                                        transition-all duration-200">

                                <a class="block px-4 py-3 hover:bg-blue-50 text-sm">Survei Mahasiswa</a>
                                <a class="block px-4 py-3 hover:bg-blue-50 text-sm">Survei Dosen</a>
                                <a class="block px-4 py-3 hover:bg-blue-50 text-sm">Survei Alumni</a>

                            </div>
                        </div>

                        <!-- 🔥 LAPORAN -->
                        <div class="relative group">

                            <div class="flex justify-between items-center px-4 py-3 hover:bg-blue-50 text-sm cursor-pointer">
                                <span>Laporan</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </div>

                            <!-- SUBMENU -->
                            <div class="absolute top-0 left-full w-56 bg-white shadow-lg rounded-xl 
                                        opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                                        transition-all duration-200">

                                <a class="block px-4 py-3 hover:bg-blue-50 text-sm">Laporan Tahunan</a>
                                <a class="block px-4 py-3 hover:bg-blue-50 text-sm">Laporan Audit</a>

                            </div>
                        </div>

                    </div>
                </div>

            </nav>

            <!-- HAMBURGER -->
            <button 
                @click="open = !open"
                class="md:hidden text-2xl text-blue-900">

                <i :class="open ? 'ri-close-line' : 'ri-menu-line'"></i>
            </button>
        </div>

        <!-- MOBILE MENU -->
        <div 
            x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            @click.outside="open = false"
            class="md:hidden bg-white/95 backdrop-blur-md shadow-md">

            <div class="px-6 py-4 flex flex-col gap-4 text-blue-900 font-semibold">

                <a>Beranda</a>
                <a>Profil Fakultas</a>
                <a>Program Studi</a>
                <a>Informasi</a>
                <a>Penjaminan Mutu</a>

            </div>
        </div>

    </div>
</header>

</section>
