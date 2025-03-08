<section class="bg-[#E4E4E4] py-16">
    <div class="container mx-auto">
        <!-- หัวข้อ -->
        <h2 class="text-3xl font-bold text-gray-800 mb-8">ข่าวสารเพิ่มเติม</h2>

        <!-- Grid แสดงข่าว (จำกัด 3 ข่าว) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach(collect($news)->take(3) as $item)
            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                
                <!-- ใช้ <a> ครอบรูป -->
                <a href="{{ route('news.show', ['slug' => $item['slug']]) }}">
                    <img src="{{ asset($item['image']) }}" class="w-full h-56 object-cover hover:opacity-75 transition duration-300">
                </a>

                <div class="p-6">
                    <!-- ใช้ <a> ครอบ h3 -->
                    <a href="{{ route('news.show', ['slug' => $item['slug']]) }}">
                        <h3 class="text-lg font-semibold text-gray-800 hover:text-primary duration-300">
                            {{ $item['title'] }}
                        </h3>
                    </a>

                    <!-- แสดงรายละเอียดแบบย่อ -->
                    <p class="text-gray-600 font-light text-sm mt-2">
                        {{ Str::limit($item['detail'], 100, '...') }}
                    </p>

                    <!-- ปุ่มอ่านเพิ่มเติม -->
                    <a href="{{ route('news.show', ['slug' => $item['slug']]) }}"
                        class="text-primary font-semibold mt-4 inline-flex items-center hover:underline">
                        อ่านเพิ่มเติม <span class="ml-2">→</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
