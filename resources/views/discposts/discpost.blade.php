<div class="media-body">

    {!! $discpost->body !!}
    
    <div class="row">

        <div class="col-4">

            <div class="ml-auto">

                {{-- Determines if user can see update button --}}
                {{-- @can is alternative way to do same thing as @if like for the delete button below --}}
                @can ('update', $discpost)

                    <a href="{{ route('posts.discposts.edit', [$post->id, $discpost->id]) }}" class="btn btn-sm btn-outline-info">Edit</a>

                @endcan

                {{-- Determines if user can see delete button --}}
                @can ('delete', $discpost)

                    <form class="form-delete" method="post" action="{{ route('posts.discposts.destroy', [$post->id, $discpost->id]) }}">

                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">

                            Delete

                        </button>

                    </form>

                @endcan

                {{-- Prevents guests from seeing these buttons --}}
                @if(!Auth::guest())

                    {{-- Prevents users from editing/deleting other user's posts --}}
                    @if(Auth::user()->id == $discpost->user_id)

                        {{-- Edit Button --}}
                        <a href="{{ $post->id }}/discposts/{{ $discpost->id }}/edit" class="btn btn-lg btn-success">Edit</a>

                    @endif

                @endif

            </div>

        </div>

        <div class="col-4"></div>

        {{-- Shows the name of the author for each answer and date created --}}
        <div class="col-4"></div>

    </div>

</div>