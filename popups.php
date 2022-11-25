
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
                            <a data-bs-toggle="modal" href="#forgotPasswordModalToggle" role="button">Forgot Password?</a>    
                            </div>
                        </div>

                        <!-- Login button -->
                        <div class="login-button d-flex justify-content-center">
                            <button type="button" id="lg_submit_button" class="btn btn-primary btn-block mb-2">Login</button>
                        </div>
                    
                        <!-- Sign Up Button -->
                        <div class="text-center">
                            <p>Not a member? <a data-bs-toggle="modal" href="#signupModalToggle" role="button">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                            <p>Already Have an Account? <a data-bs-toggle="modal" href="#loginModalToggle" role="button">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <!-- Forgot Password Popup -->
    <div class="modal fade" id="forgotPasswordModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Reset Password</h1>
                    <a data-bs-dismiss="modal" id="rp_popup_close_button" class="material-symbols-outlined popup-close-icon">close</a>
                </div>
                <div class="modal-body">
                    <div class="popup-alert-message d-flex justify-content-center">
                    <p class="popup-alert-message-text" id="rp_alert_message">Please enter a valid email</p>
                    </div>
                    <form>
                       <!-- Email input -->
                       <div id="rp_input_email_div" class="form-outline mb-2">
                            <label class="form-label" for="rp_input_email">Email address</label>
                            <input type="email" id="rp_input_email" class="form-control" />
                        </div>

                        <!-- Question Answer input -->
                       <div id="rp_input_ques_ans_div" class="form-outline mb-2">
                            <label class="form-label" id="rp_input_ques" for="rp_input_answer">Security Question</label>
                            <input type="text" id="rp_input_answer" class="form-control" />
                        </div>

                        <div id="rp_input_new_pass_div">
                                <!-- Password input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="rp_input_pass">New Password<span class="input-star">*</span></label>
                                <input type="password" id="rp_input_pass" class="form-control" required />
                                <span id="rp_pass_eye_icon" class="password-show-hide-eye-icon material-symbols-outlined" onclick="changePasswordVisibility(this.previousElementSibling.id,this.id)">visibility</span>
                            </div>

                            <!-- Confirm Password input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="rp_input_confirm_pass">Confirm Password<span class="input-star">*</span></label>
                                <input type="password" id="rp_input_confirm_pass" class="form-control" required />
                                <span id="rp_confirm_pass_eye_icon" class="password-show-hide-eye-icon material-symbols-outlined" onclick="changePasswordVisibility(this.previousElementSibling.id,this.id)">visibility</span>
                            </div>
                        </div>

                        <!-- Login button -->
                        <div class="login-button d-flex justify-content-center">
                            <button type="button" id="rp_submit_button" class="btn btn-primary btn-block mb-2">Reset Password</button>
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

    <a data-bs-toggle="modal" href="#alertMessageBoxPopup" role="button">Alert Popup</a>