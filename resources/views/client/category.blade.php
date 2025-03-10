@extends('layouts.app')

@section('title', 'เครื่องอัดลม / ปั๊มลม - Apureda Thailand')
@php
        $breadcrumbs = [
            ['label' => 'หน้าแรก', 'url' => route('home')],
            ['label' => 'เครื่องอัดลม / ปั๊มลม (Air Compressor)']
        ];
    @endphp
    
@include('client.airpump.banner')
@include('client.components.breadcrumb', ['items' => $breadcrumbs])

<section class="container mx-auto py-10 flex flex-col md:flex-row gap-8">
    @include('client.components.sidebar')

    <div class="w-full">
        @include('client.components.product', ['products' => $products]) 
    </div>
</section>
