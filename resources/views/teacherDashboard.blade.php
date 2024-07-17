@extends('layouts.app')

@section('title', 'Teacher')


@section('content')
    <section class="max-container padding-x padding-y w-full  flex  flex-col">
        <div class="p-5">
            <h3 class=" text-2xl font-playwrite  font-semibold">{{ auth()->user()->username }}</h3>
        </div>
        <div class="p-5">Class</div>
        <div class="p-5">Section 3 </div>

    </section>
@endsection
