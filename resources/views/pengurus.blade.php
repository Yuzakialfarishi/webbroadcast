@extends('layouts.app')

@section('title', 'Pengurus')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pengurus.css') }}">
@endsection

@section('content')
    @include('pages.team')
@endsection
