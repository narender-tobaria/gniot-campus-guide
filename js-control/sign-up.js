

// Sign Up Form Control 
const create_new_user_account_url = "data-control/users/user-sign-up.php";

const sp_alert = document.getElementById("sp_alert_message");
const sp_name = document.getElementById("sp_input_name");
const sp_email = document.getElementById("sp_input_email");
const sp_mobile = document.getElementById("sp_input_mobile");
const sp_pass1 = document.getElementById("sp_input_pass");
const sp_pass2 = document.getElementById("sp_input_confirm_pass");
const sp_user_type = document.getElementById("sp_input_user_type");
const sp_user_question = document.getElementById("sp_input_sec_ques");
const sp_answer = document.getElementById("sp_input_answer");
const sp_form = document.getElementById("sp_popup_form");
const sp_button = document.getElementById("sp_submit_button");
const sp_popup_close_button = document.getElementById("sp_popup_close_button");

sp_name.addEventListener("keyup",(event)=>{
    sp_name.value = sp_name.value.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
})

sp_answer.addEventListener("keyup",(event)=>{
    sp_answer.value = sp_answer.value.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
})

sp_email.addEventListener("keyup",(event)=>{
    sp_email.value = sp_email.value.replace(/[`~!#$%^&*()|+\=?;:'",<>\{\}\[\]\\\/]/gi, '');
})

sp_button.addEventListener("click",(event)=> {
    event.preventDefault();
    let spName = sp_name.value;
    let spEmail = sp_email.value;
    let spMobile = sp_mobile.value;
    let spPass1 = sp_pass1.value;
    let spPass2 = sp_pass2.value;
    let spUserType = sp_user_type.value;
    let spQuestion = sp_user_question.value;
    let spAnswer = sp_answer.value;
    if(spName != ""){
        sp_name.value = nameFormat(sp_name.value.replace(/\s+/g, ' ').trim());
        if(spEmail != "" && validateEmail(spEmail)){
            if(spMobile != "" && isMobileValid(spMobile)){
                if(spPass1 != ""){
                    if(spPass2 != ""){
                        if(spAnswer != ""){
                            if(spPass1.localeCompare(spPass2) === 0){
                                spName = nameFormat(sp_name.value.replace(/\s+/g, ' ').trim());
                                sendDataToDatabaseForSignUp(spName,spEmail,spMobile,spPass1,spUserType,spQuestion,spAnswer);
                            }
                            else{
                                showAlertMessage(sp_alert,"Password Doesn't Matched",false);
                            }
                        }
                        else{
                            showAlertMessage(sp_alert,"Answer Your Security Question",false);
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
                showAlertMessage(sp_alert,"Enter a valid Mobile",false);
                sp_mobile.value = "";
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

function sendDataToDatabaseForSignUp(userName,userEmail,userMobile,userPass,userType,userQuestion,userAnswer){
    fetch(create_new_user_account_url, {
        method: 'POST',
        body: JSON.stringify({
            'name' : userName,
            'email' : userEmail,
            'mobile' : userMobile,
            'password' : userPass,
            'usertype' : userType,
            'question' : userQuestion,
            'answer' : userAnswer
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
                sp_form.reset();
                window.location.href = window.location.href.replace("sign-up.php","user-panel/");
            }
            else {
                showAlertMessage(sp_alert,"Error : Account Not Created",false);
            }
        }).catch(error => console.log(error));
}


function nameFormat(name) {    // aman   kumar  >>>> Aman Kumar
    let formatedName = "";
    const words = name.split(" ");
    for (let i = 0; i < words.length; i++) {
        words[i] = words[i][0].toUpperCase() + words[i].substr(1);
        formatedName += words[i] + " ";
    }
    return formatedName;
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

function isMobileValid(number){
    var mobile= number;
    if(mobile.length!=10){
        return false;

    }
    let intRegex = /[0-9 -()+]+$/;
    let is_mobile=true;
    for ( var i=0; i < 10; i++) {
        if(intRegex.test(mobile[i]))
             { 
             continue;
             }
            else{
                is_mobile=false;
                break;
            }
         }
    return is_mobile;

}