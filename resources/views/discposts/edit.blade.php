@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row mt-4">

        <div class="col-md-12">

            <div class="card">

                <div class="card-body">

                    <div class="card-title">

                        <h1>Editing reply for sighting <strong>{{ $post->title }}</strong></h1>

                    </div>

                    <hr>

                    <form action="{{ route('posts.discposts.update', [$post->id, $discpost->id]) }}" method="post">

                        @csrf

                        @method('PATCH')

                        <div class="form-group">

                            <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="7" name="body">{{ old('body', $discpost->body) }}</textarea>

                            @if ($errors->has('body'))

                                <div class="invalid-feedback">

                                    <strong> {{ $errors->first('body') }} </strong>

                                </div>

                            @endif

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection