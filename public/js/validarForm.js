function validar() {

    let correo = document.getElementById("correo").value;

    let clave = document.getElementById("clave").value;
    
    let mensajeError = document.getElementById("mensaje-error");

    const regExpCorreo = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    const regExpClave = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

    if(regExpCorreo.test(correo) && regExpClave.test(clave)) {
        return true;
    } else {
        mensajeError.innerHTML = "Correo y/o contraseña invalidos.";
        return false;
    }

}

function validarConfig() {

    let claveActual = document.getElementById("claveActual").value;
    let claveRepetida = document.getElementById("claveRepetida").value;
    let nuevaClave = document.getElementById("nuevaClave").value;

    let mensajeError = document.getElementById("mensaje-error");

    const regExpClave = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

    if(regExpClave.test(claveActual) && regExpClave.test(claveRepetida) && regExpClave.test(nuevaClave) && claveActual === claveRepetida){
        return true;
    } else {
        mensajeError.innerHTML = "Las contraseñas actuales no coinciden o su contraseña nueva no es válida.";
        return false;
    }

}

function validarFormularioPintper() {

    let nombre = document.getElementById("nombre").value;

    let correo = document.getElementById("correo").value;

    let mensaje = document.getElementById("mensaje").value;

    let mensajeError = document.getElementById("mensaje-error");

    const regExpCorreo = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    const regExpNombre = /^[a-zA-Z\s]+$/;

    if(regExpCorreo.test(correo) && regExpNombre.test(nombre) && mensaje != '') {
        return true;
    } else {
        mensajeError.innerHTML = "Campos invalidos.";
        return false;
    }

}

function validarBusquedaUsuario() {

    let nombreUsuario = document.getElementById("nombreUsuarioBusqueda").value;

    let mensajeErrorBusqueda = document.getElementById("mensaje-error-busqueda");

    const regExpNombre = /^[a-zA-Z\s]+$/;

    if(regExpNombre.test(nombreUsuario)) {
        return true;
    } else {
        mensajeErrorBusqueda.innerHTML = "Error. El nombre del usuario solo contiene letras.";
        return false;
    }

}

function registrarUsuarioComun() {

    let nombre = document.getElementById("nombre").value;

    let correo = document.getElementById("correo").value;

    let clave = document.getElementById("clave").value;

    let repetirClave = document.getElementById("repetirClave").value;

    let mensajeError = document.getElementById("mensaje-error");

    const regExpCorreo = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    const regExpNombre = /^[a-zA-Z\s]+$/;

    const regExpClave = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

    if(regExpNombre.test(nombre) && regExpCorreo.test(correo) && regExpClave.test(clave) && regExpClave.test(repetirClave)) {
        
        if(clave === repetirClave) {
                return true;
        } else {
            mensajeError.innerHTML = "Las contraseñas no coinciden.";
            return false;
        }

    } else {
        mensajeError.innerHTML = "Campos invalidos.";
        return false;
    }

}

function validarRegistroDuenio () {

    let nombre = document.getElementById("nombre").value;

    let apellido = document.getElementById("apellido").value;

    let documento = document.getElementById("documento").value;

    let correo = document.getElementById("correo").value;

    let clave = document.getElementById("clave").value;

    let mensajeError = document.getElementById("mensaje-error");

    const regExpCorreo = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    const regExpNombre = /^[a-zA-Z\s]+$/;

    const regExpClave = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

    const regExpDocumento = /^[0-9\.]+$/;

    if(regExpNombre.test(nombre) && regExpNombre.test(apellido) && regExpDocumento.test(documento) && regExpCorreo.test(correo) && regExpClave.test(clave)) {
        return true;
    } else {
        mensajeError.innerHTML = "Campos invalidos.";
        return false;
    }

}

function validarAgregarEstilo() {

    let nombre = document.getElementById("nombre").value;
    
    let tipo = document.getElementById("tipo").value;

    let descripcion = document.getElementById("descripcion").value;

    let mensajeError = document.getElementById("mensaje-error");

    const regExpNombre = /^[a-zA-Z\s]+$/;

    if (regExpNombre.test(nombre) && tipo != "" && descripcion != "") {
        return true;
    } else {
        mensajeError.innerHTML = "Nombre solo puede llevar letras.";
        return false;
    }
}

function validarPublicidad() {

    let titulo = document.getElementById("titulo").value;

    let descripcion = document.getElementById("descripcion").value;

    let mensajeError = document.getElementById("mensaje-error");

    if(titulo != "" && descripcion != "") {
        return true;
    } else {
        mensajeError.innerHTML = "Error. El campo titulo o descripcion estan vacios.";
        return false;
    }
}

function validarAgregarLocal() {

    let nombre = document.getElementById("nombre").value;

    let telefono = document.getElementById("telefono").value;

    let direccion = document.getElementById("ubi").value;

    let desdeHora = document.getElementById("desdeHora").value;

    let hastaHora = document.getElementById("hastaHora").value;

    let mensajeError = document.getElementById("mensaje-error");

    const regExpTelefono = /^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/;

    if(nombre != "" && telefono!="" && direccion != "" && desdeHora != "" && hastaHora != "") {

        if(!(desdeHora < hastaHora)) {
            mensajeError.innerHTML = "Error. Hora invalida.";
            return false;
        }

        if (!regExpTelefono.test(telefono)){
            mensajeError.innerHTML = "Error. Telefono invalido.";
            return false;
        }
    } else {
        mensajeError.innerHTML = "Error. Campos vacíos o invalidos.";
        return false;
    }

}

function validarConfigDuenio() {

    let nombre = document.getElementById("nombre").value;

    let apellido = document.getElementById("apellido").value;

    let documento = document.getElementById("documento").value;

    let correo = document.getElementById("correo").value;

    let claveActual = document.getElementById("claveActual").value;

    let nuevaClave = document.getElementById("nuevaClave").value;

    let repetirNuevaClave = document.getElementById("repetirNuevaClave").value;
    
    let mensajeError = document.getElementById("mensaje-error");

    const regExpCorreo = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    const regExpNombre = /^[a-zA-Z\s]+$/;

    const regExpClave = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

    const regExpDocumento = /^[0-9\.]+$/;

    if(regExpNombre.test(nombre) && regExpNombre.test(apellido) && regExpDocumento.test(documento) && regExpCorreo.test(correo) && 
    regExpClave.test(claveActual) && regExpClave.test(nuevaClave) && regExpClave.test(repetirNuevaClave)){

        if(nuevaClave === repetirNuevaClave) {
            return true;
        } else {
            mensajeError.innerHTML = "Las contraseñas no coindiden";
            return false;
        }
    } else {
        mensajeError.innerHTML = "Error. Campos vacíos o invalidos.";
        return false;
    }


}