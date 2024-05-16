@include('components.app')
@include('components.admin_navbar')
<div class="p-4 sm:ml-64">
    @foreach ($posts as $post)
        <div class="flex flex-wrap justify-between items-center">
            @include('components.post_card')
            <form action="{{ route('post.publish', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button
                    class="block text-white bg-orange-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="submit">
                    Опубликовать
                </button>
            </form>
        </div>
    @endforeach
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
