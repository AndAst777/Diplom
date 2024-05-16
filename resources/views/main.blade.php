@include('components.app')

<body>
    @include('components.navbar')
    {{-- @foreach ($posts as $post)
        {{ $post->id }}
        <a href="{{ route('post', $post->id) }}">{{ $post->title }}</a>
    @endforeach --}}
    <div class="p-4">
        <div class="grid grid-cols-1 gap-4 mb-4 place-items-center items-center mt-14">
            @foreach ($posts as $post)
                @include('components.post_card')
            @endforeach
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
