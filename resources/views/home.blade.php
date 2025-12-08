@extends('layouts.app')

@section('title', 'Beranda')

@section('css')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
    @include('pages.home')
@endsection
