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

                        {{-- Table Title --}}
                        <h3 class="col-8">Profile Settings</h3>

                        {{-- Create Posts Link --}}
                        <div class="col-4">

                        </div>

                    </div>

                    {{--  --}}

                </div>

            </div>
        </div>

    </div>

</div>

@endsection