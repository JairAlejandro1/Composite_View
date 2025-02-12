function changeView(view) {
    window.location.href = `index.php?view=${view}`;
}

// Cambiar la imagen de perfil dinámicamente
document.getElementById("profile-pic").addEventListener("click", function() {
    let newSrc = prompt("Ingresa la URL de la nueva imagen:");
    if (newSrc) {
        this.src = newSrc;
    }
});
