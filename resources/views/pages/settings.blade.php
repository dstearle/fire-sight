@extends('layouts.app')

@section('content')

<div class="container">

    {{-- Title --}}
    <h1>Settings</h1>

    <div class="row">

        <div class="col">

            <div class="card mb-5">

                <div class="card-body">

                    {{-- Profile --}}
                    <div class="row">

                        <h3 class="col-8 mb-3">Your Profile</h3>

                    </div>

                    {{-- Form --}}
                    {{-- Note: This form comes from the LaravelCollective composer package --}}
                        {{ Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}

                        {{-- User Name --}}
                        <div class="form-group">

                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => '$user->name']) }}

                        </div>

                        {{-- User Email --}}
                        <div class="form-group">

                            {{ Form::label('email', 'Email') }}
                            {{ Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => '$user->email']) }}

                        </div>

                        {{-- Profile Picture --}}
                        <div class="form-group">

                            <div class="row justify-content-center">

                                <div class="col">

                                    <div class="row mt-3 justify-content-center">

                                        <h5><u>Your Profile Picture</u></h5>

                                    </div>

                                    {{-- Current rProfile Pictue --}}
                                    <div class="row mt-3 mb-4 justify-content-center">
                                        
                                        <img
                                            style="width: 8rem; height: 8rem; border-radius: 50%;" 
                                            src="/storage/profile_pictures/{{ $user->profile_picture }}" 
                                            alt=""
                                        >

                                    </div>

                                    {{-- File Input --}}
                                    <div class="row mb-5 justify-content-center">

                                        {{ Form::file('profile_picture', ['class' => 'row ml-5']) }}

                                    </div>

                                </div>

                            </div>

                        </div>

                        {{ Form::hidden('_method', 'PUT') }}

                        {{-- Submit Button --}}
                        <div class="form-group">

                            <div class="form-row justify-content-end">

                                {{ Form::submit('Submit', ['class' => 'btn btn-lg btn-outline-secondary']) }}

                            </div>

                        </div>

                    {{ Form::close() }}

                </div>

            </div>

        </div>

    </div>

</div>

@endsection