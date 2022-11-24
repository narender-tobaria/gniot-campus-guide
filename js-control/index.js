
// Login Form Control
const user_account_login_url = "data-control/users/user-login.php";

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
    if(lgEmail != ""){
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
                        window.location.href = window.location.href + "user-panel/";
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


// Sign Up Form Control 
const create_new_user_account_url = "data-control/users/user-sign-up.php";

const sp_alert = document.getElementById("sp_alert_message");
const sp_name = document.getElementById("sp_input_name");
const sp_email = document.getElementById("sp_input_email");
const sp_pass1 = document.getElementById("sp_input_pass");
const sp_pass2 = document.getElementById("sp_input_confirm_pass");
const sp_user_type = document.getElementById("sp_input_user_type");
const sp_form = document.getElementById("sp_popup_form");
const sp_button = document.getElementById("sp_submit_button");
const sp_popup_close_button = document.getElementById("sp_popup_close_button");

sp_name.addEventListener("keyup",(event)=>{
    sp_name.value = sp_name.value.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
})

sp_email.addEventListener("keyup",(event)=>{
    sp_email.value = sp_email.value.replace(/[`~!#$%^&*()|+\=?;:'",<>\{\}\[\]\\\/]/gi, '');
})

sp_button.addEventListener("click",(event)=> {
    event.preventDefault();
    let spName = sp_name.value.replace(/\s+/g, ' ').trim()
    let spEmail = sp_email.value;
    let spPass1 = sp_pass1.value;
    let spPass2 = sp_pass2.value;
    let spUserType = sp_user_type.value;
    if(spName != ""){
        sp_name.value = spName;
        if(spEmail != "" && validateEmail(spEmail) === true){
            if(spPass1 != ""){
                if(spPass2 != ""){
                    if(spUserType != ""){
                        if(spPass1.localeCompare(spPass2) === 0){
                            sendDataToDatabaseForSignUp(spName,spEmail,spPass1,spUserType);
                        }
                        else{
                            showAlertMessage(sp_alert,"Password Doesn't Matched",false);
                        }
                    }
                    else{
                        showAlertMessage(sp_alert,"Select Who You Are ?",false);
                    }
                }
                else{
                    showAlertMessage(sp_alert,"Please Confirm Password",false);
                }
            }
            else{
                showAlertMessage(sp_alert,"Enter New Password",false);
            }
        }
        else{
            showAlertMessage(sp_alert,"Enter a Valid Email",false);
        }
    }
    else{
        showAlertMessage(sp_alert,"Enter Your Full Name",false);
    }
})

function sendDataToDatabaseForSignUp(userName,userEmail,userPass,userType){
    fetch(create_new_user_account_url, {
        method: 'POST',
        body: JSON.stringify({
            'name' : userName,
            'email' : userEmail,
            'password' : userPass,
            'usertype' : userType
        }),
        headers: {
            'Content-type': 'application/json'
        }
    }).then(response => response.json())
        .then((result) => {
            if (result.insert == 'email-already-present') {
                showAlertMessage(sp_alert,"Email Already Registered",false);
            }
            else if (result.insert == 'new-account-created') {
                showAlertMessage(sp_alert,"Account Created Successfully",true);
                setTimeout(()=>{
                    sp_popup_close_button.click();
                },3000)
                sp_form.reset()
            }
            else {
                showAlertMessage(sp_alert,"Error : Account Not Created",false);
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