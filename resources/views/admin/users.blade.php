@include('components.app')
@include('components.admin_navbar')

<body class="bg-phon">
    <div class="p-4 sm:ml-64">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Номер
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Имя
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Почта
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Пароль
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Действие
                        </th>
                    </tr>
                </thead>
                @foreach ($users as $user)
                    <tbody>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $user->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->password }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-white ">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        <button
                                            class="block text-white bg-orange   font-medium rounded-lg text-sm px-5 py-2.5 text-center "
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
