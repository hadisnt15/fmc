<section>
    <div class="max-w-7xl mx-auto px-6 py-6">
        @if ($article->thumbnail)
            <div class="relative overflow-hidden rounded-3xl shadow-2xl group">
                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-[250px] md:h-[500px] object-cover transition duration-700 group-hover:scale-105">
            </div>
        @endif
        <div class="space-y-4 p-4 text-justify font-semibold text-md text-blue-900">
            {!! $article->content !!}
        </div>
        <div class="flex flex-wrap justify-center gap-4 mt-6">
            @foreach ($article->images as $image)
                <div class="md:w-[30%]">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img 
                            src="{{ asset('storage/' . $image) }}"
                            class="w-full h-56 object-cover hover:scale-105 transition duration-700"
                        >
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>