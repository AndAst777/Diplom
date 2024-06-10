<div class="max-w-lg bg-white border border-phon rounded-sm shadow   mt-5 mb-5">
    <a href="{{ route('game', $game->id) }}">
        <div class="p-5">
            <a href="{{ route('game', $game->id) }}">
                <h5 class="mb-2 text-lg  w-auto font-bold tracking-tight text-gray-900">{{ $game->title }}
                </h5>
            </a>

            <a href="{{ route('game', $game->id) }}">
                <img class="w-[202px] h-[280px] " src="{{ asset('/storage/' . $game->image) }}" alt="" />
            </a>

            <p class="mb-1 mt-5 font-normal text-gray-700 dark:text-gray-400">{{ $game->platform }}</p>

        </div>
    </a>
</div>
