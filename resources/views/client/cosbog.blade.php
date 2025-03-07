@extends('layouts.app')

@section('title', 'ท่อลมอลูมิเนียม - Cosbog Thailand')

@section('content')
    @include('client.cosbog.banner')
    @include('client.components.breadcrumbs')
    @include('client.cosbog.aluminium_pipe', ['features' => $features])
    @include('client.cosbog.slick_slider')
    @include('client.cosbog.strength')
    @include('client.cosbog.ins_gallery')
@endsection
