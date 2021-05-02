<!-- <div class="container">

                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" action="<?= base_url()?>register/action_register" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>

                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home"></i></label>
                                <input type="address" name="address" id="address" placeholder="Your address"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="phone" name="phone" id="phone" placeholder="Your phone"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="<?= base_url()?>login" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?= base_url()?>assets/login/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


         -->
         <section class="register-photo">
        <div class="form-container" style="background: #ffffff;">
        <img src="<?= base_url()?>Landing/assets/img/Registration.jpg" style="width: 500px;margin-top: 100px;">
        <form  method="POST" action="<?= base_url()?>register/action_register">
          <h2 class="text-center">
            <strong>Create
            </strong> an account.
          </h2>
          <div class="form-group">
             <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"/>          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
            </div>
          <div class="form-group">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"/>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
          </div>
          <div class="form-group">
            <input type="address" class="form-control" name="address" id="address" placeholder="Your address"/>
          </div>
          <div class="form-group">
          <input type="phone" class="form-control" name="phone" id="phone" placeholder="Your phone"/>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit" style="background: #007fd2;">Sign Up
            </button>
          </div>
          <p class="already" >You already have an account? <a href="<?= base_url()?>login">Login here.</a></p>
        </form>
      </div>
    </section>
    <footer class="footer-clean">
      <div class="container">
        <div class="row justify-content-center" style="margin: 0px;font-family: Mulish, sans-serif;color: #000000;">
          <div class="col-sm-4 col-md-3 item">
            <h3>Hubungi Kami
            </h3>
            <p>Telepon:
              <br>Email:
            </p>
          </div>
          <div class="col-sm-4 col-md-3 item">
            <h3>Sitemap
            </h3>
            <ul>
              <li>
                <a href="#">FAQ
                </a>
              </li>
              <li>
                <a href="#">Terms and policy
                </a>
              </li>
              <li>
                <a href="#">Promo
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 item social">
            <a href="#">
              <i class="icon ion-social-facebook">
              </i>
            </a>
            <a href="#">
              <i class="icon ion-social-twitter">
              </i>
            </a>
            <a href="#">
              <i class="icon ion-social-snapchat">
              </i>
            </a>
            <a href="#">
              <i class="icon ion-social-instagram">
              </i>
            </a>
            <p class="copyright">Healthy Paws © 2021
            </p>
          </div>
        </div>
      </div>