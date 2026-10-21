
/* Validaciones del formulario de la saltenería parcial2 */

const formulario = document.querySelector("#form-horno");
const aviso = document.querySelector("#aviso-horno");

function revisarFormulario(event) {
    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();

    aviso.classList.remove("error", "exito");

    if (nombre === "" || correo === "") {
        event.preventDefault();
        aviso.textContent = "Sin tu nombre y tu correo no anotamos el pedido.";
        aviso.classList.add("error");
    } else if (!correo.includes("@")) {
        event.preventDefault();
        aviso.textContent = "A ese correo le falta el arroba - corregilo antes de enviar.";
        aviso.classList.add("error");
    } else {
        aviso.textContent = "Pedido tomado - te atiende Katherine Lopez Ramos";
        aviso.classList.add("exito");
    }
}

if (formulario && aviso) {
    formulario.addEventListener("submit", revisarFormulario);
}
