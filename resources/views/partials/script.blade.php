
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



</script>
