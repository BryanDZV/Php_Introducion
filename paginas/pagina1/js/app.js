// Ejemplo simple de interacción
document.addEventListener("DOMContentLoaded", () => {
    const lista = document.querySelectorAll("ul li");
    lista.forEach(li => {
        li.addEventListener("click", () => {
            alert("Has hecho clic en: " + li.textContent);
        });
    });
});
