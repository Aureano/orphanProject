<x-guest-layout>


<div class="auth-form">

    <div class="auth-form-header">
        <h2>Bon retour ! 👋</h2>
        <p>
            Connectez-vous pour continuer votre aventure avec nous.
        </p>
    </div>


    <!-- Session Status -->
    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />


    <form method="POST" action="{{ route('login') }}">

        @csrf


        <!-- Email -->
        <div class="form-group">

            <label for="email">
                Adresse email
            </label>

            <div class="input-group">

                <i class="fa-solid fa-envelope"></i>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="exemple@email.com"
                    required
                    autofocus
                    autocomplete="username"
                >

            </div>

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />

        </div>


        <!-- Mot de passe -->
        {{-- <div class="form-group">

            <div class="password-label">

                <label for="password">
                    Mot de passe
                </label>

                @if (Route::has('password.request'))

                    <a href="{{ route('password.request') }}">
                        Mot de passe oublié ?
                    </a>

                @endif

            </div>


            <div class="input-group">

                <i class="fa-solid fa-lock"></i>

                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="Votre mot de passe"
                    required
                    autocomplete="current-password"
                >

            </div>

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />

        </div> --}}

        <div class="form-group">

            <div class="password-label">

                <label for="password">
                    Mot de passe
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        Mot de passe oublié ?
                    </a>
                @endif

            </div>

            <div class="input-group password-group">

                <i class="fa-solid fa-lock"></i>

                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="Votre mot de passe"
                    required
                    autocomplete="current-password"
                >

                <button
                    type="button"
                    class="toggle-password"
                    id="togglePassword"
                    aria-label="Afficher le mot de passe"
                >
                    <i class="fa-solid fa-eye"></i>
                </button>

            </div>

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />

        </div>




        <!-- Se souvenir de moi -->
        <div class="remember-me">

            <label>

                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                >

                <span>
                    Se souvenir de moi
                </span>

            </label>

        </div>


        <!-- Bouton -->
        <button type="submit" class="auth-submit-btn">

            <i class="fa-solid fa-right-to-bracket"></i>

            Se connecter

        </button>


        <!-- Inscription -->
        <div class="auth-switch">

            <p>
                Vous n'avez pas encore de compte ?

                <a href="{{ route('register') }}">
                    Créer un compte
                </a>

            </p>

        </div>

    </form>

</div>

<script src="{{ asset('js/passwordhiddenstate.js') }}"></script>

</x-guest-layout>
