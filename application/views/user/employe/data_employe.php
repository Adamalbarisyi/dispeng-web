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
                <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
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
                    <h3 class="mb-0">Pegawai</h3>
                  </div>
                  <div>
                     <p class="text-danger mt-4"><?php echo $this->session->flashdata('msg');?></p>
                  </div>
                  <div class="col-6">
                    <div class="float-right">
                      <a  href="<?= base_url().'user/employe' ?>">
                         <button type="button" class="table-action btn btn-sm btn-warning text-white">
                      <i class="ni ni-fat-add fa-1x p-2"></i>Tambah Data
                      </button>
                      </a>
                     
                    </div>
                  </div>

                </div>
              </div>
              <!-- Light table -->
              <div class="table-responsive py-4">
                <table class="table align-items-center table-flush" id="datatable-basic">
                  <thead class="thead-light">
                    <tr class="text-center">
                    <th>No</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Region</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                      foreach ($employe->result_array() as $i):
                      $id=$i['id'];
                          $nip=$i['nip'];
                          $nama=$i['nama'];
                          $region=$i['region_nama'];
                          $nrp=$i['nrp'];
                          $pangkat_gol=$i['pangkat_gol'];
                          $jabatan=$i['jabatan'];
                          $status=$i['status'];
                          $keterangan=$i['keterangan'];
                          $email=$i['email'];
                        ?>
                    <tr class="text-center">
                      <td><?php echo $no++?></td>
                      <td class="table-user">
                        <b><?php echo $nip; ?></b>
                      </td>
                      <td><?php echo $nama; ?></td>
                      <td><?php echo $region; ?></td>
                      <td>
                      <?php if($status==0):?>         Aktif <?php else :?> <?= $keterangan?>
                                        <?php endif;?>
                 
                      </td>
                      <td class="text-center justify-content-between">
                        <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#modal-detail<?php echo $id; ?>">
                          Detail 
                        </button>
                        
                        <div class="modal fade" id="modal-detail<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Pegawai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  
                                  <div class="modal-body">
                                    <div class="form-group row mb-2">
                                      <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Nama Lengkap</label>
                                      <div class="col-md-8">
                                        <input class="form-control" type="text" value="<?php echo $nama; ?>" id="example-text-input" disabled>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row mb-2">
                                      <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Nomor NIP</label>
                                      <div class="col-md-8">
                                        <input class="form-control" type="text" value="<?php echo $nip; ?>" id="example-text-input" disabled>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row mb-2">
                                      <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Nomor NRP</label>
                                      <div class="col-md-8">
                                        <input class="form-control" type="text" value="<?php echo $nrp;?>" id="example-text-input" disabled>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row mb-2">
                                      <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Pangkat Golongan</label>
                                      <div class="col-md-8">
                                        <input class="form-control" type="text" value="<?php echo $pangkat_gol;?>" id="example-text-input" disabled>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row mb-2">
                                      <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Jabatan</label>
                                      <div class="col-md-8">
                                        <input class="form-control" type="text" value="<?php echo $jabatan;?>" id="example-text-input" disabled>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row mb-2">
                                      <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Unit Kerja</label>
                                      <div class="col-md-8">
                                        <input class="form-control" type="text" value="KADIV 3" id="example-text-input" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group row mb-2">
                                      <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Status Pegawai</label>
                                      <div class="col-md-8">
                                        <input class="form-control" type="text" value="<?php if($status==0):?> Aktif <?php else :?> <?= $keterangan?>
                                        <?php endif;?>" id="example-text-input" disabled>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row mb-2">
                                      <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-left">Email</label>
                                      <div class="col-md-8">
                                        <input class="form-control" type="text" value="<?php echo $email;?>" id="example-text-input" disabled>
                                      </div>
                                    </div>
                         
                                    
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
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

  <?php $this->load->view('layouts/footer') ?>