<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>User
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url()?>Landing/assets2/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
  </head>
  <body style="font-family: Mulish, sans-serif;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="font-family: Mulish, sans-serif;color: rgb(0,0,0);">
      <div class="container">
        <img src="<?= base_url()?>Landing/assets2/img/Logo.png" style="width: 100px;">
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
          <span class="sr-only">Toggle navigation
          </span>
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="<?= base_url()?>" style="font-family: Mulish, sans-serif;">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url()?>education">Article
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url()?>dr_paws">Consultation
              </a>
            </li>
          </ul>
          <form class="form-inline mr-auto" target="_self">
            <div class="form-group">
              <label for="search-field">
                <i class="fa fa-search">
                </i>
              </label>
              <input class="form-control search-field" type="search" id="search-field" name="search">
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <img src="<?= base_url()?>Landing/assets2/img/chat.png" style="width: 24px;">
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="<?= base_url()?>Landing/assets2/img/notification.png" style="width: 24px;">
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">
                <img src="<?= base_url()?>Landing/assets2/img/Account.png" style="width: 24px;">
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">First Item
                </a>
                <a class="dropdown-item" href="#">Second Item
                </a>
                <a class="dropdown-item" href="<?= base_url()?>login/logout">Log Out
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>