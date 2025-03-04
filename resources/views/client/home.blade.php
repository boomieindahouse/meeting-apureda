@extends('layouts.app')

@section('title', 'หน้าแรก - APUREDA Thailand')

@section('content')
@php
        $services = [
            (object) ['title' => 'การตรวจเช็คบำรุงรักษารายปี', 'image' => 'service1.png'],
            (object) ['title' => 'ซ่อม และ Overhaul', 'image' => 'service2.png'],
            (object) ['title' => 'ตรวจเช็คประสิทธิภาพปั๊มลม', 'image' => 'service3.png'],
            (object) ['title' => 'เครื่องเช่าและเครื่องสำรอง', 'image' => 'service4.png']
        ];
    @endphp

    @include('client.home.banner')
    @include('client.home.strength')
    @include('client.home.about')
    @include('client.home.product')
    @include('client.home.services')
@endsection

