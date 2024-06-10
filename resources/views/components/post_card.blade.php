<div class="max-w-3xl bg-white border border-phon rounded-sm shadow  ">
    <a href="{{ route('post', $post->id) }}">
        <div class="p-5">
            <a href="{{ route('post', $post->id) }}">
                <h5 class="mb-2 text-2xl w-auto font-bold tracking-tight text-gray-900">{{ $post->title }}
                </h5>
            </a>

            <a href="{{ route('post', $post->id) }}">
                <img class="w-[408px] sm:h-[204px]  md:w-[730px] md:h-[365px]"
                    src="{{ asset('/storage/' . $post->image) }}" alt="" />
            </a>
           <div class="flex justify-between">
       <div>
            <p class="mb-1 mt-5 font-normal text-gray">{{ $post->created_at }}</p>
         </div>
    <div>
        <p class="mb-1 mt-5 font-normal text-orange">{{ $post->game }}</p>
    </div>
</div>
        </div>
    </a>
</div>
