<!DOCTYPE html>
<html lang="fr">


@include('partials.head');

<body>

    @include('partials.cookies')

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
            {{ __('messages.loading_message') }}
            <span>{{ __('messages.experience') }}</span>
        </p>

    </div>

</div>

    <!-- ================= HEADER ================= -->

    <header>
        <div class="container navbar">

            <a href="#accueil" class="logo">
                <span class="logo-icon">
                    <i class="fa-solid fa-heart"></i>
                </span>
                Espoir d'Enfance
            </a>

            <nav class="nav-links" id="navLinks">
                <a href="#accueil" class="active">{{ __('messages.home') }}</a>
                <a href="#missions">{{ __('messages.missions') }}</a>
                <a href="#don">{{ __('messages.donate') }}</a>
                <a href="#temoignages">{{ __('messages.testimonials') }}</a>
            </nav>

            <div class="language-selector">

            <button class="language-btn" id="languageBtn">
                🌐
                {{ strtoupper(app()->getLocale()) }}
                <i class="fa-solid fa-chevron-down"></i>
            </button>

        <div class="language-dropdown" id="languageDropdown">

            <a href="{{ route('language.change', 'fr') }}">
                {{ __('messages.lang1') }}
            </a>

            <a href="{{ route('language.change', 'en') }}">
                {{ __('messages.lang2') }}

            </a>

            <a href="{{ route('language.change', 'es') }}">
                {{ __('messages.lang3') }}

            </a>

            </div>

            </div>


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


    <a href="#accueil" class="btnbas " id="">

    <i class="fa-solid fa-heart"></i>

    </a>




    <!-- ================= HERO / ACCUEIL ================= -->
    <section class="hero" id="accueil">
        <div class="container">
            <div class="hero-content">

                <div class="hero-badge">
                    <i class="fa-solid fa-heart"></i>
                    {{ __('messages.hero_badge') }}
                </div>

                <h1>
                    {{ __('messages.hero_title') }}
                    <span id="tie"></span>
                </h1>

                <p>
                    {{__('messages.hero_description')}}
                </p>

                <div class="hero-buttons">
                    <a href="{{ route('don') }}" class="btn btn-primary">
                        <i class="fa-solid fa-heart"></i>
                        {{ __('messages.donate_now') }}
                    </a>

                    <a href="#missions" class="btn btn-outline">
                        {{ __('messages.discover_actions') }}
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- ================= STATS ================= -->
    <div class="stats-wrapper">
        <div class="container">
            <div class="stats">
                <div class="stat">
                    <h3 id="ea"></h3>
                    <p>{{ __('messages.children_supported') }}</p>
                </div>

                <div class="stat">
                    <h3 id="rd"></h3>
                    <p>{{ __('messages.meals_distributed') }}</p>
                </div>

                <div class="stat">
                    <h3 id="de">850+</h3>
                    <p>{{ __('messages.donors_engaged') }}</p>
                </div>

                <div class="stat">
                    <h3 id="ad">15</h3>
                    <p>{{ __('messages.years_commitment') }}</p>
                </div>
            </div>
        </div>
    </div>


    <!-- ================= ABOUT ================= -->
    <section class="section" id="apropos">
        <div class="container about-grid">

            <div class="about-image">
                <img
                    src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?auto=format&fit=crop&w=900&q=85"
                    alt="Enfants souriants">

                <div class="experience-card">
                    <h3>{{ __('messages.years') }}</h3>
                    <p>{{ __('messages.years_serving_children') }}</p>
                </div>
            </div>

            <div class="about-content">
                <span class="section-tag">
                    <i class="fa-solid fa-heart"></i>
                    {{ __('messages.our_commitment') }}
                </span>

                <h2>{{ __('messages.about_title') }}</h2>

                <p>
                    {{__('messages.about_description')}}
                </p>

                <ul class="about-list">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        {{ __('messages.safe_environment') }}
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        {{ __('messages.healthy_food') }}
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        {{ __('messages.education_access') }}
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        {{ __('messages.autonomy_support') }}
                    </li>
                </ul>

                <a href="#missions" class="btn btn-primary">
                    {{ __('messages.discover_missions') }}
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>


    <!-- ================= MISSIONS ================= -->
    <section class="section section-light" id="missions">
        <div class="container">

            <div class="section-heading center">
                <span class="section-tag">
                    <i class="fa-solid fa-bullseye"></i>
                    {{ __('messages.our_missions') }}
                </span>

                <h2>{{ __('messages.missions_title') }}</h2>

                <p>
                    {{ __('messages.missions_description') }}
                </p>
            </div>

            <div class="mission-grid">

                <article class="mission-card">
                    <div class="mission-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>

                    <h3>{{ __('messages.education') }}</h3>

                    <p>
                        {{__('messages.education_description')}}
                    </p>
                </article>


                <article class="mission-card">
                    <div class="mission-icon">
                        <i class="fa-solid fa-utensils"></i>
                    </div>

                    <h3>{{ __('messages.food') }}</h3>

                    <p>
                        {{__('messages.food_description')}}
                    </p>
                </article>


                <article class="mission-card">
                    <div class="mission-icon">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>

                    <h3>{{ __('messages.health') }}</h3>

                    <p>
                        {{__('messages.health_description')}}
                    </p>
                </article>


                <article class="mission-card">
                    <div class="mission-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>

                    <h3>{{ __('messages.housing') }}</h3>

                    <p>
                        {{__('messages.housing_description')}}
                    </p>
                </article>


                <article class="mission-card">
                    <div class="mission-icon">
                        <i class="fa-solid fa-person-running"></i>
                    </div>

                    <h3>{{ __('messages.autonomy') }}</h3>

                    <p>
                        {{__('messages.autonomy_description')}}
                    </p>
                </article>


                <article class="mission-card">
                    <div class="mission-icon">
                        <i class="fa-solid fa-hands-holding-child"></i>
                    </div>

                    <h3>{{ __('messages.protection') }}</h3>

                    <p>
                        Nous soutenons un environnement bienveillant où chaque
                        enfant peut grandir dans la dignité et la sécurité.
                    </p>
                </article>

            </div>
        </div>
    </section>


    <!-- ================= DON ================= -->
    <section class="section" id="don">
        <div class="container">

            <div class="donation-box">

                <div class="donation-info">
                    <span class="section-tag">
                        <i class="fa-solid fa-heart"></i>
                        Faire la différence
                    </span>

                    <h2>Un petit geste peut changer toute une vie.</h2>

                    <p>
                        Choisissez le montant que vous souhaitez offrir.
                        Chaque contribution, quelle que soit sa valeur,
                        représente une aide précieuse.
                    </p>

                    <ul class="donation-benefits">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Une contribution pour le bien-être des enfants
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Soutien aux programmes éducatifs
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Participation aux besoins essentiels
                        </li>
                    </ul>
                </div>


                <form class="donation-form" id="donationForm">

                    <h3>Choisissez votre don ❤️</h3>

                    <div class="amounts">
                        <button type="button" class="amount-btn" data-amount="5000">
                            5 000 FCFA
                        </button>

                        <button type="button" class="amount-btn active" data-amount="10000">
                            10 000 FCFA
                        </button>

                        <button type="button" class="amount-btn" data-amount="25000">
                            25 000 FCFA
                        </button>
                    </div>

                    <div class="form-group">
                        <label for="amount">Autre montant (FCFA)</label>

                        <input
                            type="number"
                            id="amount"
                            placeholder="Entrez votre montant"
                            min="100">
                    </div>

                    <div class="form-group">
                        <label for="frequency">Fréquence du don</label>

                        <select id="frequency">
                            <option>Don unique</option>
                            <option>Chaque mois</option>
                            <option>Chaque année</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary donate-submit">
                        <i class="fa-solid fa-heart"></i>
                        Continuer mon don
                    </button>

                    <span class="secure-text">
                        <i class="fa-solid fa-lock"></i>
                        Paiement sécurisé
                    </span>

                </form>

            </div>
        </div>
    </section>


    <!-- ================= GALLERY ================= -->
    <section class="section section-light">
        <div class="container">

            <div class="section-heading">
                <span class="section-tag">
                    <i class="fa-solid fa-camera"></i>
                    {{ __('messages.our_actions') }}
                </span>

                <h2>{{ __('messages.gallery_title') }}</h2>

                <p>
                    {{ __('messages.gallery_description') }}
                </p>
            </div>

            <div class="gallery-grid">

                <div class="gallery-item large">
                    <img
                        src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&w=900&q=85"
                        alt="Enfants heureux">
                </div>

                <div class="gallery-item">
                    <img
                        src="https://images.unsplash.com/photo-1472162072942-cd5147eb3902?auto=format&fit=crop&w=800&q=85"
                        alt="Enfants apprenant">
                </div>

                <div class="gallery-item">
                    <img
                        src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&w=800&q=85"
                        alt="Moment de partage">
                </div>

                <div class="gallery-item">
                    <img
                        src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?auto=format&fit=crop&w=800&q=85"
                        alt="Enfant souriant">
                </div>

                <div class="gallery-item">
                    <img
                        src="https://images.unsplash.com/photo-1504159506876-f8338247a14a?auto=format&fit=crop&w=800&q=85"
                        alt="Activité avec les enfants">
                </div>

            </div>
        </div>
    </section>


    <!-- ================= TESTIMONIALS ================= -->
    <section class="section" id="temoignages">
        <div class="container">

            <div class="section-heading center">
                <span class="section-tag">
                    <i class="fa-solid fa-comments"></i>
                    {{ __('messages.testimony') }}
                </span>

                <h2>{{ __('messages.testimonials_title') }}</h2>

                <p>
                    {{ __('messages.testimonials_description') }}
                </p>
            </div>

            <div class="testimonials">

                <article class="testimonial">
                    <i class="fa-solid fa-quote-left quote-icon"></i>

                    <p>
                        {{__('messages.testimonials_text1')}}
                    </p>

                    <div class="person">
                        <img
                            src="https://randomuser.me/api/portraits/women/44.jpg"
                            alt="Marie K.">

                        <div>
                            <h4>Marie K.</h4>
                            <span class="coloré">{{ __('messages.donor') }}</span>
                        </div>
                    </div>
                </article>


                <article class="testimonial">
                    <i class="fa-solid fa-quote-left quote-icon"></i>

                    <p>
                        {{__('messages.testimonials_text2')}}

                    </p>

                    <div class="person">
                        <img
                            src="https://randomuser.me/api/portraits/men/32.jpg"
                            alt="Jean D.">

                        <div>
                            <h4>Jean D.</h4>
                            <span class="coloré">{{ __('messages.partner') }}</span>
                        </div>
                    </div>
                </article>


                <article class="testimonial">
                    <i class="fa-solid fa-quote-left quote-icon"></i>

                    <p>
                        {{__('messages.testimonials_text3')}}

                    </p>

                    <div class="person">
                        <img
                            src="https://randomuser.me/api/portraits/women/65.jpg"
                            alt="Sophie A.">

                        <div>
                            <h4>Sophie A.</h4>
                            <span class="coloré">{{ __('messages.regular_donor') }}</span>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>


    <!-- ================= CTA ================= -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">

                <h2>{{ __('messages.cta_title') }}</h2>

                <p>
                    {{__('messages.cta_description')}}
                </p>

                <a href="{{ route('don') }}" class="btn">
                    <i class="fa-solid fa-heart"></i>
                    {{ __('messages.donate_now_2') }}
                </a>

            </div>
        </div>
    </section>


    <!-- ================= FOOTER ================= -->
    <footer>
        <div class="container">

            <div class="footer-grid">

                <div class="footer-brand">

                    <a href="#accueil" class="logo">
                        <span class="logo-icon">
                            <i class="fa-solid fa-heart"></i>
                        </span>
                        Espoir d'Enfance
                    </a>

                    <p>
                        {{__('messages.footer_description')}}
                    </p>

                    <div class="socials">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>

                </div>


                <div>
                    <h4 class="footer-title">{{ __('messages.navigation') }}</h4>

                    <div class="footer-links">
                        <a href="#accueil">{{ __('messages.home') }}</a>
                        <a href="#apropos">{{ __('messages.about') }}</a>
                        <a href="#missions">{{ __('messages.missions') }}</a>
                        <a href="#don">{{ __('messages.donate') }}</a>
                    </div>
                </div>


                <div>
                    <h4 class="footer-title">{{ __('messages.our_action') }}</h4>

                    <div class="footer-links">
                        <a href="#missions">{{ __('messages.education') }}</a>
                        <a href="#missions">{{ __('messages.food') }}</a>
                        <a href="#missions">{{ __('messages.health') }}</a>
                        <a href="#missions">{{ __('messages.protection') }}</a>
                    </div>
                </div>


                <div>
                    <h4 class="footer-title">{{ __('messages.contact') }}</h4>

                    <div class="footer-links">
                        <span>
                            <i class="fa-solid fa-location-dot"></i>
                            Abomey-Calavi, Bénin
                        </span>

                        <span>
                            <i class="fa-solid fa-phone"></i>
                            +229 XX XX XX XX
                        </span>

                        <span>
                            <i class="fa-solid fa-envelope"></i>
                            contact@espoirenfance.org
                        </span>
                    </div>
                </div>

            </div>


            <div class="footer-bottom">
                <p>
                    {{ __('messages.copyright') }}
                </p>
            </div>

        </div>
    </footer>


    <!-- ================= CHATBOT ================= -->

