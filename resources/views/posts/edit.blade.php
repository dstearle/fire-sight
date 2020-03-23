@extends('layouts.app')

@section('content')

    {{-- Title --}}
    <h1>Edit Post</h1>

    {{-- Form --}}
    {{-- Note: This form comes from the LaravelCollective composer package --}}
    {{ Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}

        {{-- Post Title --}}
        <div class="form-group">

            {{ Form::label('title', 'Title', ['class' => ' '.($errors->has('title') ? 'text-danger':'')]) }}
            {{ Form::text('title', $post->title, ['class' => 'form-control '.($errors->has('title') ? 'is-invalid':''), 'placeholder' => 'Title']) }}

        </div>

        {{-- Location --}}
        <div class="form-group">

            {{ Form::label('location', 'Location', ['class' => ' '.($errors->has('location') ? 'text-danger':'')]) }}
            {{ Form::text('location', $post->location, ['class' => 'form-control '.($errors->has('location') ? 'is-invalid':''), 'placeholder' => 'Location']) }}

        </div>

        {{-- Leaflet Map --}}
        <basic-map-edit 
            class="form-group" 
            :lat='{{ old("marker_latitude", $post->marker_latitude) }}' 
            :lng='{{ old("marker_longitude", $post->marker_longitude) }}'
        ></basic-map-edit>

        {{-- Current Lattitude --}}
        <div class="form-group">

            {{ Form::label('marker_latitude', 'Current Lattitude', ['class' => ' '.($errors->has('marker_latitude') ? 'text-danger':'')]) }}
            {{ Form::text('marker_latitude', old("marker_latitude", $post->marker_latitude), ['class' => 'form-control '.($errors->has('marker_latitude') ? 'is-invalid':''), 'placeholder' => 'Move the marker on the map...', 'readonly']) }}

        </div>

        {{-- Current Longitude --}}
        <div class="form-group">

            {{ Form::label('marker_longitude', 'Current Longitude', ['class' => ' '.($errors->has('marker_longitude') ? 'text-danger':'')]) }}
            {{ Form::text('marker_longitude', old("marker_longitude", $post->marker_longitude), ['class' => 'form-control '.($errors->has('marker_longitude') ? 'is-invalid':''), 'placeholder' => 'Move the marker on the map...', 'readonly']) }}

        </div>

        {{-- Fire Status --}}
        <div class="form-group">

            {{ Form::label('fire_status', 'Fire Status', ['class' => ' '.($errors->has('fire_status_button') ? 'text-danger':'')]) }}

            {{-- Status Options --}}
            <div class="ml-3">

                <div>
                    
                    <small>{{ Form::radio('fire_status_button', 'Smoke') }} Smoke</small>

                    <small>(Ex: you can only see smoke)</small>
                
                </div>

                <div>
                    
                    <small>{{ Form::radio('fire_status_button', 'Flame') }} Flame</small>

                    <small>(Ex: from a large campfire to a burning car)</small>
                
                </div>
                
                <div>
                    
                    <small>{{ Form::radio('fire_status_button', 'Blaze') }} Blaze</small>

                    <small>(Ex: an entire building)</small>
                
                </div>

                <div>
                    
                    <small>{{ Form::radio('fire_status_button', 'Wide-Spread') }} Wide-Spread</small>

                    <small>(Ex: a forest fire)</small>
                
                </div>

                <div>
                    
                    <small>{{ Form::radio('fire_status_button', 'Extinguished') }} Extinguished</small>
                
                </div>

            </div>

        </div>

        {{-- Marker Icon --}}
        <div class="form-group">

            {{ Form::label('marker_icon', 'Marker Icon', ['class' => ' '.($errors->has('marker_icon') ? 'text-danger':'')]) }}

            {{-- Icon Options --}}
            <div class="ml-3">

                <div><small>{{ Form::radio('marker_icon', 'flame-icon.png') }} Flame</small></div>

                <div><small>{{ Form::radio('marker_icon', 'burning-car.png') }} Burning Car</small></div>
                
                <div><small>{{ Form::radio('marker_icon', 'burning-house.png') }} Burning House</small></div>

                <div><small>{{ Form::radio('marker_icon', 'fire-risk.png') }} Forest Fire</small></div>

            </div>

        </div>

        {{-- Authority Status --}}
        <div class="form-group">

            {{ Form::label('auth_status', 'Authority Status', ['class' => ' '.($errors->has('auth_status_button') ? 'text-danger':'')]) }}

            {{-- Status Options --}}
            <div class="ml-3">

                <div><small>{{ Form::radio('auth_status_button', 'Unknown') }} Unknown</small></div>

                <div><small>{{ Form::radio('auth_status_button', 'Contacted') }} Contacted</small></div>
                
                <div><small>{{ Form::radio('auth_status_button', 'On The Scene') }} On The Scene</small></div>

            </div>

        </div>

        {{-- Text Area For Body --}}
        <div class="form-group">

            {{ Form::label('body', 'Body', ['class' => ' '.($errors->has('body') ? 'text-danger':'')]) }}
            {{ Form::textarea('body', $post->body, ['class' => 'form-control '.($errors->has('body') ? 'is-invalid':''), 'placeholder' => 'Body Text']) }}

        </div>

        {{-- Upload Image --}}
        {{-- <div class="form-group">

            {{ Form::file('cover_image') }}

        </div> --}}

        {{ Form::hidden('_method', 'PUT') }}

        {{-- Submit Button --}}
        {{ Form::submit('Submit', ['class' => 'btn btn-lg btn-secondary mb-5']) }}

    {{ Form::close() }}

@endsection