<!-- Sing in  Form -->
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= base_url()?>assets/login/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="<?= base_url()?>register" class="signup-image-link">Create an account</a>
                    </div>
                    
                    <div class="signin-form">
                        <h2 class="form-title">Forgot Password</h2>
                        <form method="POST" class="register-form" id="login-form"action="<?= base_url()?>forgot/action_forgot">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass2" placeholder="Password2"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <a href="<?= base_url()?>login"><span class="social-label">Sing in</span></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
