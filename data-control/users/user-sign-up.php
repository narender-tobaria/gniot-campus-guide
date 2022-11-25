<?php
require "../config.php";
error_reporting(0);
session_start();

$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$user_name = $decode['name'];
$user_email = $decode['email'];
$user_pass = $decode['password'];
$user_type = $decode['usertype'];
$user_ques = $decode['question'];
$user_ans = $decode['answer'];
$passwordHash = password_hash($user_pass,PASSWORD_BCRYPT);

date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

if($user_email != ""){
    $checkUserAccountPresence = mysqli_query($connect, "SELECT email FROM `users` WHERE email='$user_email'");
    if(mysqli_num_rows($checkUserAccountPresence) > 0){
        echo json_encode(array('insert' => 'email-already-present'));
    }
    else{
        $newUserSignUp = mysqli_query($connect,"INSERT INTO `users`(`name`,`email`,`password`,`user_type`,`security_ques`,`security_ans`,`reg_time`) 
        VALUES ('$user_name','$user_email','$passwordHash','$user_type','$user_ques','$user_ans','$currentTime')");
        if($newUserSignUp){
            $checkUserPresence = mysqli_query($connect, "SELECT * FROM `users` WHERE email='$user_email'");
            if(mysqli_num_rows($checkUserPresence) > 0){
                $row = mysqli_fetch_array($checkUserPresence);
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_type'] = $row['user_type'];
                $_SESSION['user_email'] = $row['email'];
            }
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