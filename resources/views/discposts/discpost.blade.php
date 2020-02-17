<div>
    
    <div class="row">

        {{-- User --}}
        <div class="col-4">{!! $discpost->body !!}</div>

        {{-- Body --}}
        <div class="col-8">{!! $discpost->body !!}</div>

    </div>
    
    {{-- Utilities --}}
    <div class="row justify-content-end">

        {{-- Prevents guests from seeing these buttons --}}
        @if(!Auth::guest())

            {{-- Prevents users from editing/deleting other user's posts --}}
            @if(Auth::user()->id == $discpost->user_id)

                {{-- Edit Button --}}
                <a href="{{ $post->id }}/discposts/{{ $discpost->id }}/edit" class="btn btn-sm btn-outline-info">Edit</a>

                {{-- Delete Button --}}
                <form class="mx-2" method="post" action="{{ route('posts.discposts.destroy', [$post->id, $discpost->id]) }}">

                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">

                        Delete

                    </button>

                </form>

            @endif

        @endif

    </div>

</div>