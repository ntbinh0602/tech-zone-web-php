
// Show Login Form
const showLoginForm = document.querySelector('.btn-signin')
const signinForm = document.querySelector('.modal-sign-in')
showLoginForm.addEventListener('click', function () {
    signinForm.style.display='flex'
})

// Close Login Form
const closeX = document.querySelector('.js-modal-close')
closeX.addEventListener('click', function () {
    signinForm.style.display = 'none'
})

//-------------------Login Captcha----------------------
const reText = document.querySelector('.re-text')
const captchaCode = document.querySelector('.captcha-code')
const captchaInput = document.querySelector('#captcha-input')
const loginBtn = document.querySelector('#login-btn')
const captchaAlert = document.querySelector('.captcha-alert')
const captchaRead = document.querySelector('.captcha-read')
const inputPassword = document.querySelector('#txt_signpass')
const showCaptcha = document.querySelector('.sign-in__login__captcha')
const captchaCheck=document.querySelector('.check-captcha')

// Create captcha
reText.addEventListener('click', function () {
    captchaCode.textContent = createCaptcha();
})

// if load page => renew captcha
window.addEventListener('load', () => {
    captchaCode.textContent = createCaptcha();
})

// captcha letter
function createCaptcha() {
    let letters = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L',
        'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
        'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
        'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v',
        'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7',
        '5', '6', '7', '8', '9'
    ]

    // captcha code
    let a = letters[Math.floor(Math.random() * letters.length)];
    let b = letters[Math.floor(Math.random() * letters.length)];
    let c = letters[Math.floor(Math.random() * letters.length)];
    let d = letters[Math.floor(Math.random() * letters.length)];
    let e = letters[Math.floor(Math.random() * letters.length)];
    let code = a + b + c + d + e
    return code
}

// check captcha
captchaInput.addEventListener('keyup', function (e) {
    let inputValue = captchaInput.value;
    if (inputValue == "") {
        captchaInput.style.border = '2px solid red'
        captchaCheck.style.display='none'
    } else if (inputValue === captchaCode.textContent) {
        captchaInput.style.border = '2px solid greenyellow'
        captchaCheck.style.display='block'
    } else {
        captchaInput.style.border = '2px solid red'
        captchaCheck.style.display='none'
    }
})

// hide captcha alert when click captcha input
captchaInput.addEventListener('keyup', function () {
    captchaAlert.style.display = "none"
})

// read captcha when click read icon
captchaRead.addEventListener('click', function () {
    let text = captchaCode.textContent
    responsiveVoice.speak(text)
})

// show captcha when click input Password
inputPassword.addEventListener('click', function () {
    showCaptcha.style.display='flex'
})
loginBtn.addEventListener('click', function(e){
    let inputValue = captchaInput.value;
    if(inputValue != captchaCode.textContent){
        captchaInput.focus();
        captchaInput.style.border = '2px solid red'
        captchaCheck.style.display='none'
        e.preventDefault()
    }
    return false;
})



