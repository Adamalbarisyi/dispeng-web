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
                  <div class="col-12">
                    <h3 class="mb-0">LHKPN</h3>
                  </div>
                  <div>
                  </div>
                  <!--  <div class="col-6">
                    <div class="float-right">
                      <a href="<?= base_url() . 'user/user_lhkpn/form' ?>">
                        <button type="button" class="table-action btn btn-sm btn-warning text-white">
                          <i class="ni ni-fat-add fa-1x p-2"></i>Tambah Data LHKPN
                        </button>
                      </a>

                    </div>
                  </div> -->
                </div>

                <?php if ($this->session->flashdata('success')) { ?>
                  <div class="pt-4 pb-0 pl-4 pr-4">
                    <div class="alert alert-success" role="alert">
                      <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                      <span class="alert-text"><strong>Succes!</strong> <?php echo $this->session->flashdata('success'); ?></span>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                <?php } ?>
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

                        <?php if ($status == 1) : ?>
                          <td> <span class="badge-md badge-pill badge-success">Terverifikasi</span></td>
                        <?php endif ?>

                        <td class="text-center justify-content-between">
                          <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#modal-detail<?php echo $id; ?>">
                            Detail
                          </button>
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
  foreach ($lhkpn->result_array() as $i) :
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
              <label for="nomor-nip<?= $id ?>" class="col-md-4 col-form-label form-control-label text-left">Nomor NIP</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $nip; ?>" id="nomor-nip<?= $id ?>" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="tanggal-pengajuan<?= $id ?>" class="col-md-4 col-form-label form-control-label text-left">Tanggal Pengajuan</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $tgl_pengajuan; ?>" id="tanggal-pengajuan<?= $id ?>" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="tanggal-verif<?= $id ?>" class="col-md-4 col-form-label form-control-label text-left">Tanggal Verifikasi</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $tgl_verif; ?>" id="tanggal-verif<?= $id ?>" disabled>
              </div>
            </div>

            <div class="form-group row mb-2">
              <label for="diverif-oleh<?= $id ?>" class="col-md-4 col-form-label form-control-label text-left">Diverifikasi Oleh</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $verifikator; ?>" id="diverif-oleh<?= $id ?>" disabled>
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