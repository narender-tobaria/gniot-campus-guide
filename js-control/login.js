
// Login Form Control
const user_account_login_url = "data-control/users/user-login.php";

const success_gif_button = document.getElementById("success-gif-popup");

const lg_alert = document.getElementById("lg_alert_message");
const lg_email = document.getElementById("lg_input_email");
const lg_pass = document.getElementById("lg_input_pass");
const lg_form = document.getElementById("lg_popup_form");
const lg_button = document.getElementById("lg_submit_button");
const lg_popup_close_button = document.getElementById("lg_popup_close_button");

lg_email.addEventListener("keyup",(event)=>{
    lg_email.value = lg_email.value.replace(/[`~!#$%^&*()|+\=?;:'",<>\{\}\[\]\\\/]/gi, '');
})

lg_button.addEventListener("click",(event) => {
    event.preventDefault();
    let lgEmail = lg_email.value;
    let lgPass = lg_pass.value;
    if(lgEmail != "" && validateEmail(lgEmail)){
        if(lgPass != ""){
            fetch(user_account_login_url, {
                method: 'POST',
                body: JSON.stringify({
                    'email' : lgEmail,
                    'password' : lgPass
                }),
                headers: {
                    'Content-type': 'application/json'
                }
            }).then(response => response.json())
                .then((result) => {
                    if (result.login == 'admin-login') {
                        window.location.href = window.location.href + "admin-panel/";
                    }
                    else if (result.login == 'user-login') {
                        setTimeout(()=>{
                            window.location.href = window.location.href.replace("login.php","user-panel/");
                        },2200)
                        success_gif_button.click();
                    }
                    else if (result.login == 'incorrect-password') {
                        showAlertMessage(lg_alert,"Entered Wrong Password",false);
                    }
                    else{
                        showAlertMessage(lg_alert,"No Records Found",false);
                    }
                }).catch(error => console.log(error));
        }
        else{
            showAlertMessage(lg_alert,"Enter Your Password",false);
        }
    }
    else{
        showAlertMessage(lg_alert,"Enter a Valid Email",false);
    }
})

function showAlertMessage(alertBox,alertMessage,visibility){
    if(visibility){
        alertBox.style.backgroundColor = "green";
    }
    else{
        alertBox.style.backgroundColor = "red";
    }
    alertBox.innerText = alertMessage;
    alertBox.style.display = "block";
    setTimeout(()=>{
        alertBox.innerText = "";
        alertBox.style.display = "none";
    }, 3000)
}

function validateEmail(email) {
    let res = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return res.test(email);
}

function changePasswordVisibility(inputBoxId,eyeIconId){
    const passBox = document.getElementById(inputBoxId);
    const eyeIcon = document.getElementById(eyeIconId);
    if(eyeIcon.innerText === "visibility"){
        eyeIcon.innerText = "visibility_off";
        passBox.type = "text";
    }
    else{
        eyeIcon.innerText = "visibility";
        passBox.type = "password";
    }
}