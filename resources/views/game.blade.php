@include('components.app')
@include('components.navbar')

<div class="p-4">
    <div class="grid grid-cols-1 gap-4 mb-4 place-items-center items-center mt-14">
        <div role="status" class="space-y-8  md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center">
            <div class="flex items-center justify-center w-full h-48 bg-gray-300 rounded sm:w-96 dark:bg-gray-700">
                <img src="{{ asset('images/ti.png') }}" class="h-full" alt="">

            </div>
            <div class="w-full">
                <div class="h-2.5   w-48 mb-4">{{ $game->title }}</div>
                <div class="h-2  rounded-full max-w-[480px] mb-2.5">{{ $game->description }}</div>

            </div>
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
