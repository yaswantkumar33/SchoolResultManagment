@extends('layouts.app')

@section('title', 'Teacher')


@section('content')
    <section class="max-container padding-x py-8 w-full ">
        <div class="flex justify-between">
            <h1 class="text-2xl font-Arimo font-semibold"><span class=" font-playwrite text-purple-600 ">Students</span>
                Dashboard </h1>
            <div>
                <a href="/logout" class="text-xl font-semibold font-Arimo px-3">Logout</a>
                <a href="/" class="text-xl font-Arimo font-semibold pl-7">Home</a>
            </div>
        </div>
        <div class="w-full py-5 flex mt-10 text-center">
            <div class="w-1/2 flex flex-col gap-6">
                <h4 class="text-xl font-semibold font-Arimo">Student Name : <span
                        class="text-purple-600 font-playwrite">{{ auth()->user()->username }}</span></h4>
                <p class="text-xl font-semibold font-Arimo">Student Email : <span
                        class=" font-playwrite text-purple-600">{{ auth()->user()->useremail }}</span></p>
                <p class="text-xl font-semibold font-Arimo">Student contact : <span
                        class="">{{ auth()->user()->phonenumber }}</span>
                </p>
            </div>
            <div class="w-1/2">
                <p class="text-2xl">Image section</p>
                <img src="" alt="">
            </div>

        </div>
        <div class="mt-10">
            <h1 class="text-2xl font-semibold">Class</h1>
        </div>
    </section>
@endsection
