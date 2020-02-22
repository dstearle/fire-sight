<!-- Checks to see if there are any discussion posts to be shown, hides if there are none available -->
@if (count($discposts) > 0)

    <div class="row mt-3 mb-5">

        <div class="col-md-12">

            <div class="card">

                <div class="card-body">

                    <div class="card-title">

                        {{-- Shows total number of discussion posts for a sighting --}}
                        <h4>{{ count($discposts) . " " . str_plural('Discussion Post', count($discposts)) }}</h4>

                    </div>

                    <hr>

                    {{-- Populates the available discussion posts for a particular sighting --}}
                    @foreach ($discposts as $discpost)

                        @include ('discposts.discpost')

                    @endforeach

                </div>

            </div>

        </div>

    </div>

{{-- If no discussion posts are available --}}
@else

    <div class="row mt-3 mb-5">

        <div class="col-md-12">

            <div class="card">

                <div class="card-body">

                    <div class="card-title">

                        {{-- Shows total number of discussion posts for a sighting --}}
                        <h4>No Discussion Posts</h4>

                    </div>

                    <hr>

                    <div class="text-center text-secondary">

                        {{-- Message shown to guests --}}
                        @if(Auth::guest())

                            <p>Looks like no one has started a discussion yet. <a href="/dashboard">Login or register</a> to submit a question or comment!</p>

                        @endif

                        {{-- Message shown to authenticated users --}}
                        @if(Auth::user())

                            <p>Looks like no one has started a discussion yet. Be the first by submittig a question or comment above!</p>

                        @endif
                        
                    </div>

                </div>

            </div>

        </div>

    </div>

@endif