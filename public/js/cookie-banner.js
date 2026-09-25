document.addEventListener("DOMContentLoaded", function () {

    const cookieBanner = document.getElementById("cookieBanner");
    const cookieSettings = document.getElementById("cookieSettings");

    const cookieAccept = document.getElementById("cookieAccept");
    const cookieRefuse = document.getElementById("cookieRefuse");
    const cookieCustomize = document.getElementById("cookieCustomize");

    const cookieSettingsClose = document.getElementById("cookieSettingsClose");
    const cookieSettingsRefuse = document.getElementById("cookieSettingsRefuse");
    const cookieSettingsSave = document.getElementById("cookieSettingsSave");

    const analyticsCookies = document.getElementById("analyticsCookies");
    const preferenceCookies = document.getElementById("preferenceCookies");


    // Vérifier le choix déjà enregistré
    const cookieChoice = localStorage.getItem("cookieChoice");


    // Afficher la bannière si aucun choix n'existe
    if (!cookieChoice) {
        cookieBanner.style.display = "block";
    }


    // ================================
    // ACCEPTER TOUS LES COOKIES
    // ================================

    cookieAccept.addEventListener("click", function () {

        localStorage.setItem("cookieChoice", "accepted");

        localStorage.setItem("analyticsCookies", "true");
        localStorage.setItem("preferenceCookies", "true");

        cookieBanner.style.display = "none";
    });


    // ================================
    // REFUSER LES COOKIES OPTIONNELS
    // ================================

    cookieRefuse.addEventListener("click", function () {

        localStorage.setItem("cookieChoice", "refused");

        localStorage.setItem("analyticsCookies", "false");
        localStorage.setItem("preferenceCookies", "false");

        cookieBanner.style.display = "none";
    });


    // ================================
    // OUVRIR LES PRÉFÉRENCES
    // ================================

    cookieCustomize.addEventListener("click", function () {

        cookieBanner.style.display = "none";
        cookieSettings.style.display = "flex";

    });


    // ================================
    // FERMER LES PRÉFÉRENCES
    // ================================

    cookieSettingsClose.addEventListener("click", function () {

        cookieSettings.style.display = "none";

        // Si aucun choix n'a encore été fait,
        // on réaffiche la bannière.
        if (!localStorage.getItem("cookieChoice")) {
            setTimeout(function(){
                cookieBanner.style.display = "block";
            },7000);
        }

    });


    // ================================
    // TOUT REFUSER
    // ================================

    cookieSettingsRefuse.addEventListener("click", function () {

        localStorage.setItem("cookieChoice", "refused");

        localStorage.setItem("analyticsCookies", "false");
        localStorage.setItem("preferenceCookies", "false");

        cookieSettings.style.display = "none";
        cookieBanner.style.display = "none";

    });


    // ================================
    // ENREGISTRER LES CHOIX
    // ================================

    cookieSettingsSave.addEventListener("click", function () {

        const analyticsAccepted = analyticsCookies.checked;
        const preferenceAccepted = preferenceCookies.checked;

        localStorage.setItem("cookieChoice", "custom");

        localStorage.setItem(
            "analyticsCookies",
            analyticsAccepted ? "true" : "false"
        );

        localStorage.setItem(
            "preferenceCookies",
            preferenceAccepted ? "true" : "false"
        );

        cookieSettings.style.display = "none";
        cookieBanner.style.display = "none";

    });

});
