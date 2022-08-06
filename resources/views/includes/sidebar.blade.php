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
                        <a href="/home">
                            <span class="nav-icon text-primary"><i data-feather='home'></i></span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Dinas PUPR</span>
                    </li>
                    
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text {{ (request()->is('bina-marga*')) ? 'text-primary' : '' }} ">Bina Marga</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-binamarga') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-binamarga') }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text {{ (request()->is('cipta-karya*')) ? 'text-primary' : '' }}">Cipta Karya</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-ciptakarya') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-ciptakarya') }}" class="">
                                    <span class="nav-text">Hasil Pembangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text {{ (request()->is('pengairan*')) ? 'text-primary' : '' }}">Pengairan</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route("index-progress-pengairan") }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route("index-hasil-pengairan") }}" class="">
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
                            <span class="nav-text {{ (request()->is('lalu-lintas*')) ? 'text-primary' : '' }}">Lalu Lintas</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progres-lalu-lintas') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-lalu-lintas') }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text {{ (request()->is('perairan*')) ? 'text-primary' : '' }}">Perairan</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-perairan') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-perairan') }}" class="">
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
                            <span class="nav-text {{ (request()->is('psp*')) ? 'text-primary' : '' }}">Pengelolaan Sampah & Pertamanan</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-psp') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-psp') }}" class="">
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
                            <span class="nav-text {{ (request()->is('perumahan-pertanahan*')) ? 'text-primary' : '' }}">Perumahan & Pertanahan</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-perumahan-pertanahan') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-perumahan-pertanahan') }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="nav-icon"><i data-feather='list'></i></span>
                            <span class="nav-text {{ (request()->is('plpp*')) ? 'text-primary' : '' }}">PLPP</span>
                            <span class="nav-caret"></span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li>
                                <a href="{{ route('index-progress-plpp') }}" class="">
                                    <span class="nav-text">Progres Kegiatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index-hasil-plpp') }}" class="">
                                    <span class="nav-text">Hasil Permbangunan</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         <span class="nav-icon text-success"><i data-feather='arrow-up-right'></i></span>
                         <span class="nav-text">Keluar</span>
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>