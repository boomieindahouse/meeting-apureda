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
    <!-- @include('client.news.index') -->
    <!-- จุดสำคัญที่ใช้แสดงเนื้อหาข่าว -->
    @yield('news-content')
@endsection
