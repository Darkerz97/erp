const toggleSidebar = document.getElementById("toggle-sidebar");
const sidebar = document.querySelector(".sidebar");

toggleSidebar.addEventListener("click", () => {
    sidebar.classList.toggle("active");
});

const selectorFormulario = document.getElementById("pedido");
const formulario1 = document.getElementById("formulario1");
const formulario2 = document.getElementById("formulario2");
const formulario3 = document.getElementById("formulario3");

selectorFormulario.addEventListener("change", function () {
    formulario1.style.display = "none";
    formulario2.style.display = "none";
    formulario3.style.display = "none";

    if (this.value === "almacen") {
        formulario1.style.display = "block";
    } else if (this.value === "solicitudprueb") {
        formulario2.style.display = "block";
    } else if (this.value === "solicitudcomp") {
        const confirmation = confirm(
            "esta accion levantara pedido de componenetes para finalizar diagnostico"
        );
        if (confirmation) {
            formulario3.style.display = "block";
        }
    }
});

//buscador para mouser
const searchMouserButton = document.getElementById("searchMouser");
const mouserResultsDiv = document.getElementById("mouserResults");

searchMouserButton.addEventListener("click", async () => {
    const partNumber = document.getElementById("searchPartNumber").value;
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    fetch("/api/mouser/search", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
        },
        body: JSON.stringify({ mouserPartNumber: partNumber }),
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then((data) => {
            if (
                data &&
                data.SearchResults &&
                data.SearchResults.Parts &&
                data.SearchResults.Parts.length > 0
            ) {
                const part = data.SearchResults.Parts[0];

                mouserResultsDiv.innerHTML = `
                    <h3>Resultados de Mouser</h3>
                    <p>Número de Parte: ${part.MouserPartNumber}</p>
                    <p>Descripción: ${part.Description}</p>
                    <p>URL: <a href="${part.ProductDetailUrl}" target="_blank">Ver en Mouser</a></p>
                    <p>Especificaciones: ${part.Specifications}</p>
                `;

                document.querySelector('input[name="part_number"]').value =
                    part.MouserPartNumber;
                document.querySelector(
                    'input[placeholder="descripcion"]'
                ).value = part.Description;
                document.querySelector('input[placeholder="url"]').value =
                    part.ProductDetailUrl;
                document.querySelector(
                    'input[placeholder="especificaciones"]'
                ).value = part.Specifications;
            } else {
                mouserResultsDiv.innerHTML =
                    "<p>No se encontraron resultados.</p>";
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            mouserResultsDiv.innerHTML =
                "<p>Ocurrió un error en la búsqueda.</p>";
        });
});
