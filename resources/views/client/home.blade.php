@extends('layouts.app')

@section('title', 'หน้าแรก - APUREDA Thailand')

@section('content')
    @include('client.home.banner')
    @include('client.home.strength')
    @include('client.home.about')
    @include('client.home.product')
@endsection

