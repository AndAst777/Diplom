@include('components.app')
@include('components.navbar')

<body>
    <div class="p-4">
        <h1 class="text-3xl">Популярные игры</h1>
        <div class="grid grid-cols-4 gap-4 mb-4 place-items-center items-center mt-14">

            @foreach ($games as $game)
                {{-- @include('components.post_card') --}}
                @include('components.game_card')
            @endforeach
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
