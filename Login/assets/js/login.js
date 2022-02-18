let email = document.querySelector("#email");
let password = document.querySelector("#password");
let error_email = document.querySelector("#error-email");
let error_password = document.querySelector("#error-password");
let regex = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

function check() {
    if(email.value.match(regex)) {
        email.style.border = "1px solid green";
        error_email.style.display = "none";
    } else {
        email.style.border = "1px solid red";
        error_email.style.display = "block";
    } 

    if(password.value.length < 8) {
        password.style.border = "1px solid red";
        error_password.style.display = "block";
    } else {
        password.style.border = "1px solid green";
        error_password.style.display = "none";
    }

    if(email.value == "") {
        email.style.borderColor = "lightgrey";
        error_email.style.display = "none";
    }

    if(password.value == "") {
        password.style.borderColor = "lightgrey";
        error_password.style.display = "none";
    }
}

function handleSubmit() {
    if(email.value.match(regex) && password.value.length >= 8) {
        console.log(email.value);
        console.log(password.value);
        swal({
            title: "Congrats",
            text: "You are logged in!",
            icon: "success",
            button: "Ok",
          });
    } 
    else {
        swal ( "Oops" ,  "Something went wrong!" ,  "error" );
    }
}
