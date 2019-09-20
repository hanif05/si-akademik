<div class="scroll-sidebar">
            <!-- User Profile-->
            <div class="user-profile">
                <div class="user-pro-body">
                    @if(auth()->user()->level_id == '2')
                        <div><img src="{{ asset('/storage/'. auth()->user()->guru->foto) }}" alt="user-img" class="img-circle"></div>
                        @elseif(auth()->user()->level_id == '3')
                        <div><img src="{{ asset('/storage/'. auth()->user()->siswa->foto) }}" alt="user-img" class="img-circle"></div>
                        @else
                        <div><img src="{{ asset('asset') }}/assets/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                    @endif
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }} | {{ auth()->user()->level->name }}<span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            @if(auth()->user()->level_id == '2')
                            <a href="/profile" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                @elseif(auth()->user()->level_id == '3')
                                <a href="/profile" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            @endif
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->

                            <a href="/logout" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">--- DATA</li>
                    <li> <a class="" href="/home">
                            <i class="icon-speedometer"></i>
                            <span class="hide-menu">Home</span></a>
                    </li>
                    @if(auth()->user()->level_id == '2')
                    <li> <a class="" href="/materi">
                            <i class="fa fa-book"></i>
                            <span class="hide-menu">Materi</span></a>
                    </li>
                    @endif
                    @if(auth()->user()->level_id == '1')
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2">

                            </i><span class="hide-menu">Master</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="/guru">Guru</a></li>
                            <li><a href="/siswa">Siswa</a></li>
                            <li><a href="/mapel">Mata Pelajaran</a></li>
                            <li><a href="/kelas">Kelas</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap">--- SUPPORT</li>
                    <li>
                        <a class="waves-effect waves-dark" href="/logout" aria-expanded="false">
                            <i class="fa fa-circle text-success"></i>
                            <span class="hide-menu">Logout</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
