<nav class="bg-gray-800  dark:bg-gray-900">
    <div class="w-full max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> --}}
            <span
                class="text-white self-center text-2xl font-semibold whitespace-nowrap dark:text-white">GameTalkZone</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <div class="  hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-white bg-orange-600 rounded md:bg-transparent md:text-orange-600 md:p-0 dark:text-white"
                        aria-current="page">Новости</a>
                </li>
                <li>
                    <a href="/games"
                        class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Игры</a>
                </li>
                {{-- <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                </li> --}}
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0 md:w-auto dark:text-white md:dark:hover:text-orange-600 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Категории
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            @foreach ($games as $game)
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $game->title }}</a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </li>
                @guest
                    <li>
                        <a href="/register"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Регистрация</a>
                    </li>
                    <li>
                        <a href="/login"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Авторизация</a>
                    </li>
                @endguest
                @auth
                    {{-- <li>
                        <a href="profile"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Профиль</a>
                    </li> --}}
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownProfile"
                            class="flex items-center justify-between w-full py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-600 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            {{-- <img class="w-8 h-8 me-2 rounded-full" src="{{ asset('images/ti.png') }}" alt="user photo"> --}}

                            Профиль
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownProfile"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/profile"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ Auth::user()->name }}</a>
                                </li>
                                <li>
                                    <a href="/publications"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Публикации</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Настройки</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf



                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        <button type="submit">Выйти</button></a>
                            </div>
                        </div>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
