@include('components.app')
@include('components.admin_navbar')
<div class="p-4 sm:ml-64">


    @foreach ($posts as $post)
        <div class="flex flex-wrap justify-between items-center">
            @include('components.post_card')
            <form action="{{ route('post.delete', $post->id) }}" method="POST">
                @csrf

                <button type="submit">Удалить</button>
            </form>
        </div>
    @endforeach

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
