console.log("Validation script loaded");

document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll("form").forEach(form => {
        
        form.addEventListener("submit", function(e) {

            // Eliminar errores anteriores
            form.querySelectorAll(".js-error").forEach(el => el.remove());

            let valido = true;

            // Selecciona todos los campos del formulario
            form.querySelectorAll("input, select, textarea").forEach(input => {
                const value = input.value.trim();
                const type  = input.type;

                // Validar vacío
                if (value === "") {
                    valido = false;
                    mostrarError(input, "Este campo no puede estar vacío");
                    return;
                }

                // Validación según tipo
                switch (type) {
                    case "number":
                        if (isNaN(value)) {
                            valido = false;
                            mostrarError(input, "Debe ser un número válido");
                        }
                        break;

                    case "email":
                        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!regex.test(value)) {
                            valido = false;
                            mostrarError(input, "Correo electrónico inválido");
                        }
                        break;

                    case "date":
                        if (isNaN(Date.parse(value))) {
                            valido = false;
                            mostrarError(input, "Fecha inválida");
                        }
                        break;
                }
            });

            // Si NO es válido, prevenir envío
            if (!valido) {
                e.preventDefault();
            }
        });
    });

});

/* Función que agrega el error debajo del input */
function mostrarError(input, mensaje) {
    const div = document.createElement("div");
    div.classList.add("js-error");
    div.style.color = "red";
    div.style.fontSize = "0.9rem";
    div.innerText = mensaje;
    input.insertAdjacentElement("afterend", div);
}

