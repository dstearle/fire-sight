@extends('layouts.app')

@section('content')

    {{-- Title --}}
    <h1>Sightings</h1>

    {{-- Checks if there are any sightings to be shown --}}
    @if(count($posts) > 0)

        {{-- Multi Marker Output --}}
        <div class="row">

            <multi-marker-output 
                class="col"
                :posts="{{ DB::table('posts')->get() }}"
            ></multi-marker-output>

        </div>

        {{-- Foreach loop for sightings --}}
        @foreach($posts as $post)

            <div class="card my-2">

                <div class="card-body">

                    <div class="row">

                        {{-- Leaflet Map --}}
                        <div class="col-md-6 col-lg-6">

                            <basic-map-output style="height: 300px" 
                                :lat="{{ $post->marker_latitude }}" 
                                :lng="{{ $post->marker_longitude }}" 
                                :fire_status="{{ json_encode($post->fire_status_button ) }}"
                                :icon="{{ json_encode($post->marker_icon ) }}"
                            ></basic-map-output>

                        </div>

                        <br><br>

                        {{-- Post Title & Timestamp/Author --}}
                        <div class="col-md-6 col-sm-8">

                            {{-- Post Title --}}
                            <h3>

                                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        
                            </h3>

                            {{-- Location --}}
                            <h6>Location: {{ $post->location }}</h6>

                            {{-- Fire Status --}}
                            <h6>Fire Status: {{ $post->fire_status_button }}</h6>

                            {{-- Authorities Status --}}
                            <h6>Authorities Status: {{ $post->auth_status_button }}</h6>
        
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
                
                                    {{-- Author --}}
                                    {{ $post->user->name }}
                                
                                </small>
                
                            </div>

                            {{-- Discussion Posts Count --}}
                            <h6>Discussion Posts: {{$post->discposts->count() }}</h6>

                        </div>

                    </div>

                </div>

            </div>

        @endforeach

        {{-- Pagination Links --}}
        {{ $posts->links() }}

    {{-- If no sightings are found inform user --}}
    @else

        <p>No sightings for selected area</p>

    @endif

@endsection