<div class="chatbot">

    <!-- Bouton flottant -->
    <button class="chatbot-toggle" id="chatbotToggle">
        <i class="fa-solid fa-robot"></i>
    </button>


    <!-- Fenêtre du chatbot -->
    <div class="chatbot-window" id="chatbotWindow">

        <!-- Header -->
        <div class="chatbot-header">

            <div class="chatbot-header-info">

                <div class="chatbot-avatar">
                    <i class="fa-solid fa-robot"></i>
                </div>

                <div>
                    <h3>{{ __('messages.chatbot_title') }}</h3>
                    <span>
                        <i class="fa-solid fa-circle"></i>
                        {{ __('messages.chatbot_online') }}
                    </span>
                </div>

            </div>

            <button class="chatbot-close" id="chatbotClose">
                <i class="fa-solid fa-xmark"></i>
            </button>

        </div>


        <!-- Messages -->
        <div class="chatbot-messages" id="chatbotMessages">

            <div class="bot-message">
                {{ __('messages.chatbot_greeting') }}
                <br><br>
                {{ __('messages.chatbot_intro') }}
                {{ __('messages.chatbot_help') }}
            </div>

        </div>


        <!-- Zone de saisie -->
        <div class="chatbot-input">

            <input
                type="text"
                id="chatbotInput"
                placeholder="{{ __('messages.chatbot_placeholder') }}"
                autocomplete="off"
            >

            <button id="chatbotSend">
                <i class="fa-solid fa-paper-plane"></i>
            </button>

        </div>

    </div>

