{!! Form::model($kelas, [

	'route' => $kelas->exists ? ['kelas.update', $kelas->id] : 'kelas.store' ,
	'method' => $kelas->exists ? 'PUT' : 'POST',


	])
!!}
	<div class="form-group">
		<label for="nama" class="control-label">Nama:</label>
		{!! Form::text('nama_kelas', null, ['class' => 'form-control', 'id' => 'nama_kelas', 'placeholder' => 'Masukan Nama Kelas']) !!}
	</div>
</div>
{!! Form::close() !!}