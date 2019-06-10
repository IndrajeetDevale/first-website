'use strict'

const form = document.querySelector('form')

form.addEventListener('submit', async event => {
    event.preventDefault()
    const formData = new FormData(form)
    const response = await fetch('subscribe.php', {
        method: 'POST',
        body: formData,
    });
    const message = await response.text()
    alert(message)
})