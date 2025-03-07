@if (!empty($items))
<div class="bg-[#F8F8FA] py-2">
    <nav class="container mx-auto py-2">
        <ol class="list-none p-0 inline-flex text-gray-600 text-sm">
            @foreach ($items as $index => $item)
                <li class="flex items-center">
                    @if(isset($item['url']))
                        <a href="{{ $item['url'] }}" class="text-gray-500 hover:text-primary">
                            {{ $item['label'] }}
                        </a>
                    @else
                        <span class="text-gray-800">{{ $item['label'] }}</span>
                    @endif
                    @if (!$loop->last)
                        <span class="mx-2 text-xl font-normal">›</span>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
</div>
@endif
