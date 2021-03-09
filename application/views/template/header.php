
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <!-- =======================================================
  * Template Name: Mentor - v2.2.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");


    .image-upload > input {
  visibility:hidden;
  width:0;
  height:0
}

.top {
    background-color: #eee;
    padding: 10px;
    padding-left: 20px;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px
}

.bottom {
    padding: 10px;
    background-color: #fff;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px
}

.image {
    position: relative
}
.chat-popup{
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}
.image .type {
    position: absolute;
    left: 49px;
    bottom: 0;
    background: #fff;
    height: 30px;
    width: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%
}

.line-height {
    line-height: 20px
}

.live {
    height: 10px;
    width: 10px;
    border-radius: 50%;
    background: green;
    margin-left: 1px;
    display: flex;
    margin-right: 5px
}

.l-now {
    font-size: 12px
}

.dots {
    height: 10px;
    width: 10px;
    border-radius: 50%;
    background: blue;
    margin-left: 1px;
    display: flex;
    margin-right: 5px
}




  </style>
  <style>
  .content{
    margin-top:7%;
  }
    .chat-online {
    color: #34ce57
}

.chat-offline {
    color: #e4606d
}

.chat-messages {
    display: flex;
    flex-direction: column;
    max-height: 400px;
    height: 400px;
    overflow-y: scroll
}
.border-right{
  display: flex;
  flex-direction: column;
    max-height: 550px;
    height: 550px;
    overflow-y: scroll
}
.chat-message-left,
.chat-message-right {
    display: flex;
    flex-shrink: 0
}
.closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  margin-top: 5%;
  font-size: 60px;
  cursor: pointer;
  color: white;
}
.chat-message-left {
    margin-right: auto
}

.chat-message-right {
    flex-direction: row-reverse;
    margin-left: auto
}
.py-3 {
    padding-top: 1rem!important;
    padding-bottom: 1rem!important;
}
.px-4 {
    padding-right: 1.5rem!important;
    padding-left: 1.5rem!important;
}
.flex-grow-0 {
    flex-grow: 0!important;
}
.border-top {
    border-top: 1px solid #dee2e6!important;
}

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        
      <!-- <h1 class="logo mr-auto"><a href="index.html">Mentor</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo mr-auto"><img src="assets/img/Logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url()?>">Home</a></li>
          <li><a href="<?= base_url()?>dr_paws">Dr. Paws</a></li>
          <li><a href="<?= base_url()?>education">Healty Paws Education</a></li>
          <li><a href="<?= base_url()?>hospital">Paws Hospital</a></li>
          <li><a href="<?= base_url()?>recovery">Paws Recovery</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <?php if($_SESSION['login']){?>
        <a href="<?=base_url()?>login" class="get-started-btn">Login</a>
      <?php }else{?>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li>
          <button class="btn" onclick="openForm()">
            <i class="bi bi-chat-fill"></i>
          </button>
        </li>
        <li class=" dropdown">
          <a href="<?=base_url()?>login"class="nav-link" data-toggle="dropdown">
            <i class="bi bi-bell-fill"></i> 
          </a>
          <div class="dropdown-menu ">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex flex-row align-items-center">
                    <div class="image"> <img src="https://i.imgur.com/jhsYqVT.png" width="70"> <span class="type"><img src="https://i.imgur.com/4lg6mOg.png" width="20"></span> </div>
                    <div class="d-flex flex-column line-height ml-2"> <span class="font-weight-bold">hannahdat21</span> <span>Can i order online?</span> <i class="bi bi-check"></i> </div>
                </div>
              <!-- Message End -->
            </a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="<?= base_url()."assets/img/user/".$gambar['gambar']?>" class="rounded-circle mr-1" alt="Sharon Lessman" width="20" height="20">    
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?=base_url()?>profil">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Activity 
            </a>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?=base_url()?>login/logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
              </a>
            </div>
          </div>  
        </li>
          
        </ul>
      </nav>
        
      <?php }?>
    </div>
  </header><!-- End Header -->


  