@extends('layouts.app')

@section('title', 'เกี่ยวกับเรา - Apureda Thailand')

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
    @include('client.aboutus.sub_about')
@endsection
