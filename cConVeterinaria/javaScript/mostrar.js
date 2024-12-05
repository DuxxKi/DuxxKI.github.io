// Selecciona el botón y el div del formulario
const boton = document.getElementById("mostrarFormulario");
const formularioDiv = document.getElementById("formularioDiv");

// Agrega un event listener al botón
boton.addEventListener("click", function() {
    // Cambia el estilo para mostrar u ocultar el formulario
    if (formularioDiv.style.display === "none" || formularioDiv.style.display === "") {
        formularioDiv.style.display = "block";  // Muestra el formulario
    } else {
        formularioDiv.style.display = "none";   // Oculta el formulario si ya está visible
    }
});
