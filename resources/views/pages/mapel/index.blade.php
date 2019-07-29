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
				<button class="btn btn-primary fa fa-plus" data-toggle="modal" data-target="#responsive-modal"></button>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Data Mata Pelajaran</h4>
					<h6 class="card-subtitle">Data semua mata pelajaran</h6>
					<div class="table-responsive m-t-40">
						<table id="datatables" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Kode</th>
									<th>Nama</th>
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
				<h4 class="modal-title">Tambah Data Mata Pelajaran</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<form action="{{ route('mapel.store') }}" method="POST">
				<div class="modal-body">
						@csrf
						<div class="form-group">
							<label for="kode" class="control-label">Kode:</label>
							<input type="text" class="form-control" id="kode" name="kode">
						</div>
						<div class="form-group">
							<label for="nama" class="control-label">Nama:</label>
							<input type="text" class="form-control" id="nama" name="nama">
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger waves-effect waves-light">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /.modal -->
@stop