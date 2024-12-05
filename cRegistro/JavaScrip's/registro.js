document.getElementById('registro').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Collect the form data
    let formData = new FormData(this);

    // Send the data using Fetch API
    fetch('Registrar.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text()) // Parse the response as text
    .then(data => {
        // Handle the server response
        const responseElement = document.getElementById('response');
        if (data.includes('success')) {
            responseElement.innerHTML = `<span class="success-message">${data.replace('success:', '')}</span>`;
        } else {
            responseElement.innerHTML = `<span class="error-message">${data.replace('error:', '')}</span>`;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('response').innerHTML = `<span class="error-message">Ocurrió un error al procesar la solicitud.</span>`;
    });
});
