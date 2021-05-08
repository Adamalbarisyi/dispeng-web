<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Bidang Pengawasan Kejaksaan Tinggi D.I Yogyakarta</title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css'); ?>" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/argon.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icons.css'); ?>" type="text/css">
</head>

<body class="bg-primary">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="<?php echo base_url(); ?>#">
                                <img src="<?php echo base_url(); ?>assets/img/logo/logo.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

  <!-- Main content -->
  <div class="main-content">
    <!-- Page content -->
    <div class="container pb-5 py-3 py-lg-3 pt-lg-7">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
              <img src="<?php echo base_url(); ?>assets/img/logo/logo.png" class="text-white h-15 w-75 mb-2">
                <h2 class="text-primary">Login terlebih dahulu!</h2>
                <small>Selamat Datang di Sistem Eclereance <br /> Bidang Pengawasan Kejaksaan Tinggi D.I.
                  Yogyakarta</small>
                  <p class="text-danger mt-4"><?php echo $this->session->flashdata('msg');?></p>
              </div>
              <form action="<?= base_url().'auth/login' ?>" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input name="nip" class="form-control" placeholder="NIP" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="password" class="form-control" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Ingatkan saya</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Login</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="<?= base_url() . 'forget' ?>" class="text-light"><small>Lupa password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="<?= base_url() . 'register' ?>" class="text-light"><small>Buat akun baru</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="<?php echo base_url('assets/vendor/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/js-cookie/js.cookie.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js'); ?>"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url('assets/js/argon.js'); ?>"></script>
</body>

</html>