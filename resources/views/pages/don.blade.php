@extends('partials.navbar')

@section('content')

<style>

    /* =========================================================
       PAGE
    ========================================================= */

    .don-page {
        min-height: 100vh;
        background: #f8f9f7;
        padding-top: 105px;
        padding-bottom: 80px;
    }


    /* =========================================================
       HERO
    ========================================================= */

    .don-hero {
        position: relative;
        overflow: hidden;

        background: #173f35;
        color: white;

        padding: 75px 25px;
        text-align: center;

        border-radius: 0 0 45px 45px;
    }

    .don-hero::before {
        content: "";

        position: absolute;

        width: 320px;
        height: 320px;

        background: rgba(245, 166, 35, 0.10);

        border-radius: 50%;

        top: -170px;
        left: -100px;
    }

    .don-hero::after {
        content: "";

        position: absolute;

        width: 280px;
        height: 280px;

        background: rgba(232, 93, 117, 0.10);

        border-radius: 50%;

        bottom: -160px;
        right: -90px;
    }

    .don-hero-content {
        position: relative;
        z-index: 2;

        max-width: 850px;
        margin: auto;
    }

    .don-hero h1 {
        font-size: 44px;
        font-weight: 700;

        margin-bottom: 18px;

        line-height: 1.2;
    }

    .don-hero h1 .highlight {
        color: #f5a623;
    }

    .don-hero h1 .heart {
        color: #e85d75;
    }

    .don-hero p {
        max-width: 700px;

        margin: auto;

        font-size: 18px;

        line-height: 1.7;

        color: #e7eeeb;
    }


    /* =========================================================
       CONTAINER
    ========================================================= */

    .don-container {
        width: 90%;
        max-width: 1100px;

        margin: 60px auto 0;
    }


    /* =========================================================
       INTRO
    ========================================================= */

    .don-intro {
        text-align: center;

        margin-bottom: 45px;
    }

    .don-intro h2 {
        color: #173f35;

        font-size: 32px;
        font-weight: 700;

        margin-bottom: 12px;
    }

    .don-intro p {
        max-width: 700px;

        margin: auto;

        color: #6b6b6b;

        line-height: 1.7;
    }


    /* =========================================================
       METHODES
    ========================================================= */

    .don-methods {
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 30px;

        align-items: start;
    }


    /* =========================================================
       CARDS
    ========================================================= */

    .don-card {
        background: white;

        border-radius: 25px;

        padding: 35px;

        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.07);

        border: 1px solid #eeeeee;
    }

    .don-card-header {
        display: flex;

        align-items: center;

        gap: 16px;

        margin-bottom: 28px;
    }


    /* =========================================================
       ICONES
    ========================================================= */

    .don-icon {
        width: 62px;
        height: 62px;

        flex-shrink: 0;

        border-radius: 17px;

        display: flex;

        align-items: center;
        justify-content: center;

        font-size: 27px;
    }

    .bank-icon {
        background: #fff1df;
        color: #f5a623;
    }

    .paypal-icon {
        background: #eaf2ff;
        color: #0070ba;
    }


    /* =========================================================
       TITRES
    ========================================================= */

    .don-card-header h3 {
        margin: 0;

        color: #173f35;

        font-size: 23px;
        font-weight: 700;
    }

    .don-card-header p {
        margin: 5px 0 0;

        color: #777;

        font-size: 14px;
    }


    /* =========================================================
       INFORMATIONS BANCAIRES
    ========================================================= */

    .bank-info {
        background: #f7f8f6;

        border-radius: 18px;

        padding: 20px;
    }

    .bank-row {
        padding: 14px 0;

        border-bottom: 1px solid #e3e5e1;
    }

    .bank-row:last-child {
        border-bottom: none;
    }

    .bank-label {
        display: block;

        margin-bottom: 6px;

        color: #777;

        font-size: 13px;
    }

    .bank-value {
        display: flex;

        align-items: center;
        justify-content: space-between;

        gap: 10px;

        color: #173f35;

        font-size: 15px;

        font-weight: 600;

        word-break: break-word;
    }


    /* =========================================================
       COPIER
    ========================================================= */

    .copy-btn {
        border: none;

        background: #173f35;

        color: white;

        padding: 7px 11px;

        border-radius: 8px;

        font-size: 12px;

        cursor: pointer;

        transition: 0.25s;
    }

    .copy-btn:hover {
        background: #245b4e;
    }


    /* =========================================================
       INSTRUCTIONS
    ========================================================= */

    .don-instructions {
        margin-top: 25px;

        padding: 20px;

        background: #fff8ed;

        border-left: 4px solid #f5a623;

        border-radius: 12px;
    }

    .don-instructions h4 {
        margin: 0 0 12px;

        color: #173f35;

        font-size: 16px;
    }

    .don-instructions ol {
        margin: 0;

        padding-left: 20px;

        color: #666;

        font-size: 14px;

        line-height: 1.8;
    }


    /* =========================================================
       BOUTON DECLARATION
    ========================================================= */

    .declare-donation-btn {
        display: flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        width: 100%;

        margin-top: 25px;

        padding: 14px 20px;

        border: none;

        border-radius: 12px;

        background: #f5a623;

        color: white;

        font-size: 15px;

        font-weight: 600;

        cursor: pointer;

        transition: 0.3s;
    }

    .declare-donation-btn:hover {
        background: #e29412;

        transform: translateY(-2px);
    }


    /* =========================================================
       PAYPAL
    ========================================================= */

    .paypal-description {
        color: #666;

        font-size: 15px;

        line-height: 1.7;

        margin-bottom: 25px;
    }

    .paypal-box {
        background: #f5f9ff;

        border: 1px solid #e2edf9;

        border-radius: 18px;

        padding: 25px;

        text-align: center;

        margin-bottom: 25px;
    }

    .paypal-logo {
        color: #0070ba;

        font-size: 40px;

        margin-bottom: 12px;
    }

    .paypal-box h4 {
        color: #173f35;

        margin-bottom: 8px;
    }

    .paypal-box p {
        color: #777;

        font-size: 14px;

        line-height: 1.6;

        margin: 0;
    }

    .paypal-btn {
        display: flex;

        align-items: center;
        justify-content: center;

        gap: 10px;

        width: 100%;

        padding: 14px 20px;

        border-radius: 12px;

        background: #0070ba;

        color: white;

        text-decoration: none;

        font-weight: 600;

        transition: 0.3s;
    }

    .paypal-btn:hover {
        background: #005ea6;

        color: white;

        transform: translateY(-2px);
    }

    .paypal-btn.disabled {
        background: #b9c2c8;

        cursor: not-allowed;

        pointer-events: none;
    }


    /* =========================================================
       FORMULAIRE
    ========================================================= */

    .don-form-section {
        display: none;

        margin-top: 45px;
    }

    .don-form-section.active {
        display: block;
    }

    .don-form-card {
        background: white;

        border-radius: 25px;

        padding: 40px;

        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.07);

        border: 1px solid #eeeeee;
    }

    .don-form-title {
        text-align: center;

        margin-bottom: 30px;
    }

    .don-form-title h3 {
        color: #173f35;

        font-size: 27px;

        margin-bottom: 10px;
    }

    .don-form-title p {
        color: #777;

        margin: 0;
    }

    .form-grid {
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 20px;
    }

    .form-group {
        display: flex;

        flex-direction: column;
    }

    .form-group.full {
        grid-column: 1 / -1;
    }

    .form-group label {
        margin-bottom: 8px;

        color: #173f35;

        font-size: 14px;

        font-weight: 600;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;

        padding: 13px 14px;

        border: 1px solid #ddd;

        border-radius: 10px;

        outline: none;

        font-size: 14px;

        background: #fafafa;

        transition: 0.2s;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #f5a623;

        background: white;

        box-shadow: 0 0 0 3px rgba(245, 166, 35, 0.10);
    }

    .form-group textarea {
        min-height: 120px;

        resize: vertical;
    }

    .form-note {
        margin-top: 20px;

        padding: 15px;

        background: #edf6f2;

        border-radius: 10px;

        color: #65736e;

        font-size: 13px;

        line-height: 1.6;
    }

    .form-actions {
        display: flex;

        justify-content: center;

        gap: 15px;

        margin-top: 25px;
    }

    .submit-donation-btn,
    .cancel-form-btn {
        border: none;

        border-radius: 11px;

        padding: 13px 25px;

        font-weight: 600;

        cursor: pointer;
    }

    .submit-donation-btn {
        background: #173f35;

        color: white;
    }

    .submit-donation-btn:hover {
        background: #245b4e;
    }

    .cancel-form-btn {
        background: #eeeeee;

        color: #555;
    }

    .cancel-form-btn:hover {
        background: #e1e1e1;
    }


    /* =========================================================
       SECURITE
    ========================================================= */

    .security-box {
        display: flex;

        align-items: flex-start;

        gap: 15px;

        margin-top: 35px;

        padding: 22px 25px;

        background: #edf6f2;

        border-radius: 17px;
    }

    .security-box i {
        color: #173f35;

        font-size: 22px;
    }

    .security-box h4 {
        color: #173f35;

        margin: 0 0 5px;

        font-size: 16px;
    }

    .security-box p {
        margin: 0;

        color: #65736e;

        font-size: 14px;

        line-height: 1.6;
    }


    /* =========================================================
       REMERCIEMENT
    ========================================================= */

    .thanks {
        text-align: center;

        margin-top: 65px;
    }

    .thanks-icon {
        color: #e85d75;

        font-size: 35px;

        margin-bottom: 15px;
    }

    .thanks h3 {
        color: #173f35;

        font-size: 25px;

        margin-bottom: 10px;
    }

    .thanks p {
        max-width: 650px;

        margin: auto;

        color: #777;

        line-height: 1.7;
    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 850px) {

        .don-methods {
            grid-template-columns: 1fr;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .form-group.full {
            grid-column: auto;
        }

    }



    @media (max-width: 600px) {

    /* ================================
       PAGE
    ================================ */

    .don-page {
        padding-top: 95px;
        padding-bottom: 50px;
    }


    /* ================================
       HERO
    ================================ */

    .don-hero {
        padding: 50px 18px;
        border-radius: 0 0 30px 30px;
    }

    .don-hero h1 {
        font-size: 30px;
        line-height: 1.25;
    }

    .don-hero p {
        font-size: 15px;
        line-height: 1.6;
    }


    /* ================================
       CONTAINER
    ================================ */

    .don-container {
        width: 94%;
        margin-top: 40px;
    }


    /* ================================
       INTRO
    ================================ */

    .don-intro {
        margin-bottom: 30px;
    }

    .don-intro h2 {
        font-size: 26px;
    }

    .don-intro p {
        font-size: 14px;
    }


    /* ================================
       CARTES
    ================================ */

    .don-card,
    .don-form-card {
        padding: 22px 17px;
        border-radius: 18px;
    }

    .don-card-header {
        gap: 12px;
        margin-bottom: 22px;
    }

    .don-icon {
        width: 52px;
        height: 52px;
        font-size: 23px;
        border-radius: 14px;
    }

    .don-card-header h3 {
        font-size: 19px;
    }

    .don-card-header p {
        font-size: 13px;
    }


    /* ================================
       INFORMATIONS BANCAIRES
    ================================ */

    .bank-info {
        padding: 15px;
    }

    .bank-row {
        padding: 12px 0;
    }

    .bank-value {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
        font-size: 14px;
    }

    .copy-btn {
        align-self: flex-start;
    }


    /* ================================
       INSTRUCTIONS
    ================================ */

    .don-instructions {
        padding: 16px;
    }

    .don-instructions ol {
        padding-left: 18px;
        font-size: 13px;
        line-height: 1.7;
    }


    /* ================================
       PAYPAL
    ================================ */

    .paypal-box {
        padding: 20px 15px;
    }

    .paypal-description {
        font-size: 14px;
    }


    /* ================================
       FORMULAIRE
    ================================ */

    .don-form-title h3 {
        font-size: 23px;
    }

    .form-grid {
        gap: 16px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        font-size: 16px;
    }

    .form-group textarea {
        min-height: 110px;
    }


    /* ================================
       BOUTONS
    ================================ */

    .form-actions {
        flex-direction: column;
        gap: 10px;
    }

    .submit-donation-btn,
    .cancel-form-btn {
        width: 100%;
    }


    /* ================================
       SÉCURITÉ
    ================================ */

    .security-box {
        flex-direction: column;
        padding: 18px;
        gap: 10px;
    }


    /* ================================
       REMERCIEMENT
    ================================ */

    .thanks {
        margin-top: 45px;
    }

    .thanks h3 {
        font-size: 22px;
    }

    .thanks p {
        font-size: 14px;
    }

}



    /* =========================================================
   NAVBAR RESPONSIVE - PAGE DON
========================================================= */





</style>


<div class="donation-page">


    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="don-hero">

        <div class="don-hero-content">

            <h1>

                Ensemble, offrons-leur

                <span class="highlight">
                    un avenir meilleur
                </span>

                <span class="heart">

                </span>

            </h1>

            <p>

                Bonjour
                <strong>{{ Auth::user()->name }}</strong>
                👋

                <br>

                Votre générosité peut contribuer à offrir aux enfants
                un avenir meilleur, de l'éducation, des soins et
                un environnement dans lequel ils peuvent grandir.

            </p>

        </div>

    </section>



    {{-- =====================================================
         CONTENU
    ====================================================== --}}

    <main class="don-container">


        {{-- INTRODUCTION --}}

        <div class="don-intro">

            <h2>
                Faites la différence ❤️
            </h2>

            <p>

                Chaque contribution, quelle que soit sa valeur,
                peut aider à améliorer le quotidien des enfants.

                <br>

                Choisissez simplement la méthode de don
                qui vous convient le mieux.

            </p>

        </div>



        {{-- =================================================
             MÉTHODES DE DON
        ================================================== --}}

        <div class="don-methods">


            {{-- =================================================
                 VIREMENT BANCAIRE
            ================================================== --}}

            <div class="don-card">

                <div class="don-card-header">

                    <div class="don-icon bank-icon">

                        <i class="fa-solid fa-building-columns"></i>

                    </div>

                    <div>

                        <h3>
                            Virement bancaire
                        </h3>

                        <p>
                            Donnez directement depuis votre banque
                        </p>

                    </div>

                </div>



                {{-- INFORMATIONS BANCAIRES --}}

                <div class="bank-info">


                    {{-- BENEFICIAIRE --}}

                    <div class="bank-row">

                        <span class="bank-label">
                            Bénéficiaire
                        </span>

                        <div class="bank-value">

                            <span>
                                NOM DU BÉNÉFICIAIRE
                            </span>

                        </div>

                    </div>



                    {{-- BANQUE --}}

                    <div class="bank-row">

                        <span class="bank-label">
                            Banque
                        </span>

                        <div class="bank-value">

                            <span>
                                BBVA México
                            </span>

                        </div>

                    </div>



                    {{-- CLABE --}}

                    <div class="bank-row">

                        <span class="bank-label">
                            CLABE
                        </span>

                        <div class="bank-value">

                            <span id="clabe">
                                VOTRE_CLABE_ICI
                            </span>

                            <button
                                type="button"
                                class="copy-btn"
                                onclick="copyClabe()">

                                <i class="fa-regular fa-copy"></i>

                                Copier

                            </button>

                        </div>

                    </div>



                    {{-- SWIFT --}}

                    <div class="bank-row">

                        <span class="bank-label">
                            SWIFT / BIC
                        </span>

                        <div class="bank-value">

                            <span>
                                VOTRE_SWIFT_ICI
                            </span>

                        </div>

                    </div>


                </div>



                {{-- INSTRUCTIONS --}}

                <div class="don-instructions">

                    <h4>

                        <i class="fa-solid fa-circle-info"></i>

                        Comment effectuer votre don ?

                    </h4>

                    <ol>

                        <li>
                            Connectez-vous à votre application bancaire.
                        </li>

                        <li>
                            Choisissez l'option de virement.
                        </li>

                        <li>
                            Renseignez les coordonnées indiquées ci-dessus.
                        </li>

                        <li>
                            Indiquez le montant de votre don.
                        </li>

                        <li>
                            Validez le virement.
                        </li>

                    </ol>

                </div>



                {{-- DECLARATION DU DON --}}

                <button
                    type="button"
                    class="declare-donation-btn"
                    onclick="showDonationForm()">

                    <i class="fa-solid fa-circle-check"></i>

                    J’ai effectué mon don

                </button>


            </div>



            {{-- =================================================
                 PAYPAL
            ================================================== --}}

            <div class="don-card">

                <div class="don-card-header">

                    <div class="don-icon paypal-icon">

                        <i class="fa-brands fa-paypal"></i>

                    </div>

                    <div>

                        <h3>
                            PayPal
                        </h3>

                        <p>
                            Donnez rapidement en ligne
                        </p>

                    </div>

                </div>



                <p class="paypal-description">

                    Vous préférez utiliser PayPal ?

                    Vous pourrez effectuer votre don directement
                    depuis votre compte PayPal.

                </p>



                <div class="paypal-box">

                    <div class="paypal-logo">

                        <i class="fa-brands fa-paypal"></i>

                    </div>

                    <h4>
                        Soutenez Espoir d'Enfance
                    </h4>

                    <p>

                        Votre don sera effectué sur une page
                        sécurisée PayPal.

                        <br>

                        Vos informations bancaires ne sont jamais
                        communiquées à notre site.

                    </p>

                </div>



                {{--

                    LE LIEN PAYPAL.ME SERA AJOUTÉ PLUS TARD.

                    Exemple :

                    href="https://paypal.me/TonNom"

                --}}

                <a
                    href="#"
                    class="paypal-btn disabled">

                    <i class="fa-brands fa-paypal"></i>

                    Faire un don avec PayPal

                </a>


            </div>


        </div>



        {{-- =================================================
             FORMULAIRE DE DECLARATION DU DON
        ================================================== --}}

        <section
            id="donationFormSection"
            class="don-form-section">


            <div class="don-form-card">


                <div class="don-form-title">

                    <h3>

                        Confirmer votre don ❤️

                    </h3>

                    <p>

                        Merci pour votre générosité.

                        Indiquez les informations relatives
                        à votre virement afin que nous puissions
                        vérifier votre don.

                    </p>

                </div>



                {{--

                    POUR LE MOMENT :

                    action="#"

                    Plus tard, nous remplacerons par :

                    action="{{ route('donations.store') }}"

                --}}

                <form
                    action="#"
                    method="POST">

                    @csrf


                    <div class="form-grid">


                        {{-- NOM --}}

                        <div class="form-group">

                            <label for="name">
                                Nom complet
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ Auth::user()->name }}"
                                placeholder="Votre nom complet"
                                required>

                        </div>



                        {{-- EMAIL --}}

                        <div class="form-group">

                            <label for="email">
                                Adresse e-mail
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ Auth::user()->email }}"
                                placeholder="exemple@email.com"
                                required>

                        </div>



                        {{-- MONTANT --}}

                        <div class="form-group">

                            <label for="amount">
                                Montant du don
                            </label>

                            <input
                                type="number"
                                id="amount"
                                name="amount"
                                min="1"
                                step="0.01"
                                placeholder="Ex : 500"
                                required>

                        </div>



                        {{-- DEVISE --}}

                        <div class="form-group">

                            <label for="currency">
                                Devise
                            </label>

                            <select
                                id="currency"
                                name="currency"
                                required>

                                <option value="">
                                    Sélectionnez une devise
                                </option>

                                <option value="XOF">
                                    XOF — Franc CFA
                                </option>

                                <option value="MXN">
                                    MXN — Peso mexicain
                                </option>

                                <option value="EUR">
                                    EUR — Euro
                                </option>

                                <option value="USD">
                                    USD — Dollar américain
                                </option>

                            </select>

                        </div>



                        {{-- DATE --}}

                        <div class="form-group">

                            <label for="transfer_date">
                                Date du virement
                            </label>

                            <input
                                type="date"
                                id="transfer_date"
                                name="transfer_date"
                                max="{{ date('Y-m-d') }}"
                                required>

                        </div>



                        {{-- REFERENCE --}}

                        <div class="form-group">

                            <label for="reference">
                                Référence du virement
                            </label>

                            <input
                                type="text"
                                id="reference"
                                name="reference"
                                placeholder="Référence indiquée par votre banque"
                                required>

                        </div>



                        {{-- MESSAGE --}}

                        <div class="form-group full">

                            <label for="message">
                                Message
                                <span style="font-weight: normal; color: #999;">
                                    (facultatif)
                                </span>
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                placeholder="Un petit message pour l'équipe d'Espoir d'Enfance..."></textarea>

                        </div>


                    </div>



                    {{-- NOTE --}}

                    <div class="form-note">

                        <i class="fa-solid fa-circle-info"></i>

                        Ces informations nous permettront
                        d'identifier votre virement et de vérifier
                        votre don.

                        <strong>
                            Ne renseignez jamais votre numéro de carte,
                            CVV, code PIN ou mot de passe bancaire.
                        </strong>

                    </div>



                    {{-- ACTIONS --}}

                    <div class="form-actions">

                        <button
                            type="button"
                            class="cancel-form-btn"
                            onclick="hideDonationForm()">

                            Annuler

                        </button>

                        <button
                            type="submit"
                            class="submit-donation-btn">

                            <i class="fa-solid fa-paper-plane"></i>

                            Envoyer ma déclaration

                        </button>

                    </div>


                </form>


            </div>

        </section>



        {{-- =================================================
             SECURITE
        ================================================== --}}

        <div class="security-box">

            <i class="fa-solid fa-shield-heart"></i>

            <div>

                <h4>
                    Votre sécurité est importante
                </h4>

                <p>

                    Nous ne vous demanderons jamais votre mot de passe,
                    votre code PIN, votre CVV ou vos codes de confirmation
                    bancaire.

                    Pour effectuer un don, utilisez uniquement les
                    informations et les moyens de paiement présentés
                    sur cette page.

                </p>

            </div>

        </div>



        {{-- =================================================
             REMERCIEMENT
        ================================================== --}}

        <div class="thanks">

            <div class="thanks-icon">

                <i class="fa-solid fa-hand-holding-heart"></i>

            </div>

            <h3>
                Merci de faire partie de cette aventure.
            </h3>

            <p>

                Votre soutien peut contribuer à offrir aux enfants
                davantage de possibilités, de sécurité et d'espoir
                pour leur avenir.

                <br>

                <strong style="color: orange">
                    Chaque geste compte.
                </strong>

            </p>

        </div>


    </main>

