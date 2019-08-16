@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-themecolor">Tambah Data Materi</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card card-body">
				<h4 class="card-title">Tambah Data Materi</h4>
				<h5 class="card-subtitle"> Masukan informasi data materi </h5>
				<form class="form-horizontal mt-4" action="{{ route('materi.store') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="nip" class="control-label">NIP</label>
						<input type="text" class="form-control" id="nip" name="nip" value="{{ $d_guru->nip }}" readonly="">
					</div>
					<div class="form-group">
						<label for="nama" class="control-label">Nama Guru</label>
						<input type="text" class="form-control" id="nama" name="nama" value="{{ $d_guru->nama }}" readonly="">
					</div>
					<div class="form-group">
						<label for="mata_pelajaran_id" class="control-label">Mata Pelajaran</label>
						<input type="text" class="form-control" id="mata_pelajaran_id" name="mata_pelajaran_id" value="{{ $d_guru->mataPelajaran->nama }}" readonly="">
					</div>
					<div class="form-group">
						<label for="pokok_bahasan" class="control-label">Pokok Bahasan</label>
						<textarea class="form-control" id="pokok_bahasan" name="pokok_bahasan"></textarea>
					</div>
					<div class="form-group">
						<label for="keterangan" class="control-label">Keterangan</label>
						<textarea class="form-control" id="keterangan" name="keterangan"></textarea>
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