const togglePassword = document.getElementById("togglePassword");
const password = document.getElementById("password");

if (togglePassword && password) {

    togglePassword.addEventListener("click", () => {

        if (password.type === "password") {

            password.type = "text";

            togglePassword.innerHTML =
                '<i class="fa-solid fa-eye-slash"></i>';

            togglePassword.setAttribute(
                "aria-label",
                "Masquer le mot de passe"
            );

        } else {

            password.type = "password";

            togglePassword.innerHTML =
                '<i class="fa-solid fa-eye"></i>';

            togglePassword.setAttribute(
                "aria-label",
                "Afficher le mot de passe"
            );
        }

    });

}




const togglePasswordConfirmation =
    document.getElementById("togglePasswordConfirmation");

const passwordConfirmation =
    document.getElementById("password_confirmation");

if (togglePasswordConfirmation && passwordConfirmation) {

    togglePasswordConfirmation.addEventListener("click", () => {

        if (passwordConfirmation.type === "password") {

            passwordConfirmation.type = "text";

            togglePasswordConfirmation.innerHTML =
                '<i class="fa-solid fa-eye-slash"></i>';

            togglePasswordConfirmation.setAttribute(
                "aria-label",
                "Masquer la confirmation du mot de passe"
            );

        } else {

            passwordConfirmation.type = "password";

            togglePasswordConfirmation.innerHTML =
                '<i class="fa-solid fa-eye"></i>';

            togglePasswordConfirmation.setAttribute(
                "aria-label",
                "Afficher la confirmation du mot de passe"
            );
        }

    });

}
