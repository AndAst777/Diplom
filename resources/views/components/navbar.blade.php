<nav class="bg-navbar ">
    <div class="w-full max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo2.png') }}" class="h-8" alt="Zone logo" />
            <span class="text-white self-center text-2xl font-semibold whitespace-nowrap dark:text-white">zone.ru</span>
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
                    <a href="/games"
                        class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Игры</a>
                </li>
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-white  hover:text-orange  md:bg-transparent md:text-orange-600 md:p-0 dark:text-white"
                        aria-current="page">Новости</a>
                </li>
                {{-- <li>
                    <a href="/"
                        class="block py-2 px-3 text-white  hover:text-orange  md:bg-transparent md:text-orange-600 md:p-0 dark:text-white"
                        aria-current="page">Гайды</a>
                </li> --}}
                <li>
                    <a href="/forum"
                        class="block py-2 px-3 text-white  hover:text-orange  md:bg-transparent md:text-orange-600 md:p-0 dark:text-white"
                        aria-current="page">Форум</a>
                </li>

                @guest
                    <li>
                        <a href="/register"
                            class="block py-2 px-3 text-white rounded hover:bg-navbar md:hover:bg-transparent md:border-0 md:hover:text-orange md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Регистрация</a>
                    </li>
                    <li>
                        <a href="/login"
                            class="block py-2 px-3 text-white rounded hover:bg-navbar md:hover:bg-transparent md:border-0 md:hover:text-orange md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Авторизация</a>
                    </li>
                @endguest




                @auth

                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownProfile"
                            class="flex items-center justify-between w-full py-2 px-3 text-white   md:border-0 md:hover:text-orange md:p-0 md:w-auto ">
                            {{ Auth::user()->name }}
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg></button>

                        <div id="dropdownProfile"
                            class="z-10 hidden font-normal bg-white divide-y divide-phon shadow w-44">
                            <ul class="py-2 text-sm " aria-labelledby="dropdownLargeButton">

                                <li>
                                    <a href="/publications" class="block px-4 py-2 md:hover:text-orange text-end">Публикации</a>
                                </li>

                            </ul>
                            <div class="py-1 divide-y divide-phon">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a href="#" class="block px-4 py-2 text-sm md:hover:text-orange text-end">
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


{{-- <nav class="bg-navbar border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo2.png') }}" class="h-8" alt="" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Zone.ru</span>
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Открыть меню пользователя</span>
                @auth
                    <img class="w-8 h-8 rounded-full" src="{{ asset('images/ti.png') }}" alt="{{ asset('images/ti.png') }}">
                </button>


                <div class="z-10 hidden my-4 bg-white text-base list-none divide-y divide-gray-100  shadow dark:bg-gray-700 "
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="/profile" class="block px-4 py-2 text-sm  ">Профиль</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm ">Настройки</a>
                        </li>
                        <li>
                            <a href="/publications" class="block px-4 py-2 text-sm ">Публикации</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="#" class="block px-4 py-2 text-sm ">
                                    <button type="submit">Выйти</button></a>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                <li>
                    <a href="/games"
                        class="block py-2 px-3 text-white  hover:text-orange md:hover:bg-transparent md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Игры</a>
                </li>
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-white  hover:text-orange md:hover:bg-transparent md:hover:text-blue-700 md:p-0  ">Новости</a>
                </li>
                <li>
                    <a href="/guides"
                        class="block py-2 px-3 text-white   hover:text-orange md:hover:bg-transparent md:hover:text-blue-700 md:p-0  ">Гайды</a>
                </li>
                <li>
                    <a href="/tournaments"
                        class="block py-2 px-3 text-white   hover:text-orange md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Турниры</a>
                </li>
                <li>
                    <a href="/forum"
                        class="block py-2 px-3 text-white   hover:text-orange md:hover:bg-transparent md:hover:text-blue-700 md:p-0  ">Форум</a>
                </li>

            </ul>

        </div>

    </div>
</nav> --}}
