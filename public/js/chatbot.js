/* =========================================
CHATBOT
========================================= */


const chatbotToggle = document.getElementById("chatbotToggle");
const chatbotWindow = document.getElementById("chatbotWindow");
const chatbotClose = document.getElementById("chatbotClose");




if (chatbotToggle && chatbotWindow && chatbotClose) {

    // Ouvrir
    chatbotToggle.addEventListener("click", () => {

        chatbotWindow.classList.add("active");

    });


    // Fermer
    chatbotClose.addEventListener("click", () => {

        chatbotWindow.classList.remove("active");

    });

}




/* =========================================
                ENVOI DES MESSAGES
========================================= */

const chatbotInput = document.getElementById("chatbotInput");
const chatbotSend = document.getElementById("chatbotSend");
const chatbotMessages = document.getElementById("chatbotMessages");




if (chatbotInput && chatbotSend && chatbotMessages) {

    function sendMessage() {


        const message = chatbotInput.value.trim();

        // Ne rien envoyer si le champ est vide
        if (message === "") {
            return;
        }

        /* ===============================
        MESSAGE UTILISATEUR
        =============================== */

        const userMessage = document.createElement("div");

        userMessage.classList.add("user-message");

        userMessage.textContent = message;

        chatbotMessages.appendChild(userMessage);

        // Vider le champ
        chatbotInput.value = "";


        /* ===============================
           LE BOT ÉCRIT...
        =============================== */

        const typingMessage = document.createElement("div");

        typingMessage.classList.add("bot-message");

        typingMessage.textContent = chatbotTypingText;

        chatbotMessages.appendChild(typingMessage);


        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;


        /* ===============================
           ENVOI À LARAVEL
        =============================== */

        fetch("/chat", {

            method: "POST",

            headers: {
                "Content-Type": "application/json",

                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content")
            },

            body: JSON.stringify({
                message: message
            })

        })
        .then(response => response.json())

        .then(data => {

            // Supprimer "L'assistant écrit..."
            typingMessage.remove();


            // Créer la réponse du bot
            const botMessage = document.createElement("div");

            botMessage.classList.add("bot-message");

            botMessage.textContent = data.reply;


            chatbotMessages.appendChild(botMessage);


            // Descendre automatiquement
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;

        })
        .catch(error => {

            console.error("Erreur :", error);

            typingMessage.remove();

        });

    } // ← FIN de sendMessage()


    /* ===============================
       ÉVÉNEMENT CLICK
    =============================== */

    chatbotSend.addEventListener("click", function() {

        console.log("CLICK");

        sendMessage();

    });


    /* ===============================
       TOUCHE ENTRÉE
    =============================== */

    chatbotInput.addEventListener("keydown", function(event) {

        console.log("TOUCHE :", event.key);

        if (event.key === "Enter") {

            event.preventDefault();

            console.log("ENTER");

            sendMessage();

        }

    });

}

