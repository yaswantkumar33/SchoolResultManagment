@extends('layouts.app')

@section('title', 'student')


@section('content')
    <section class="max-container padding-x py-8 w-full ">
        <div class="flex justify-between">
            <h1 class="text-2xl font-Arimo font-semibold"><span
                    class="font-semibold text-2xl font-playwrite text-purple-600 ">Students</span>
                Dashboard </h1>
            <div>
                <a href="/logout" class="text-xl font-semibold font-Arimo px-3">Logout</a>
                <a href="/" class="text-xl font-Arimo font-semibold pl-7">Home</a>
            </div>
        </div>
        <div class="w-full py-5 flex max-md:flex-col mt-10">
            <div class="w-1/2 flex flex-col gap-6">
                <h4 class="text-2xl font-semibold font-Arimo">Student Name : <span
                        class="text-purple-600 font-playwrite font-semibold">{{ auth()->user()->username }}</span></h4>
                <p class="text-2xl font-semibold font-Arimo ">Student Email : <span
                        class=" font-playwrite text-purple-600 font-semibold">{{ auth()->user()->useremail }}</span></p>
                <p class="text-2xl font-semibold font-Arimo">Student contact : <span
                        class="text-purple-600 text-semibold font-semibold">{{ auth()->user()->phonenumber }}</span>
                </p>
                <p class="text-2xl font-semibold font-Arimo">Student DOB : <span
                        class="text-purple-600 font-semibold">{{ auth()->user()->dob }}</span></p>
                <div>
                    <button id="EditUserBtn"
                        class="text-md border userEditId border-purple-500 p-2 rounded-lg text-white bg-purple-600 font-semibold hover:bg-purple-700">Edit
                        Your
                        Details</button>
                    <input type="text" id="userEditId" value="{{ auth()->user()->id }}" hidden>
                </div>
            </div>


            <div class="w-1/2 flex justify-center">

                <div class=" bg-white rounded-lg w-full">
                    {{-- <table>
                        <h1 class="text-2xl font-playwrite font-semibold text-center text-purple-600 ">Results</h1>
                        <thead>
                            <tr>
                                <th>One</th>
                                <th>Two</th>
                                <th>Three</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($decodedcode as $subject => $score)
                                <tr style="--zi: 0">
                                    <td data-title="One">{{ $subject }}</td>
                                    <td data-title="Two">{{ $score }}</td>
                                    <td data-title="Three">{{ $score < 60 ? 'Fail' : 'Pass' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}




                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 rounded-s-lg font-Arimo font-semibold text-purple-500">
                                        Subject
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-Arimo font-semibold text-purple-500">
                                        Score
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 rounded-e-lg font-Arimo font-semibold text-purple-500">
                                        Result
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                                {{-- <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        $2999
                                    </td>
                                </tr> --}}
                                @foreach ($decodedcode as $subject => $score)
                                    <tr style="--zi: 0">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white capitalize  ">
                                            {{ $subject }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $score }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $score < 60 ? 'Fail' : 'Pass' }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr class="font-semibold text-gray-900 dark:text-white">
                                    <th scope="row" class="px-6 py-3 font-medium">Total</th>
                                    <td class="px-6 py-3">{{ array_sum($decodedcode) }}</td>
                                    <td class="px-6 py-3">
                                        {{ number_format((array_sum($decodedcode) / 500) * 100, 2) . '%' }}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>

            </div>

        </div>
        <div class="editform class1 class2 hidden ">
            <form class=" flex flex-col bg-purple-500 usereditform py-3 px-10 text-center rounded-lg shadow-lg">
                @csrf
                <h1 class="text-white font-Arimo text-center font-semibold text-xl">Edit Your Details Here !</h1>
                <label for="" class="text-white font-Arimo font-semibold my-2"> Your Name </label>
                <input type="text" id="EditUserName" class="bg-white text-purple-500 font-Arimo rounded-lg p-2"
                    value="{{ auth()->user()->username }}"><label for=""
                    class="text-white font-Arimo font-semibold my-2"> Your Email </label>
                <input type="text" id="EditUserEmail" class="bg-white text-purple-500 font-Arimo rounded-lg p-2"
                    value="{{ auth()->user()->useremail }}"><label for=""
                    class="text-white font-Arimo font-semibold my-2"> Your Contact Nummber </label>
                <input type="number" id="EditUserNumber" class="bg-white text-purple-500 font-Arimo rounded-lg p-2"
                    value="{{ auth()->user()->phonenumber }}"><label for=""
                    class="text-white font-Arimo font-semibold my-2"> Your DOB </label>
                <input type="Date" id="EditUserDob" class="bg-white text-purple-500 font-Arimo rounded-lg p-2"
                    value="{{ auth()->user()->dob }}">
                <div class="flex justify-center gap-5 items-center ">
                    <input type="button" id="editcancel" value="Cancel"
                        class=" bg-gray-700 mt-3 text-white rounded-lg p-2 font-semibold">
                    <input type="submit" value="Save Details"
                        class="bg-white mt-3 text-purple-500 rounded-lg p-2 font-semibold">

                </div>
            </form>
        </div>
        <div class="blur-div hidden"></div>
    </section>
@endsection
@section('cusjs')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="module" src="{{ asset('js/homecontroller.js') }}"></script>
@endsection
