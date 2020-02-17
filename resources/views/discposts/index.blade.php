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

@endif