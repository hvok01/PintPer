const menu = document.querySelector('#menu-pintper');
const salir = document.querySelector('#salir-pintper');
const publicidad = document.querySelector('#publicidad');

//eventos de click para los estilos

menu.addEventListener('click', () => {
    menu.classList.toggle("hidden");
    salir.classList.remove("hidden");
    publicidad.classList.toggle("EspacioPublicidadReducido");
    publicidad.classList.remove("EspacioPublicidad");
});

salir.addEventListener('click', () => {
    salir.classList.toggle("hidden");
    menu.classList.remove("hidden");
    publicidad.classList.toggle("EspacioPublicidad");
    publicidad.classList.remove("EspacioPublicidadReducido");
});

function validarBusqueda () {

    let busqueda = document.getElementById("txt-busqueda").value;

    const regExp = /^[A-Za-z0-9\s]+$/;

    if(regExp.test(busqueda)) {
        return true;
    } else {
        alert("La busqueda es incorrecta");
        return false;
    }

}

//evento click para el menu de la derecha

/* const iconMenu = document.querySelector('#user-icon');
const menuNav = document.querySelector('#menu-usuario-comun');

iconMenu.addEventListener('click', () => {

    if(publicidad.classList.value != "EspacioPublicidadMenu") {
        publicidad.classList.toggle("EspacioPublicidadMenu");
    } else {
        publicidad.classList.remove("EspacioPublicidadMenu");
    }

    console.log("hola");
}); */