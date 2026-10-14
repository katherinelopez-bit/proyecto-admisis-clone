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

const formulario = document.querySelector("#form-contacto");
const aviso = document.querySelector("#aviso-contacto");

function revisarFormulario(event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();

    if (nombre === "") {
        aviso.textContent = "Falta tu nombre.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");

    } else if (correo === "" || !correo.includes("@") || !correo.includes(".")) {
        aviso.textContent = "Escribe un correo válido.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");

    } else {
        aviso.textContent = "Formulario enviado correctamente.";
        aviso.classList.add("exito");
        aviso.classList.remove("error");
    }
}

formulario.addEventListener("submit", revisarFormulario);

