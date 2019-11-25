<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-5">

    <div class="container">

        {{-- Brand --}}
        <a class="navbar-brand" href="{{ url('/') }}">

            {{ config('app.name', 'Laravel') }}

        </a>

        {{-- Collapsed List --}}
        <button 
            class="navbar-toggler" 
            type="button"
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="{{ __('Toggle navigation') }}"
        >

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
    
                {{-- About --}}
                <li class="nav-item">
                    <a class="nav-link" href="/">About</a>
                </li>
    
                {{-- Dashboard --}}
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
    
            </ul>

        </div>

    </div>

</nav>