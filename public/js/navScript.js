const menu = document.querySelector('#menu-pintper');
const salir = document.querySelector('#salir-pintper');
const publicidad = document.querySelector('#publicidad');

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