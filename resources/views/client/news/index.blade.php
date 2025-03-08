@extends('layouts.app')

@section('title', 'ข่าวสาร - Apureda Thailand')

@section('content')
@php
        $breadcrumbs = [
            ['label' => 'หน้าแรก', 'url' => route('home')],
            ['label' => 'ข่าวสาร']
        ];
@endphp

@include('client.news.banner')
@include('client.components.breadcrumb', ['items' => $breadcrumbs])

<section class="bg-white py-12">
    <div class="container mx-auto">
        <!-- Grid แสดงข่าว -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($news as $item)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                
                <!-- ใช้ <a> ครอบ <img> เพื่อให้รูปคลิกได้ -->
                <a href="{{ route('news.show', ['slug' => $item['slug']]) }}">
                    <img src="{{ asset($item['image']) }}" class="w-full h-56 object-cover hover:scale-110 transition duration-500">
                </a>

                <div class="p-5">
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
                        class="text-primary font-normal mt-3 inline-block hover:underline">
                        อ่านเพิ่มเติม →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
