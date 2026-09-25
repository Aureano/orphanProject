<div class="cookie-banner" id="cookieBanner">

    <div class="cookie-content">

        <div class="cookie-icon">
            🍪
        </div>

        <div class="cookie-text">
            <h3>Votre confidentialité compte</h3>

            <p>
                Nous utilisons des cookies nécessaires au bon fonctionnement
                du site. Des cookies optionnels peuvent également être utilisés
                pour améliorer votre expérience.
            </p>

            <a href="#" class="cookie-policy-link">
                En savoir plus
            </a>
        </div>

        <div class="cookie-actions">

            <button type="button"
                    class="cookie-btn cookie-btn-refuse"
                    id="cookieRefuse">
                Refuser
            </button>

            <button type="button"
                    class="cookie-btn cookie-btn-customize"
                    id="cookieCustomize">
                Personnaliser
            </button>

            <button type="button"
                    class="cookie-btn cookie-btn-accept"
                    id="cookieAccept">
                Accepter
            </button>

        </div>

    </div>

</div>


{{-- ================================
     PANNEAU DE PERSONNALISATION
================================ --}}

<div class="cookie-settings-overlay" id="cookieSettings">

    <div class="cookie-settings">

        <div class="cookie-settings-header">

            <div>
                <h3>Préférences des cookies</h3>

                <p>
                    Choisissez les catégories de cookies que vous souhaitez
                    autoriser.
                </p>
            </div>

            <button type="button"
                    class="cookie-settings-close"
                    id="cookieSettingsClose">
                &times;
            </button>

        </div>


        <div class="cookie-category">

            <div class="cookie-category-info">

                <h4>🔒 Cookies nécessaires</h4>

                <p>
                    Ces cookies sont indispensables au fonctionnement du site,
                    notamment pour la connexion, la session et la sécurité.
                </p>

            </div>

            <span class="cookie-always-active">
                Toujours actifs
            </span>

        </div>


        <div class="cookie-category">

            <div class="cookie-category-info">

                <h4>📊 Cookies analytiques</h4>

                <p>
                    Ils permettent de comprendre comment les visiteurs
                    utilisent le site afin d'améliorer leur expérience.
                </p>

            </div>

            <label class="cookie-switch">

                <input type="checkbox" id="analyticsCookies">

                <span class="cookie-slider"></span>

            </label>

        </div>


        <div class="cookie-category">

            <div class="cookie-category-info">

                <h4>⚙️ Cookies de préférence</h4>

                <p>
                    Ils permettent de mémoriser certaines préférences du
                    visiteur, comme la langue choisie.
                </p>

            </div>

            <label class="cookie-switch">

                <input type="checkbox" id="preferenceCookies">

                <span class="cookie-slider"></span>

            </label>

        </div>


        <div class="cookie-settings-actions">

            <button type="button"
                    class="cookie-btn cookie-btn-refuse"
                    id="cookieSettingsRefuse">
                Tout refuser
            </button>

            <button type="button"
                    class="cookie-btn cookie-btn-accept"
                    id="cookieSettingsSave">
                Enregistrer mes choix
            </button>

        </div>

    </div>

</div>
