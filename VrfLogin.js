const storedUser = localStorage.getItem('usuario');
if (storedUser) {
    const User = JSON.parse(storedUser);
    
    const responseElement = document.getElementById('perfil');
    responseElement.innerHTML = `<button class="menuBoton" onclick="location.href='Secion.html'">${User.nombre}</button>`;
    

    const nomContainer = document.getElementById('nomContainer');
    const edadContainer = document.getElementById('edadContainer');
    const correoContainer = document.getElementById('correoContainer');

    nomContainer.innerHTML = `<blockquote class="infoBlock">Nombre: ${User.nombre}</blockquote>`
    edadContainer.innerHTML = `<blockquote class="infoBlock">Edad: ${User.edad}</blockquote>`
    correoContainer.innerHTML = `<blockquote class="infoBlock">Correo: ${User.correo}</blockquote>`
    passContainer.innerHTML = `<blockquote class="infoBlock">Password: ${User.password.substring(0, 20)}...</blockquote>`

} else {
    const responseElement = document.getElementById('perfil');
    responseElement.innerHTML = `<button class="menuBoton" onclick="location.href=''">Inicia Secion</button>`;
}