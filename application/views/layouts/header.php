<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Bidang Pengawasan Kejaksaan Tinggi D.I Yogyakarta">
  <meta name="author" content="Creative Tim">
  <title>Bidang Pengawasan Kejaksaan Tinggi D.I Yogyakarta</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo/logo.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css'); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" type="text/css">
  
    <!-- Page plugins -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')?>">
  
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/argon.css'); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/icons.css'); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" type="text/css">
  
  
</head>

<body>
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Navbar links -->
        <ul class="navbar-nav  align-items-center ml-md-auto">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
    
        </ul>
         <?php
              $iduser=$this->session->userdata('iduser');
              $q=$this->db->query("SELECT * FROM tbl_user WHERE user_id='$iduser'");
              $c=$q->row_array();
          ?>
        <ul class="navbar-nav align-items-center ml-auto ml-md-0">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <?php if ($c['foto'] !=NULL): ?>
                  <img alt="Image placeholder" src="<?php echo base_url().'assets/pas_foto/'.$c['foto'];?>">
                    <?php else: ?>
                  <img alt="Image placeholder" src="<?php echo base_url().'assets/img/user_blank.png';?>">
                  <?php endif; ?>
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?= $c['user_nama'] ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>

              <a href="<?php echo base_url().'auth/change_password'?> "class="dropdown-item">
                <i class="ni ni ni-settings-gear-65"></i>
                <span>Ganti Password</span>
              </a>

              <a href="<?php echo base_url().'auth/logout'?> "class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>