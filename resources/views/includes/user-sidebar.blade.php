<div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade" aria-hidden="true">
    <div class="sidenav h-100 bg-light modal-dialog">
        <!-- sidenav top -->
        <div class="navbar">
            <!-- brand -->
            <a href="/" class="navbar-brand ">
                <img src="{{ asset('images/logo_sipid.png') }}" alt="logo">
            </a>
            <!-- / brand -->
            <!-- / brand -->
        </div>
        <!-- Flex nav content -->
        <div class="flex scrollable hover">
            <div class="nav-active-text-primary" data-nav>
                <ul class="nav bg">
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Main</span>
                    </li>
                    <li>
                        <a href="{{ route('user-dashboard') }}">
                            <span class="nav-icon text-primary"><i data-feather='home'></i></span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Dinas PUPR</span>
                    </li>
                    
                    <li>
                        <a href="#" class="active">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text">Bina Marga</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-binamarga-user') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-binamarga-user') }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text">Cipta Karya</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-ciptakarya-user') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-ciptakarya-user') }}" class="">
                                    <span class="nav-text">Hasil Pembangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text">Pengairan</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route("index-progress-pengairan-user") }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route("index-hasil-pengairan-user") }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Dinas Perhubungan</span>
                    </li>
                    
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text">Lalu Lintas</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-lalu-lintas-user') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-lalu-lintas-user') }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text">Perairan</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-perairan-user') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-perairan-user') }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Dinas DLHD</span>
                    </li>
                    
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text">Pengelolaan Sampah & Pertamanan</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-psp-user') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-psp-user') }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Dinas PERKIMTAN </span>
                    </li>
                    
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text">Perumahan & Pertanahan</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-pp-user') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-pp-user') }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text">PLPP</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-plpp-user') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-plpp-user') }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>