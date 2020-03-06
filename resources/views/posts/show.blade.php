@extends('layouts.app')

@section('content')

    <div class="card mb-5">

        <div class="card-body">

            {{-- Title --}}
            <h1>{{ $post->title }}</h1>

            {{-- Leaflet Map --}}
            <basic-map-output></basic-map-output>

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

                <small>
                    
                    Sighted on {{ \Carbon\Carbon::parse( $post->created_at)->format('m/d/Y')}} by 
                    
                    {{-- Profile Picture --}}
                    <img
                        class="mr-1"
                        style="width: 2rem; height: 2rem; border-radius: 50%;" 
                        src="/storage/profile_pictures/{{ $post->user->profile_picture }}" 
                        alt=""
                    >

                    {{ $post->user->name }}
                
                </small>

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

    </div>

    {{-- Prevents guests from creating discussion posts --}}
    @if(!Auth::guest())
        
        {{-- Create Discussion Posts --}}
        @include ('discposts.create')

    @endif
    
    {{-- Shows the discussion posts for a sighting --}}
    @include ('discposts.index', [
        'discposts' => $post->discposts,
        'discpostsCount' => $post->discposts_count,
    ])

@endsection