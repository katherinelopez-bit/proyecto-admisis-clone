/*esta es mi funcion para el menu hamburguesa*/
const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("#menu ul");

function alternarMenu() {
    menu.classList.toggle("abierto");

    const estaAbierto = menu.classList.contains("abierto");

    botonMenu.setAttribute("aria-expanded", estaAbierto);
}

botonMenu.addEventListener("click", alternarMenu);