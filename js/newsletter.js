const scriptURL = 'https://script.google.com/macros/s/AKfycbwCwSIFBckyZBSIVp8iJ1_xuswKPQyqcz3rW5SlYI0DMDZo56GsRX6vuch_JwLuGiK8mg/exec'
const form = document.forms['submit-to-google-sheet']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => console.log('Success!', response))
    .catch(error => console.error('Error!', error.message))
})
