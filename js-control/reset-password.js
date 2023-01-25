
// Forgot password form control
const user_account_login_url = "data-control/users/user-login.php";
const reset_password_url = "data-control/users/user-reset-password.php";

const success_gif_button = document.getElementById("success-gif-popup");

const rp_alert = document.getElementById("rp_alert_message");
const rp_email_div = document.getElementById("rp_input_email_div");
const rp_email = document.getElementById("rp_input_email");

const rp_answer_div = document.getElementById("rp_input_ques_ans_div");
const rp_ques = document.getElementById("rp_input_ques");
rp_answer_div.style.display = "none";
const rp_answer = document.getElementById("rp_input_answer");

const rp_new_pass_div = document.getElementById("rp_input_new_pass_div");
rp_new_pass_div.style.display = "none"
const rp_pass1 = document.getElementById("rp_input_pass");
const rp_pass2 = document.getElementById("rp_input_confirm_pass");

const rp_button = document.getElementById("rp_submit_button");
const rp_popup_close_button = document.getElementById("rp_popup_close_button");

rp_email.addEventListener("keyup",(event)=>{
    rp_email.value = rp_email.value.replace(/[`~!#$%^&*()|+\=?;:'",<>\{\}\[\]\\\/]/gi, '');
})

rp_answer.addEventListener("keyup",(event)=>{
    rp_answer.value = rp_answer.value.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
})

rp_button.addEventListener("click",(event) => {
    event.preventDefault();
    let rpEmail = rp_email.value;
    let rpAnswer = rp_answer.value;
    let rpPass1 = rp_pass1.value;
    let rpPass2 = rp_pass2.value;
    if(rp_answer_div.style.display === "none" && rp_new_pass_div.style.display === "none"){
        if(rpEmail != "" && validateEmail(rpEmail) === true){
            checkEmailPresenceAndGetQuestion(rpEmail);
        }
        else{
            showAlertMessage(rp_alert,"Enter a Valid Email",false);
        }
    }
    else if(rp_email_div.style.display === "none" && rp_new_pass_div.style.display === "none"){
        if(rpAnswer != ""){
            checkSecurityQuestionAnswer(rpAnswer,rpEmail);
        }
        else{
            showAlertMessage(rp_alert,"Please Enter Your Answer",false);
        }
    }
    else if(rp_email_div.style.display === "none" && rp_answer_div.style.display === "none"){
        if(rpPass1 != ""){
            if(rpPass2 != ""){
                if(rpPass1.localeCompare(rpPass2) === 0){
                    resetPassword(rpAnswer,rpEmail,rpPass1);
                }
                else{
                    showAlertMessage(rp_alert,"Password Doesn't Matched",false);
                }
            }
            else{
                showAlertMessage(rp_alert,"Please Confirm Password",false);
            }
        }
        else{
            showAlertMessage(rp_alert,"Enter New Password",false);
        }
    }
})

function checkEmailPresenceAndGetQuestion(email){
    fetch(reset_password_url, {
        method: 'POST',
        body: JSON.stringify({
            'email' : email
        }),
        headers: {
            'Content-type': 'application/json'
        }
    }).then(response => response.json())
        .then((result) => {
            if (result.reset != 'no-records-found' && result.reset != "") {
                rp_ques.innerText = result.reset;
                rp_email_div.style.display = "none"
                rp_answer_div.style.display = "block"
            }
            else {
                showAlertMessage(rp_alert,"No Records Found",false);
            }
        }).catch(error => console.log(error));
}

function checkSecurityQuestionAnswer(answer,email){
    fetch(reset_password_url, {
        method: 'POST',
        body: JSON.stringify({
            'email' : email,
            'answer' : answer
        }),
        headers: {
            'Content-type': 'application/json'
        }
    }).then(response => response.json())
        .then((result) => {
            if (result.reset === 'correct-answer') {
                rp_email_div.style.display = "none"
                rp_answer_div.style.display = "none"
                rp_new_pass_div.style.display = "block"
            }
            else {
                showAlertMessage(rp_alert,"Try Again Entered Wrong Answer",false);
            }
        }).catch(error => console.log(error));
}

function resetPassword(answer,email,password){
    fetch(reset_password_url, {
        method: 'POST',
        body: JSON.stringify({
            'answer' : answer,
            'email' : email,
            'password' : password
        }),
        headers: {
            'Content-type': 'application/json' 
        }
    }).then(response => response.json())
        .then((result) => { 
            if (result.reset == 'password-changed') {
                success_gif_button.click();
                loginUser(email,password);
            }
            else {
                showAlertMessage(rp_alert,"Try Again Password Not Changed",false);
            }
        }).catch(error => console.log(error));
}

function loginUser(email,password){
    fetch(user_account_login_url, {
        method: 'POST',
        body: JSON.stringify({
            'email' : email,
            'password' : password
        }),
        headers: {
            'Content-type': 'application/json'
        }
    }).then(response => response.json())
        .then((result) => {
            if (result.login == 'admin-login') {
                window.location.href = window.location.href.replace("reset-password.php","admin-panel/");
            }
            else if (result.login == 'user-login') {
                window.location.href = window.location.href.replace("reset-password.php","user-panel/");
            }
            else{
                showAlertMessage(lg_alert,"No Records Found",false);
            }
        }).catch(error => console.log(error));
}


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