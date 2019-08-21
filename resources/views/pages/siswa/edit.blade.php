@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-themecolor">Tambah siswa siswa</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card card-body">
				<h4 class="card-title">Tambah siswa siswa</h4>
				<h5 class="card-subtitle"> Masukan informasi siswa siswa </h5>
				<form class="form-horizontal mt-4" action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nama" class="control-label">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama }}">
					</div>
					<div class="form-group">
						<label class="control-label">Kelas</label>
						<select class="form-control" name="kelas_id">
							<option value="1" @if($siswa->kelas_id == "1") selected @endif>7-A</option>
							<option value="2" @if($siswa->kelas_id == "2") selected @endif>7-B</option>
							<option value="3" @if($siswa->kelas_id == "3") selected @endif>7-C</option>
							<option value="4" @if($siswa->kelas_id == "4") selected @endif>8-A</option>
							<option value="5" @if($siswa->kelas_id == "5") selected @endif>8-B</option>
							<option value="6" @if($siswa->kelas_id == "6") selected @endif>8-C</option>
							<option value="7" @if($siswa->kelas_id == "7") selected @endif>9-A</option>
							<option value="8" @if($siswa->kelas_id == "8") selected @endif>9-B</option>
							<option value="9" @if($siswa->kelas_id == "9") selected @endif>9-C</option>
						</select>
						<small class="form-control-feedback"> Select your gender </small>
					</div>
					<div class="form-group">
						<label class="control-label">Jenis Kelamin</label>
						<select class="form-control" name="jk">
							<option value="Laki-laki" @if($siswa->jk == "Laki-laki") selected @endif>Laki-laki</option>
							<option value="Perempuan" @if($siswa->jk == "Perempuan") selected @endif>Perempuan</option>
						</select>
						<small class="form-control-feedback"> Select your gender </small>
					</div>
					<div class="form-group">
						<label for="tmpt_lahir" class="control-label">Tempat Lahir</label>
						<input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="{{ $siswa->tmpt_lahir }}">
					</div>
					<div class="form-group">
						<label class="control-label">Tanggal Lahir</label>
						<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}">
					</div>
					<div class="form-group">
						<label class="control-label">Agama</label>
						<select class="form-control" name="agama">
							<option value="Islam" @if($siswa->agama == "Islam") selected @endif>Islam</option>
							<option value="Kristen" @if($siswa->agama == "Kristen") selected @endif>Kristen</option>
							<option value="Khatolik" @if($siswa->agama == "Khatolik") selected @endif>Khatolik</option>
							<option value="Buddha" @if($siswa->agama == "Buddha") selected @endif>Buddha</option>
							<option value="Hindu" @if($siswa->agama == "Hindu") selected @endif>Hindu</option>
							<option value="Konguchu" @if($siswa->agama == "Konguchu") selected @endif>Konguchu</option>
						</select>
						<small class="form-control-feedback"> Pilih Agama </small>
					</div>
					<div class="form-group">
						<label for="no_hp" class="control-label">No HP</label>
						<input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $siswa->no_hp }}">
					</div>
					<div class="form-group">
						<label for="alamat" class="control-label">Alamat</label>
						<textarea class="form-control" id="alamat" name="alamat">{{ $siswa->alamat }}</textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Upload Foto</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Upload</span>
							</div>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="foto" name="foto" value="{{ $siswa->foto }}">
								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-default waves-effect" siswa-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger waves-effect waves-light">Save</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



@stop