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
                <?php $result = $this->db->get('tbl_employe');
                $result = $this->db->query("SELECT * FROM tbl_employe WHERE status='0'");
                $jumlah = $result->num_rows();

                $result1 = $this->db->query("SELECT * FROM tbl_employe WHERE status='1'");
                $jumlah1 = $result1->num_rows();
                ?>
                <p class="mt-3 mb-0 text-sm">
                <h4 class=" mr-2"><span class="text-default m-3"> <?php echo $jumlah; ?></span> <strong class=" text-success m-3">Aktif</strong></h4>
                <h4 class=" mr-2"><span class="text-default m-3"> <?php echo $jumlah1; ?></span> <strong class="text-warning m-3">Tidak Aktif</strong></h4>
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
                <?php $result = $this->db->get('tbl_lhkpn');
                $result = $this->db->query("SELECT * FROM tbl_lhkpn WHERE status_proses='0'");
                $jumlah = $result->num_rows();

                $result1 = $this->db->query("SELECT * FROM tbl_lhkpn WHERE status_proses='1'");
                $jumlah1 = $result1->num_rows();
                ?>

                <p class="mt-3 mb-0 text-sm">
                <h4 class=" mr-2"><span class="text-default m-3"> <?php echo $jumlah1; ?></span> <strong class=" text-success m-3">Terverifikasi</strong></h4>
                <h4 class=" mr-2"><span class="text-default m-3"> <?php echo $jumlah; ?></span> <strong class="text-warning m-3">Dalam Proses</strong></h4>
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
                <?php $result = $this->db->get('tbl_hukdis');
                $result = $this->db->query("SELECT * FROM tbl_hukdis");
                $jumlah = $result->num_rows();

                ?>
                <p class="mt-3 mb-0 text-sm">
                <h4 class=" mr-2 pt-0 pb-4"><span class="text-default m-3"> <?php echo $jumlah; ?></span> <strong class=" text-success m-3">File Berkas</strong></h4>
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
                <?php $result = $this->db->get('tbl_skk');
                $result = $this->db->query("SELECT * FROM tbl_skk WHERE status_proses='0'");
                $jumlah = $result->num_rows();

                $result1 = $this->db->query("SELECT * FROM tbl_skk WHERE status_proses='1'");
                $jumlah1 = $result1->num_rows();
                ?>
                <p class="mt-3 mb-0 text-sm">
                <h4 class=" mr-2"><span class="text-default m-3"> <?php echo $jumlah1; ?></span> <strong class=" text-success m-3">Terverifikasi</strong></h4>
                <h4 class=" mr-2"><span class="text-default m-3"> <?php echo $jumlah; ?></span> <strong class="text-warning m-3">Dalam Proses</strong></h4>
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
              <h2 class="text-white">Selamat datang di halaman dashboard Admin <strong> <?= $c['user_nama'] ?></strong></h2>
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
                                <?php if ($status == 0) : ?>
                                  <a href="<?= base_url('admin/lhkpn/preview/') . $id; ?>" target="_blank" class="table-action btn btn-sm btn-primary text-white">Preview</a>

                                  <a href="<?= base_url('admin/lhkpn/download/') . $file; ?>">
                                    <button type="button" class="table-action btn btn-sm btn-danger text-white">
                                      Download
                                    </button>
                                  </a>
                                  <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#lhkpnModal<?php echo $id; ?>">
                                    Verifikasi
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
                            $id = $i['id_hukdis'];
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
                                <a href="#preview_lhkpnModal<?php echo $id; ?>" class="table-action btn btn-sm btn-primary text-white" data-toggle="modal">Preview</a>

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
                          foreach ($skk->result_array() as $i) :
                            $id = $i['id_skk'];
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
                                <?php if ($status == 0) : ?>
                                  <a href="<?= base_url('admin/skk/preview/') . $id; ?>" target="_blank" class="table-action btn btn-sm btn-primary text-white">Preview</a>
                                  <a href="<?= base_url('admin/skk/download/') . $file; ?>">
                                    <button type="button" class="table-action btn btn-sm btn-danger text-white">
                                      Download
                                    </button>
                                  </a>
                                  <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#skkModal<?php echo $id; ?>">
                                    Verifikasi
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
  <?php $this->load->view('layouts/footer') ?>

  <!-- MODAL VERIFIASI LHKPN -->
  <?php
  foreach ($lhkpn->result_array() as $i) :
    $id = $i['id_lhkpn'];
    $nip = $i['nip'];
    $nama = $i['nama'];
    $file = $i['file'];
    $status = $i['status_proses'];
  ?>
    <div class="modal fade" id="lhkpnModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Verifikasi File LHKPN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/lhkpn/update_lhkpn' ?>" enctype="multipart/form-data">
              <input type="hidden" name="file" value="<?php echo $file; ?>">
              <input type="hidden" name="id_lhkpn" value="<?php echo $id; ?>">
              <input type="hidden" name="nip" value="<?php echo $nip; ?>">


              <div class="form-group">
                <label for="example-text-input" class="form-control-label float-left">Masukkan Normor NIP</label>
                <input class="form-control" type="text" name="nip" value="<?= $nip; ?>" disabled>
              </div>

              <div class="form-group">
                <h5 class="text-left">Upload File LHKPN</h5>
                <div class="custom-file">

                  <input type="file" name="new_file" class="custom-file-input" id="uploadLHKPN<?= $id;?>" lang="en">
                  <label class="custom-file-label" for="uploadLHKPN<?= $id;?>">Pilih file</label>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- MODAL VERFIKIASI SKK -->

  <?php

  foreach ($skk->result_array() as $i) :
    $id = $i['id_skk'];
    $nip = $i['nip'];
    $nama = $i['nama'];
    $file = $i['file'];
    $status = $i['status_proses'];
  ?>
    <div class="modal fade" id="skkModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Verifikasi File</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/skk/update_skk' ?>" enctype="multipart/form-data">
              <input type="hidden" name="file" value="<?php echo $file; ?>">
              <input type="hidden" name="id_skk" value="<?php echo $id; ?>">
              <input type="hidden" name="nip" value="<?php echo $nip; ?>">


              <div class="form-group">
                <label for="example-text-input" class="form-control-label float-left">Masukkan Normor NIP</label>
                <input class="form-control" type="text" name="nip" value="<?= $nip; ?>" disabled>
              </div>

              <div class="form-group">
                <h5 class="text-left">Upload File Persetujuan SKK</h5>
                <div class="custom-file">

                  <input type="file" name="new_file" class="custom-file-input" id="verfifSKK" lang="en">
                  <label class="custom-file-label" for="verifSKK">Pilih file</label>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>


  <?php
  foreach ($hukdis->result_array() as $i) :
    $id = $i['id_hukdis'];
    $nip = $i['nip'];
    $nama = $i['nama'];
    $tgl_lapor = $i['tanggal_pelaporan'];
    $no_surat = $i['no_surat'];
    $kategori_hukuman = $i['jenis_hukuman'];
    $file = $i['file'];
  ?>
    <div class="modal fade" id="preview_lhkpnModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Verifikasi File LHKPN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body h-100vh">
            <object type="application/pdf" data="<?= base_url('./assets/dokument/HUKDIS/') . $file ?>" class="w-100 h-100">
              <embed src="<?= base_url('./assets/dokument/LHKPN/') . $file ?>" type="application/pdf"></embed>
            </object>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
 