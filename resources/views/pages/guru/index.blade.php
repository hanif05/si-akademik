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
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
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



@endsection