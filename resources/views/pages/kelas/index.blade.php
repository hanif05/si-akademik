@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-themecolor">Data Kelas</h4>
		</div>
		<div class="col-md-7 align-self-center text-right">

		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="d-flex justify-content-end text-right">
				<a href="/kelas/create" class="btn btn-primary fa fa-plus modal-show" title="Tambah Data"></a>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Data Kelas</h4>
					<h6 class="card-subtitle">Data semua kelas</h6>
					<div class="table-responsive m-t-40">
						<table id="datatables" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
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

@stop

@push('scripts')

	<script>
		$('#datatables').DataTable({

			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('table.kelas') }}",
			columns: [

				{ data: 'DT_RowIndex', name: 'id' },
				{ data: 'nama', name: 'nama' },
				{ data: 'aksi', name: 'aksi' },


			]
		});
	</script>



@endpush
