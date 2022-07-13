@extends('layouts.admin')
@section('title')
    Dashboard
@endsection
@section('content')
                <!-- ############ Content START-->
                <div id="content" class="flex">
                    <!-- ############ Main START-->
                    <div>
                        <div class="page-hero page-container" id="page-hero">
                            <div class="padding d-flex pt-0">
                                <div class="page-title">
                                    <h2 class="text-md text-highlight">Dashboard</h2>
                                    <small class="text-muted">Selamat datang,
                                        <strong>{{ Auth::user()->name }}</strong>
                                    </small>
                                </div>
                                <div class="flex"></div>
                            </div>
                        </div>
                        <div class="page-content page-container" id="page-content">
                            <div class="padding pt-0">
                                <div class="row row-sm sr">
                                {{-- Jumlah Serti --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-primary">
                                                        <i data-feather="folder"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>Dinas PUPR</div>
                                                        <div class="text-success mt-2">
                                                            
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Portfolio --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-warning">
                                                        <i data-feather="paperclip"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>DINAS PERHUBUNGAN</div>
                                                        <div class="text-success mt-2">
                                                          
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Blog --}}
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-success">
                                                        <i data-feather="list"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>DINAS DLHD</div>
                                                        <div class="text-success mt-2">
                                                            
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex">
                                        <div class="card flex">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-hover-success">
                                                    <div class="avatar w-56 m-2 no-shadow gd-success">
                                                        <i data-feather="list"></i>
                                                    </div>
                                                    <div class="px-4 flex">
                                                        <div>DINAS PERKIMTAN</div>
                                                        <div class="text-success mt-2">
                                                            
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-muted">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ############ Main END-->
                </div>
                <!-- ############ Content END-->
@endsection
