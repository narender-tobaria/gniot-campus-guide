<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link  rel="stylesheet" href="style-control/style.css">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php' ?>
    <?php include 'college-carausel.php' ?>
    
    <!-- Login Popup -->
    <div class="modal fade" id="loginModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Login</h1>
                    <a data-bs-dismiss="modal" id="lg_popup_close_button" class="material-symbols-outlined popup-close-icon">close</a>
                </div>
                <div class="modal-body">
                    <div class="popup-alert-message d-flex justify-content-center">
                        <p class="popup-alert-message-text" id="lg_alert_message">Please enter a valid email</p>
                    </div>
                    <form id="lg_popup_form">
                        <!-- Email input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="lg_input_email">Email address</label>
                            <input type="email" id="lg_input_email" class="form-control" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="lg_input_pass">Password</label>
                            <input type="password" id="lg_input_pass" class="form-control" />
                            <span id="lg_pass_eye_icon" class="password-show-hide-eye-icon material-symbols-outlined" onclick="changePasswordVisibility(this.previousElementSibling.id,this.id)">visibility</span>
                        </div>

                        <!-- Forgot Password -->
                        <div class="row mb-2">
                            <div class="col d-flex justify-content-center">
                            <a href="reset-password.php" role="button">Forgot Password?</a>    
                            </div>
                        </div>

                        <!-- Login button -->
                        <div class="login-button d-flex justify-content-center">
                            <button type="button" id="lg_submit_button" class="btn btn-primary btn-block mb-2">Login</button>
                        </div>
                    
                        <!-- Sign Up Button -->
                        <div class="text-center">
                            <p>Not a member? <a href="sign-up.php" role="button">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Alert Message Popup -->
    <div class="modal fade" id="alertMessageBoxPopup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Reset Password</h1>
                    <a data-bs-dismiss="modal" class="material-symbols-outlined popup-close-icon">close</a>
                </div> -->
                <div class="modal-body d-flex justify-content-center">
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_ya4ycrti.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>    

    <a data-bs-toggle="modal" href="#alertMessageBoxPopup" id="success-gif-popup" role="button"></a>


    <a class="nav-link active" data-bs-toggle="modal" href="#loginModalToggle" id="login-popup-button" role="button"></a>

    <?php include 'footer.php' ?>

    <script>document.getElementById("login-popup-button").click();</script>

    <script  src="js-control/login.js" async defer></script> 

</body>
</html>