@extends('layouts.app')

@section('title', 'UserAuth')

@section('content')
    @include('navbar')
    <section class="flex justify-center items-center mt-10 ">
        <div class=" p-5 m-5 bg-white shadow-2xl rounded-lg">
            <h4 class="text-center text-2xl font-Arimo text-slate-600 font-semibold py-5">User <span
                    class=" font-playwrite text-xl font-semibold text-purple-600">Login</span> </h4>
            <p class="text-xl text-red-500 text-center">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </p>
            <form class="w-full max-w-sm" method="POST" action="/userlogin">
                @csrf
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Email
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            type="email" value="" name="useremail" placeholder="Enter Your Email">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                            Password
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            type="password" name="password" placeholder="Enter your password">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3"></div>
                    <label class="md:w-2/3 block text-gray-500 font-bold">
                        <input class="mr-2 leading-tight" type="radio" name="role" value="student" required>
                        <span class="text-sm">
                            Student
                        </span>
                    </label>
                    <label class="md:w-2/3 block text-gray-500 font-bold">
                        <input class="mr-2 leading-tight" type="radio" name="role" value="teacher" required>
                        <span class="text-sm">
                            Teacher
                        </span>
                    </label>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button type="submit"
                            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                            Submit
                        </button>
                    </div>
                </div>
                <p class="text-center font-semibold">Don't have a account ! <a href="/register"
                        class=" underline text-purple-600 font-playwrite ">Create Account</a></p>
            </form>
        </div>
    </section>


@endsection
