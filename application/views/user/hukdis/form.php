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
                <li class="breadcrumb-item active" aria-current="page">Permintaan HUKDIS</li>
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
            <h3 class="mb-0 text-center">Form Permintaan HUKDIS</h3>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6 p-4 border">

                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'user/user_hukdis/simpan_form' ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label float-left">Masukkan Normor NIP</label>
                    <input class="form-control" type="text" name="nip" placeholder="123245678" id="nip">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label float-left">Masukkan Normor Surat</label>
                    <input class="form-control" type="text" name="no_surat" placeholder="123245678" id="no_surat">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label float-left">Tanggal Pelaporan</label>
                    <input class="form-control" type="date" name="tanggal_lapor"  id="tanggal_lapor">
                  </div>
                  <div class="form-group row">
                  <label class="col-md-4 col-form-label form-control-label">Jenis Hukuman
                    <span class="font-weight-bold float-right">:</span></label>
                  <div class="col-md-8">
                    <div class="row">
                      <?php foreach ($kategori->result_array() as $i): 
                        $id=$i['id_kategori'];
                        $jenis_hukuman=$i['jenis_hukuman'];
                       ?>
                      <div class="col-lg-4">
                        <div class="custom-control custom-checkbox mt-2">
                          <input  value="<?= $id; ?>" id="jenis_hukuman" type="checkbox" name="kategori">
                          <label ><?= $jenis_hukuman ?></label>
                        </div>
                      </div>
                    <?php endforeach; ?>
                    </div>
                  </div>
                </div>

                  <div class="form-group p-1">
                    <h5 class="text-left">Upload File Hukdis</h5>
                    <div class="custom-file">

                      <input type="file" class="custom-file-input" name="file_pdf" id="customFileLang" lang="en">
                      <label class="custom-file-label" for="customFileLang">Pilih file</label>
                    </div>
                  </div>
                  <div class="p-4">
                    <div class="text-center">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
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