<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin</title>
    <link rel="stylesheet" href="<?=base_url('')?>assets_dokter/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="<?=base_url('')?>assets_dokter/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets_dokter/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets_dokter/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets_dokter/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets_dokter/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets_dokter/css/styles.css">
</head>

<body>
    <div class="login-dark" style="height: 100vh;">
        <span id="gagal"><?= isset($_SESSION['loginGagal']) ? 'gagal' :'' ?></span>
        <?php unset($_SESSION['loginGagal']); ?>
        <form action="<?= base_url('admin_dokter/action_login')?>" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="username" name="username" placeholder="Username" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>
    <script src="<?=base_url('')?>assets_dokter/js/jquery.min.js"></script>
    <script src="<?=base_url('')?>assets_dokter/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url('')?>assets_dokter/js/Sidebar-Menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        const gagal = document.querySelector("#gagal");
        if(gagal.innerText == "gagal"){
            Swal.fire({
                title   : 'Login Gagal',
                text    :'Email atau Password Salah!',
                icon    : 'error',
                confirmButtonColor: '#d33',
                confirmButtonText:'<i class="fa fa-thumbs-down"></i> Coba Lagi!',
            })
        }
    </script>
</body>

</html> -->



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand
    </title>
    <link rel="stylesheet" href="<?=base_url('')?>assets_dokter/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets_dokter/assets/css/styles.min.css">
  </head>
  <body class="bg-gradient-primary" style="background: #007fd2;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
          <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-lg-6 d-none d-lg-flex">
                  <img src="<?=base_url('')?>assets_dokter/assets/img/Login.jpg" style="width: 550px;">
                </div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h4 class="text-dark mb-4">Welcome Back!
                      </h4>
                    </div>
                    <form method="POST" action="<?= base_url('admin_dokter/action_login')?>" >
                    <div class="form-group">
                        <input type="username" class="form-control" name="username" id="username" placeholder="Your username"/>
                        </div>
                    <div class="form-group">
                         <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" style="background: #007fd2;">Sign Up</button>
                    </div>                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js">
    </script>
    <script src="<?=base_url('')?>assets_dokter/assets/js/script.min.js">
    </script>
  </body>
</html>
