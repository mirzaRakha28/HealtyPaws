<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Dashboard - Brand</title>
	<link rel="stylesheet" href="<?=base_url('')?>assets_dokter/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?=base_url('')?>assets_dokter/assets/fonts/fontawesome5-overrides.min.css">
	<link rel="stylesheet" href="<?=base_url('')?>assets_dokter/assets/css/styles.min.css">
</head>

<body id="page-top" style="font-family: Mulish, sans-serif;">
	<div id="wrapper">
		<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #007fd2;">
			<div class="container-fluid d-flex flex-column p-0">
				<a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img src="<?=base_url('')?>assets_dokter/assets/img/Logo.png" style="width: 100px;"></a>
				<ul class="navbar-nav text-light" id="accordionSidebar">
					<li class="nav-item"><a class="nav-link active" href="Dokter_Index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url()?>admin_dokter/profil"><i class="fas fa-user"></i><span>Profil</span></a></li>
					<li class="nav-item"><a class="nav-link" href="<?=base_url('')?>admin_dokter/chat"><i class="fas fa-table"></i><span>Konsultasi</span></a></li>
				</ul>
				<div class="text-center d-none d-md-inline">
					<button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
				</div>
			</div>
		</nav>