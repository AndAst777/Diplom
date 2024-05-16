<div class="max-w-4xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-5">
    <a href="{{ route('post', $post->id) }}">
        <div class="p-5">
            <a href="{{ route('post', $post->id) }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}
                </h5>
            </a>

            <a href="{{ route('post', $post->id) }}">
                <img class="rounded-t-lg" src="{{ asset('images/ti.png') }}" alt="" />
            </a>

            <p class="mb-1 mt-5 font-normal text-gray-700 dark:text-gray-400">{{ $post->created_at }}</p>

        </div>
    </a>
</div>
