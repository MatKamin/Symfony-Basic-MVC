let checkbox = document.getElementById('langToggle')
let isFeet = document.getElementsByClassName('feet')
let isMeter = document.getElementsByClassName('meter')


checkbox.oninput = () => {
    if (checkbox.checked) {
        for (let i = 0; i < isFeet.length; i++) {
            isFeet[i].classList.remove('none')
            isMeter[i].classList.add('none')
        }
        document.getElementById('foot').classList.add('selected')
    } else {
        for (let i = 0; i < isFeet.length; i++) {
            isFeet[i].classList.add('none')
            isMeter[i].classList.remove('none')
        }
        document.getElementById('foot').classList.remove('selected')
    }
}