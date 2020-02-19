@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Data Petugas</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-end text-right">
                <a href="javascript:void(0)" class="btn btn-primary fa fa-plus" id="tambah" title="Tambah Data"></a>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Petugas</h4>
                    <h6 class="card-subtitle">Data semua petugas</h6>
                    <div class="table-responsive m-t-40">
                        <table id="datatables" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
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
<div class="modal fade" id="modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="form" name="form" class="form-horizontal">
                
                <input type="hidden" name="id" id="id_petugas">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Title" value="" maxlength="50" required="">
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tempat Lahir</label>
                        <div class="col-sm-12">
                            <input type="text" id="tmpt_lahir" name="tmpt_lahir" required="" placeholder="Tempat Lahir" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-12">
                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
                        </div>
                    </div>
      
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" id="saveBtn">Save
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

@stop

@push('scripts')

    <script>

        $(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $('#datatables').DataTable({

            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('petugas.index') }}",
            columns: [

                { data: 'DT_RowIndex', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'tmpt_lahir', name: 'tmpt_lahir' },
                { data: 'tgl_lahir', name: 'tgl_lahir' },
                { data: 'aksi', name: 'aksi' },
            ]
        });

        $('#tambah').click(function(){
            $('#saveBtn').val('Create');
            $('#id_petugas').val('');
            $('#form').trigger('reset');
            $('#modelHeading').html('Create New Petugas');
            $('#modal').modal('show');
        });

        $('body').on('click', '.editPetugas', function(){
            var id = $(this).data('id');

            $.get("{{ route('petugas.index') }}"+'/'+id+'/edit', function(data){
                $('#modelHeading').html('Edit Petugas');
                $('#modal').modal('show');
                $('#id_petugas').val(data.id);
                $('#name').val(data.name);
                $('#tmpt_lahir').val(data.tmpt_lahir);
                $('#tgl_lahir').val(data.tgl_lahir);
                console.log(data);
            })
            console.log(id);
        })        

        $('#saveBtn').click(function(e){
            e.preventDefault();
            $(this).html('Save');

            $.ajax({
                data: $('#form').serialize(),
                url: "{{ route('petugas.store') }}",
                type: "POST",
                dataType: "json",
                success: function(data){
                    $('#form').trigger('reset');
                    $('#modal').modal('hide');
                    $('#datatables').DataTable().ajax.reload();
                },
                error: function(data){
                    console.log('Error', data);
                    $('#saveBtn').html('Save CHanges');
                }
            });
        });
    </script>



@endpush
