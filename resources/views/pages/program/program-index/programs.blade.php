<section>
    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="grid md:grid-cols-3 gap-2">
            @foreach ($programs as $program)
                <a href="{{ route('program.show', $program->slug) }}" class="group relative overflow-hidden rounded-3xl h-44 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-1">

                    <!-- BACKGROUND IMAGE -->
                    <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->name }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                    <!-- CONTENT -->
                    <div class="relative h-full flex flex-col justify-end p-6">

                        <!-- BADGE -->
                        <div class="mb-3">
                            <span class="px-3 py-1 rounded-full bg-white/15 backdrop-blur-md text-white text-xs border border-white/20">
                                Program Studi
                            </span>
                        </div>

                        <!-- TITLE -->
                        <h3 class="text-2xl font-bold text-white leading-tight">
                            {{ $program->name }}
                        </h3>

                        <!-- FOOTER -->
                        <div class="mt-5 flex items-center justify-between">

                            <div class="flex items-center gap-2 text-white/70 text-sm">
                                <i class="ri-graduation-cap-line"></i>
                                Fakultas Keperawatan dan Ilmu Kesehatan
                            </div>

                            <div class="flex items-center gap-1 text-white font-medium text-sm">
                                Lihat
                                <i class="ri-arrow-right-line transition group-hover:translate-x-1"></i>
                            </div>

                        </div>

                    </div>

                </a>

            @endforeach

        </div>
    </div>
</section>