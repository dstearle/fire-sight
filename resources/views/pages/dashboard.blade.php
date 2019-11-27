  
@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">

        {{-- Title --}}
        <h1>Dashboard</h1>

        <p>Register and Login here to manage posts.</p>

        <p>

            {{-- Login --}}
            <a href="/login" role="button" class="btn btn-secondary btn-lg">Login</a>

            {{-- Register --}}
            <a href="/register" role="button" class="btn btn-success btn-lg">Register</a>

        </p>

    </div>

@endsection