const userDropdownBtn = document.getElementById("userDropdownBtn");
const userDropdownMenu = document.getElementById("userDropdownMenu");
const userDropdown = document.querySelector(".user-dropdown");

if (userDropdownBtn && userDropdownMenu) {

    userDropdownBtn.addEventListener("click", (event) => {

        event.stopPropagation();

        userDropdownMenu.classList.toggle("show");
        userDropdown.classList.toggle("active");

    });


    // Fermer lorsqu'on clique ailleurs
    document.addEventListener("click", () => {

        userDropdownMenu.classList.remove("show");
        userDropdown.classList.remove("active");

    });

}
