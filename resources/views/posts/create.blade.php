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

        {{-- Authority Status --}}
        <div class="form-group">

            {{ Form::label('auth_status', 'Authority Status') }}

            {{-- Status Options --}}
            <div class="ml-3">

                <div><small>{{ Form::radio('name', 'value') }} Unknown</small></div>

                <div><small>{{ Form::radio('name', 'value') }} Contacted</small></div>
                
                <div><small>{{ Form::radio('name', 'value') }} On The Scene</small></div>

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
        {{ Form::submit('Submit', ['class' => 'btn btn-lg btn-secondary']) }}

    {{ Form::close() }}

@endsection