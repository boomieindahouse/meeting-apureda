@extends('layouts.app')

@section('title', 'ท่อลมอลูมิเนียม - Cosbog Thailand')

@section('content')
@php
        $breadcrumbs = [
            ['label' => 'หน้าแรก', 'url' => route('home')],
            ['label' => 'ท่อลูมิเนียม COSBOG']
        ];
    @endphp
    
    @include('client.cosbog.banner')
    @include('client.components.breadcrumb', ['items' => $breadcrumbs])
    @include('client.cosbog.aluminium_pipe', ['features' => $features])
    @include('client.cosbog.slick_slider')
    @include('client.cosbog.strength')
    @include('client.cosbog.ins_gallery')
@endsection
