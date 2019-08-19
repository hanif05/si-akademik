@extends('layouts.app')

@section('content')
@if(session('berhasil'))
	{{alertsukses()}}
@endif
<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-themecolor">Data Materi</h4>
		</div>
		<div class="col-md-7 align-self-center text-right">

		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="d-flex justify-content-end text-right">
				<a href="/materi/create" class="btn btn-primary fa fa-plus" title="Tambah Data"></a>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Data Materi</h4>
					<h6 class="card-subtitle">Data semua materi</h6>
					<div class="table-responsive m-t-40">
						<table id="datatables" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama Guru</th>
									<th>Kode Mata Pelajaran</th>
									<th>Pokok Bahasan</th>
									<th>Keterangan</th>
									<th>Tanggal</th>
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
			ajax: "{{ route('table.materi') }}",
			columns: [

				{ data: 'DT_RowIndex', name: 'materi.id' },
				{ data: 'nama', name: 'guru.nama' },
				{ data: 'kode', name: 'mata_pelajaran.kode' },
				{ data: 'pokok_bahasan', name: 'materi.pokok_bahasan' },
				{ data: 'keterangan', name: 'materi.keterangan' },
				{ data: 'created_at', name: 'materi.created_at' },


			]
		});
	</script>



@endpush
