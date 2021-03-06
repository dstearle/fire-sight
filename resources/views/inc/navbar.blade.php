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
    
                {{-- Sightings --}}
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Sightings</a>
                </li>
    
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- For Guests -->
                @guest

                <!-- For Authenticated Users -->
                @else

                    <li class="nav-item dropdown">

                        <a 
                            id="navbarDropdown" 
                            class="nav-link dropdown-toggle" 
                            href="#" 
                            role="button" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false" 
                            v-pre
                        >

                            {{-- Profile Picture --}}
                            <img
                                class="mr-1"
                                style="width: 2rem; height: 2rem; border-radius: 50%;" 
                                src="/storage/profile_pictures/{{ Auth::user()->profile_picture }}" 
                                alt=""
                            >

                            {{-- User Name --}}
                            {{ Auth::user()->name }} <span class="caret"></span>
                            
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            {{-- Settings --}}
                            <a class="dropdown-item" href="/settings">
                                {{ __('Settings') }}
                            </a>
                            
                            {{-- Logout --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                @csrf

                            </form>

                        </div>

                    </li>

                @endguest

            </ul>

        </div>

    </div>

</nav>