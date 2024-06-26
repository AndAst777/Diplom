@include('components.app')

<body class="bg-phon">
    {{-- <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">Имя</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Почта</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Пароль</label>
        <input type="text" name="password" id="password">
        <br>
        <label for="password_confirmation">Подтверждение пароля</label>
        <input type="text" name="password_confirmation" id="password_confirmation">
        <button type="submit">Отправить</button>
    </form> --}}

    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1
                    class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Регистрация
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Имя</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-phon text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="имя" required="">
                        @error('name')
                            <p class="mt-2 text-sm text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Почта</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-phon text-gray-900 sm:text-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="email@gmail.com" required="">
                        {{-- @error('email')
                            <p class="mt-2 text-sm text-red">{{ $message }}</p>
                        @enderror --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Пароль</label>
                        <input type="text" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-phon text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required="">
                        @error('password')
                            <p class="mt-2 text-sm text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Потверждение
                            пароля</label>
                        <input type="text" name="password_confirmation" id="password_confirmation"
                            placeholder="••••••••"
                            class="bg-gray-50 border border-phon text-gray-900 sm:text-sm  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required="">
                        @error('password_confirmation')
                            <p class="mt-2 text-sm text-red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox"
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                required="">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300">Запомнить меня</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-orange bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium border-rounded-lg border-blue-500 text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Создать
                        аккаунт</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Уже есть аккаунт ? <a href="login"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Войти здесь</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
