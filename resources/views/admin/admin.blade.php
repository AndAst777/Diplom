@include('components.app')
@include('components.admin_navbar')

<body class="bg-phon">


    <div class="p-4 sm:ml-64">


        @foreach ($posts as $post)
            <div class="flex flex-wrap justify-between items-center">
                @include('components.post_card')
                <form action="{{ route('post.delete', $post->id) }}" method="POST">
                    @csrf

                    <button
                        class="block text-white bg-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center   dark:focus:ring-blue-800"
                        type="submit">
                        Удалить
                    </button>
                </form>
            </div>
        @endforeach

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
