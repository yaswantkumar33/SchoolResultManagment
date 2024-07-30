<header class="w-full">
    <nav class="flex justify-between items-center max-container padding-x py-8 ">
        <div data-aos="fade-down" data-aos-duration="1000">
            <a href="/">

                <h3 class=" text-3xl font-semibold font-Arimo">S<span class=" text-2xl text-purple-600 font-playwrite"> R
                    </span> M S</h3>

            </a>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000">
            <ul
                class=" text-xl flex justify-between gap-8 items-center font-Arimo cursor-pointer z-10 max-sm:hidden font-semibold ">
                @if (auth()->user())
                    <li><a class="font-semibold"
                            href="/{{ auth()->user()->role == 'student' ? 'dashboard' : 'teacher' }}">DashBoard</a></li>
                @endif
                <li class="text-lg font-semibold">{{ auth()->user() ? auth()->user()->role + 'user' : '' }}</li>
                @if (strpos(url()->current(), 'register') || strpos(url()->current(), 'login'))
                @else
                    @if (auth()->user())
                        <li><a class="font-semibold text-purple-600 text-xl shadow-xl px-2 py-1 rounded-lg"
                                href="/logout">Logout</a>
                        </li>
                    @else
                        <li><a class="font-semibold text-purple-600 text-xl shadow-xl px-2 py-1 rounded-lg"
                                href="/login">Login</a>
                        </li>

                        <li><a class="font-semibold text-purple-600 text-xl shadow-xl px-2 py-1 rounded-lg"
                                href="{{ route('student.register') }}">Register</a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </nav>

</header>
