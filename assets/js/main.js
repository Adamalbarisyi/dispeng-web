$("table.display").DataTable();
$("#tidak-aktif")
	.on("change", function () {
		$("#select-status").toggle(this.checked);
	})
	.change();

$('input[name="status"]').on("click", function (e) {
	$('input[name="status"]').prop("checked", false);
	$(this).prop("checked", true);
});

// $("#tidak-aktif").iCheck("toggle", function () {
// 	$("#tidak-aktif").on("ifChecked", function (event) {
// 		$("#select-status").removeClass("call"); // hide
// 	});
// 	$("#tidak-aktif").on("ifUnchecked", function (event) {
// 		$("#select-status").addClass("call"); // shown
// 	});
// });

$('[name="status-lhkpn"]').on('change', function() {
	$('#select-lhkpn').toggle(this.checked);
  }).change();

  $('[name="status-skk"]').on('change', function() {
    $('#select-skk').toggle(this.checked);
  }).change();
