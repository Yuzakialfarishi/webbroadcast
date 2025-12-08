@extends('layouts.app')

@section('title', 'Kegiatan')

@section('css')
<link rel="stylesheet" href="{{ asset('css/kegiatan.css') }}">
@endsection

@section('content')
    @include('pages.kegiatan')
@endsection
