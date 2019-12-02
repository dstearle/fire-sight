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

        {{-- Text Area For Body --}}
        <div class="form-group">

            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text']) }}

        </div>

        {{-- Upload Image --}}
        <div class="form-group">

            {{ Form::file('cover_image') }}

        </div>

        {{-- Submit Button --}}
        {{ Form::submit('Submit', ['class' => 'btn btn-lg btn-secondary']) }}

    {{ Form::close() }}

@endsection