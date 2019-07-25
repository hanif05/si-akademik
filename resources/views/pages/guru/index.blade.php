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