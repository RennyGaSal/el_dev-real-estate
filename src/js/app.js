document.addEventListener('DOMContentLoaded', function() {
    responsiveNav();

    darkMode();
});

function darkMode() {
    const darkModeButton = document.querySelector('.dark-mode-button');
    const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    
    if (prefersDarkMode.matches) {
        document.body.classList.add('dark-mode');
        darkModeButton.classList.add('active');
    }

    darkModeButton.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
        darkModeButton.classList.toggle('active');
    });

    prefersDarkMode.addEventListener('change', function() {
        if (prefersDarkMode.matches) {
            document.body.classList.add('dark-mode');
            darkModeButton.classList.add('active');
        } else {
            document.body.classList.remove('dark-mode');
            darkModeButton.classList.remove('active');
        }
    });
}

function responsiveNav() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', function() {
        const nav = document.querySelector('.nav');
        nav.classList.toggle('show');
        mobileMenu.classList.toggle('active');
    });
}
