@extends('layouts.app')

@section('content')

<div class="container">

    {{-- Title --}}
    <h1>Dashboard</h1>

    <div class="row">

        <div class="col">

            <div class="card">

                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif

                    <div class="row">

                        {{-- Table Title --}}
                        <h3 class="col-8">Your Sightings</h3>

                        {{-- Create Posts Link --}}
                        <div class="col-4">

                            <a href="/posts/create" class="btn  btn-lg btn-block btn-success mb-3">Create Post</a>

                        </div>

                    </div>

                    {{-- Checks For Posts --}}
                    @if(count($posts) > 0)

                        {{-- User's Posts Table --}}
                        <table class="table table-striped">

                            {{-- Table Headers --}}
                            <tr>

                                <th>Title</th>

                                <th></th>

                                <th></th>

                            </tr>

                            {{-- Foreach Loop --}}
                            @foreach($posts as $post)

                            <tr>

                                {{-- Post Title --}}
                                <td>{{ $post->title }}</td>

                                {{-- Edit Post --}}
                                <td>
                                    
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-block btn-secondary">Edit</a>
                                
                                </td>

                                {{-- Delete Post --}}
                                <td>

                                    {{-- Delete Button --}}
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}

                                        {{ Form::hidden('_method', 'DELETE') }}

                                        {{ Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) }}

                                    {!! Form::close() !!}

                                </td>

                            </tr>

                            @endforeach

                        </table>

                    {{-- Else --}}
                    @else

                        <p>You have no posts</p>
                        
                    @endif

                </div>

            </div>
        </div>

    </div>

</div>

@endsection