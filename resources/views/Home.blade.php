<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('navbar')
    <section class="p-6 mb-10">
        @include('hero')
    </section>
    <section class="p-6">
        @include('Feauture')
    </section>
@endsection
