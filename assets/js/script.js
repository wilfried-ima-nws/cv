document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll("nav button");
    const sections = document.querySelectorAll("main section");

    // Fonction pour afficher une section et masquer les autres
    function showSection(index) {
        sections.forEach((section, i) => {
            section.style.display = i === index ? "block" : "none";
        });
    }

    // Ajout d'événements aux boutons pour afficher la bonne section
    buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
            showSection(index);
        });
    });

    // Afficher uniquement la première section au chargement
    showSection(0);

    // Ajout d'un effet de scroll smooth aux liens de contact
    document.querySelectorAll("a[href^='mailto'], a[href^='tel']").forEach(link => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            window.location.href = link.getAttribute("href");
        });
    });
});
