@include('components.app')
@include('components.navbar')
{{-- {{ $post->id }}
{{ $post->title }}


<form action="{{ route('post.update', $post->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="title"></label>
    <input type="text" name="title" id="title">
    <button type="submit">Отправить</button>
</form> --}}

<body>
    <div class="max-w-screen-lg mx-auto">
        <!-- header -->


        <!-- header ends here -->

        <main class="mt-10">

            <div class="mb-4 md:mb-0 w-full mx-auto relative">
                <div class="px-4 lg:px-0">
                    <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
                        {{ $post->title }}
                    </h2>

                </div>

                <img src="{{ asset('images/ti.png') }}" class="w-full object-cover lg:rounded" style="height: 28em;" />
            </div>

            <div class="flex flex-col lg:flex-row lg:space-x-12">

                <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-4/4">
                    <p class="pb-6">{{ $post->body }}</p>



                </div>


            </div>

    </div>
    </main>
    <!-- main ends here -->

    <!-- footer -->

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
