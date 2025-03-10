<div class="w-full">
    <h2 class="text-2xl font-semibold text-teal-700">
        {{ $categoryName }}
    </h2>

    <p class="font-light pt-4">
        {{ $categoryDescription }}
    </p>

    @if(isset($products) && count($products) > 0)
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @foreach ($products as $product)
            @php
                $slug = Str::slug($product['name']); // ชื่อสินค้าเป็น slug
                $isAirCompressor = $category == 'air-compressor'; 
            @endphp
            
            <a href="{{ $isAirCompressor ? asset('pdfs/' . $product['pdf']) : route('product.detail', ['slug' => $slug]) }}" 
               class="block"
               {{ $isAirCompressor ? 'target="_blank"' : '' }}>
                <div class="bg-[#F8F8FA] shadow-md rounded-lg overflow-hidden h-full flex flex-col transition">
                    <div class="flex-grow flex items-center justify-center py-10">
                        <img src="{{ asset('images/products/aircompressor/' . $product['image']) }}" 
                             alt="{{ $product['name'] }}" 
                             class="max-w-full max-h-48 object-contain p-4 hover:scale-110 transition duration-300">
                    </div>
                    <div class="p-2 bg-[#414042] text-white text-center text-base min-h-[70px] flex items-center justify-center">
                        <span class="leading-tight hover:text-primary">{{ $product['name'] }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    @else
    <p class="text-gray-600 text-center mt-6">ไม่มีสินค้าในหมวดหมู่นี้</p>
    @endif
</div>
