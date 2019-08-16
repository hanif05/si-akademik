{!! Form::model($kelas, [

	'route' => $kelas->exists ? ['kelas.update', $kelas->id] : 'kelas.store' ,
	'method' => $kelas->exists ? 'PUT' : 'POST',


	])
!!}
	<div class="form-group">
		<label for="nama" class="control-label">Nama:</label>
		{!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama', 'placeholder' => 'Masukan Nama Kelas']) !!}
	</div>
</div>
{!! Form::close() !!}