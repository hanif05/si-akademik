@extends('layouts.app')

@section('content')

<div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Dashboard 4</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard 4</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL VISIT</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash"></div>
                                <div class="ml-auto">
                                    <h2 class="text-success"><i class="ti-arrow-up"></i> <span class="counter">8659</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL PAGE VIEWS</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash2"></div>
                                <div class="ml-auto">
                                    <h2 class="text-purple"><i class="ti-arrow-up"></i> <span class="counter">7469</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">UNIQUE VISITOR</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash3"></div>
                                <div class="ml-auto">
                                    <h2 class="text-info"><i class="ti-arrow-up"></i> <span class="counter">6011</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">BOUNCE RATE</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash4"></div>
                                <div class="ml-auto">
                                    <h2 class="text-danger"><i class="ti-arrow-down"></i> <span class="counter">18%</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Sales Chart and browser state-->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="card-title m-b-40">SALES IN 2018</h5>
                                    <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit. viverra tellus. ipsumdolorsitda amet, ectetur adipiscing elit.</p>
                                    <p>Ectetur adipiscing elit. viverra tellus.ipsum dolor sit amet, dag adg ecteturadipiscingda elitdglj. vadghiverra tellus.</p>
                                </div>
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                    <div id="morris-area-chart" style="height:250px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End Sales Chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Feed and erning -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">WEATHER</h5>
                        </div>
                        <div class="card-body bg-light">
                            <div class="d-flex no-block align-items-center">
                                <span><h2 class="">Monday</h2><small>7th May 2017</small></span>
                                <div class="ml-auto">
                                    <canvas class="sleet" width="44" height="44"></canvas> <span class="display-6">32<sup>°F</sup></span> </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table no-border">
                                        <tbody>
                                        <tr>
                                            <td>Wind</td>
                                            <td class="font-medium">ESE 17 mph</td>
                                        </tr>
                                        <tr>
                                            <td>Humidity</td>
                                            <td class="font-medium">83%</td>
                                        </tr>
                                        <tr>
                                            <td>Pressure</td>
                                            <td class="font-medium">28.56 in</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table no-border">
                                        <tbody>
                                        <tr>
                                            <td>Cloud Cover</td>
                                            <td class="font-medium">78%</td>
                                        </tr>
                                        <tr>
                                            <td>Ceiling</td>
                                            <td class="font-medium">25760 ft</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Column -->
                                <div class="col-lg-2 col-md-4 col-4 text-center">
                                    <h5>Tue</h5>
                                    <div class="m-t-10 m-b-10">
                                        <canvas class="sleet" width="30" height="30"></canvas>
                                    </div>
                                    <h5>32<sup>°F</sup></h5>
                                </div>
                                <!-- Column -->
                                <div class="col-lg-2 col-md-4 col-4 text-center">
                                    <h5>Wed</h5>
                                    <div class="m-t-10 m-b-10">
                                        <canvas class="clear-day" width="30" height="30"></canvas>
                                    </div>
                                    <h5>34<sup>°F</sup></h5>
                                </div>
                                <!-- Column -->
                                <div class="col-lg-2 col-md-4 col-4 text-center">
                                    <h5>Thu</h5>
                                    <div class="m-t-10 m-b-10">
                                        <canvas class="partly-cloudy-day" width="30" height="30"></canvas>
                                    </div>
                                    <h5>31<sup>°F</sup></h5>
                                </div>
                                <!-- Column -->
                                <div class="col-lg-2 col-md-4 col-4 text-center">
                                    <h5>Fri</h5>
                                    <div class="m-t-10 m-b-10">
                                        <canvas class="cloudy" width="30" height="30"></canvas>
                                    </div>
                                    <h5>32<sup>°F</sup></h5>
                                </div>
                                <!-- Column -->
                                <div class="col-lg-2 col-md-4 col-4 text-center">
                                    <h5>Sat</h5>
                                    <div class="m-t-10 m-b-10">
                                        <canvas class="snow" width="30" height="30"></canvas>
                                    </div>
                                    <h5>12<sup>°F</sup></h5>
                                </div>
                                <!-- Column -->
                                <div class="col-lg-2 col-md-4 col-4 text-center">
                                    <h5>Sun</h5>
                                    <div class="m-t-10 m-b-10">
                                        <canvas class="wind" width="30" height="30"></canvas>
                                    </div>
                                    <h5>32<sup>°F</sup></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">USER ACTIVITY</h5>
                            <div class="steamline m-t-40">
                                <div class="sl-item">
                                    <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                        <div class="desc">you can write anything </div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left bg-info"><i class="fa fa-image"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Send documents to Clark</div>
                                        <div class="desc">Lorem Ipsum is simply </div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="{{ asset('asset') }}/assets/images/users/2.jpg"> </div>
                                    <div class="sl-right">
                                        <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                        <div class="desc">Contrary to popular belief</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="{{ asset('asset') }}/assets/images/users/3.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0)">Tiger Sroff</a> <span class="sl-date">5 minutes ago</span></div>
                                        <div class="desc">Approve meeting with tiger
                                            <br><a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">FEEDS</h5>
                            <ul class="feeds">
                                <li>
                                    <div class="bg-info"><i class="far fa-bell"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                                <li>
                                    <div class="bg-success"><i class="ti-server"></i></div> Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
                                <li>
                                    <div class="bg-warning"><i class="ti-shopping-cart"></i></div> New order received.<span class="text-muted">31 May</span></li>
                                <li>
                                    <div class="bg-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                                <li>
                                    <div class="bg-dark"><i class="far fa-bell"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                                <li>
                                    <div class="bg-info"><i class="far fa-bell"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                                <li>
                                    <div class="bg-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Review -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ORDER STATUS</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>User</th>
                                    <th>Order date</th>
                                    <th>Amount</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Tracking Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="javascript:void(0)" class="link"> Order #53431</a></td>
                                    <td>Steve N. Horton</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                                    <td>$45.00</td>
                                    <td class="text-center">
                                        <div class="label label-table label-success">Paid</div>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)" class="link"> Order #53432</a></td>
                                    <td>Charles S Boyle</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                    <td>$245.30</td>
                                    <td class="text-center">
                                        <div class="label label-table label-info">Shipped</div>
                                    </td>
                                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)" class="link"> Order #53433</a></td>
                                    <td>Lucy Doe</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                    <td>$38.00</td>
                                    <td class="text-center">
                                        <div class="label label-table label-info">Shipped</div>
                                    </td>
                                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)" class="link"> Order #53434</a></td>
                                    <td>Teresa L. Doe</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                                    <td>$77.99</td>
                                    <td class="text-center">
                                        <div class="label label-table label-info">Shipped</div>
                                    </td>
                                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)" class="link"> Order #53435</a></td>
                                    <td>Teresa L. Doe</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                                    <td>$18.00</td>
                                    <td class="text-center">
                                        <div class="label label-table label-success">Paid</div>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)" class="link">Order #53437</a></td>
                                    <td>Charles S Boyle</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                                    <td>$658.00</td>
                                    <td class="text-center">
                                        <div class="label label-table label-danger">Refunded</div>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)" class="link">Order #536584</a></td>
                                    <td>Scott S. Calabrese</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                                    <td>$45.58</td>
                                    <td class="text-center">
                                        <div class="label label-table label-warning">Unpaid</div>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End Review -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Comment - chats -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Comment - chats -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
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
                                <a href="javascript:void(0)"><img src="{{ asset('asset') }}/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ asset('asset') }}/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ asset('asset') }}/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ asset('asset') }}/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ asset('asset') }}/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ asset('asset') }}/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ asset('asset') }}/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{ asset('asset') }}/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>

@endsection