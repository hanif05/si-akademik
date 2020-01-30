@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-themecolor">Tambah Data Siswa</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card card-body">
				<h4 class="card-title">Tambah Data Siswa</h4>
				<h5 class="card-subtitle"> Masukan informasi data siswa </h5>
				<form class="form-horizontal mt-4" action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nama" class="control-label">Nama</label>
						<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
						@error('nama')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label class="control-label">Kelas</label>
						<select class="form-control" name="kelas_id">
							@foreach($kelas as $d_kelas)
							<option value="{{ $d_kelas->id }}">{{ $d_kelas->nama_kelas }}</option>
							@endforeach
						</select>
						<small class="form-control-feedback"> Pilih Kelas Siswa </small>
					</div>
					<div class="form-group">
						<label class="control-label">Jenis Kelamin</label>
						<select class="form-control" name="jk">
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
						<small class="form-control-feedback"> Select your gender </small>
					</div>
					<div class="form-group">
						<label for="tmpt_lahir" class="control-label">Tempat Lahir</label>
						<input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir">
					</div>
					<div class="form-group">
						<label class="control-label">Tanggal Lahir</label>
						<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
					</div>
					<div class="form-group">
						<label class="control-label">Agama</label>
						<select class="form-control" name="agama">
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Khatolik">Khatolik</option>
							<option value="Buddha">Buddha</option>
							<option value="Hindu">Hindu</option>
							<option value="Konguchu">Konguchu</option>
						</select>
						<small class="form-control-feedback"> Pilih Agama </small>
					</div>
					<div class="form-group">
						<label for="no_hp" class="control-label">No HP</label>
						<input type="text" class="form-control" id="no_hp" name="no_hp">
					</div>
					<div class="form-group">
						<label for="alamat" class="control-label">Alamat</label>
						<textarea class="form-control" id="alamat" name="alamat"></textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Upload Foto</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Upload</span>
							</div>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="foto" name="foto">
								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger waves-effect waves-light">Save</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



@stop