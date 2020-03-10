@extends('layouts.app')

@section('content')

    {{-- Title --}}
    <h1>Create Post</h1>

    {{-- Form --}}
    {{-- Note: This form comes from the LaravelCollective composer package --}}
    {{ Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}

        {{-- Post Title --}}
        <div class="form-group">

            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}

        </div>

        {{-- Location --}}
        <div class="form-group">

            {{ Form::label('location', 'Location') }}
            {{ Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Location']) }}

        </div>

        {{-- Leaflet Map --}}
        <basic-map-input class="form-group"></basic-map-input>

        {{-- Current Lattitude --}}
        <div class="form-group">

            {{ Form::label('marker_latitude', 'Current Lattitude') }}
            {{ Form::text('marker_latitude', '', ['class' => 'form-control', 'placeholder' => 'Move the marker on the map...', 'readonly']) }}

        </div>

        {{-- Current Longitude --}}
        <div class="form-group">

            {{ Form::label('marker_longitude', 'Current Longitude') }}
            {{ Form::text('marker_longitude', '', ['class' => 'form-control', 'placeholder' => 'Move the marker on the map...', 'readonly']) }}

        </div>

        {{-- Fire Status --}}
        <div class="form-group">

            {{ Form::label('fire_status', 'Fire Status') }}

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

        {{-- Authority Status --}}
        <div class="form-group">

            {{ Form::label('auth_status', 'Authority Status') }}

            {{-- Status Options --}}
            <div class="ml-3">

                <div><small>{{ Form::radio('auth_status_button', 'Unknown') }} Unknown</small></div>

                <div><small>{{ Form::radio('auth_status_button', 'Contacted') }} Contacted</small></div>
                
                <div><small>{{ Form::radio('auth_status_button', 'On The Scene') }} On The Scene</small></div>

            </div>

        </div>

        {{-- Text Area For Body --}}
        <div class="form-group">

            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text']) }}

        </div>

        {{-- Upload Image --}}
        <div class="form-group">

            {{ Form::file('cover_image') }}

        </div>

        {{-- Submit Button --}}
        {{ Form::submit('Submit', ['class' => 'btn btn-lg btn-secondary mb-5']) }}

    {{ Form::close() }}

@endsection