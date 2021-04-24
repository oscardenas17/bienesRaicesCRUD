document.addEventListener('DOMContentLoaded', function(){
    eventListeners();

    darkMode();
});

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click',navegacionResponsive );
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    // navegacion.classList.toggle('mostrar');
    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');
    }
}


function darkMode(){
    const botonDarkmode = document.querySelector('.dark-mode-boton');

    botonDarkmode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}