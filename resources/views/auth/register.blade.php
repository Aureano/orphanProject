<x-guest-layout>

<div class="auth-form">

    <div class="auth-form-header">
        <h2>Créer un compte ❤️</h2>

        <p>
            Rejoignez-nous et contribuez à offrir un meilleur avenir aux enfants.
        </p>
    </div>


    <form method="POST" action="{{ route('register') }}">

        @csrf


        <!-- Nom -->
        <div class="form-group">

            <label for="name">
                Nom complet
            </label>

            <div class="input-group">

                <i class="fa-solid fa-user"></i>

                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Votre nom complet"
                    required
                    autofocus
                    autocomplete="name"
                >

            </div>

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2"
            />

        </div>


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
                    autocomplete="username"
                >

            </div>

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />

        </div>


        <!-- Mot de passe -->
        <div class="form-group">

            <label for="password">
                Mot de passe
            </label>

            <div class="input-group password-group">

                <i class="fa-solid fa-lock"></i>

                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="Choisissez un mot de passe"
                    required
                    autocomplete="new-password"
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


        <!-- Confirmation mot de passe -->
        <div class="form-group">

            <label for="password_confirmation">
                Confirmer le mot de passe
            </label>

            <div class="input-group password-group">

                <i class="fa-solid fa-lock"></i>

                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirmez votre mot de passe"
                    required
                    autocomplete="new-password"
                >

                <button
                    type="button"
                    class="toggle-password"
                    id="togglePasswordConfirmation"
                    aria-label="Afficher la confirmation du mot de passe"
                >
                    <i class="fa-solid fa-eye"></i>
                </button>

            </div>

            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2"
            />

        </div>


        <!-- Bouton -->
        <button type="submit" class="auth-submit-btn">

            <i class="fa-solid fa-user-plus"></i>

            Créer mon compte

        </button>


        <!-- Connexion -->
        <div class="auth-switch">

            <p>
                Vous avez déjà un compte ?

                <a href="{{ route('login') }}">
                    Se connecter
                </a>
            </p>

        </div>

    </form>

</div>


<script src="{{ asset('js/passwordhiddenstate.js') }}"></script>

</x-guest-layout>
