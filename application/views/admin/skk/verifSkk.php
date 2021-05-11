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
                <li class="breadcrumb-item active" aria-current="page">Verifikasi Permintaan SKK</li>
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
                    <h3 class="mb-0">Verifkasi Permintaan SKK</h3>
                  </div>

                </div>
              </div>
              <!-- Light table -->



              <div class="table-responsive">
          <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>File</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      foreach ($skk->result_array() as $i):
                        $id=$i['id_skk'];
                          $nip=$i['nip'];
                          $nama=$i['nama'];
                          $file=$i['file'];
                          $status=$i['status_proses'];
                        ?>
                    <tr>
                      
                      <td class="table-user">
                        <b><?php echo $nip; ?></b>
                      </td>
                      <td><?php echo $nama; ?></td>
                      <td><?php echo $file; ?></td>
                      <?php if ($status==0): ?>
                      <td>Dalam Proses</td>
                      <?php elseif ($status==1): ?>
                        <td>Terverivikasi</td>
                      <?php endif; ?>
                      
                      <td class="text-center justify-content-between">
                        <a href="<?= base_url('admin/skk/download/').$file; ?>">
                           <button type="button" class="table-action btn btn-sm btn-danger text-white">
                          Download
                        </button>
                        </a>
                     
                       <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#exampleModal<?php echo $id;?>">
                          Verifikasi
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

 foreach ($skk->result_array() as $i):
                        $id=$i['id_skk'];
                          $nip=$i['nip'];
                          $nama=$i['nama'];
                          $file=$i['file'];
                          $status=$i['status_proses'];
   ?>
    <div class="modal fade" id="exampleModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Verifikasi File</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/skk/update_skk'?>" enctype="multipart/form-data">
                                  <input type="hidden" name="file" value="<?php echo $file;?>">
                                  <input type="hidden" name="id_skk" value="<?php echo $id;?>">
                                  <input type="hidden" name="nip" value="<?php echo $nip;?>">


                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label float-left">Masukkan Normor NIP</label>
                                    <input class="form-control" type="text" name="nip" value="<?= $nip; ?>" id="example-text-input" disabled>
                                  </div>

                               <div class="form-group">
                               <h5 class="text-left">Upload File Persetujuan SKK</h5>
                               <div class="custom-file">
                                    
                                    <input type="file" name="new_file" class="custom-file-input" id="customFileLang" lang="en">
                                    <label class="custom-file-label"  for="customFileLang">Pilih file</label>
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

  <?php $this->load->view('layouts/footer') ?>