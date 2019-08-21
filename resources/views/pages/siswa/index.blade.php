@extends('layouts.app')


@section('content')
@if(session('berhasil'))
	{{alertsukses()}}
@endif

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
				<a href="/siswa/create" class="btn btn-primary fa fa-plus"></a>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Data Siswa</h4>
					<h6 class="card-subtitle">Data semua siswa</h6>
					<div class="table-responsive m-t-40">
						<table id="datatables" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Kelas</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Agama</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Nomer HP</th>
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
            ajax: "{{ route('table.siswa') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'siswa.id' },
                { data: 'nama', name: 'siswa.nama' },
                { data: 'nama_kelas', name: 'kelas.nama_kelas' },
                { data: 'tmpt_lahir', name: 'siswa.tmpt_lahir' },
                { data: 'tgl_lahir', name: 'siswa.tgl_lahir' },
                { data: 'agama', name: 'siswa.agama' },
                { data: 'jk', name: 'siswa.jk' },
                { data: 'alamat', name: 'siswa.alamat' },
                { data: 'no_hp', name: 'siswa.no_hp' },
                { data: 'foto', name: 'siswa.foto' },
                { data: 'aksi', name: 'aksi' }
            ]
        });
    </script>


@endpush
