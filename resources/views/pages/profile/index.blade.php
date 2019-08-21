@extends('layouts.app')

@section('content')
@if(session('berhasil'))
	{{alertsukses()}}
@endif
<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-themecolor">Profile</h4>
		</div>
		<div class="col-md-7 align-self-center text-right">
			<div class="d-flex justify-content-end align-items-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
					<li class="breadcrumb-item active">Profile</li>
				</ol>
				<button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<!-- Row -->
	<div class="row">
		<!-- Column -->
		<div class="col-lg-4 col-xlg-3 col-md-5">
			<div class="card">
				<div class="card-body">
					<center class="m-t-30"> 
						@if($user->level_id == "2")
						<img src="{{ asset('/storage/'. $user->guru->foto)}}" class="img-circle" width="150">
						@endif
						@if($user->level_id == "3")
						<img src="{{ asset('/storage/'. $user->siswa->foto)}}" class="img-circle" width="150">
						@endif
						<h4 class="card-title m-t-10">{{ $user->name }}</h4>
						<h6 class="card-subtitle">{{ $user->level->name }}</h6>
						<div class="row text-center justify-content-md-center">
							<div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
							<div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
						</div>
					</center>
				</div>
				<div>
					<hr> </div>
					<div class="card-body"> <small class="text-muted">Email address </small>
						<h6>{{ $user->email }}</h6> <small class="text-muted p-t-30 db">Phone</small>
						<h6>{{ $user->guru->telp ?? $user->siswa->no_hp }}</h6> <small class="text-muted p-t-30 db">Address</small>
						<h6>{{ $user->guru->alamat ?? $user->siswa->alamat }}</h6>
						<div class="map-box">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" style="border:0" allowfullscreen="" width="100%" height="150" frameborder="0"></iframe>
						</div> <small class="text-muted p-t-30 db">Social Profile</small>
						<br>
						<button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
						<button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
						<button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
					</div>
				</div>
			</div>
			<!-- Column -->
			<!-- Column -->
			<div class="col-lg-8 col-xlg-9 col-md-7">
				<div class="card">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs profile-tab" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Timeline</a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home" role="tabpanel">
							<div class="card-body">
								<div class="profiletimeline">
									
								</div>
							</div>
						</div>
						<!--second tab-->
						<div class="tab-pane" id="profile" role="tabpanel">
							<div class="card-body">
								<div class="row">
									<div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
										<br>
										<p class="text-muted">{{ $user->name }}</p>
									</div>
									<div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
										<br>
										<p class="text-muted">(123) 456 7890</p>
									</div>
									<div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
										<br>
										<p class="text-muted">{{ $user->email }}</p>
									</div>
									<div class="col-md-3 col-xs-6"> <strong>Location</strong>
										<br>
										<p class="text-muted">London</p>
									</div>
								</div>
								<hr>
								<p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
								<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<h4 class="font-medium m-t-30">Skill Set</h4>
								<hr>
								<h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
								<div class="progress">
									<div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
								</div>
								<h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
								<div class="progress">
									<div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
								</div>
								<h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
								<div class="progress">
									<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
								</div>
								<h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
								<div class="progress">
									<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="settings" role="tabpanel">
							<div class="card-body">
								@if($user->level_id == "2")
								<form class="form-horizontal form-material" action="{{ route('profileguru.update', $user->guru->id) }}" method="POST">
								@endif
								@if($user->level_id == "3")
								<form class="form-horizontal form-material" action="{{ route('profilesiswa.update', $user->siswa->id) }}" method="POST">
								@endif
								@csrf
									<div class="form-group">
										<label class="col-md-12">Full Name</label>
										<div class="col-md-12">
											<input type="text" placeholder="" value="{{ $user->name }}" class="form-control form-control-line" name="nama">
										</div>
									</div>
									<!-- <div class="form-group">
										<label for="example-email" class="col-md-12">Email</label>
										<div class="col-md-12">
											<input type="email" placeholder="" value="{{ $user->email }}" class="form-control form-control-line" name="email">
										</div>
									</div> -->
									<!-- <div class="form-group">
										<label class="col-md-12">Password</label>
										<div class="col-md-12">
											<input type="password" value="password" class="form-control form-control-line">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12">Phone No</label>
										<div class="col-md-12">
											<input type="text" placeholder="123 456 7890" class="form-control form-control-line">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12">Message</label>
										<div class="col-md-12">
											<textarea rows="5" class="form-control form-control-line"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-12">Select Country</label>
										<div class="col-sm-12">
											<select class="form-control form-control-line">
												<option>London</option>
												<option>India</option>
												<option>Usa</option>
												<option>Canada</option>
												<option>Thailand</option>
											</select>
										</div>
									</div> -->
									<div class="form-group">
										<div class="col-sm-12">
											<button type="submit" class="btn btn-warning">Update Profile</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Column -->
		</div>
		<!-- Row -->
		<!-- ============================================================== -->
		<!-- End PAge Content -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right sidebar -->
		<!-- ============================================================== -->
		<!-- .right-sidebar -->
		<div class="right-sidebar ps ps--theme_default" data-ps-id="69754ed6-cfc0-50a2-842b-9d5b6f58c3a8">
			<div class="slimscrollright">
				<div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
				<div class="r-panel-body">
					<ul id="themecolors" class="m-t-20">
						<li><b>With Light sidebar</b></li>
						<li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
						<li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
						<li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
						<li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
						<li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
						<li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
						<li class="d-block m-t-30"><b>With Dark sidebar</b></li>
						<li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme working">7</a></li>
						<li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
						<li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
						<li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
						<li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
						<li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
					</ul>
					<ul class="m-t-20 chatonline">
						<li><b>Chat option</b></li>
						<li>
							<a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
			<!-- ============================================================== -->
			<!-- End Right sidebar -->
			<!-- ============================================================== -->
		</div>




@stop