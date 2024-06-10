@include('components.app')
@include('components.admin_navbar')

<body class="bg-phon">
    <div class="p-4 sm:ml-64">
        <div class="flex flex-wrap justify-between items-center">
            <p>Игры:</p>


            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="mb-2 block text-white  bg-orange hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Добавить игру
            </button>


            <div id="crud-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
                <div class="relative p-4 w-full max-w-md max-h-full">

                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Добавить игру
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Закрыть модалку</span>
                            </button>
                        </div>

                        <form class="p-4 md:p-5" action="{{ route('game.store') }}" method="POST">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">

                                    <label class="block mb-2 text-sm font-medium text-gray-900"
                                        for="image">Обложка</label>
                                    <input id="image" name="image"
                                        class="block w-full text-sm border border-phon  rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        type="file">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="platform" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Платформы</label>
                                    <select id="platform" name="platform" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" multiple="multiple">
                                        @foreach ($platforms as $platform)
                                        <option selected="">{{$platform->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="title" class="block mb-2 text-sm font-medium">Название</label>
                                    <input type="text" name="title" id="title"
                                        class=" border border-phon  text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Название игры" required="">
                                </div>
                                <div class="col-span-2">
                                    <label for="translate" class="block mb-2 text-sm font-medium">Перевод названия</label>
                                    <input type="text" name="translate" id="translate"
                                        class=" border border-phon  text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Название игры" required="">
                                </div>
                                <div class="col-span-2">
                                    <label for="description"
                                        class="block mb-2 text-sm font-medium  dark:text-white">Описание
                                        игры</label>
                                    <textarea id="description" name="description" rows="4"
                                        class="block p-2.5 w-full text-sm  bg-gray-50 rounded-lg border border-phon  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Введите описание игры"></textarea>
                                </div>
                            </div>
                            <button type="submit"
                                class="text-white inline-flex items-center bg-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Добавить игру
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex flex-wrap justify-between items-center">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class=" bg-white w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Номер
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Обложка
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Название
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Описание
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Изменить
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Удалить
                            </th>
                        </tr>
                    </thead>
                    @foreach ($games as $game)
                        <tbody>
                            <tr>
                                <td class="px-6 py-4">
                                    <p class="text-xl">{{ $game->id }}</p>
                                </td>
                                <th scope="row"
                                    class="h-[202px] w-[280px] px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ asset('/storage/' . $game->image) }}" alt="">
                                </th>
                                <td class="px-6 py-4">
                                    {{ $game->title }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $game->description }}
                                </td>
                                <td class="px-6 py-4">
                                    <button data-modal-target="put-modal" data-modal-toggle="put-modal"
                                        class="block text-white bg-orange hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Изменить
                                    </button>

                                    <!-- Main modal -->
                                    <div id="put-modal" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                        Изменение
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="put-modal">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form class="p-4 md:p-5"
                                                    action="{{ route('game.update', $game->id) }}" method="POST">
                                                    @csrf
                                                    {{-- @method('PUT') --}}
                                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                                        <div class="col-span-2">
                                                            <label for="name"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название</label>
                                                            <input type="text" name="title" id="title"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                placeholder="Type product name" required="">
                                                        </div>

                                                        <div class="col-span-2">
                                                            <label for="description"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Описание
                                                                игры</label>
                                                            <textarea id="description" name="description" rows="4"
                                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                placeholder="Write product description here"></textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Изменить
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <form action="{{ route('game.destroy', $game->id) }}" method="POST">
                                            @csrf
                                            <button
                                                class="block text-white bg-orange hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                type="submit">
                                                Удалить
                                            </button>
                                        </form>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>



        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
