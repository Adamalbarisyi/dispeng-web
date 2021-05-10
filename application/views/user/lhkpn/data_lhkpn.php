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
                <li class="breadcrumb-item active" aria-current="page">LHKPN</li>
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
                    <h3 class="mb-0">LHKPN</h3>
                  </div>
                  <div>
                    <p class="text-danger mt-4"><?php echo $this->session->flashdata('msg'); ?></p>
                  </div>
                  <div class="col-6">
                    <div class="float-right">
                      <a href="<?= base_url() . 'user/user_lhkpn/form' ?>">
                        <button type="button" class="table-action btn btn-sm btn-warning text-white">
                          <i class="ni ni-fat-add fa-1x p-2"></i>Tambah Data LHKPN
                        </button>
                      </a>

                    </div>
                  </div>

                </div>
              </div>
              <!-- Light table -->
              <div class="table-responsive py-4">

                <table class="table table-flush" id="datatable-basic">
                  <thead class="thead-light">
                    <tr class="text-center">
                      <th>No</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>File</th>
                      <th>Status</th>
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
                        <td><?php echo $file; ?></td>
                        <?php if ($status == 0) : ?>
                          <td>    <span class="badge-md badge-pill badge-success">Dalam Proses</span></td>
                        <?php elseif ($status == 1) : ?>
                          <td>    <span class="badge-md badge-pill badge-success">Terverifikasi</span></td>
                        <?php endif; ?>

                        <td class="text-center justify-content-between">
                          <?php if ($status == 1) : ?>
                            <a href="<?= base_url('user/user_lhkpn/download/') . $file; ?>">
                              <button type="button" class="table-action btn btn-sm btn-danger text-white">
                                Download
                              </button>
                            </a>
                            <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#modal-detail<?php echo $id; ?>">
                              Detail
                            </button>
                          <?php else : ?>
                            <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#modal-detail_proses<?= $id; ?>">
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
    <div class="modal fade" id="modal-detail<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Tanggal Verifikasi</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $tgl_verif; ?>" id="example-text-input" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Diverifikasi Oleh</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $verifikator; ?>" id="example-text-input" disabled>
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
    <div class="modal fade" id="modal-detail_proses<?= $id;  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


            <h4></h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <?php $this->load->view('layouts/footer') ?>