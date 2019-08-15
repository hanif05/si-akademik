// script memumculkan Modal Form
$('body').on('click', '.modal-show', function(event){
	event.preventDefault();

	var me = $(this),
		url = me.attr('href');
		title = me.attr('title');


	$('#modal-title').text(title);
	$('#modal-btn-save').text(me.hasClass('edit') ? 'Update' : 'Create');

	$.ajax({
		url: url,
		dataType: 'html',
		success: function(response){
			$('#modal-body').html(response);

		}
	});

	$('#modal').modal('show');
});

//script tombol button save di modal

$('#modal-btn-save').click(function(event){
	event.preventDefault();

	var form = $('#modal-body form'),
		url = form.attr('action'),
		method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';

	form.find('.help-block').remove();
	form.find('.form-group').removeClass('has-error');

	$.ajax({
		url: url,
		method: method,
		data: form.serialize(),
		success: function(response){
			form.trigger('reset');
			$('#modal').modal('hide');
			$('#datatables').DataTable().ajax.reload();

			Swal.fire({
				type: 'success',
				title: 'Berhasil!',
				text: 'Data Berhasil Di Simpan!'
			});


		},
		error: function(xhr){
			var res = xhr.responseJSON;
			if ($.isEmptyObject(res) == false) {
				$.each(res.errors, function(key, value){
					$('#' + key)
						.closest('.form-group')
						.addClass('has-error')
						.append('<span class="help-block"><strong>'+ value +'</strong></span>')
				});
			}
		}


	});
});

//script button delete di datatable

$('body').on('click', '.btn-delete', function(event){
	event.preventDefault();

	var me = $(this),
		url = me.attr('href'),
		title = me.attr('title'),
		csrf_token = $('meta[name="csrf-token"]').attr('content');	

	Swal.fire({
		title: 'Peringatan!!' ,
		text: 'Apakah Anda Yakin Ingin Menghapus Data ' + title + '?' ,
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus Data!',
		cancelButtonText: 'Batal'
	}).then((result) => {
		if(result.value){
			$.ajax({
				url: url,
				type: "POST",
				data: {
					'_method': 'DELETE',
					'_token': csrf_token
				},

				success: function(response){
					$('#datatables').DataTable().ajax.reload();

					Swal.fire({
						type: 'success',
						title: 'Berhasil',
						text: 'Data Berhasil Di Hapus'
					});
				},
				error: function(xhr){
					Swal.fire({
						type: 'error',
						title: 'Ooppss...',
						text: 'Something Wrong!'
					});
				}

			});
		}
	});
});