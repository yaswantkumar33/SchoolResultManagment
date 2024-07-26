@extends('layouts.app')

@section('title', 'student')


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
        <div class="w-full py-5 flex mt-10">
            <div class="w-1/2 flex flex-col gap-6">
                <h4 class="text-xl font-semibold font-Arimo">Student Name : <span
                        class="text-purple-600 font-playwrite">{{ auth()->user()->username }}</span></h4>
                <p class="text-xl font-semibold font-Arimo">Student Email : <span
                        class=" font-playwrite text-purple-600">{{ auth()->user()->useremail }}</span></p>
                <p class="text-xl font-semibold font-Arimo">Student contact : <span
                        class="">{{ auth()->user()->phonenumber }}</span>
                </p>
                <p class="text-xl font-semibold font-Arimo">Student DOB : <span
                        class="text-purple-600">{{ auth()->user()->dob }}</span></p>
            </div>
            <div class="w-1/2 flex justify-center">

                <img src="../images/userimg.png" alt="" height="150" width="200">
            </div>

        </div>
        <div class="mt-10">
            <h1 class="text-2xl font-semibold">Result Section</h1>
            <div class="bg-gray-400 py-5 w-full">


                <table border="1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Subject</th>
                            <th>Score</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <td>{{ $results }}</td> --}}
                        @foreach ($results as $result)
                            <tr>
                                <td>{{ $result->id }}</td>
                                <td>{{ $result->user_id }}</td>
                                <td>{{ $result->decoded_results['maths'] ?? 'N/A' }}</td>
                                <td>{{ $result->decoded_results['chemistry'] ?? 'N/A' }}</td>
                                <td>{{ $result->decoded_results['physics'] ?? 'N/A' }}</td>
                                <td>{{ $result->decoded_results['social'] ?? 'N/A' }}</td>
                                <td>{{ $result->decoded_results['science'] ?? 'N/A' }}</td>
                                <td>{{ $result->semester }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
