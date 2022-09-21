const RegisterButton = document.getElementById('Register');
const LoginButton = document.getElementById('Login');
const Main = document.getElementById('main');
LoginButton.addEventListener('click', () => {
    main.classList.add("right-panel-active");
});
RegisterButton.addEventListener('click', () => {
    main.classList.remove("right-panel-active");
});
function validation() {
    var valid = true;
    var formLabels = document.getElementsByTagName("label");
    var username = document.regform.username.value;


    if (!isNaN(username)) {
        formLabels[0].innerHTML = " Username [Must contain Letters] ";
        formLabels[0].style.color = "red"
        valid = false;
    }
    else {
        formLabels[0].innerHTML = " Username ";
        formLabels[0].style.color = "white"
        valid = (valid) ? true : false;
    }

    var email = document.regform.email.value;

    if (email == "") {
        formLabels[1].innerHTML = " Email [Required] ";
        formLabels[1].style.color = "red"
        valid = false;
    }
    else {
        formLabels[0].innerHTML = " Username ";
        formLabels[0].style.color = "white"
        valid = (valid) ? true : false;
    }


    var password = document.regform.password.value;
    re = /[A-Z]/;
    no = /[0-9]/;

    if (password.length < 8) {
        formLabels[3].innerHTML = " Password [Must be Grater than 8 charcters] ";
        formLabels[3].style.color = "red"
        valid = false;
    }

    else if (password.length > 15) {
        formLabels[3].innerHTML = " Password [Must be less than 15 charcters] ";
        formLabels[3].style.color = "red"
        valid = false;
    }


    else if (!re.test(password)) {
        formLabels[3].innerHTML = " Password [Must contain UpperCase] ";
        formLabels[3].style.color = "red"
        valid = false;

    }

    else if (!no.test(password)) {
        formLabels[3].innerHTML = " Password [Must contain numbers] ";
        formLabels[3].style.color = "red"
        valid = false;

    }
    else {
        formLabels[3].innerHTML = " Password ";
        formLabels[3].style.color = "white"
        valid = (valid) ? true : false;
    }

    var mobile = document.regform.mobile.value;

    if (isNaN(mobile)) {
        formLabels[4].innerHTML = " Mobil [numbers only ] ";
        formLabels[4].style.color = "red"
        valid = false;
    }
    else if (mobile.length < 8 && mobile.length > 11) {
        formLabels[3].innerHTML = " Password [Must contain numbers] ";
        formLabels[3].style.color = "red"
        valid = false;
    }
    else {
        formLabels[4].innerHTML = " Mobil ";
        formLabels[4].style.color = "white"
        valid = (valid) ? true : false;
    }
    return valid;
}


