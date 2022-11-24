<?php
require "../config.php";
// error_reporting(0);
session_start();

$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$user_email = $decode['email'];
$user_pass = $decode['password'];


date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

if($user_email != "" && $user_pass != ""){
    $checkUserPresence = mysqli_query($connect, "SELECT * FROM `users` WHERE email='$user_email'");
    if(mysqli_num_rows($checkUserPresence) > 0){
        $row = mysqli_fetch_array($checkUserPresence);
        $userId = $row['user_id'];
        $userName = $row['name'];
        $passwordHash = $row['password'];
        $userType = $row['user_type'];
        if(password_verify($user_pass,$passwordHash)){
            $_SESSION['user_id'] = $userId;
            $_SESSION['user_name'] = $userName;
            $_SESSION['user_type'] = $userType;
            $_SESSION['user_email'] = $user_email;
            if($userType == "admin"){
                echo json_encode(array('login' => 'admin-login'));
                // header("Location: ../../admin-panel/");
                exit();
            }
            else{
                echo json_encode(array('login' => 'user-login'));
                // header("Location: ../../user-panel/");
                exit();
            }
        }
        else{
            echo json_encode(array('login' => 'incorrect-password'));
        }
    }
    else{
        echo json_encode(array('login' => 'no-records-found'));
    }
}
else{
    header("Location: ../../");
    exit();
}
mysqli_close($connect);
?>