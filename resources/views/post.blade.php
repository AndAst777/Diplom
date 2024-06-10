@include('components.app')
@include('components.navbar')




<body class="bg-phon">
    <div class="container mx-auto">
        <div class="py-5 flex justify-center border border-white bg-white shadow-md shadow-black/5 ">


            <main class="container mx-auto mb-96">
                <div class="flex flex-wrap justify-between">
                    <div class="w-full  md:w-8/12 px-5 mb-8">
                        <h2 class="text-xl md:text-4xl font-bold mt-4 mb-2 text-orange">Новость</h2>
                        <h2 class="text-md md:text-lg font-bold mt-4 mb-2">Автор: {{ $post->user->name }}</h2>
                        <h2 class="text-2xl md:text-4xl font-bold mt-4 mb-2">{{ $post->title }}</h2>
                        <img src="{{ asset('/storage/' . $post->image) }}"
                            class=" w-[388px] h-[218px] md:w-[1200px] md:h-[550px]" alt="Featured Image"
                            class="w-full h-64 object-cover rounded">

                        <p class=" mb-4 text-lg    md:text-xl pt-5">{{ $post->body }}</p>
                        {{-- @include('components.comments') --}}
                    </div>




                    <div class="max-w-sm bg-white border border-phon rounded-sm shadowm m-5 px-4 pb-5">
                        <h1 class="px-5 py-5 text-orange text-xl font-bold">Последние новости</h1>
                        @foreach ($lastposts as $lastpost)
                            <div class="border-b-4 border-orange">

                                <a href="{{ route('post', $lastpost->id) }}">
                                    <div class="p-5">
                                        <a href="{{ route('post', $lastpost->id) }}">
                                            <h5 class="mb-2 text-2xl w-auto font-bold tracking-tight text-gray-900 ">
                                                {{ $lastpost->title }}
                                            </h5>
                                        </a>

                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
            </main>
        </div>
    </div>


    @include('components.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
