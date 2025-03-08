<section class="bg-gray-100 py-12">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">ข่าวสาร</h2>

        <!-- Grid แสดงข่าว -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($news as $item)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <!-- รูปภาพข่าว -->
                    <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-56 object-cover">

                    <!-- เนื้อหาข่าว -->
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $item->title }}</h3>
                        <p class="text-gray-600 mt-2">{{ Str::limit($item->content, 100) }}</p>
                        
                        <!-- ปุ่ม "อ่านเพิ่มเติม" -->
                        <a href="{{ route('news.show', $item->slug) }}" class="text-primary font-semibold mt-3 inline-block">
                            อ่านเพิ่มเติม →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-10">
            {{ $news->links() }}
        </div>
    </div>
</section>
