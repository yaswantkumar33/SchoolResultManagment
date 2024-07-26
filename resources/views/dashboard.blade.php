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
        <div class="w-full py-5 flex mt-10">
            <div class="w-1/2 flex flex-col gap-6">
                <h4 class="text-xl font-semibold font-Arimo">Student Name : <span
                        class="text-purple-600 font-playwrite">{{ auth()->user()->username }}</span></h4>
                <p class="text-xl font-semibold font-Arimo">Student Email : <span
                        class=" font-playwrite text-purple-600">{{ auth()->user()->useremail }}</span></p>
                <p class="text-xl font-semibold font-Arimo">Student contact : <span
                        class="text-purple-600 text-semibold">{{ auth()->user()->phonenumber }}</span>
                </p>
                <p class="text-xl font-semibold font-Arimo">Student DOB : <span
                        class="text-purple-600">{{ auth()->user()->dob }}</span></p>
            </div>
            <div class="w-1/2 flex justify-center">

                {{-- <img src="../images/userimg.png" alt="" height="150" width="200"> --}}
            </div>

        </div>
        <div class="mt-10">
            <h1 class="text-2xl font-semibold">Result Section</h1>
            <div class=" py-5 w-full">


                {{-- <table border="1" class="w-full text-center">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Score</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <td>{{ $results }}</td>
                        @foreach ($decodedcode as $subject => $score)
                            <tr>
                                <td>{{ $subject }}</td>
                                <td>{{ $score }}</td>
                                <td>{{ $score < 60 ? 'Fail' : 'Pass' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
                {{-- custable --}}
                <table>
                    <h1 class="text-2xl font-playwrite font-semibold text-center text-purple-600 ">Results</h1>
                    <thead>
                        <tr>
                            <th>One</th>
                            <th>Two</th>
                            <th>Three</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr style="--zi: 0">
                            <td data-title="One">{$subject}</td>
                            <td data-title="Two">Cell 2</td>
                            <td data-title="Three">Cell 3</td>
                        </tr> --}}
                        @foreach ($decodedcode as $subject => $score)
                            <tr style="--zi: 0">
                                <td data-title="One">{{ $subject }}</td>
                                <td data-title="Two">{{ $score }}</td>
                                <td data-title="Three">{{ $score < 60 ? 'Fail' : 'Pass' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
