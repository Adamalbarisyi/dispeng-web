$("table.display").DataTable();

  $('[name="status-skk"]').on('change', function() {
    $('#select-skk').toggle(this.checked);
  }).change();
  

  function valueChanged()
  {
	  if($('#wajib').is(":checked"))   
		  $("#select-hukdis").show();
	  else
		  $("#select-hukdis").hide();
  }
  
  function valueStatus(obj)
  {
	var cbs = document.getElementsByClassName("custom-control-input");
	for (var i = 0; i < cbs.length; i++) {
        cbs[i].checked = false;
    }
    obj.checked = true;
	
	  if($('#tidak-aktif').is(":checked"))   
		  $("#select-status").show();
	  else
		  $("#select-status").hide(); 
  }
  
  function valueHukdis(obj)
  {
	var cbs = document.getElementsByClassName("custom-control-input");
	for (var i = 0; i < cbs.length; i++) {
        cbs[i].checked = false;
    }
    obj.checked = true;
	
	  if($('#wajib').is(":checked"))   
		  $("#select-hukdis").show();
	  else
		  $("#select-hukdis").hide(); 
  }
  

  function editHukdis(obj)
  {
	var cbs = document.getElementsByClassName("custom-control-input");
	for (var i = 0; i < cbs.length; i++) {
        cbs[i].checked = false;
         
    }
    obj.checked = true;
	
	 if($('#tidak-aktif').is(":checked"))   
		  $("#select-status").show();
	  else
		  $("#select-status").hide(); 
  }
