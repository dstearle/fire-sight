@extends('layouts.app')

@section('content')

    {{-- Title --}}
    <h1>Edit Post</h1>

    {{-- Form --}}
    {{-- Note: This form comes from the LaravelCollective composer package --}}
    {{ Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}

        {{-- Post Title --}}
        <div class="form-group">

            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}

        </div>

        {{-- Location --}}
        <div class="form-group">

            {{ Form::label('location', 'Location') }}
            {{ Form::text('location', $post->location, ['class' => 'form-control', 'placeholder' => 'Location']) }}

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
            {{ Form::textarea('body', $post->body, [ 'class' => 'form-control', 'placeholder' => 'Body Text']) }}

        </div>

        {{-- Upload Image --}}
        <div class="form-group">

            {{ Form::file('cover_image') }}

        </div>

        {{ Form::hidden('_method', 'PUT') }}

        {{-- Submit Button --}}
        {{ Form::submit('Submit', ['class' => 'btn btn-lg btn-secondary']) }}

    {{ Form::close() }}

@endsection