
    <section class="register-photo">
        <div class="form-container" style="background: #ffffff;">
        <img src="<?= base_url()?>Landing/assets/img/Registration.jpg" style="width: 500px;margin-top: 100px;">
        <form  method="POST" action="<?= base_url()?>login/action_login">
          <h2 class="text-center">
            <strong>Login
            </strong> 
          </h2>
         <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
            </div>
          <div class="form-group">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"/>
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