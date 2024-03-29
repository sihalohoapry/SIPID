<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SIPID | Import @yield('title')</title>
        <meta name="description" content="Responsive, Bootstrap, BS4" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- style -->
        <!-- build:css ../dashboard/css/site.min.css -->
        <link rel="stylesheet" href="{{ asset('basik/assets/css/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('basik/assets/css/theme.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('basik/assets/css/style.css') }}" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
        <!-- endbuild -->
    </head>
    <body class="layout-row">
        {{-- <!-- ############ Aside START--> --}}
        
        <div id="main" class="layout-column flex">
            {{-- <!-- ############ Header START--> --}}
            @include('includes.header')
            {{-- content --}}
            <div id="content" class="flex ">
                @include('alert.success')
                @include('alert.failed')
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Import Data Hasil</h2>
                                <small class="text-muted">Pastikan data data di excel harus benar</small>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{ route('post-data-hasil') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group custom-file">
                                                        {{-- <div class="form-group"> --}}
                                                            <label>File</label>
                                                            <input type="file" name="data_hasil" class="form-control" required
                                                                placeholder="data_hasil">
                                                        {{-- </div> --}}
                                                        {{-- <input type="file" class="custom-file-input" id="thumbnail">
                                                        <label class="custom-file-label" for="thumbnail">Pilih Thumbnail</label> --}}
                                                    </div>
                                                </div>
                                               
                                                <button type="submit" class="btn btn-primary mt-5 float-right">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Footer START-->
            <div id="footer" class="page-footer hide">
                <div class="d-flex p-3">
                    <span class="text-sm text-muted flex">&copy; Copyright. flatfull.com</span>
                    <div class="text-sm text-muted">Version 1.0.0</div>
                </div>
            </div>
            <!-- ############ Footer END-->
        </div>
        <!-- build:js ../dashboard/js/site.min.js -->
        <!-- jQuery -->
       
        <script src="{{ asset('basik/libs/jquery/dist/jquery.min.js')  }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('basik/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('basik/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
        
        <!-- ajax page -->
        <script src="{{ asset('basik/libs/pjax/pjax.min.js') }}"></script>
        <script src="{{ asset('basik/assets/js/ajax.js') }}"></script>
        <!-- lazyload plugin -->
        <script src="{{ asset('basik/assets/js/lazyload.config.js') }}"></script>
        <script src="{{ asset('basik/assets/js/lazyload.js') }}"></script>
        <script src="{{ asset('basik/assets/js/plugin.js') }}"></script>
        <!-- scrollreveal -->
        <script src="{{ asset('basik/libs/scrollreveal/dist/scrollreveal.min.js') }}"></script>
        <!-- feathericon -->
        <script src="{{ asset('basik/libs/feather-icons/dist/feather.min.js') }}"></script>
        <script src="{{ asset('basik/assets/js/plugins/feathericon.js') }}"></script>
        <!-- theme -->
        <script src="{{ asset('basik/assets/js/theme.js') }}"></script>
        <script src="{{ asset('basik/assets/js/utils.js') }}"></script>
        @stack('prepend-script')
        {{-- @include('includes.script-layanan') --}}
        @stack('addon-script')
        
        <!-- endbuild -->
    </body>
</html>