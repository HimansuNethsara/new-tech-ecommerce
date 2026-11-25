var signInBox = document.getElementById("signinbox");
var signUpBox = document.getElementById("signupbox");

function AdminSign(){
    signInBox.classList.toggle("d-none");
    signUpBox.classList.toggle("d-none");
}

function changeView(){
    signUpBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");
}