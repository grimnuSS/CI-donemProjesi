<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CI-Admin Panel</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url("assets/"); ?>vendors/feather/feather.css">
	<link rel="stylesheet" href="<?php echo base_url("assets/"); ?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url("assets/"); ?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet"
		  href="<?php echo base_url("assets/"); ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?php echo base_url("assets/"); ?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>js/select.dataTables.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo base_url("assets/"); ?>css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?php echo base_url("assets/"); ?>images/favicon.ico"/>
</head>
<body>
<div class="container-scroller">
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
	<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
		<a class="navbar-brand brand-logo mr-5" href="<?php echo base_url(""); ?>"><img src="<?php echo base_url("assets/");?>images/logo.svg" class="mr-2" alt="logo"/></a>
		<a class="navbar-brand brand-logo-mini" href="<?php echo base_url(""); ?>"><img src="<?php echo base_url("assets/");?>images/logo-mini.svg" alt="logo"/></a>
	</div>
	<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
		<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
			<span class="icon-menu"></span>
		</button>
		<ul class="navbar-nav navbar-nav-right">
			<li class="nav-item nav-profile dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
					<img src="<?php echo base_url("assets/");?>images/faces/face28.jpg" alt="profile"/>
				</a>
				<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
					<a class="dropdown-item">
						<i class="ti-settings text-primary"></i>
						Ayarlar
					</a>
					<a class="dropdown-item">
						<i class="ti-power-off text-primary"></i>
						Çıkış Yap
					</a>
				</div>
			</li>
		</ul>
		<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
			<span class="icon-menu"></span>
		</button>
	</div>
</nav>
