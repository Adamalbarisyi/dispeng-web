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
                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Default</li>
              </ol>
            </nav>
          </div>
        </div>


        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">DATA PEGAWAI</h5>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                <h4 class=" mr-2"><span class="text-default m-3"> 67</span> <strong class=" text-success m-3">Terverifikasi</strong></h4>
                <h4 class=" mr-2"><span class="text-default m-3"> 67</span> <strong class="text-warning m-3">Dalam Proses</strong></h4>
                </p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">DATA HUKDIS</h5>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                <h4 class=" mr-2"><span class="text-default m-3"> 67</span> <strong class=" text-success m-3">Terverifikasi</strong></h4>
                <h4 class=" mr-2"><span class="text-default m-3"> 67</span> <strong class="text-warning m-3">Dalam Proses</strong></h4>
                </p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">DATA LHKPN</h5>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                <h4 class=" mr-2"><span class="text-default m-3"> 67</span> <strong class=" text-success m-3">Terverifikasi</strong></h4>
                <h4 class=" mr-2"><span class="text-default m-3"> 67</span> <strong class="text-warning m-3">Dalam Proses</strong></h4>
                </p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">DATA SKK</h5>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                <h4 class=" mr-2"><span class="text-default m-3"> 67</span> <strong class=" text-success m-3">Terverifikasi</strong></h4>
                <h4 class=" mr-2"><span class="text-default m-3"> 67</span> <strong class="text-warning m-3">Dalam Proses</strong></h4>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $iduser = $this->session->userdata('iduser');
  $q = $this->db->query("SELECT * FROM tbl_user WHERE user_id='$iduser'");
  $c = $q->row_array();
  ?>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-body">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <h2 class="text-white">Selamat datang di halaman dashboard User <strong> <?= $c['user_nama'] ?></strong></h2>
            </div>

            <div class="nav-wrapper">
              <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">LHKPN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">HUKDIS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">SKK</a>
                </li>
              </ul>
            </div>
            <div class="card shadow">
              <div class="card-body">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                    <h2 class="py-2">Status Berkas LHKPN</h2>
                    <div class="table-responsive py-4">
                      <table class="table align-items-center table-flush display" id="table1">
                        <thead class="thead-light">
                          <tr class="text-center">
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <!-- <th>FIle</th> -->
                            <th>Status LHKPN</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          foreach ($lhkpn->result_array() as $i) :
                            $id = $i['id_lhkpn'];
                            $nip = $i['nip'];
                            $nama = $i['nama'];
                            $file = $i['file'];
                            $status = $i['status_proses'];
                          ?>

                            <tr class="text-center">
                              <td><?php echo $no++ ?></td>
                              <td class="table-user">
                                <b><?php echo $nip; ?></b>
                              </td>
                              <td><?php echo $nama; ?></td>
                              <!-- <td><?php echo $file; ?></td> -->
                              <?php if ($status == 0) : ?>
                                <td> <span class="badge-md badge-pill badge-warning">Dalam Proses</span></td>
                              <?php elseif ($status == 1) : ?>
                                <td> <span class="badge-md badge-pill badge-success">Terverifikasi</span></td>
                              <?php endif; ?>
                              <td>
                                <?php if ($status == 1) : ?>
                                  <a href="#">
                                  <button type="button" class="table-action btn btn-sm btn-info text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#modal-detail-skk<?php echo $id; ?>">
                                    Preview
                                  </button>
                                    <button type="button" class="table-action btn btn-sm btn-danger text-white">
                                      Download
                                    </button>
                                  </a>
                                  <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#modal-detail-lhkpn<?php echo $id; ?>">
                                    Detail
                                  </button>
                                <?php else : ?>
                                  <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#modal-detail-lhkpn-proses<?php echo $id; ?>">
                                    Detail
                                  </button>
                                <?php endif; ?>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                    <h2 class="py-2">Status Berkas Hukdis</h2>
                    <div class="table-responsive py-4">
                      <table class="table align-items-center table-flush display" id="table2">
                        <thead class="thead-light">
                          <tr class="text-center">
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tgl Lapor</th>
                            <th>No Surat</th>
                            <th>kat. Hukuman</th>
                            <th>File</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          foreach ($hukdis->result_array() as $i) :
                            $nip = $i['nip'];
                            $nama = $i['nama'];
                            $tgl_lapor = $i['tanggal_pelaporan'];
                            $no_surat = $i['no_surat'];
                            $kategori_hukuman = $i['jenis_hukuman'];
                            $file = $i['file'];
                          ?>
                            <tr class="text-center">

                              <td><?php echo $no++ ?></td>
                              <td class="table-user">
                                <b><?php echo $nip; ?></b>
                              </td>
                              <td><?php echo $nama; ?></td>
                              <td><?php echo date("d-m-Y", strtotime($tgl_lapor)) ?></td>
                              <td><?php echo $no_surat; ?></td>
                              <td><?php echo $kategori_hukuman; ?></td>
                              <td><?php echo $file; ?></td>
                              <td class="text-center justify-content-between">
                                <a href="<?= base_url('user/user_hukdis/download/') . $file; ?>">
                                  <button type="button" class="table-action btn btn-sm btn-danger text-white">
                                    Download
                                  </button>
                                </a>
                              </td>

                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>

                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                    <h2 class="py-2">Status Berkas SKK</h2>
                    <div class="table-responsive py-4">
                      <table class="table align-items-center table-flush display" id="table3">
                        <thead class="thead-light">
                          <tr class="text-center">
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <!-- <th>File</th> -->
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          foreach ($lhkpn->result_array() as $i) :
                            $nip = $i['nip'];
                            $nama = $i['nama'];
                            $file = $i['file'];
                            $status = $i['status_proses'];
                          ?>
                            <tr class="text-center">

                              <td><?php echo $no++ ?></td>
                              <td class="table-user">
                                <b><?php echo $nip; ?></b>
                              </td>
                              <td><?php echo $nama; ?></td>
                              <!-- <td><?php echo $file; ?></td> -->
                              <?php if ($status == 0) : ?>
                                <td> <span class="badge-md badge-pill badge-warning">Dalam Proses</span></td>
                              <?php elseif ($status == 1) : ?>
                                <td> <span class="badge-md badge-pill badge-success">Terverifikasi</span></td>
                              <?php endif; ?>

                              <td class="text-center justify-content-between">
                                <?php if ($status == 1) : ?>
                                  <button type="button" class="table-action btn btn-sm btn-info text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#modal-detail-skk<?php echo $id; ?>">
                                    Preview
                                  </button>
                                  <a href="#">
                                    <button type="button" class="table-action btn btn-sm btn-danger text-white">
                                      Download
                                    </button>
                                  </a>
                                  <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#modal-detail-skk<?php echo $id; ?>">
                                    Detail
                                  </button>
                                <?php else : ?>
                                  <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#modal-detail-skk-proses<?php echo $id; ?>">
                                    Detail
                                  </button>
                                <?php endif; ?>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Detail LHKPN -->
  <?php
  foreach ($detail_lhkpn->result_array() as $i) :
    $id = $i['id_lhkpn'];
    $nip = $i['nip'];
    $nama = $i['nama'];
    $file = $i['file'];
    $status = $i['status_proses'];
    $tgl_pengajuan = $i['created_at'];
    $tgl_verif = $i['updated_at'];
    $verifikator = $i['user_nama'];
  ?>
    <!-- Modal Detail -->
    <div class="modal fade" id="modal-detail-lhkpn<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail LHKPN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Nomor NIP</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="NOMOR NIP" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Tanggal Pengajuan</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="Tanggal Pengajuan" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Tanggal Verifikasi</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="tanggal verifikasi" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Diverifikasi Oleh</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="verifikator" id="example-text-input" disabled>
              </div>
            </div>

            <h4></h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- Modal detail proses LHKPN-->
  <?php
  foreach ($lhkpn->result_array() as $i) :
    $id = $i['id_lhkpn'];
    $nip = $i['nip'];
    $nama = $i['nama'];
    $file = $i['file'];
    $status = $i['status_proses'];
    $tgl_pengajuan = $i['created_at'];
    $tgl_verif = $i['updated_at'];
  ?>
    <!-- Modal detail proses -->
    <div class="modal fade" id="modal-detail-lhkpn-proses<?= $id;  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail LHKPN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="modal-body">
            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Nomor NIP</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $nip; ?>" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Tanggal Pengajuan</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $tgl_pengajuan; ?>" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Status Verifikasi</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php if ($status == 0) : ?> Dalam Proses Verifikasi <?php else : ?> Terverivikasi <?php endif; ?> " id="example-text-input" disabled>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  
    <!-- Modal Detail SKK -->

    <!-- Modal Detail -->
    <div class="modal fade" id="modal-detail-skk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail SKK</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Nomor NIP</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="NOMOR NIP" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Tanggal Pengajuan</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="Tanggal Pengajuan" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Tanggal Verifikasi</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="tanggal verifikasi" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Diverifikasi Oleh</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="verifikator" id="example-text-input" disabled>
              </div>
            </div>

            <h4></h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  <!-- Modal detail proses SKK-->

    <!-- Modal detail proses -->
    <div class="modal fade" id="modal-detail-skk-proses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail SKK</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="modal-body">
            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Nomor NIP</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $nip; ?>" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Tanggal Pengajuan</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $tgl_pengajuan; ?>" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Status Verifikasi</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php if ($status == 0) : ?> Dalam Proses Verifikasi <?php else : ?> Terverivikasi <?php endif; ?> " id="example-text-input" disabled>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php $this->load->view('layouts/footer') ?>