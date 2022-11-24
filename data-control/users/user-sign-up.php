<?php
require "../config.php";
// error_reporting(0);

$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$user_name = $decode['name'];
$user_email = $decode['email'];
$user_pass = $decode['password'];
$user_type = $decode['usertype'];
$passwordHash = password_hash($user_pass,PASSWORD_BCRYPT);

date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

if($user_email != ""){
    $checkUserAccountPresence = mysqli_query($connect, "SELECT email FROM `users` WHERE email='$user_email'");
    if(mysqli_num_rows($checkUserAccountPresence) > 0){
        echo json_encode(array('insert' => 'email-already-present'));
    }
    else{
        $newUserSignUp = mysqli_query($connect,"INSERT INTO `users`(`name`,`email`,`password`,`user_type`,`reg_time`) 
        VALUES ('$user_name','$user_email','$passwordHash','$user_type','$currentTime')");
        if($newUserSignUp){
            echo json_encode(array('insert' => 'new-account-created'));
        }
        else{
            echo json_encode(array('insert' => 'new-account-not-created'));
        }
    }
}
else{
    header("Location: ../../");
    exit();
}
mysqli_close($connect);
?>