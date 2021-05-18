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
                <li class="breadcrumb-item active" aria-current="page">HUKDIS</li>
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
                    <h3 class="mb-0">HUKDIS</h3>
                  </div>
                  <div>
                    <p class="text-danger mt-4"><?php echo $this->session->flashdata('msg'); ?></p>
                  </div>
                  <div class="col-6">
                    <!-- <div class="float-right">
                      <a href="<?= base_url() . 'user/user_hukdis/form' ?>">
                        <button type="button" class="table-action btn btn-sm btn-warning text-white">
                          <i class="ni ni-fat-add fa-1x p-2"></i>Tambah Data HUKDIS
                        </button>
                      </a>

                    </div> -->
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
                      $kategori_hukuman=$i['jenis_hukuman'];
                      $file=$i['file'];
                    ?>
                      <tr class="text-center">

                        <td><?php echo $no++ ?></td>
                        <td class="table-user">
                          <b><?php echo $nip; ?></b>
                        </td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo date("d-m-Y",strtotime($tgl_lapor))?></td>
                        <td><?php echo $no_surat; ?></td>
                        <td><?php echo $kategori_hukuman; ?></td>
                        <td><?php echo $file; ?></td>

                        <td class="text-center justify-content-between">
                         
                            <a href="<?= base_url('admin/hukdis/download/').$file; ?>">
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
          </div>

        </div>
      </div>
    </div>
  </div>



  <?php $this->load->view('layouts/footer') ?>