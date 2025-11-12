// js/main.js
document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;

    // 1. Revisar si hay una preferencia guardada en localStorage
    const savedTheme = localStorage.getItem('theme');
    
    if (savedTheme) {
        if (savedTheme === 'light') {
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
            themeToggle.checked = false; // El toggle (deslizado a la izquierda)
        } else {
            body.classList.add('dark-mode');
            body.classList.remove('light-mode');
            themeToggle.checked = true; // El toggle (deslizado a la derecha)
        }
    } else {
        // Si no hay nada guardado, por defecto es 'dark' (como está en el HTML)
        themeToggle.checked = true;
    }

    // 2. Añadir el 'listener' al interruptor
    themeToggle.addEventListener('change', () => {
        if (themeToggle.checked) {
            // Cambiar a modo oscuro
            body.classList.add('dark-mode');
            body.classList.remove('light-mode');
            localStorage.setItem('theme', 'dark');
        } else {
            // Cambiar a modo claro
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
            localStorage.setItem('theme', 'light');
        }
    });
});