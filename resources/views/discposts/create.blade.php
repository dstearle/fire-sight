<div class="row mt-4">

    <div class="col-md-12">

        <div class="card">

            <div class="card-body">

                {{-- Title --}}
                <div class="card-title">

                    <h4>Add To The Discussion</h4>

                </div>

                <hr>

                <form action="{{ route('posts.discposts.store', $post->id) }}" method="post">

                    @csrf

                    {{-- Text Area --}}
                    <div class="form-group">

                        <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="5" name="body"></textarea>

                        @if ($errors->has('body'))

                            <div class="invalid-feedback">

                                <strong> {{ $errors->first('body') }} </strong>

                            </div>

                        @endif

                    </div>

                    {{-- Submit Button --}}
                    <div class="form-group">

                        <div class="form-row justify-content-end">

                            <button type="submit" class="btn btn-lg btn-outline-secondary">Submit</button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>