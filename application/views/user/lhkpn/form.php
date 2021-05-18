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
                <li class="breadcrumb-item active" aria-current="page">Permintaan LHKPN</li>
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
            <h3 class="mb-0 text-center">Form Permintaan File LHKPN & HUKDIS</h3>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-8 p-4 border">
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'user/user_lhkpn/simpan_form' ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label float-left">Masukkan Normor NIP</label>
                    <input class="form-control" type="text" name="nip" placeholder="123245678" id="nip" required>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal-pengajuan" class="col-md-4 col-form-label form-control-label">Tanggal Pengajuan
                      <span class="font-weight-bold float-right">:</span></label>
                    <div class="col-md-8">
                      <input class="form-control" type="date" placeholder="2018-11-23" id="tanggal-pengajuan" name="tanggal_lapor_lhkpn" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nomor-hukdis" class="col-md-4 col-form-label form-control-label">Upload File LHKPN
                      <span class="font-weight-bold float-right">:</span></label>
                    <div class="col-md-8">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file_pdf_lhkpn" id="customFileLang" lang="en" required>
                        <label class="custom-file-label" for="customFileLang">Pilih file</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="status-lhkpn" class="col-md-4 col-form-label form-control-label">Status HUKDIS
                      <span class="font-weight-bold float-right">:</span></label>
                    <div class="col-md-8">
                      <div class="col-lg-12 p-0">
                        <div class="custom-control custom-checkbox mt-2">
                          <input class="custom-control-input" value="0" id="tidak-wajib" type="checkbox" name="status-hukdis" required>
                          <label class="custom-control-label" for="tidak-wajib">TIDAK ADA</label>
                        </div>
                      </div>
                      <div class="col-lg-12 p-0">
                        <div class="custom-control custom-checkbox mt-2">
                          <input class="custom-control-input" value="1" id="wajib" type="checkbox" name="status-hukdis" required>
                          <label class="custom-control-label" for="wajib">ADA</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id='select-hukdis'>
                    <h2 class="pt-2 pb-2">Upload File HUKDIS</h2>
                    <div class="form-group row">
                      <label for="tanggal-pengajuan" class="col-md-4 col-form-label form-control-label">Tanggal Pengajuan
                        <span class="font-weight-bold float-right">:</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="date" placeholder="2018-11-23" id="tanggal-pengajuan" name="tanggal_lapor_hukdis">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nomor-hukdis" class="col-md-4 col-form-label form-control-label">Nomor Surat
                        <span class="font-weight-bold float-right">:</span></label>
                      <div class="col-md-8">
                        <input class="form-control" type="digits" placeholder="09736484" id="nomor-hukdis" name="no_surat_hukdis">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-4 col-form-label form-control-label">Jenis Hukuman
                        <span class="font-weight-bold float-right">:</span></label>
                      <div class="col-md-8">
                        <div class="row">
                          <?php foreach ($kategori->result_array() as $i) :
                            $id = $i['id_kategori'];
                            $jenis_hukuman = $i['jenis_hukuman'];
                          ?>
                            <div class="col-lg-4">

                              <div class="custom-control mt-2">
                                <label>
                                  <input value="<?= $id; ?>" id="jenis_hukuman" type="radio" name="kategori"> <?= $jenis_hukuman ?>
                                </label>

                                <!-- <label class="custom-control-label"  for="jenis_hukuman"><?= $jenis_hukuman ?></label> -->
                              </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nomor-hukdis" class="col-md-4 col-form-label form-control-label">Upload File Hukdis
                        <span class="font-weight-bold float-right">:</span></label>
                      <div class="col-md-8 p-1">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="file_pdf_hukdis" id="customFileLang" lang="en">
                          <label class="custom-file-label" for="customFileLang">Pilih file</label>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="p-4">
                    <div class="text-center">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <?php $this->load->view('layouts/footer') ?>