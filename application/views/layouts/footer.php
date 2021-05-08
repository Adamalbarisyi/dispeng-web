<div class="container-fluid fixed-bottom position-relative">
  <div class="row justify-content-center">
    <div class="col-12">
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-center">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">Dinas Pengawasan|KEJATI DIY</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</div>
</div>
</div>
<script src="<?php echo base_url('assets/vendor/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/js-cookie/js.cookie.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js'); ?>"></script>

  <!-- Optional JS -->
  <script src="<?php echo base_url('assets/vendor/datatables.net/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables.net-select/js/dataTables.select.min.js')?>"></script>



<!-- Argon JS -->
<script src="<?php echo base_url('assets/js/argon.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/main.js');?>"></script>
 <script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>


 <script type="text/javascript">
        $(document).ready(function(){
            $( "#nip" ).autocomplete({
              source: "<?= base_url('user/user_lhkpn/get_autocomplete/?');?>"
            });
        });
    </script>
</body>

</html>