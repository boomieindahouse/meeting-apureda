@extends('layouts.app')

@section('title', 'ติดต่อเรา - Apureda Thailand')

@section('content')
@php
        $breadcrumbs = [
            ['label' => 'หน้าแรก', 'url' => route('home')],
            ['label' => 'ติดต่อเรา']
        ];
    @endphp

    @include('client.contactus.banner')
    @include('client.components.breadcrumb', ['items' => $breadcrumbs])
    @include('client.contactus.contact')
@endsection
