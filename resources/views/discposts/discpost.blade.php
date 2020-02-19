<div class="m-3">
    
    <div class="row">

        {{-- User --}}
        <div class="col-md-4 justify-content-center">

            {{-- Profile Picture --}}
            <div class="row justify-content-center">

                <img 
                    style="width: 6rem; height: 6rem; border-radius: 50%;" 
                    src="/storage/profile_pictures/{{ $discpost->user->profile_picture }}" 
                    alt=""
                >

            </div>

            {{-- User Name --}}
            <div class="row justify-content-center">

                {!! $discpost->user->name !!}
                
            </div>
        
        </div>

        {{-- Body --}}
        <div class="col-md-8">{!! $discpost->body !!}</div>

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

        {{-- Creation Date --}}
        {{ \Carbon\Carbon::parse( $discpost->created_at)->format('m/d/Y')}}

    </div>

</div>