</div>

    <script src="https://unpkg.com/typeit@8.8.7/dist/index.umd.js"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <!-- ================= JAVASCRIPT ================= -->
    <script>

        /* ===== MENU MOBILE ===== */
        const menuBtn = document.getElementById("menuBtn");
        const navLinks = document.getElementById("navLinks");

        menuBtn.addEventListener("click", () => {
            navLinks.classList.toggle("active");

            const icon = menuBtn.querySelector("i");

            if (navLinks.classList.contains("active")) {
                icon.classList.remove("fa-bars");
                icon.classList.add("fa-xmark");
            } else {
                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");
            }
        });


        /* Fermer le menu après un clic */
        document.querySelectorAll(".nav-links a").forEach(link => {
            link.addEventListener("click", () => {
                navLinks.classList.remove("active");

                const icon = menuBtn.querySelector("i");
                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");
            });
        });

        const navItems = document.querySelectorAll(".nav-links a");

        navItems.forEach(item => {

            item.addEventListener('click', function(){

                navItems.forEach(link =>{

                    link.classList.remove("active");
                });

                this.classList.add("active");

            })

        });



        /* ===== BOUTONS DE MONTANT ===== */
        const amountButtons = document.querySelectorAll(".amount-btn");
        const amountInput = document.getElementById("amount");

        amountButtons.forEach(button => {
            button.addEventListener("click", () => {

                amountButtons.forEach(btn =>
                    btn.classList.remove("active")
                );

                button.classList.add("active");

                amountInput.value = button.dataset.amount;
            });
        });


        /* Si montant personnalisé */
        amountInput.addEventListener("input", () => {

            if (amountInput.value !== "") {
                amountButtons.forEach(btn =>
                    btn.classList.remove("active")
                );
            }
        });


        /* ===== FORMULAIRE DE DON ===== */
        const donationForm = document.getElementById("donationForm");

        donationForm.addEventListener("submit", function(event) {

            event.preventDefault();

            let amount = amountInput.value;

            if (!amount) {

                const activeButton =
                    document.querySelector(".amount-btn.active");

                amount = activeButton ?
                    activeButton.dataset.amount :
                    0;
            }

            if (amount <= 0) {
                alert("Veuillez sélectionner ou saisir un montant valide.");
                return;
            }

            alert(
                "Merci pour votre générosité ❤️\n\n" +
                "Montant du don : " +
                Number(amount).toLocaleString("fr-FR") +
                " FCFA\n\n" +
                "Vous allez être redirigé vers la page de paiement."
            );

            /*
                Ici, tu pourras plus tard intégrer une véritable solution
                de paiement : FedaPay, Kkiapay, Stripe, PayDunya, etc.
            */
        });


        const preloader = document.getElementById('preloader');
        const progressBar = document.getElementById('progress-bar');
        const progressText = document.getElementById('progress-text');

        let progress = 0;

        // Animation de progression

        const loadingInterval = setInterval(() => {


            if(progress < 90 ){
                progress += Math.floor(Math.random()*5) + 1;

                if(progress > 90)
                {
                    progress = 90;
                }

                progressBar.style.width = progress + "%";
                progressText.textContent = progress + "%";

            }

        }, 1000);


        // Lorsque toute la page est réellement chargée

        window.addEventListener('load', () =>{

            clearInterval(loadingInterval);

        // Termine la barre à 100
            progress = 100;

            progressBar.style.width = progress + "%";
            progressText.textContent = progress + "%";

        // Petit délai pour permettre à l'utilisateur de voir 100%

            setTimeout(() =>{

                preloader.classList.add('hide');

            }, 1);



        // Supprime complètement le preloader après son animation (optional)


            // setTimeout(() =>{

            //     preloader.remove();

            // }, 1500);



        });

        const languageBtn = document.getElementById("languageBtn");
        const languageDropdown = document.getElementById("languageDropdown");

        if (languageBtn && languageDropdown) {

            languageBtn.addEventListener("click", () => {

                languageDropdown.classList.toggle("active");

            });

}



    </script>



    <script src="{{ asset('js/dropdown.js') }}"></script>

    <script src="{{ asset('js/cookie-banner.js') }}"></script>

    <script>
        const typing1 = @json(__('messages.type1'));
        const typing2 = @json(__('messages.type2'));
        const typing3 = @json(__('messages.type3'));
    </script>
    <script src="{{ asset('js/typeIt.js') }}"></script>
    <script>
        const chatbotTypingText = @json(__('messages.chatbot_typing'));
    </script>
    <script src="{{ asset('js/chatbot.js') }}"></script>





</body>
</html>
