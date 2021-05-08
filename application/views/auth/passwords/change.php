<?php $this->load->view('layouts/header') ?>
<?php $this->load->view('layouts/sidenav') ?>
<!-- Main content -->
<div class="main-content" id="panel">
  <!-- Topnav -->

  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Permintaan LHKPN</li>
              </ol>
            </nav>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0 text-center">Form Permintaan SKK</h3>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6 p-4 border">

              <form role="form">
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Masukkan nama" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Masukkan nomor NIP" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn btn-primary mt-4">Simpan</button>
                                </div>
                            </form>
                    
              </div>
              <div class="col-lg-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <?php $this->load->view('layouts/footer') ?>

