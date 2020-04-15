jQuery(document).ready(function() {
	var id;

	$('#id').on('change', function() {
		id = $(this).val()
	$.getJSON('proses-ajax.php?id='+id)
		.done(function(data) {
			$('#nama-dokumen').val(data.nama_dok)
		})
		.fail(function(data) {
			window.alert('gagal')
		})
	})
});