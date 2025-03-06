@extends('layouts.app')

@section('title', 'ท่อลมอลูมิเนียม - Cosbog Thailand')

@section('content')
@php
        $services = [
            (object) ['title' => 'การตรวจเช็คบำรุงรักษารายปี', 'image' => 'service1.png'],
            (object) ['title' => 'ซ่อม และ Overhaul', 'image' => 'service2.png'],
            (object) ['title' => 'ตรวจเช็คประสิทธิภาพปั๊มลม', 'image' => 'service3.png'],
            (object) ['title' => 'เครื่องเช่าและเครื่องสำรอง', 'image' => 'service4.png']
        ];
    @endphp

    @include('client.cosbog.banner')
    @include('client.components.breadcrumbs')
    @include('client.cosbog.aluminium_pipe', ['features' => $features])
    @include('client.cosbog.slick_slider')
    @include('client.cosbog.strength')
    @include('client.cosbog.ins_gallery')
@endsection
