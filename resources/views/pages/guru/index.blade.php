@extends('layouts.app')


@section('content')

<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-themecolor">Datatable</h4>
		</div>
		<div class="col-md-7 align-self-center text-right">

		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="d-flex justify-content-end text-right">
				<button class="btn btn-primary" data-toggle="modal" data-target="#responsive-modal">Tambah</button>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Data Guru</h4>
					<h6 class="card-subtitle">Data semua guru</h6>
					<div class="table-responsive m-t-40">
						<table id="datatables" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Nip</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Alamat</th>
									<th>Telepon</th>
									<th>Foto</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Data Guru</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('guru.store') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="nip" class="control-label">Nip:</label>
						<input type="text" class="form-control" id="nip" name="nip">
					</div>
					<div class="form-group">
						<label for="nama" class="control-label">Nama:</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="form-group">
						<label class="control-label">Jenis Kelamin:</label>
						<select class="form-control">
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
						<small class="form-control-feedback"> Select your gender </small> 
					</div>
					<div class="form-group">
						<label for="tmpt_lahir" class="control-label">Tempat Lahir:</label>
						<input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir">
					</div>
					<div class="form-group">
						<label for="tgl_lahir" class="control-label">Tanggal Lahir:</label>
						<input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
					</div>
					<div class="form-group">
						<label for="telp" class="control-label">Telepon:</label>
						<input type="text" class="form-control" id="telp" name="telp">
					</div>
					<div class="form-group">
						<label for="alamat" class="control-label">Alamat:</label>
						<textarea class="form-control" id="alamat" name="alamat"></textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Upload Foto:</label>
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
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- /.modal -->

@stop

@push('scripts')

    <script >
        $('#datatables').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.guru') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'id' },
                { data: 'nip', name: 'nip' },
                { data: 'nama', name: 'nama' },
                { data: 'jk', name: 'jk' },
                { data: 'tmpt_lahir', name: 'tmpt_lahir' },
                { data: 'tgl_lahir', name: 'tgl_lahir' },
                { data: 'alamat', name: 'alamat' },
                { data: 'telp', name: 'telp' },
                { data: 'foto', name: 'foto' },
                { data: 'aksi', name: 'aksi' }
            ]
        });
    </script>


@endpush