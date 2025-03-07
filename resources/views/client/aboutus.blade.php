@extends('layouts.app')

@section('title', 'งานบริการ - เจลพีซีประเทศไทย')

@section('content')
@php
        $breadcrumbs = [
            ['label' => 'หน้าแรก', 'url' => route('home')],
            ['label' => 'เกี่ยวกับเรา']
        ];
    @endphp

    @include('client.aboutus.banner')
    @include('client.components.breadcrumb', ['items' => $breadcrumbs])
    @include('client.aboutus.about_apd')
@endsection
