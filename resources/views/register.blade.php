<!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')

@section('title', 'UserAuth')

@section('content')
    @include('navbar')
    @if ($register)
        <section class="flex justify-center items-center mt-10 ">
            <div class=" p-5 m-5 bg-white shadow-2xl">
                <h4 class="text-center text-2xl font-Arimo text-slate-600 font-semibold py-5">User <span
                        class=" font-playwrite text-xl text-purple-600">Register</span> </h4>
                <form class="w-full max-w-sm">
                    @csrf
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-full-name">
                                Name
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                type="text" name="name" value="" placeholder="Enter Your Name" id="rname">
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-full-name">
                                Email
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                type="email" name="email" value="" placeholder="Enter Your Email" id="remail">
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Password
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                type="password" name="password" placeholder="Enter your password" id="rpassword">
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                Confirm Password
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                type="password" name="confirmpassword" placeholder="Enter your password"
                                id="rconfirmpassword">
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
                                DOB
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                type="date" name="DOB" id="DOB">
                        </div>
                    </div>

                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button
                                class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit" id="rsubmit">
                                Submit
                            </button>
                        </div>
                    </div>
                    <p class="text-center font-semibold">Already Have Account ! <a href="/login"
                            class=" underline text-purple-600 font-playwrite ">LogIn</a></p>
                </form>
            </div>
        </section>
    @else
        <section class="flex justify-center items-center mt-10 ">
            <div class=" p-5 m-5 bg-white shadow-2xl">
                <h4 class="text-center text-2xl font-Arimo text-slate-600 font-semibold py-5">User <span
                        class=" font-playwrite text-xl text-purple-600">Login</span> </h4>
                <form class="w-full max-w-sm" method="POST" action="/userlogin">
                    @csrf
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-full-name">
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
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-password">
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
                            <input class="mr-2 leading-tight" type="checkbox" name="student">
                            <span class="text-sm">
                                Student
                            </span>
                        </label>
                        <label class="md:w-2/3 block text-gray-500 font-bold">
                            <input class="mr-2 leading-tight" type="checkbox" name="teacher">
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
    @endif
@endsection

@section('cusjs')
    <script src="{{ asset('js/homecontroller.js') }}"></script>
    <!-- Include Axios via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endsection
