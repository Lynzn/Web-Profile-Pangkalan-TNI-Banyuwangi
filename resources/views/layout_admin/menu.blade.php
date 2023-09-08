<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-1 d-flex">
                    <div class="info">
                        <h6 class="text-white">{{ Auth::user()->name }}</h6>
                        {{-- <p class="text-gray">Adminstrator</p> --}}
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-1">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        {{-- @if (auth()->user()->role_id == 1) --}}
                        <li class="nav-item">
                            <a href="{{ route('admin') }}" class="nav-link" id="Dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> Dashboard</p>
                            </a>
                        </li>

                        @can('berita_access')
                            <li class="nav-item">
                                <a href="{{ route('berita.index') }}" class="nav-link" id="berita">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p> Berita & Artikel </p>
                                </a>
                            </li>
                        @endcan
                        
                        @can('berita_access')
                            <li class="nav-item">
                                <a href="{{ route('pendaftaran.index') }}" class="nav-link" id="staff">
                                    <i class="nav-icon fas fa-scroll"></i>
                                    <p>Informasi Pendaftaran</p>
                                </a>
                            </li>
                        @endcan

                        @can('alumni_access')
                            <li class="nav-item">
                                <a href="{{ route('alumni.index') }}" class="nav-link" id="Alumni">
                                    <i class="nav-icon fas fa-image"></i>
                                    <p> Dokumentasi </p>
                                </a>
                            </li>
                        @endcan




                       
                        {{-- @endif --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>