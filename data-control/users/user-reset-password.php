<?php
require "../config.php";
error_reporting(0);
session_start();

$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$user_email = $decode['email'];
$user_answer = $decode['answer'];
$user_pass = $decode['password'];
$passwordHash = password_hash($user_pass,PASSWORD_BCRYPT);


date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

if($user_email != ""){
    $checkUserPresence = mysqli_query($connect, "SELECT * FROM `users` WHERE email='$user_email'");
    if(mysqli_num_rows($checkUserPresence) > 0){
        $row = mysqli_fetch_array($checkUserPresence);
        $userQues = $row['security_ques'];
        $userAns = $row['security_ans'];
        if($user_answer == "" && $user_pass == ""){
            echo json_encode(array('reset' => $userQues));
            exit();
        }
        elseif($user_answer != "" && $user_pass == ""){
            if(strcmp($user_answer,$userAns) == 0){
                echo json_encode(array('reset' => 'correct-answer'));
                exit();
            }
            else{
                echo json_encode(array('reset' => 'entered-wrong-answer'));
                exit();
            }
        }
        elseif($user_answer != "" && $user_pass != ""){
            $changePassword = mysqli_query($connect,"UPDATE users SET password='$passwordHash' WHERE email='$user_email' AND security_ans='$user_answer'");
            if($changePassword){
                echo json_encode(array('reset' => 'password-changed'));
            }
            else{
                echo json_encode(array('reset' => 'password-not-changed'));
            }
        }
    }
    else{
        echo json_encode(array('reset' => 'no-records-found'));
        exit();
    }
}
else{
    header("Location: ../../");
    exit();
}
mysqli_close($connect);
?>