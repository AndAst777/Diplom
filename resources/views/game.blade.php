@include('components.app')
@include('components.navbar')

<body class="w-full h-full bg-no-repeat bg-cover backdrop-blur-lg " style="background-image:url('{{ asset('/storage/' . $game->image) }}')">


    <div class="container mx-auto">
        <div class="py-5 flex justify-center border border-white bg-white shadow-md shadow-black/5 ">
            <main class="container mx-auto mb-20">
                <div class="flex">
                    <div>
                        <img src="{{ asset('/storage/' . $game->image) }}" alt="Featured Image"
                            class="md:h-[525px] md:w-[396px] mx-5  rounded">
                    </div>
                    <div class="mx-20">
                        <h2 class="text-2xl md:text-4xl font-bold mt-4 mb-2">{{ $game->title }}</h2>
                        <h2 class="text-xl md:text-2xl ">{{ $game->translate }}</h2>
                        <h2 class="text-xl md:text-2xl mt-4">Платформы: {{ $game->platform }}</h2>
                        {{-- <h2 class="text-xl md:text-2xl mt-4">Жанры: {{ $game->genre }}</h2> --}}
                    </div>
                </div>
                <div>
                    <h2 class="mx-5 mb-4 text-lg md:text-xl pt-5">{{ $game->description }}</h2>
                </div>
                {{-- <p class="text-gray-700 mb-4 text-lg    md:text-xl pt-5">{{ $game->content }}</p> --}}








            </main>
        </div>
    </div>
    @include('components.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
