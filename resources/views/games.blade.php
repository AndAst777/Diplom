@include('components.app')
@include('components.navbar')

<body class="bg-phon">

    <div class="container mx-auto">
        <div class=" border  border-white bg-white  shadow-md shadow-black/5 ">
            <h1 class="text-orange font-bold text-2xl py-5 px-5">Игры</h1>
            <div class="grid grid-cols-1 md:grid-cols-5 place-items-center">

                @foreach ($games as $game)
                    @include('components.game_card')
                @endforeach

            </div>
        </div>
    </div>
    @include('components.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
