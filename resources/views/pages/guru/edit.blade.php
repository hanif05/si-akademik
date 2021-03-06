@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-themecolor">Tambah Data Guru</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card card-body">
				<h4 class="card-title">Tambah Data Guru</h4>
				<h5 class="card-subtitle"> Masukan informasi data guru </h5>
				<form class="form-horizontal mt-4" action="{{ route('guru/update', $guru->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nip" class="control-label">NIP</label>
						<input type="text" class="form-control" id="nip" name="nip" value="{{ $guru->nip }}" readonly="">
					</div>
					<div class="form-group">
						<label for="nama" class="control-label">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" value="{{ $guru->nama }}">
					</div>
					<div class="form-group">
						<label class="control-label">Jenis Kelamin</label>
						<select class="form-control" name="jk">
							<option value="Laki-laki" @if($guru->jk == "Laki-laki") selected @endif>Laki-laki</option>
							<option value="Perempuan" @if($guru->jk == "Perempuan") selected @endif>Perempuan</option>
						</select>
						<small class="form-control-feedback"> Select your gender </small>
					</div>
					<div class="form-group">
						<label for="tmpt_lahir" class="control-label">Tempat Lahir</label>
						<input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="{{ $guru->tmpt_lahir }}">
					</div>
					<div class="form-group">
						<label class="control-label">Tanggal Lahir</label>
						<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $guru->tgl_lahir }}">
					</div>
					<div class="form-group">
						<label for="telp" class="control-label">Telepon</label>
						<input type="text" class="form-control" id="telp" name="telp" value="{{ $guru->telp }}">
					</div>
					<div class="form-group">
						<label for="alamat" class="control-label">Alamat</label>
						<textarea class="form-control" id="alamat" name="alamat">{{ $guru->alamat }}</textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Upload Foto</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Upload</span>
							</div>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="foto" name="foto" value="{{ $guru->foto }}">
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