@include('components.app')
@include('components.navbar')

<body class="bg-phon">
    <div class="p-16">
        <div class="p-8 bg-white shadow mt-24">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="grid grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
                    <div>
                        <p class="font-bold text-gray-700 text-xl">{{ 100 }}</p>
                        <p class="text-gray-400">Публикаций</p>
                    </div>

                </div>
                <div class="relative">

                    <img src="{{ asset('images/avatar.png') }}"
                        class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500"
                        viewBox="0 0 20 20" fill="currentColor">


                </div>
                <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center"> <button
                        data-modal-target="put-modal" data-modal-toggle="put-modal"
                        class="block text-white bg-orange-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Изменить
                    </button></div>
            </div>
            <div class="mt-20 text-center border-b pb-12">
                <h1 class="text-4xl font-medium text-gray-700">{{ Auth::user()->name }}</h1>
            </div>

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
