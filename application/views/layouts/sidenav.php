<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="#">
      <img src="<?php echo base_url(); ?>assets/img/logo/logo.png" class="navbar-brand-img">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <?php if ($this->session->userdata('akses')==0): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
              <i class="ni ni-shop text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/user') ?>">
              <i class="fa fa-user text-warning" aria-hidden="true"></i>
              <span class="nav-link-text">Pengguna</span>
            </a>
          </li> -->

           <li class="nav-item">
            <a class="nav-link" href="#pegawai" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="fa fa-users"></i>
              <span class="nav-link-text">Pegawai</span>
            </a>
            <div class="collapse" id="pegawai">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="<?= base_url('admin/employe/data_employe') ?>" class="nav-link">Data Pegawai</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('admin/employe') ?>" class="nav-link">Input Pegawai</a>
                </li>

              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#lhkpn" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="fa fa-file-text text-green"></i>
              <span class="nav-link-text">LHKPN</span>
            </a>
            <div class="collapse" id="lhkpn">
              <ul class="nav nav-sm flex-column">
                <!-- <li class="nav-item">
                  <a href="<?= base_url('admin/lhkpn/verif') ?>" class="nav-link">Verifikasi LHKPN</a>
                </li> -->
                <li class="nav-item">
                  <a href="<?= base_url('admin/lhkpn') ?>" class="nav-link">Data LHKPN</a>
                </li>

              </ul>
            </div>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#hukdis" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="fa fa-file-text text-orange"></i>
              <span class="nav-link-text">HUKDIS</span>
            </a>
            <div class="collapse" id="hukdis">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="<?= base_url('admin/hukdis/verif') ?>" class="nav-link">Verifikasi HUKDIS</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('admin/hukdis') ?>" class="nav-link">Data HUKDIS</a>
                </li>
              </ul>
            </div>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/hukdis') ?>">
              <i class="fa fa-file-text text-orange"></i>
              <span class="nav-link-text">Data HUKDIS</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#skk" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="fa fa-file-text text-yellow"></i>
              <span class="nav-link-text">SKK</span>
            </a>
            <div class="collapse" id="skk">
              <ul class="nav nav-sm flex-column">
                <!-- <li class="nav-item">
                  <a href="<?= base_url('admin/skk/verif') ?>" class="nav-link">Verifikasi SKK</a>
                </li> -->
                <li class="nav-item">
                  <a href="<?= base_url('admin/skk') ?>" class="nav-link">Data SKK</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- ===== Menu USER -->
          <?php elseif ($this->session->userdata('akses')==1): ?>
              <!-- Link User -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/dashboard') ?>">
              <i class="ni ni-shop  text-primary" aria-hidden="true"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#pegawai" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="fa fa-users"></i>
              <span class="nav-link-text">Pegawai</span>
            </a>
            <div class="collapse" id="pegawai">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="<?= base_url('user/employe/data_employe') ?>" class="nav-link">Data Pegawai</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('user/employe') ?>" class="nav-link">Input Pegawai</a>
                </li>

              </ul>
            </div>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#lhkpn" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="fa fa-file-text text-green"></i>
              <span class="nav-link-text">LHKPN & HUKDIS</span>
            </a>
            <div class="collapse" id="lhkpn">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="<?= base_url('user/user_lhkpn/form') ?>" class="nav-link">Permintaan LHKPN & HUKDIS</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('user/user_lhkpn') ?>" class="nav-link">Data LHKPN & HUKDIS</a>
                </li>

              </ul>
            </div>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#hukdis" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="fa fa-file-text text-orange"></i>
              <span class="nav-link-text">HUKDIS</span>
            </a>
            <div class="collapse" id="hukdis">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="<?= base_url('user/user_hukdis/form') ?>" class="nav-link">Permintaan HUKDIS</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('user/user_hukdis') ?>" class="nav-link">Data HUKDIS</a>
                </li>
              </ul>
            </div>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" href="#skk" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="fa fa-file-text text-yellow"></i>
              <span class="nav-link-text">SKK</span>
            </a>
            <div class="collapse" id="skk">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="<?= base_url('user/user_skk/form') ?>" class="nav-link">Permintaan SKK</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('user/user_skk') ?>" class="nav-link">Data SKK</a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>