// public/js/main.js

document.addEventListener('DOMContentLoaded', function() {
    const darkModeSwitch = document.getElementById('darkModeSwitch');
    
    // Vérifiez si l'utilisateur a déjà choisi le mode sombre dans une session précédente
    const isDarkMode = localStorage.getItem('darkMode') === 'true';

    // Mettez à jour le switch en fonction de l'état stocké
    darkModeSwitch.checked = isDarkMode;

    // Mettez à jour le thème initial
    updateTheme(isDarkMode);

    darkModeSwitch.addEventListener('change', function() {
        const isDarkMode = darkModeSwitch.checked;
        
        // Stockez le choix de l'utilisateur dans le localStorage
        localStorage.setItem('darkMode', isDarkMode);

        // Mettez à jour le thème
        updateTheme(isDarkMode);
    });

    function updateTheme(isDarkMode) {
        // Ajoutez ou supprime la classe CSS pour le mode sombre du corps du document
        document.body.classList.toggle('dark-mode', isDarkMode);
    }
});