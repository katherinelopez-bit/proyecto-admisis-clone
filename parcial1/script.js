
const boton = document.querySelector("#btn-confirmar");

boton.addEventListener("click", function() {
    const mensaje = document.querySelector("#mensaje");

    mensaje.textContent = "Encargo recibido - te atiende Katherine Lopez Ramos";
    mensaje.classList.remove("oculto");
});
