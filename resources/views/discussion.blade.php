@include('components.app')

<body>
    @include('components.navbar')

    <body class="bg-phon">
        <div class="container mx-auto">
            <div class="py-5 flex justify-center border border-white bg-white shadow-md shadow-black/5 ">


                <main class="container mx-auto mb-96">
                    <div class="flex flex-wrap justify-between">

                        <div class="w-full md:w-12/12 px-4 mb-8 border-b-2 border-orange mx-5 md:mx-20">
                            {{-- <h2 class="text-xl md:text-4xl font-bold mt-4 mb-2">{{ $discussion->user->name }}</h2> --}}
                            <h2 class="text-2xl md:text-4xl font-bold mt-4 mb-2">{{ $discussion->title }}</h2>
                            {{-- <img src="{{ asset('images/g2.png') }}"
                                class=" w-[328px] h-[218px] md:w-[1200px] md:h-[600px] saturate-200 " alt="Featured Image"
                                class="w-full h-64 object-cover rounded"> --}}
                            <p class="text-gray mb-4 text-lg  md:text-xl pt-5 ">{{ $discussion->text }}</p>
                        </div>
                    </div>
                    @include('components.comments')
                </main>

            </div>
        </div>




        @include('components.footer')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>

</body>
