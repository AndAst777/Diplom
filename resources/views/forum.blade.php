@include('components.app')

<body class="bg-phon">

    @include('components.navbar')

    <div class="md:px-8">
        <div class="container mx-auto">
            <div class="flex border border-white bg-white  shadow-md shadow-black/5">
                <div class="grid grid-cols-1 md:grid-cols-4  place-items-start md:p-5 ">
                <div>
                    @foreach ($discussions as $discussion)
                        @include('components.discussion_card')
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
