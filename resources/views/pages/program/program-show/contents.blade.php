<section>
    <div class="max-w-5xl mx-auto px-6 py-6">
        @forelse ($sections as $section)
        <div class="space-y-2 py-8 scroll-mt-24" id="{{ $section->type }}">
            @if ($section->type == 'biaya_kuliah')
                <div class="prose prose-sm max-w-none text-center space-y-4 text-blue-900">
                    {!! $section->header !!}
                </div>
                <div class="w-full max-w-2xl mx-auto px-6 ">
                    <div class="bg-white rounded-[2rem] shadow-xl border border-blue-100 overflow-hidden">
                        <div class="grid md:grid-cols-2">
                            <!-- LEFT -->
                            <div class="bg-gradient-to-br from-blue-700 to-blue-500 text-white p-8 md:p-10 flex flex-col justify-center">
                                <div class="prose prose-invert max-w-none prose-headings:text-white prose-p:text-blue-50 prose-p:text-sm prose-p:font-semibold prose-p:my-1 prose-headings:my-2 prose-ul:my-2 prose-ol:my-2">
                                    {!! $section->content !!}
                                </div>
                            </div>
                            <!-- RIGHT -->
                            <div class="p-8 md:p-10 flex items-center bg-white">
                                <div class="prose max-w-none prose-p:my-1 prose-headings:my-2 prose-ul:my-2 prose-ol:my-2 text-blue-900 font-semibold text-sm">
                                    {!! $section->content2 !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($section->type == 'sebaran_mata_kuliah')
                <div class="grid md:grid-cols-2 gap-4 items-center">
                    <div>
                        <div class="prose prose-sm max-w-none text-center md:text-right space-y-4 text-blue-900">
                            {!! $section->header !!}
                        </div>
                    </div>
                    <div class="p-1 space-y-2">
                        @php
                            preg_match_all('/<h3.*?>(.*?)<\/h3>(.*?)(?=<h3|$)/si', $section->content, $matches, PREG_SET_ORDER);
                        @endphp
                        <div class="space-y-4">
                            @foreach ($matches as $item)
                                @php
                                    $title = $item[1];
                                    $content = $item[2];
                                @endphp
                                <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden w-full bg-white shadow-sm">
                                    <!-- HEADER -->
                                    <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2 bg-blue-50 hover:bg-blue-100 transition-colors duration-300">
                                        <h3 class="font-semibold text-xs text-blue-900 text-left">
                                            {!! $title !!}
                                        </h3>
                                        <i class="ri-arrow-down-s-line text-xl transition-transform duration-500 ease-in-out" :class="{ 'rotate-180': open }"></i>
                                    </button>
                                    <!-- WRAPPER -->
                                    <div x-ref="container" x-bind:style="open ? 'max-height: ' + $refs.container.scrollHeight + 'px' : 'max-height: 0px'" class="overflow-hidden transition-all duration-500 ease-in-out">
                                        <!-- CONTENT -->
                                        <div class="px-6 py-2">
                                            <div class="prose prose-sm max-w-none prose-p:my-1 prose-headings:my-1 prose-ul:my-1 prose-ol:my-1 prose-li:my-0 prose-li:text-sm prose-p:text-sm">
                                                {!! $content !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @php
                            preg_match_all('/<h3.*?>(.*?)<\/h3>(.*?)(?=<h3|$)/si', $section->content2, $matches2, PREG_SET_ORDER);
                        @endphp
                        <div class="space-y-4">
                            @foreach ($matches2 as $item)
                                @php
                                    $title = $item[1];
                                    $content = $item[2];
                                @endphp
                                <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden w-full bg-white shadow-sm">
                                    <!-- HEADER -->
                                    <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2 bg-blue-50 hover:bg-blue-100 transition-colors duration-300">
                                        <h3 class="font-semibold text-xs text-blue-900 text-left">
                                            {!! $title !!}
                                        </h3>
                                        <i class="ri-arrow-down-s-line text-xl transition-transform duration-500 ease-in-out" :class="{ 'rotate-180': open }"></i>
                                    </button>
                                    <!-- WRAPPER -->
                                    <div x-ref="container" x-bind:style="open ? 'max-height: ' + $refs.container.scrollHeight + 'px' : 'max-height: 0px'" class="overflow-hidden transition-all duration-500 ease-in-out">
                                        <!-- CONTENT -->
                                        <div class="px-6 py-2">
                                            <div class="prose prose-sm max-w-none prose-p:my-1 prose-headings:my-1 prose-ul:my-1 prose-ol:my-1 prose-li:my-0 prose-li:text-sm prose-p:text-sm">
                                                {!! $content !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
                @if ($section->image)
                    <div class="grid md:grid-cols-2 gap-4 items-center">
                        @if ($section->order % 2 == 0)
                            <div>
                                <div class="prose prose-sm max-w-none text-center md:text-right space-y-4 text-blue-900">
                                    {!! $section->header !!}
                                </div>
                            </div>
                            <div class="flex md:justify-left justify-center">
                                <img src="{{ asset('storage/' . $section->image) }}" alt="{{ $section->title }}" class="w-full max-w-md rounded-tl-4xl rounded-bl-4xl shadow-lg hover:scale-105 transition border border-blue-900">
                            </div>
                        @else
                            <div class="flex md:justify-right justify-center">
                                <img src="{{ asset('storage/' . $section->image) }}" alt="{{ $section->title }}" class="w-full max-w-md rounded-tr-4xl rounded-br-4xl shadow-lg hover:scale-105 transition border border-blue-900">
                            </div>
                            <div>
                                <div class="prose prose-sm max-w-none text-center md:text-left space-y-4 text-blue-900">
                                    {!! $section->header !!}
                                </div>
                            </div>
                        @endif
                    </div>
                @else
                    <div>
                        <div class="prose prose-sm max-w-none text-center space-y-4 text-blue-900">
                            {!! $section->header !!}
                        </div>
                    </div>
                @endif  
                @php
                    preg_match('/<p\b[^>]*>(.*?)<\/p>/is', $section->content, $firstParagraph);
        
                    $preview = $firstParagraph[0] ?? '';
                    $remaining = str_replace($preview, '', $section->content);
        
                    $hasMore = !empty(strip_tags($remaining));
                @endphp
                <div x-data="{ open: false }">
                    <!-- PREVIEW -->
                    <div class="text-sm md:text-md text-justify space-y-2 text-blue-900">
                        {!! $preview !!}
                    </div>
                    @if ($hasMore)
                    <!-- FULL CONTENT -->
                    <div x-show="open" x-collapse class="text-sm md:text-md text-justify space-y-2 mt-4 text-blue-900">
                        {!! $remaining !!}
                    </div>
        
                    <!-- BUTTON -->
                    <button @click="open = !open" class="mt-4 text-blue-600 text-sm md:text-md font-medium hover:text-blue-300 text-center">
                        <span x-show="!open">Lihat Selengkapnya <i class="ri-arrow-down-circle-fill"></i></span>
                        <span x-show="open">Tampilkan Lebih Sedikit <i class="ri-arrow-up-circle-fill"></i></span>
                    </button>
                    @endif
                </div>
                @if ($section->images)
                    @if ($section->running_images == 1)
                        <div class="relative w-full overflow-hidden before:absolute before:left-0 before:top-0 before:h-full before:w-20 before:bg-gradient-to-r before:from-white before:to-transparent after:absolute after:right-0 after:top-0 after:h-full after:w-20 after:bg-gradient-to-l after:from-white after:to-transparent">
                    <!-- TRACK -->
                            <div class="flex w-max animate-marquee gap-10 h-15">  
                                @foreach ($section->images as $image)
                                    <div class="p-3 bg-white rounded-xl">
                                        <img src="{{ asset('storage/' . $image) }}" class="h-12 hover:scale-110 opacity-60 hover:opacity-100 transform duration-300 hover:-translate-y-1 object-contain transition">
                                    </div>
                                @endforeach
                                @foreach ($section->images as $image)
                                    <div class="p-3 bg-white rounded-xl">
                                        <img src="{{ asset('storage/' . $image) }}" class="h-12 hover:scale-110 opacity-60 hover:opacity-100 transform duration-300 hover:-translate-y-1 object-contain transition">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- @for ($i = 1; $i <= 17; $i++)
                            <div class="p-3 bg-white rounded-xl">
                                <img src="{{ asset('img/partners/mitra'.$i.'.png') }}" 
                                    class="h-12 hover:scale-110 opacity-60 hover:opacity-100 transform duration-300 hover:-translate-y-1 object-contain transition">
                            </div>
                        @endfor --}}
                    @else
                        <div class="flex flex-wrap justify-center gap-4 mt-6">
                            @foreach ($section->images as $image)
                                <div class="w-full md:w-[30%]">
                                    <div class="overflow-hidden rounded-2xl shadow-lg">
                                        <img 
                                            src="{{ asset('storage/' . $image) }}"
                                            class="w-full h-56 object-cover hover:scale-110 transition duration-300"
                                        >
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endif
            @endif
        </div>
        @empty
            <p class="text-gray-400 text-center">Tidak ada data</p>
        @endforelse
    </div>
</section>
<script>
    new Swiper('.swiper', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: { slidesPerView: 3 },
            768: { slidesPerView: 4 },
            1024: { slidesPerView: 5 },
        }
    });
</script>