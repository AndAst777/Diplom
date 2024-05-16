<div
    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-5">
    <a href="{{ route('game.show', $game->id) }}">


        <img class="p-8 h-96  rounded-t-lg" src="{{ asset('images/ti.png') }}" alt="product image" />
    </a>
    <div class="px-8 pb-5">
        <a href="{{ route('game.show', $game->id) }}">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $game->title }}</h5>
        </a>
        {{-- <div class="flex items-center justify-between">
            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
            <a href="#"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                to cart</a>
        </div> --}}
    </div>
</div>
