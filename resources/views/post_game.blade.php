@include('components.app')
@include('components.navbar')
<div class=" mb-8 px-8 ">
    <div class="container mx-auto">
        <div class="py-12 flex  border border-white bg-white shadow-md shadow-black/5 saturate-200">
            {{-- <div class="p-4"> --}}
            <h2>{{ $game }}</h2>
            <div class="grid grid-cols-1 gap-4 mb-4 place-items-start  mt-5  p-5  ">
                @foreach ($posts as $post)
                    @include('components.post_card')
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('components.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
