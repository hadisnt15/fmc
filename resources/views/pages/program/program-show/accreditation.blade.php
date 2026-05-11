<section class="relative">
    <!-- CARD -->
    <div class="w-full max-w-[400px] md:max-w-[450px] mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 -mt-10 md:-mt-16">
            <!-- LEFT -->
            <p class="text-sm md:text-md text-gray-500 text-center pt-4 px-2">Predikat dan Sertifikat Akreditasi Program Studi</p>
            <div class="px-6 py-4 flex items-center justify-between gap-6">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-blue-700 flex items-center gap-2">
                        <span>{{ $program->accreditation }}</span>
                        <span class="text-base md:text-lg font-semibold bg-blue-100 text-blue-700 px-2 py-1 rounded-md">
                            @if ($program->accreditation == 'A')
                                BAIK SEKALI
                            @elseif ($program->accreditation == 'B')
                                BAIK SEKALI
                            @elseif ($program->accreditation == 'C')
                                BAIK
                            @endif
                        </span>
                    </h2>
                    {{-- <p class="text-gray-500 text-sm">
                        Berdasarkan BAN-PT
                    </p> --}}
                </div>
                <!-- RIGHT -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('storage/' . $program->certificate_image) }}" class="w-24 md:w-32 rounded-lg shadow-lg hover:scale-105 transition">
                </div>
            </div>
        </div>
    </div>
</section>