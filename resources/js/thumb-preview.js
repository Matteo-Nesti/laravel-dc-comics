const inputField = document.getElementById('thumb')
const thumb = document.getElementById('thumb-img')
const placeholder = "https://marcolanci.it/utils/placeholder.jpg"

inputField.addEventListener('input', function () {
    const thumbValue = inputField.value
    if (thumbValue) {
        thumb.src = thumbValue;
    } else {
        thumb.src = placeholder;
    }
})