</div>



{{-- =========================================================
     JAVASCRIPT
========================================================= --}}


<script>

    /*
    |--------------------------------------------------------------------------
    | AFFICHER LE FORMULAIRE DE DON
    |--------------------------------------------------------------------------
    */

    function showDonationForm() {

        const formSection =
            document.getElementById('donationFormSection');

        formSection.classList.add('active');

        formSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });

    }



    /*
    |--------------------------------------------------------------------------
    | CACHER LE FORMULAIRE
    |--------------------------------------------------------------------------
    */

    function hideDonationForm() {

        const formSection =
            document.getElementById('donationFormSection');

        formSection.classList.remove('active');

    }



    /*
    |--------------------------------------------------------------------------
    | COPIER LA CLABE
    |--------------------------------------------------------------------------
    */

    function copyClabe() {

        const clabeElement =
            document.getElementById('clabe');

        const clabe =
            clabeElement.innerText.trim();

        navigator.clipboard.writeText(clabe)
            .then(() => {

                const button =
                    document.querySelector('.copy-btn');

                const originalText =
                    button.innerHTML;

                button.innerHTML =
                    '<i class="fa-solid fa-check"></i> Copié !';

                setTimeout(() => {

                    button.innerHTML =
                        originalText;

                }, 2000);

            })
            .catch(() => {

                alert('Impossible de copier la CLABE.');

            });

    }

</script>

@endsection

