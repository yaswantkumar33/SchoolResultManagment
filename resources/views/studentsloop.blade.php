@foreach ($students as $stud)
    <div href="#"
        class="flex flex-col items-center bg-white border  border-gray-200 rounded-lg shadow-lg md:flex-row md:max-w-sm ">
        <div class=" p-4">
            <svg class="object-cover w-full rounded-t-lg pl-0 ml-0 py-3 md:rounded-none md:rounded-s-lg" fill="#000000"
                height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 402.161 402.161" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g>
                        <g>
                            <g>
                                <path
                                    d="M201.08,49.778c-38.794,0-70.355,31.561-70.355,70.355c0,18.828,7.425,40.193,19.862,57.151 c14.067,19.181,32,29.745,50.493,29.745c18.494,0,36.426-10.563,50.494-29.745c12.437-16.958,19.862-38.323,19.862-57.151 C271.436,81.339,239.874,49.778,201.08,49.778z M201.08,192.029c-13.396,0-27.391-8.607-38.397-23.616 c-10.46-14.262-16.958-32.762-16.958-48.28c0-30.523,24.832-55.355,55.355-55.355s55.355,24.832,55.355,55.355 C256.436,151.824,230.372,192.029,201.08,192.029z">
                                </path>
                                <path
                                    d="M201.08,0C109.387,0,34.788,74.598,34.788,166.292c0,91.693,74.598,166.292,166.292,166.292 s166.292-74.598,166.292-166.292C367.372,74.598,292.773,0,201.08,0z M201.08,317.584c-30.099-0.001-58.171-8.839-81.763-24.052 c0.82-22.969,11.218-44.503,28.824-59.454c6.996-5.941,17.212-6.59,25.422-1.615c8.868,5.374,18.127,8.099,27.52,8.099 c9.391,0,18.647-2.724,27.511-8.095c8.201-4.97,18.39-4.345,25.353,1.555c17.619,14.93,28.076,36.526,28.895,59.512 C259.25,308.746,231.178,317.584,201.08,317.584z M296.981,283.218c-3.239-23.483-15.011-45.111-33.337-60.64 c-11.89-10.074-29.1-11.256-42.824-2.939c-12.974,7.861-26.506,7.86-39.483-0.004c-13.74-8.327-30.981-7.116-42.906,3.01 c-18.31,15.549-30.035,37.115-33.265,60.563c-33.789-27.77-55.378-69.868-55.378-116.915C49.788,82.869,117.658,15,201.08,15 c83.423,0,151.292,67.869,151.292,151.292C352.372,213.345,330.778,255.448,296.981,283.218z">
                                </path>
                                <path
                                    d="M302.806,352.372H99.354c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h203.452c4.142,0,7.5-3.358,7.5-7.5 C310.307,355.73,306.948,352.372,302.806,352.372z">
                                </path>
                                <path
                                    d="M302.806,387.161H99.354c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h203.452c4.142,0,7.5-3.358,7.5-7.5 C310.307,390.519,306.948,387.161,302.806,387.161z">
                                </path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $stud->username }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex gap-55">
                <button
                    class="ResultsStudentBtn px-2 py-1 bg-purple-500 font-playwrite font-semibold text-sm text-white mx-1"
                    data-id="{{ $stud->id }}">
                    Results</button>
                {{-- <a href="/deletestud/{{ $stud->id }}"
                    class=" px-2 py-1 bg-red-500 font-Arimo font-semibold text-sm text-white mx-1">Delete</a> --}}
                <button data-modal-target="small-modal{{ $stud->id }}"
                    data-modal-toggle="small-modal{{ $stud->id }}"
                    class="block w-full md:w-auto text-white bg-red-500 hover:bg-blue-800 focus:ring-4 focus:outline-none font-medium px-3 text-sm  text-center"
                    type="button">
                    Delete
                </button>
            <div id="small-modal{{ $stud->id }}" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-2xl  dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                Delete {{ $stud->username }} ?
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="small-modal{{ $stud->id }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-base leading-relaxed text-red-500 dark:text-gray-400 capitalize">
                                Are You sure About The Deletion ! <br class="py-2">
                                All Data About this student will be deleted and
                                can't recorved !
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <a href="/deletestud/{{ $stud->id }}" data-modal-hide="small-modal{{ $stud->id }}"
                                type="button"
                                class="text-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-red-600 hover:bg-purple-600 focus:ring-blue-800">
                                Delete</a>
                            <button data-modal-hide="small-modal{{ $stud->id }}" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-gray-400 rounded-lg border border-gray-400 hover:bg-gray-100 hover:text-purple-600 focus:z-10 focus:ring-4 focus:ring-gray-100">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            </p>
            <button class="font-semibold text-sm text-center underline hover:no-underline hover:text-purple-500">Edit
                Student Deatils
            </button>
        </div>
    </div>
@endforeach
