@extends('layouts.app')

@section('title', 'Kontak')

@section('css')
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
@endsection

@section('content')
    @include('pages.contact')
@endsection
