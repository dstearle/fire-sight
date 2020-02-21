@extends('layouts.app')

@section('content')

<div class="container">

    {{-- Title --}}
    <h1>Settings</h1>

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

                        {{-- Form Title --}}
                        <h3 class="col-8">Profile Settings</h3>

                        <div class="col-4">

                        </div>

                    </div>

                    {{-- Form --}}
                    <div class="form">

                        {{-- User Name --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="register_name" type="text" class="form-control @error('register_name') is-invalid @enderror" name="name" value="{{ old('register_name') }}" required autocomplete="name" autofocus>

                                @error('register_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="register_email" type="email" class="form-control @error('register_email') is-invalid @enderror" name="email" value="{{ old('register_email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Profile Picture --}}
                        <div class="row justify-content-center">

                            <div>

                                <img
                                    class="row" 
                                    style="width: 8rem; height: 8rem; border-radius: 50%;" 
                                    src="/storage/profile_pictures/{{ $user->profile_picture }}" 
                                    alt=""
                                >

                                <h6 class="row">Profile Picture: </h6>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</div>

@endsection