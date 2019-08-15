{!! Form::model($guru, [

	'route' => $guru->exists ? ['guru.update', $guru->id] : 'guru.store' ,
	'method' => $guru->exists ? 'PUT' : 'POST',


	])
!!}
	<div class="form-group">
		<label for="nip" class="control-label">Nip:</label>
		{!! Form::text('nip', null, ['class' => 'form-control', 'id' => 'nip', 'placeholder' => 'Masukan NIP']) !!}
	</div>
	<div class="form-group">
		<label for="nama" class="control-label">Nama:</label>
		{!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama', 'placeholder' => 'Masukan Nama Guru']) !!}
	</div>
	<div class="form-group">
		<label class="control-label">Jenis Kelamin:</label>
		{!! Form::select('jk', ['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'], null, ['placeholder' => 'Pilih Jenis Kelamin', 'class' => 'form-control', 'id' => 'jk']) !!}
		<small class="form-control-feedback"> Select your gender </small>
	</div>
	<div class="form-group">
		<label for="tmpt_lahir" class="control-label">Tempat Lahir:</label>
		{!! Form::text('tmpt_lahir', null, ['class' => 'form-control', 'id' => 'tmpt_lahir', 'placeholder' => 'Masukan Tempat Lahir']) !!}
	</div>
	<div class="form-group">
		<label class="control-label">Tanggal Lahir:</label>
		{!! Form::date('tgl_lahir', null, [ 'class' => 'form-control', 'id' => 'tgl_lahir']) !!}
	</div>
	<div class="form-group">
		<label for="telp" class="control-label">Telepon:</label>
		{!! Form::text('telp', null, ['class' => 'form-control', 'id' => 'telp', 'placeholder' => 'Masukan Nomer Telepon']) !!}
	</div>
	<div class="form-group">
		<label for="alamat" class="control-label">Alamat:</label>
		{!! Form::textarea('alamat', null, ['class' => 'form-control', 'row' => '2', 'maxlength' => '140', 'id' => 'alamat']) !!}
	</div>
	<div class="form-group">
		<label class="control-label">Upload Foto:</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Upload</span>
			</div>
			<div class="custom-file">
				{!! Form::file('foto', ['class' => 'custom-file-input', 'id' => 'foto']) !!}
				<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
			</div>
		</div>
	</div>
{!! Form::close() !!}


