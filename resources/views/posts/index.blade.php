@extends('layouts.app')

@section('content')

    {{-- Title --}}
    <h1>Posts</h1>

    {{-- Checks if there are any posts to be shown --}}
    @if(count($posts) > 0)

        {{-- Foreach loop for posts --}}
        @foreach($posts as $post)

            <div class="card my-2">

                <div class="card-body">

                    <div class="row">

                        {{-- Post Image --}}
                        <div class="col-md-4 com-lg-4">

                            <img style="width: 100%" src="/storage/cover_images/{{ $post->cover_image}}" alt="Post Image">

                        </div>

                        <br><br>

                        {{-- Post Title & Timestamp/Author --}}
                        <div class="col-md-8 col-sm-8">

                            {{-- Post Title --}}
                            <h3>

                                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        
                            </h3>

                            {{-- Location --}}
                            <h6>{{ $post->location }}</h6>
        
                            {{-- Timestamp & Author --}}
                            <small>Written on {{ $post->created_at }} by {{ $post->user->name}}</small>

                        </div>

                    </div>

                </div>

            </div>

        @endforeach

        {{-- Pagination Links --}}
        {{ $posts->links() }}

    {{-- If no posts are found inform user --}}
    @else

        <p>No Posts Found</p>

    @endif

@endsection