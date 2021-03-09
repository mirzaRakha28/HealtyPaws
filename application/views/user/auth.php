<!-- Sing in  Form -->
<section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="<?= base_url()?>assets/login/images/signin-image.jpg" alt="sing up image"></figure>
                </div>
                
                <div class="signin-form">
                    <h2 class="form-title">Verifikasi</h2>
                    <form method="POST" class="register-form" id="login-form"action="<?= base_url()?>auth/action_otp">
                        <div class="form-group">
                            <label for="otp"><i class="zmdi zmdi-key material-icons-name"></i></label>
                            <input type="password" name="otp" id="otp" placeholder="Your Name"/>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </section>

    </div>
