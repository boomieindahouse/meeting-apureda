@extends('layouts.app')

@section('title', 'งานบริการ - เจลพีซีประเทศไทย')

@section('content')
    @include('client.components.jelpc_breadcrumb')
    @include('client.jelpc.banner')
    @include('client.jelpc.slick_slider')
    @include('client.jelpc.services')
@endsection
