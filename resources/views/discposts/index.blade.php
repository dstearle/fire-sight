<!-- Checks to see if there are any discussion posts to be shown, hides if there are none available -->
@if ($discpostsCount > 0)

<div class="row mt-4">

        <div class="col-md-12">

            <div class="card">

                <div class="card-body">

                    <div class="card-title">

                        {{-- Shows total number of answers for a particular question --}}
                        <h2>{{ $discpostsCount . " " . str_plural('Discussion Post', $discpostsCount) }}</h2>

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

@endif