document.getElementById('Logearte').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir la sumisión del formulario por defecto
    const nombre = document.getElementById('username').value;
    const password = document.getElementById('pass').value;
    let formData = new FormData(this);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text()) // Parsear la respuesta como texto
    .then(data => {
        console.log('Server response:', data);
    
        // Manejar la respuesta del servidor
        const responseElement = document.getElementById('response');
        if (data.startsWith('Todo es Correcto')) {
            const responseParts = data.split('|'); // Separar la respuesta por el delimitador '|'
            const usuario = {
                id: responseParts[1],
                nombre: responseParts[2],
                edad: responseParts[3],
                correo: responseParts[4],
                password: responseParts[5]
            };
            localStorage.setItem('usuario', JSON.stringify(usuario));
            window.location.href = 'Index.html'; // Redirigir a Index.html en caso de éxito
        } else {
            responseElement.innerHTML = `<span class="error-message">${data.replace('error:', '')}</span>`;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('response').innerHTML = `<span class="error-message">Ocurrió un error al procesar la solicitud.</span>`;
    });
});
