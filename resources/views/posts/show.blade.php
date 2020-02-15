@extends('layouts.app')

@section('content')

    <div class="card mb-5">

        <div class="card-body">

            {{-- Title --}}
            <h1>{{ $post->title }}</h1>

            {{-- Post Image --}}
            <img style="width: 100%" src="/storage/cover_images/{{ $post->cover_image}}" alt="">

            {{-- Location --}}
            <h3>
                
                <span class="badge badge-secondary">Location: {{ $post->location }}</span>
            
            </h3>

            {{-- Fire Status --}}
            <h3>
                
                <span class="badge badge-secondary">Fire Status: {{ $post->fire_status_button }}</span>
            
            </h3>

            {{-- Authorities Status --}}
            <h3>
                
                <span class="badge badge-secondary">Authorities Status: {{ $post->auth_status_button }}</span>
            
            </h3>

            {{-- Body --}}
            <div>{!! $post->body !!}</div>

            {{-- Timestamp & Author --}}
            <div>

                <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>

            </div>

            <hr>

            <div class="row">

                <div class="col-6 d-flex justify-content-start">

                    {{-- Prevents guests from seeing these buttons --}}
                    @if(!Auth::guest())

                        {{-- Prevents users from editing/deleting other user's posts --}}
                        @if(Auth::user()->id == $post->user_id)

                            {{-- Edit Button --}}
                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-lg btn-success">Edit</a>

                            {{-- Delete Button --}}
                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}

                                {{ Form::hidden('_method', 'DELETE') }}

                                {{ Form::submit('Delete', ['class' => 'btn btn-lg btn-danger ml-1']) }}

                            {!! Form::close() !!}

                        @endif

                    @endif

                </div>

                {{-- Back Button --}}
                <div class="col-6 d-flex justify-content-end">

                    <a href="/posts" class="btn btn-lg btn-secondary">Go Back</a>

                </div>

            </div>

        </div>

        {{-- Shows the discussion posts for a post --}}
        @include ('discposts.index', [
            'discposts' => $post->discposts,
            'discpostsCount' => $post->discposts_count,
        ])

        {{-- Shows the option to create a new answer brought from _create file --}}
        @include ('discposts.create')

    </div>

@endsection