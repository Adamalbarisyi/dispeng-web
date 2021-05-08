$('#tidak-aktif').on('change', function() {
    $('#select-status').toggle(this.checked);
  }).change();

  $('[name="status-lhkpn"]').on('change', function() {
    $('#select-lhkpn').toggle(this.checked);
  }).change();
  
  $('[name="status-skk"]').on('change', function() {
    $('#select-skk').toggle(this.checked);
  }).change();
  
  