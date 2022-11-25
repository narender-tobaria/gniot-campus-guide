
// Sign Up Form Control 
const create_new_user_account_url = "data-control/users/user-sign-up.php";

const sp_alert = document.getElementById("sp_alert_message");
const sp_name = document.getElementById("sp_input_name");
const sp_email = document.getElementById("sp_input_email");
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
    let spName = nameFormat(sp_name.value.replace(/\s+/g, ' ').trim());
    let spEmail = sp_email.value;
    let spPass1 = sp_pass1.value;
    let spPass2 = sp_pass2.value;
    let spUserType = sp_user_type.value;
    let spQuestion = sp_user_question.value;
    let spAnswer = sp_answer.value;
    if(spName != ""){
        sp_name.value = spName;
        if(spEmail != "" && validateEmail(spEmail) === true){
            if(spPass1 != ""){
                if(spPass2 != ""){
                    if(spAnswer != ""){
                        if(spPass1.localeCompare(spPass2) === 0){
                            sendDataToDatabaseForSignUp(spName,spEmail,spPass1,spUserType,spQuestion,spAnswer);
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
            showAlertMessage(sp_alert,"Enter a Valid Email",false);
        }
    }
    else{
        showAlertMessage(sp_alert,"Enter Your Full Name",false);
    }
})

function sendDataToDatabaseForSignUp(userName,userEmail,userPass,userType,userQuestion,userAnswer){
    fetch(create_new_user_account_url, {
        method: 'POST',
        body: JSON.stringify({
            'name' : userName,
            'email' : userEmail,
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
                showAlertMessage(sp_alert,"Account Created Successfully",true);
                setTimeout(()=>{
                    window.location.href = window.location.href + "user-panel/";
                },3000)
                sp_form.reset();
            }
            else {
                showAlertMessage(sp_alert,"Error : Account Not Created",false);
            }
        }).catch(error => console.log(error));
}