@extends('layouts.app')

@section('title', 'Tentang')

@section('css')
<link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
@endsection

@section('content')
    @include('pages.about')
@endsection
