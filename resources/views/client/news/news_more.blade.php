<section class="bg-[#E4E4E4] py-16">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">ข่าวสารเพิ่มเติม</h2>

        <!-- Grid news layout max 3 card  -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach(collect($news)->take(3) as $item)
            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                
                <!-- more news cardd -->
                <div class="overflow-hidden">
                    <a href="{{ route('news.show', ['slug' => $item['slug']]) }}">
                        <img src="{{ asset($item['image']) }}"
                            class="w-full h-56 object-cover transform hover:scale-110 transition duration-500">
                    </a>
                </div>

                <div class="p-6">
                    <a href="{{ route('news.show', ['slug' => $item['slug']]) }}">
                        <h3 class="text-lg font-semibold text-gray-800 hover:text-primary duration-300">
                            {{ $item['title'] }}
                        </h3>
                    </a>

                    <!-- tiny desc -->
                    <p class="text-gray-600 font-light text-sm mt-2 pt-6">
                        {{ Str::limit($item['detail'], 100, '...') }}
                    </p>

                    <a href="{{ route('news.show', ['slug' => $item['slug']]) }}"
                        class="text-primary font-semibold mt-4 inline-flex items-center hover:underline pt-6">
                        อ่านเพิ่มเติม <span class="ml-2">→</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
