{{-- Error Checking --}}
@if(count($errors) > 0)

    @foreach($errors->all() as $error)

        <div class="alert alert-danger">

            {{ $error }}

        </div>

    @endforeach

@endif

{{-- Error Checking For Sessions --}}
@if(session('error'))

    <div class="alert alert-danger">

        {{ session('error') }}

    </div>

@endif

{{-- Success Sessions --}}
@if(session('success'))

    <div class="alert alert-success">

        {{ session('success') }}

    </div>

@endif