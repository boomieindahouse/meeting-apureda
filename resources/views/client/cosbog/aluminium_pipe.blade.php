<div class="container mx-auto py-12 px-6">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 py-10">
        @foreach ($features as $feature)
            @if (!empty($feature['is_header']))
                {{-- การ์ด Header --}}
                <div class="bg-white p-6 rounded-lg text-center col-span-1">
                    <h2 class="text-3xl font-bold text-gray-800 flex justify-start items-center gap-2">
                        ท่ออลูมิเนียม
                        <img src="{{ $feature['icon'] }}" alt="CosBog" class="h-8">
                    </h2>
                    <p class="text-gray-600 mt-2 text-start">
                        {{ $feature['description'] }}
                    </p>
                </div>
            @else
                {{-- การ์ดคุณสมบัติทั่วไป --}}
                <div class="bg-white border border-gray-200 shadow-sm p-6 py-10 rounded-lg flex flex-col items-start gap-4">
                    <div class="flex-shrink-0">
                        <img src="{{ $feature['icon'] }}" alt="{{ $feature['title'] }}" class="w-14 h-14">
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-gray-800">
                            {{ $feature['title'] }}
                        </h3>
                        <p class="text-gray-600 mt-2 font-light">
                            {{ $feature['description'] }}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
