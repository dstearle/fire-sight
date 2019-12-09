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