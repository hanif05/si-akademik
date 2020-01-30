@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Data Berita</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-end text-right">
                <a href="{{ route('berita.create') }}" class="btn btn-primary fa fa-plus" title="Tambah Data"></a>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Berita</h4>
                    <h6 class="card-subtitle">Data semua berita</h6>
                    <div class="table-responsive m-t-40">
                        <table id="datatables" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>Thumbnail</th>
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
            ajax: "{{ route('berita.table') }}",
            columns: [

                { data: 'DT_RowIndex', name: 'berita.id' },
                { data: 'title', name: 'berita.title' },
                { data: 'content', name: 'berita.content' },
                { data: 'name', name: 'users.name' },
                { data: 'tumbnail', name: 'berita.tumbnail' },


            ]
        });
    </script>

@endpush