<aside class="w-full md:w-2/5 bg-gray-100 p-6 rounded-lg h-fit">
    <h2 class="text-lg font-semibold text-teal-700">หมวดหมู่สินค้า</h2>
    <ul class="mt-4 space-y-4 text-gray-700">
        <li><a href="{{ route('products.index', ['category' => 'air-compressor']) }}"
                class="hover:text-teal-500 block {{ request()->is('products/air-compressor') ? 'text-teal-600 font-semibold' : '' }}">
                เครื่องอัดลม (Air Compressor)
            </a></li>
        <li><a href="{{ route('products.index', ['category' => 'air-dryer']) }}"
                class="hover:text-teal-500 block {{ request()->is('products/air-dryer') ? 'text-teal-600 font-semibold' : '' }}">
                เครื่องทำลมแห้ง (Air Dryer)
            </a></li>
        <li><a href="{{ route('products.index', ['category' => 'air-water-separator']) }}"
                class="hover:text-teal-500 block {{ request()->is('products/air-water-separator') ? 'text-teal-600 font-semibold' : '' }}">
                เครื่องแยกอากาศและน้ำ (Air-Water Separator)
            </a></li>
        <li><a href="{{ route('products.index', ['category' => 'air-filter']) }}"
                class="hover:text-teal-500 block {{ request()->is('products/air-filter') ? 'text-teal-600 font-semibold' : '' }}">
                ไส้กรองลม (Pipeline Filter)
            </a></li>
        <li><a href="{{ route('products.index', ['category' => 'air-receiver-tank']) }}"
                class="hover:text-teal-500 block {{ request()->is('products/air-receiver-tank') ? 'text-teal-600 font-semibold' : '' }}">
                ถังลม (Air Receiver Tank)
            </a></li>
            <li><a href="{{ route('products.index', ['category' => 'oil-water-separator']) }}"
                class="hover:text-teal-500 block {{ request()->is('products/oil-water-separator') ? 'text-teal-600 font-semibold' : '' }}">
                ชุดแยกน้ำกับน้ำมัน (Oil-Water Separator)
            </a></li>
            <li><a href="{{ route('products.index', ['category' => 'nitrogen-generator']) }}"
                class="hover:text-teal-500 block {{ request()->is('products/nitrogen-generator') ? 'text-teal-600 font-semibold' : '' }}">
                เครื่องผลิตก๊าซไนโตรเจน (Nitrogen Generator)
            </a></li>
    </ul>
</aside>