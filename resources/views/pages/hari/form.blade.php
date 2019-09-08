{!! Form::model($hari, [

	'route' => $hari->exists ? ['hari.update', $hari->id] : 'hari.store' ,
	'method' => $hari->exists ? 'PUT' : 'POST',


	])
!!}
	<div class="form-group">
		<label for="kode_hari" class="control-label">Kode:</label>
		{!! Form::text('kode_hari', null, ['class' => 'form-control', 'id' => 'kode_hari', 'placeholder' => 'Masukan Kode hari']) !!}
	</div>
	<div class="form-group">
		<label for="nama_hari" class="control-label">Nama:</label>
		{!! Form::text('nama_hari', null, ['class' => 'form-control', 'id' => 'nama_hari', 'placeholder' => 'Masukan Nama hari']) !!}
	</div>
</div>
{!! Form::close() !!}