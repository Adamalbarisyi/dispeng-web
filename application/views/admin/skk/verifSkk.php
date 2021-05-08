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
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Verifikasi SKK</li>
              </ol>
            </nav>
          </div>

        </div>
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-12 col-md-6">
            <div class="card">
              <!-- Card header -->
              <div class="card-header border-0">
                <div class="row">
                  <div class="col-6">
                    <h3 class="mb-0">Verifkasi SKK</h3>
                  </div>

                </div>
              </div>
              <!-- Light table -->
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th>Author</th>
                      <th>Created at</th>
                      <th>Product</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="table-user">
                        <img src="<?= base_url('assets/img/theme/team-1.jpg') ?>" class="avatar rounded-circle mr-3">
                        <b>John Michael</b>
                      </td>
                      <td>
                        <span class="text-muted">10/09/2018</span>
                      </td>
                      <td>
                        <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                      </td>
                      <td class="text-center justify-content-between">
                        <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Download File">
                          <i class="fa fa-download fa-1x p-2"></i>
                        </a>

                        <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#exampleModal">
                          Verifikasi
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Verifikasi File</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label float-left">Masukkan Normor NIP</label>
                                    <input class="form-control" type="text" placeholder="123245678" id="example-text-input">
                                  </div>

                               <div class="form-group">
                               <h5 class="text-left">Upload File LHKPN</h5>
                               <div class="custom-file">
                                    
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Pilih file</label>
                                  </div>
                               </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>


                      </td>


                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <?php $this->load->view('layouts/footer') ?>