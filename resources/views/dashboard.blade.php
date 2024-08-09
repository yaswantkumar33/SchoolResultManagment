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
                    <button
                        class="text-md border border-purple-500 p-2 rounded-lg text-white bg-purple-600 font-semibold hover:bg-purple-700"><a
                            href="/edituser/{{ auth()->user()->id }}">Edit
                            Your
                            Details</a></button>

                </div>
            </div>


            <div class="w-1/2 flex justify-center">
                <div class=" w-full">
                    <div class="  w-full">
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
            </div>

        </div>

    </section>
@endsection
