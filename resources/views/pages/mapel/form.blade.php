{!! Form::model($mapel, [

	'route' => $mapel->exists ? ['mapel.update', $mapel->id] : 'mapel.store' ,
	'method' => $mapel->exists ? 'PUT' : 'POST',


	])
!!}
	<div class="form-group">
		<label for="kode" class="control-label">Kode:</label>
		{!! Form::text('kode', null, ['class' => 'form-control', 'id' => 'kode', 'placeholder' => 'Masukan Kode']) !!}
	</div>
	<div class="form-group">
		<label for="nama" class="control-label">Nama:</label>
		{!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama', 'placeholder' => 'Masukan Nama Mata Pelajaran']) !!}
	</div>
</div>
{!! Form::close() !!}