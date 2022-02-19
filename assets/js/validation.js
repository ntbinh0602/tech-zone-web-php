//--------------------Show Register Form------------------
// const btnShowSignupForm = document.querySelector('.js-show-sign-up')
// const signupForm = document.querySelector('.modal-signup')
// const closeXSignup = document.querySelector('.js-modal-close-sign-up')
// closeXSignup.addEventListener('click', function () {
//     signupForm.style.display='none'
//     signinForm.style.display='none'
// })
//----------------Sign up----------------------
//Open sign in form when click sign up button
const btnSignup = document.querySelector('.btn_signup')
const signupSuccess = document.querySelector('.signup--success')
var signUpPass = document.querySelector('#signup_password')
var signUpRePass = document.querySelector('#signup_repassword')
var btnShowPass = document.querySelector('.btn-showpass')
var btnShowRePass = document.querySelector('.btn-showrepass')
btnShowPass.addEventListener('click', function () {
    if (signUpPass.type === "password") {
        signUpPass.type = "text"
    } else {
        signUpPass.type = "password"
    }
})
btnShowRePass.addEventListener("click", function () {
    if (signUpRePass.type === "password") {
        signUpRePass.type = "text"
    } else {
        signUpRePass.type = "password"
    }
})
//---------------Sign up Validation-----------------------
// check user-id
const userId = document.querySelector('#txt_user-id')
const checkid = document.querySelector('.check-id')

function userIDVerify() {
    if (userId.value == "" || userId.value.length < 5) {
        userId.style.border = "2px solid red";
        checkid.style.display = "none"
    } else {
        userId.style.border = "2px solid greenyellow";
        checkid.style.display = "block"
    }
    return true;
}
userId.addEventListener('keyup', userIDVerify, true)
//check Name
const userName = document.querySelector('#txt_name')
const checkName = document.querySelector('.check-name')
function nameVerify() {
    if (userName.value == "" || userName.value.length < 5) {
        userName.style.border = "2px solid red";
        checkName.style.display = "none"
    } else {
        userName.style.border = "2px solid greenyellow";
        checkName.style.display = "block"
    }
    return true;
}
userName.addEventListener('keyup', nameVerify, true)
//check password
function passVerify(){
    if(signUpPass.value == "" || signUpPass.value.length < 5){
        signUpPass.style.border = "2px solid red";
    }else{
        signUpPass.style.border = "2px solid greenyellow";
    }
}
signUpPass.addEventListener('keyup', passVerify, true)
// check repassword
function rePassVerify(){
    if(signUpRePass.value != "" || signUpRePass.value > 5){
        if(signUpRePass.value != signUpPass.value){
            signUpRePass.style.border = "2px solid red";
        }else{
            signUpRePass.style.border = "2px solid greenyellow";
        }
    }else{
        signUpRePass.style.border = "2px solid red";
    }
    return true;
}
signUpRePass.addEventListener('keyup', rePassVerify, true)
//check phone number
const isphone = document.querySelector('#txt_phone')
const checkphone=document.querySelector('.check-phone')
console.log(checkphone)
function telVerify() {
    if (isphone.value != "") {
        if (isNaN(isphone.value) || isphone.value.length< 10) {
            isphone.style.border = "2px solid red";
            checkphone.style.display = "none"
        } else {
            isphone.style.border = "2px solid greenyellow";
            checkphone.style.display = "block"
        }
    } else {
        isphone.style.border = "2px solid red";
        checkphone.style.display = "none"
    }
    return true;
}
isphone.addEventListener('keyup', telVerify, true)
// check email
const email = document.querySelector('#txt_email')
const checkEmail = document.querySelector('.check-email')
function emailVerify() {
    var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
    if (filter.test(email.value) == 1) {
        email.style.border = "2px solid greenyellow";
        checkEmail.style.display = "block"
    } else {
        checkEmail.style.display = "none"
        email.style.border = "2px solid red";
    }
    return true;
}
email.addEventListener('keyup', emailVerify,true)
// check address
const address = document.querySelector('#txt_address')
const checkAddress=document.querySelector('.check-address')
function addressVerify() {
    if(address.value != ""){
        address.style.border = "2px solid greenyellow";
        checkAddress.style.display = "block"
    }else{
        address.style.border = "2px solid red";
        checkAddress.style.display = "none"
    }
    return true;
}
address.addEventListener('keyup', addressVerify,true)