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

          <!-- Sign Up Popup -->
    <div class="modal fade" id="signupModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Sign Up</h1>
                    <a data-bs-dismiss="modal" id="sp_popup_close_button" class="material-symbols-outlined popup-close-icon">close</a>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <p class="popup-alert-message-text" id="sp_alert_message">Please enter a valid email</p>
                    </div>
                    <form id="sp_popup_form">
                        <!-- Name input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="sp_input_name">Name<span class="input-star">*</span></label>
                            <input type="text" id="sp_input_name" class="form-control" required />
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="sp_input_email">Email address<span class="input-star">*</span></label>
                            <input type="email" id="sp_input_email" class="form-control" required />
                        </div>

                         <!-- Mobile input -->
                         <div class="form-outline mb-2">
                            <label class="form-label" for="sp_input_mobile">Mobile Number<span class="input-star">*</span></label>
                            <input type="number" id="sp_input_mobile" class="form-control" required />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="sp_input_pass">Password<span class="input-star">*</span></label>
                            <input type="password" id="sp_input_pass" class="form-control" required />
                            <span id="sp_pass_eye_icon" class="password-show-hide-eye-icon material-symbols-outlined" onclick="changePasswordVisibility(this.previousElementSibling.id,this.id)">visibility</span>
                        </div>

                         <!-- Confirm Password input -->
                         <div class="form-outline mb-2">
                            <label class="form-label" for="sp_input_confirm_pass">Confirm Password<span class="input-star">*</span></label>
                            <input type="password" id="sp_input_confirm_pass" class="form-control" required />
                            <span id="sp_confirm_pass_eye_icon" class="password-show-hide-eye-icon material-symbols-outlined" onclick="changePasswordVisibility(this.previousElementSibling.id,this.id)">visibility</span>
                        </div>

                                                <!-- User Type input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="sp_input_user_type">I am a<span class="input-star">*</span></label>
                            <select class="form-select" id="sp_input_user_type" aria-label="Default select example" required>
                                <option selected value="Student">Student</option>
                                <option value="Parent">Parent</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Visitor">Visitor</option>
                            </select>
                        </div>

                                                <!-- Security Question input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="sp_input_sec_ques">Security Question<span class="input-star">*</span></label>
                            <select class="form-select" id="sp_input_sec_ques" aria-label="Default select example" required>
                                <option selected value="What is Your Place of bitrh?">What is Your Place of bitrh?</option>
                                <option value="Who is Your Favourite Teacher">Who is Your Favourite Teacher</option>
                                <option value="What is Your Favourite Dish?">What is Your Favourite Dish?</option>
                                <option value="Who is Your Favourite Actor?">Who is Your Favourite Actor?</option>
                            </select>
                        </div>

                        <!-- Security Question Answer input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="sp_input_answer">Your Answer<span class="input-star">*</span></label>
                            <input type="text" id="sp_input_answer" class="form-control" required />
                        </div>

                        <!-- Sign Up button -->
                        <div class="login-button d-flex justify-content-center">
                            <button type="submit" id="sp_submit_button" class="btn btn-primary btn-block mb-2">Sign Up</button>
                        </div>
                    
                        <!-- Login Button -->
                        <div class="text-center">
                            <p>Already Have an Account? <a href="login.php" role="button">Login</a></p>
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


    <a class="nav-link special-nav-item" id="signup-popup-button" data-bs-toggle="modal" href="#signupModalToggle" role="button"></a>

    <?php include 'footer.php' ?>

    <script>document.getElementById("signup-popup-button").click();</script>

    <script src="js-control/sign-up.js" async defer></script>

</body>
</html>