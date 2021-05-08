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
                <li class="breadcrumb-item active" aria-current="page">Input Pegawai</li>
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
            <h3 class="mb-0 text-center">Input data Pegawai</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <h2 class="pt-4 pb-4">Data Diri</h2>

                <form class="form-horizontal" method="post" action="<?php echo base_url().'user/employe/simpan_employe'?>" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="nama-lengkap" class="col-md-4 col-form-label form-control-label">Nama Lengkap
                      <span class="font-weight-bold float-right">:</span></label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="nama" id="nama-lengkap" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nomor-nip" class="col-md-4 col-form-label form-control-label">Nomor NIP
                      <span class="font-weight-bold float-right">:</span></label>
                    <div class="col-md-8">
                      <input class="form-control" type="number" name="nip" id="nomor-nip" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nomor-nrp" class="col-md-4 col-form-label form-control-label">Nomor NRP
                      <span class="font-weight-bold float-right">:</span></label>
                    <div class="col-md-8">
                      <input class="form-control" type="number" name="nrp" id="nomor-nrp" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="pangkat-golongan" class="col-md-4 col-form-label form-control-label">Pangkat Golongan
                      <span class="font-weight-bold float-right">:</span></label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="golongan" id="pangkat-golongan" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jabatan" class="col-md-4 col-form-label form-control-label">Jabatan
                      <span class="font-weight-bold float-right">:</span></label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="jabatan" id="jabatan" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="status-pegawai" class="col-md-4 col-form-label form-control-label">Status Pegawai
                      <span class="font-weight-bold float-right">:</span></label>
                    <div class="col-md-8">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="custom-control custom-checkbox mt-2">
                            <input class="custom-control-input" id="aktif" type="checkbox" name="status" value="0">
                            <label class="custom-control-label" for="aktif">Aktif</label>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="custom-control custom-checkbox mt-2">
                            <input class="custom-control-input" id="tidak-aktif" type="checkbox" name="status" value="1" >
                            <label class="custom-control-label" for="tidak-aktif">Tidak Aktif</label>
                          </div>

                          <select name="keterangan" class="form-control mt-3" id='select-status'>
                            <option value=NULL>Pilih status</option>
                            <option value="Mutasi">Mutasi</option>
                            <option value="Pensiun">Pensiun</option>
                            <option value="Meninggal">Meninggal</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label form-control-label">Email
                      <span class="font-weight-bold float-right">:</span></label>
                    <div class="col-md-8">
                      <input class="form-control" type="email" name="email" id="email">
                    </div>
                  </div>

                  <!--  <div class="p-5">
                  <div class="text-center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </div> -->

              </div>
              <div class="col-lg-6">
                <h2 class="pt-4 pb-4">Upload File LHKPN</h2>
                <div class="form-group row">
                  <label for="status-lhkpn" class="col-md-4 col-form-label form-control-label">Status LHKPN
                    <span class="font-weight-bold float-right">:</span></label>
                  <div class="col-md-8">
                    <div class="col-lg-12 p-0">
                      <div class="custom-control custom-checkbox mt-2">
                        <input class="custom-control-input" id="tidak-wajib" type="checkbox">
                        <label class="custom-control-label" for="tidak-wajib">Tidak Wajib</label>
                      </div>
                    </div>
                    <div class="col-lg-12 p-0">
                      <div class="custom-control custom-checkbox mt-2">
                        <input class="custom-control-input" id="wajib" type="checkbox" name="status-lhkpn">
                        <label class="custom-control-label" for="wajib">Wajib</label>
                      </div>

                      <div class="custom-file m-2" id='select-lhkpn'>
                        <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                        <label class="custom-file-label" for="customFileLang">Upload file LHKPN</label>
                      </div>
                    </div>
                  </div>
                </div>

                <h2 class="pt-2 pb-2">Upload File HUKDIS</h2>
                <div class="form-group row">
                  <label for="tanggal-pengajuan" class="col-md-4 col-form-label form-control-label">Tanggal Pengajuan
                    <span class="font-weight-bold float-right">:</span></label>
                  <div class="col-md-8">
                    <input class="form-control" type="date" value="2018-11-23" id="tanggal-pengajuan" required>
                  </div>
                </div>
      
                <div class="form-group row">
                  <label for="nomor-hukdis" class="col-md-4 col-form-label form-control-label">Nomor Surat
                    <span class="font-weight-bold float-right">:</span></label>
                  <div class="col-md-8">
                    <input class="form-control" type="digits" value="09736484" id="nomor-hukdis" required>
                  </div>
                </div>
              
                <div class="form-group row">
                  <label class="col-md-4 col-form-label form-control-label">Jenis Hukuman
                    <span class="font-weight-bold float-right">:</span></label>
                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="custom-control custom-checkbox mt-2">
                          <input class="custom-control-input" id="ringan" type="checkbox" name="ringan">
                          <label class="custom-control-label" for="ringan">Ringan</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="custom-control custom-checkbox mt-2">
                          <input class="custom-control-input" id="sedang" type="checkbox" name="sedang">
                          <label class="custom-control-label" for="sedang">Sedang</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="custom-control custom-checkbox mt-2">
                          <input class="custom-control-input" id="berat" type="checkbox" name="berat">
                          <label class="custom-control-label" for="berat">Berat</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <h2 class="pt-2 pb-2">Permintaan SKK</h2>
                <div class="form-group row">
                  <label for="status-skk" class="col-md-4 col-form-label form-control-label">Surat SKK
                    <span class="font-weight-bold float-right">:</span></label>
                  <div class="col-md-8">
                    <div class="col-lg-12 p-0">
                      <div class="custom-control custom-checkbox mt-2">
                        <input class="custom-control-input" id="tidak-ada-skk" type="checkbox">
                        <label class="custom-control-label" for="tidak-ada-skk">Tidak Ada</label>
                      </div>
                    </div>
                    <div class="col-lg-12 p-0">
                      <div class="custom-control custom-checkbox mt-2">
                        <input class="custom-control-input" id="ada-skk" type="checkbox" name="status-skk">
                        <label class="custom-control-label" for="ada-skk">Ada</label>
                      </div>

                      <div class="custom-file mt-3 mb-3" id="select-skk">
                        <input type="file" class="custom-file-input" id="uploadskk" lang="en">
                        <label class="custom-file-label" for="uploadskk">Upload file SKK</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="p-5">
                  <div class="text-center">
                    <button class="btn btn-primary" type="button">Submit</button>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('layouts/footer') ?>