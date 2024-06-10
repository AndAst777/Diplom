@include('components.app')


<body class="bg-phon">
    {{-- <div class="preloader">
        <img class="w-10 h-10" src="{{ asset('images/logo2.png') }}" alt="">
    </div> --}}
    @include('components.navbar')


    <div class="container mx-auto">
        <div class="flex border  border-white bg-white  shadow-md shadow-black/5 ">


            <div class="grid grid-cols-1 gap-4  place-items-start md:p-5">
                <h1 class="text-orange font-bold text-2xl px-5 md:px-0 py-5">Последние новости</h1>
                @foreach ($posts as $post)
                    @include('components.post_card')
                @endforeach
            </div>
            {{-- <div class="grid grid-cols-1 gap-4   md:p-5">

                <h1 class="text-orange font-bold text-2xl px-5 md:px-0 py-5">Подборка игр</h1>
                @foreach ($games as $game)
                @include('components.game_card')
                @endforeach

            </div> --}}

        </div>
    </div>
    </div>
    @include('components.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
