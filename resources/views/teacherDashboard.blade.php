@extends('layouts.app')

@section('title', 'Teacher')


@section('content')
    <section class="  w-full  flex  flex-col">
        <nav class="w-full flex items-start justify-between px-4 py-3 bg-purple-500">
            <h1 class="text-2xl font-semibold text-white"><a href="/" class="text-2xl font-semibold text-white ">School
                    <span class="text-black font-playwrite text-2xl font-semibold">Result</span>
                    Manaagment System!</a> </h1>
            <ul class="flex  justify-between items-center gap-5 pr-3">
                <li class="font-semibold text-white font-Arimo text-xl hover:underline">Add Students</li>
                <li class="font-semibold text-white font-Arimo text-xl hover:underline"><a href="/logout">Logout</a></li>
            </ul>
        </nav>
        <div class="students div w-full mt-3 p-4 flex flex-w gap-5">
            @include('studentsloop', ['students' => $students])
        </div>


    </section>
@endsection
@section('cusjs')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Flowbite JS -->
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.js"></script>
    <script type="module" src="{{ asset('js/homecontroller.js') }}"></script>
@endsection
