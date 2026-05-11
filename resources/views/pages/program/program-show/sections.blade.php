<section class="md:sticky top-0 z-50 bg-white ">
    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="flex flex-wrap justify-center gap-x-14 gap-y-4 text-blue-700/80">
            @forelse ($sections as $section)
                <div class="text-center font-medium">
                    <a href="#{{ $section->type }}">
                        {{ $section->title }}
                    </a>
                </div>
            @empty
                <p class="text-gray-400 text-center">Tidak ada data</p>
            @endforelse
        </div>
    </div>
</section>