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
                <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
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
                    <h3 class="mb-0">Pengguna</h3>
                  </div>
                  <div>
                     <p class="text-danger mt-4"><?php echo $this->session->flashdata('msg');?></p>
                  </div>
                  <div class="col-6">
                    <div class="float-right">

                      <button type="button" class="table-action btn btn-sm btn-warning text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#exampleModal">
                      <i class="ni ni-fat-add fa-1x p-2"></i>Tambah Data
                      </button>
                    </div>
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
                      <th>Region</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      foreach ($user->result_array() as $i):
                          $nip=$i['user_nip'];
                          $nama=$i['user_nama'];
                          $region=$i['region_nama'];
                          $foto=$i['foto'];
                        ?>
                    <tr>
                      
                      <td class="table-user">
                        <img src="<?php echo base_url().'assets/pas_foto/'.$foto;?>" class="avatar rounded-circle mr-3">
                        <b><?php echo $nip; ?></b>
                      </td>
                      <td><?php echo $nama; ?></td>
                      <td><?php echo $region; ?></td>
                      <td class="text-center justify-content-between">
                        <button type="button" class="table-action btn btn-sm btn-primary text-white" data-original-title="Verifikasi" data-toggle="modal" data-target="#exampleModal">
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
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/user/simpan_user'?>" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label float-left">Masukkan Normor NIP</label>
                                    <input class="form-control" type="text" name="nip" placeholder="123245678" id="example-text-input">
                                  </div>

                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label float-left">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" placeholder="Muhammad Fauzan Ashari" id="nama">
                                  </div>

                                   <div class="form-group">
                                    <label for="example-text-input" class="form-control-label float-left">Email</label>
                                    <input class="form-control" type="text" name="email" placeholder="Muhammad@gmail.com" id="nama">
                                  </div>

                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label float-left">Level</label>
                                   <select name="level" class="form-control">
                                       <option selected>--</option>
                                      
                                    <option value="1">KEJARI</option>
                                    <option value="2">KEJATI</option>
                                    <option value="3">ADMIN</option>     
                                    </select>
                                  </div>

                                   <div class="form-group">
                                    <label for="example-text-input" class="form-control-label float-left">Region</label>
                                    <select name="region" class="form-control">
                                       <option selected>--</option>
                                       <?php foreach ($data->result_array() as $i) {
                                        $region_id=$i['region_id'];
                                        $region_nama=$i['region_nama'];
                                        ?>
                                    <option value="<?php echo $region_id;?>"><?php echo $region_nama;?></option>
                                         <?php }?>
                                    </select>
                                  </div>

                                      <div class="form-group">
                               <h5 class="text-left">Upload Foto</h5>
                               <div class="custom-file">
                                    
                                    <input type="file" name="filefoto" class="custom-file-input" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Pilih file</label>
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

  <?php $this->load->view('layouts/footer') ?>