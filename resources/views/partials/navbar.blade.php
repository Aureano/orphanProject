<!DOCTYPE html>
<html lang="fr">


@include('partials.head');

<body>

    <div id="preloader">

    <div class="loader-content">

        <div class="loader-icon">
            <i class="fa-solid fa-hand-holding-heart"></i>
        </div>

        <!-- <h1>Chargement en cours...</h1> -->

        <!-- <p class="loader-subtitle">Merci pour votre patience</p> -->

        <span id="progress-text">0%</span>

        <div class="progress-container">
            <div class="progress-bar" id="progress-bar"></div>
        </div>

        <p class="loader-message">
            Veuillez patienter pendant que nous préparons votre
            <span>expérience</span>
        </p>

    </div>

</div>

    <!-- ================= HEADER ================= -->
    <header>
        <div class="container navbar {{ request()->routeIs('don') ? 'donation-navbar' : '' }}">

            <a href="#accueil" class="logo">
                <span class="logo-icon">
                    <i class="fa-solid fa-heart"></i>
                </span>
                Espoir d'Enfance
            </a>

                        <nav class="nav-links donation-nav-links" id="navLinks">
                            <a href="{{ url('/') }}" class="">
                                {{ __('messages.home') }}
                            </a>
                        </nav>



            @guest
                    <a href="{{ route('don') }}" class="btn btn-primary nav-donate">
                        <i class="fa-solid fa-heart"></i>
                            {{ __('messages.donate') }}
                    </a>
            @endguest

            {{-- @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="nav-logout">Déconnexion</button>
                    </form>
            @endauth --}}


            @auth
            <div class="user-profile">

                <div class="user-dropdown">

        <button type="button" class="user-dropdown-btn" id="userDropdownBtn">

            <span class="user-name">
                {{ Auth::user()->name }}
            </span>

            <i class="fa-solid fa-chevron-down"></i>

        </button>


        <div class="user-dropdown-menu" id="userDropdownMenu">

            <!-- Compte -->
            <a href="{{ route('profile.edit') }}">
                <i class="fa-solid fa-user"></i>
                <span>{{ __('messages.account') }}</span>
            </a>


            <!-- Déconnexion -->
            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button type="submit">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>{{ __('messages.logout') }}</span>
                </button>

            </form>

        </div>

    </div>

    <!-- Avatar -->
    <a href="{{ route('don') }}" class="user-avatar">
        @foreach(explode(' ', trim(Auth::user()->name)) as $word)
            {{ strtoupper(substr($word, 0, 1)) }}
        @endforeach
    </a>

            </div>



@endauth


            <button class="menu-btn" id="menuBtn">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>
    </header>


    <main>
        @yield('content')
    </main>



    @include('partials.script')



    <script src="{{ asset('js/dropdown.js') }}"></script>

    </body>
</html>
