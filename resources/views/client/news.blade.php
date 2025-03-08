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
@endsection
