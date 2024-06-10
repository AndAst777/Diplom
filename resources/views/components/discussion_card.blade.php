<div class="max-w-3xl bg-white border border-phon rounded-sm shadow   mt-5">
    <a href="{{ route('discussion', $discussion->id) }}">
        <div class="p-5">
            <a href="{{ route('discussion', $discussion->id) }}">
                <h5 class="mb-2 text-2xl w-auto font-bold tracking-tight">{{ $discussion->title }}
                </h5>
                <p>{{$discussion->text}}</p>
            </a>

            <p class="mb-1 mt-5 font-normal text-gray">{{ $discussion->created_at }}</p>

        </div>
    </a>
</div>
