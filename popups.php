
    <!-- Login Popup -->
    <div class="modal fade" id="loginModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Login</h1>
                    <a data-bs-dismiss="modal" class="material-symbols-outlined popup-close-icon">close</a>
                    <!-- <button type="button" class="popup-close-button" data-bs-dismiss="modal" aria-label="Close"><span class="material-symbols-outlined popup-close-icon">close</span></button> -->
                </div>
                <div class="modal-body">
                    <div class="popup-alert-message d-flex justify-content-center">
                        <p>Please enter a valid email</p>
                    </div>
                    <form>
                        <!-- Email input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example1">Email address</label>
                            <input type="email" id="form2Example1" class="form-control" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example2">Password</label>
                            <input type="password" id="form2Example2" class="form-control" />
                        </div>

                        <!-- Forgot Password -->
                        <div class="row mb-2">
                            <div class="col d-flex justify-content-center">
                            <a data-bs-toggle="modal" href="#forgotPasswordModalToggle" role="button">Forgot Password?</a>    
                            <!-- <a href="#!">Forgot password?</a> -->
                            </div>
                        </div>

                        <!-- Login button -->
                        <div class="login-button d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-block mb-2">Login</button>
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
                    <a data-bs-dismiss="modal" class="material-symbols-outlined popup-close-icon">close</a>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="popup-alert-message d-flex justify-content-center">
                        <p>Please enter a valid email</p>
                    </div>
                    <form>
                        <!-- Name input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example1">Name<span class="input-star">*</span></label>
                            <input type="text" id="form2Example1" class="form-control" required />
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example1">Email address<span class="input-star">*</span></label>
                            <input type="email" id="form2Example1" class="form-control" required />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example2">Password<span class="input-star">*</span></label>
                            <input type="password" id="form2Example2" class="form-control" required />
                        </div>

                         <!-- Confirm Password input -->
                         <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example2">Confirm Password<span class="input-star">*</span></label>
                            <input type="password" id="form2Example2" class="form-control" required />
                        </div>

                                                <!-- User Type input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example1">I am a<span class="input-star">*</span></label>
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected value="Student">Student</option>
                                <option value="Parent">Parent</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Visitor">Visitor</option>
                            </select>
                        </div>

                        <!-- Login button -->
                        <div class="login-button d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-block mb-2">Sign Up</button>
                        </div>
                    
                        <!-- Sign Up Button -->
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
                    <a data-bs-dismiss="modal" class="material-symbols-outlined popup-close-icon">close</a>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="popup-alert-message d-flex justify-content-center">
                        <p>Please enter a valid email</p>
                    </div>
                    <form>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example1">Email address</label>
                            <input type="email" id="form2Example1" class="form-control" />
                        </div>

                        <!-- Login button -->
                        <div class="login-button d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-block mb-2">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>