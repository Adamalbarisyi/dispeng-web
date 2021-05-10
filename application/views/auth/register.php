<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Bidang Pengawasan Kejaksaan Tinggi D.I Yogyakarta</title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo/logo.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css'); ?>" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/argon.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icons.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" type="text/css">
</head>

<body class="bg-primary">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">

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
    <!-- Main content -->
    <div class="main-content">

        <!-- Page content -->
        <div class="container pb-4 py-4 py-lg-4 pt-lg-7">
            <!-- Table -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-secondary border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <img src="<?php echo base_url(); ?>assets/img/logo/logo.png" class="text-white h-15 w-75 mb-4">
                                <h1 class="text-muted">Buat Akun Baru</h1>

                                <?php if ($this->session->flashdata('warning')) {  ?>

                                    <div class="alert alert-warning">
                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                        <strong>Peringatan </strong> <?php echo $this->session->flashdata('warning'); ?>
                                    </div>

                                <?php } else if ($this->session->flashdata('info')) {  ?>

                                    <div class="alert alert-info">
                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                        <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <form method="post" action="<?= base_url() . 'auth/add_user' ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input class="form-control" name="nama" placeholder="Masukkan nama" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" name="nip" placeholder="Masukkan nomor NIP" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" name="email" placeholder="Masukkan email" type="email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" name="password" placeholder="Password" type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label float-left">Level</label>
                                    <select name="level" class="form-control">
                                        <option selected>--</option>

                                        <option value="1">KEJARI</option>
                                        <option value="2">KEJATI</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label float-left">Lokasi Wilayah</label>
                                    <select name="wilayah" class="form-control">
                                        <option selected>--</option>
                                        <?php foreach ($wilayah->result_array() as $i) {
                                            $region_id = $i['region_id'];
                                            $region_nama = $i['region_nama'];
                                        ?>
                                            <option value="<?php echo $region_id; ?>"><?php echo $region_nama; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="region">Upload Foto Profil</label>
                                    <div class="custom-file">
                                        <input type="file" name="file_foto" class="custom-file-input" id="customFileLang" lang="en">
                                        <label class="custom-file-label" for="customFileLang">Select file</label>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Buat Akun</button>
                                </div>
                            </form>
                            <div class="form-group mt-4 mb-0 row">
                                <div class="col-12 m-t-20 text-center">
                                    <a class=" text-muted" href="<?= base_url() . 'login' ?>"><i class="mdi mdi-account-circle mr-2"></i>Sudah punya akun?</a>
                                </div>
                            </div>
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