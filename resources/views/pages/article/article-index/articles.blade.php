<section>
    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="grid md:grid-cols-3 gap-4">
            @foreach ($articles as $item)
                <a href="{{ route('article.show', $item->slug) }}" class="group block bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="grid grid-cols-[120px_1fr]">
                        <!-- IMAGE -->
                        <div class="overflow-hidden">
                            <img 
                                src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 rounded-tl-2xl rounded-bl-2xl">
                        </div>
                        <!-- CONTENT -->
                        <div class="p-2 flex flex-col justify-between">
                            <div>
                                <div class="relative group/title">
                                    <h5 class="md:text-lg text-md font-semibold text-blue-950 leading-snug md:line-clamp-2 group-hover:text-blue-700 transition">
                                        {{ $item->title }}
                                    </h5>
                                    <!-- TOOLTIP -->
                                    <div class="absolute left-0 top-full mt-2 hidden group-hover/title:block z-50">
                                        <div class="bg-blue-950/80 text-white text-sm px-4 py-2 rounded-xl shadow-xl w-42 md:w-62 leading-relaxed">
                                            {{ $item->title }}
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 text-xs md:text-sm text-gray-600 leading-relaxed">
                                    {{ Str::limit(strip_tags($item->content), 50) }}
                                </p>
                                <!-- TAGS -->
                                <div class="flex flex-wrap gap-1 mt-3">
                                    @foreach ($item->tags as $tag)
                                        <span class="p-1 bg-blue-50 text-blue-700 text-[11px] md:text-xs rounded-md border border-blue-100 hover:bg-blue-100 transition">
                                            {{ $tag->name }}
                                        </span>
                                    @endforeach

                                </div>
                            </div>

                            <!-- FOOTER -->
                            <div class="mt-4 flex items-center justify-between text-xs text-gray-400">
                                <div class="flex items-center gap-2">
                                    <i class="ri-calendar-line"></i> {{ $item->created_at->format('d M Y') }}
                                </div>
                                <div class="flex items-center gap-1 text-blue-600 font-medium">
                                    Baca <i class="ri-arrow-right-line transition group-hover:translate-x-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>