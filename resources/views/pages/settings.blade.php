@extends('layouts.app')

@section('content')

<div class="container">

    {{-- Title --}}
    <h1>Settings</h1>

    <div class="row">

        <div class="col">

            <div class="card">

                <div class="card-body">

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

                        {{-- Upload Image --}}
                        <div class="form-group">

                            {{-- Profile Picture --}}
                            <div class="row justify-content-center">

                                <div class="col">

                                    <div class="row justify-content-center">
                                        
                                        <img
                                            style="width: 8rem; height: 8rem; border-radius: 50%;" 
                                            src="/storage/profile_pictures/{{ $user->profile_picture }}" 
                                            alt=""
                                        >

                                    </div>

                                    <div class="row justify-content-center">

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