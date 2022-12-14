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

function nameFormat(name) {    // aman   kumar  >>>> Aman Kumar
    let formatedName = "";
    const words = name.split(" ");
    for (let i = 0; i < words.length; i++) {
        words[i] = words[i][0].toUpperCase() + words[i].substr(1);
        formatedName += words[i] + " ";
    }
    return formatedName;
}