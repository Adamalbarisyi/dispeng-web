$("table.display").DataTable();
$('[id="tidak-aktif"]').on('change', function() {
		$("#select-status").toggle(this.checked);
	}).change();

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

$('[id="wajib"]').on('change', function() {
	$('#select-hukdis').toggle(this.checked);
  }).change();

  $('[name="status-skk"]').on('change', function() {
    $('#select-skk').toggle(this.checked);
  }).change();
