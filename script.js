/*esta es mi funcion para el menu hamburguesa*/



const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("#menu ul");

function alternarMenu() {
    menu.classList.toggle("abierto");

    const estaAbierto = menu.classList.contains("abierto");

    botonMenu.setAttribute("aria-expanded", estaAbierto);
    botonMenu.textContent = estaAbierto ? " Cerrar menú" : "☰ Menú";
}

botonMenu.addEventListener("click", alternarMenu);



/* esta es mi funcion para hacer mi menu de modo dia y modo oscuro*/

const cuerpo = document.body;
const botonModo = document.querySelector("#btn-tema");

if (botonModo) {
    botonModo.addEventListener("click", function () {

        cuerpo.classList.toggle("claro");

        const esDeDia = cuerpo.classList.contains("claro");

        if (esDeDia) {
            botonModo.textContent = " Modo dia";
        } else {
            botonModo.textContent = " Modo oscuro";
        }

    });
}
/*estas son mis validaciones para mi formulario */


/* Validaciones del formulario */
const formulario = document.querySelector("#form-contacto");
const aviso = document.querySelector("#aviso-contacto");

function revisarFormulario(event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    const telefono = document.querySelector("#telefono").value.trim();

    aviso.classList.remove("error", "exito");

    if (nombre === "") {
        aviso.textContent = "Falta tu nombre.";
        aviso.classList.add("error");
    } else if (correo === "" || !correo.includes("@")) {
        aviso.textContent = "Escribe un correo que contenga @.";
        aviso.classList.add("error");
    } else if (telefono === "") {
        aviso.textContent = "Falta tu teléfono.";
        aviso.classList.add("error");
    } else {
        aviso.textContent = "Formulario validado correctamente.";
        aviso.classList.add("exito");
    }
}

formulario.addEventListener("submit", revisarFormulario);
