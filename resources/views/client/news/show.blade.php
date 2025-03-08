@extends('layouts.app')

@section('title', $newsItem['title'])

@section('content')
@php
$breadcrumbs = [
['label' => 'หน้าแรก', 'url' => route('home')],
['label' => 'ข่าวสาร', 'url' => route('news.index')],
['label' => $newsItem['title']]
];
@endphp

@include('client.news.banner')
@include('client.components.breadcrumb', ['items' => $breadcrumbs])
<section class="container mx-auto py-12">
    <div class="bg-white">

        <h1 class="text-3xl font-bold text-gray-800">{{ $newsItem['title'] }}</h1>

        <!-- รูปภาพหลัก -->
        <img src="{{ asset($newsItem['image']) }}" class="w-full h-96 object-cover rounded-xl mt-4">

        <!-- ข้อมูลวันที่และผู้เขียน -->
        <div class="flex items-center text-gray-500 text-sm mt-3 space-x-4">
            <div class="flex items-center">
                <i class="fas fa-calendar-alt mr-2"></i> 20/03/2024
            </div>
            <div class="flex items-center">
                <i class="fas fa-user mr-2"></i> By Sandbox
            </div>
        </div>

        <!-- เนื้อหาข่าว -->
        <p class="text-gray-700 text-lg font-light mt-4 leading-relaxed">
            Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo,
            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat
            a ante venenatis. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum.
        </p>

        <p class="text-gray-700 text-lg mt-4 font-light leading-relaxed">
            Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet fermentum.
            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui.
            Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
        </p>

        <!-- รูปภาพรอง + คำบรรยาย (layout สองคอลัมน์) -->
        <div class="mt-6 flex flex-col md:flex-row items-center gap-6">
            <img src="{{ asset($newsItem['image']) }}" class="md:w-1/2 w-full h-80 object-cover rounded-lg shadow-md">
            <div class="sub-content md:w-1/2">
                <p class="text-gray-700 text-lg font-light leading-relaxed">
                    Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.
                    Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.
                </p>
                <p class="text-gray-700 text-lg font-light leading-relaxed pt-10">
                    Donec id elit non mi porta gravida at eget metus. Donec id elit non mi porta gravida at eget metus.
                    Cras mattis consectetur purus sit amet fermentum.Donec id elit non mi porta gravida at eget metus. Donec id elit non mi porta gravida at eget metus.
                    Cras mattis consectetur purus sit amet fermentum.
                </p>
            </div>
        </div>
        <!-- <a href="{{ route('news.index') }}" class="mt-6 inline-block text-primary font-semibold">
            ← กลับไปที่ข่าวทั้งหมด
        </a> -->
    </div>
</section>

@include('client.news.news_more', ['news' => $news])

@endsection