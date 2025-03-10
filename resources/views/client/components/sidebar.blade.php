<aside class="w-full md:w-2/5 bg-gray-100 p-6 rounded-lg h-fit">
    <h2 class="text-lg font-semibold text-teal-700">หมวดหมู่สินค้า</h2>
    <ul class="mt-4 space-y-4 text-gray-700">
        <li><a href="{{ route('products.index', ['category' => 'air-compressor']) }}"
                class="hover:text-primary block {{ request()->is('products/air-compressor') ? 'text-primary font-normal' : '' }}">
                เครื่องอัดลม (Air Compressor)
            </a></li>
        <li><a href="{{ route('products.index', ['category' => 'air-dryer']) }}"
                class="hover:text-primary block {{ request()->is('products/air-dryer') ? 'text-primary font-normal' : '' }}">
                เครื่องทำลมแห้ง (Air Dryer)
            </a></li>
        <li><a href="{{ route('products.index', ['category' => 'air-water-separator']) }}"
                class="hover:text-primary block {{ request()->is('products/air-water-separator') ? 'text-primary font-normal' : '' }}">
                เครื่องแยกอากาศและน้ำ (Air-Water Separator)
            </a></li>
        <li><a href="{{ route('products.index', ['category' => 'air-filter']) }}"
                class="hover:text-primary block {{ request()->is('products/air-filter') ? 'text-primary font-normal' : '' }}">
                ไส้กรองลม (Pipeline Filter)
            </a></li>
        <li><a href="{{ route('products.index', ['category' => 'air-receiver-tank']) }}"
                class="hover:text-primary block {{ request()->is('products/air-receiver-tank') ? 'text-primary font-normal' : '' }}">
                ถังลม (Air Receiver Tank)
            </a></li>
            <li><a href="{{ route('products.index', ['category' => 'oil-water-separator']) }}"
                class="hover:text-primary block {{ request()->is('products/oil-water-separator') ? 'text-primary font-normal' : '' }}">
                ชุดแยกน้ำกับน้ำมัน (Oil-Water Separator)
            </a></li>
            <li><a href="{{ route('products.index', ['category' => 'nitrogen-generator']) }}"
                class="hover:text-primary block {{ request()->is('products/nitrogen-generator') ? 'text-primary font-normal' : '' }}">
                เครื่องผลิตก๊าซไนโตรเจน (Nitrogen Generator)
            </a></li>
    </ul>
</aside>