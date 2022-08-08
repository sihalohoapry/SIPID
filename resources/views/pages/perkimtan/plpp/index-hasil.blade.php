@extends('layouts.admin')
@section('title')
PUPR
@endsection
@push('addon-script')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fc-4.1.0/datatables.min.js"></script>

@endpush
@section('content')
<div id="content" class="flex ">
    @include('alert.success')
    @include('alert.failed')
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Hasil Pembangunan di Bidang PLPP</h2>
                                <small class="text-muted">Daftar list seluruh hasil kegiatan</small>
                            </div>
                            <div class="flex"></div>
                            <div>
                                <a href="{{ route('create-hasil-kegiatan', ["perkimtan","plpp"]) }}" class="btn btn-md text-muted">
                                    <span class="d-none d-sm-inline mx-1">Tambah Hasil</span>
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-theme table-row v-middle" >
                                    <thead>
                                        <tr>
                                            <th><span class="text-muted">Kegiatan</span></th>
                                            <th><span class="text-muted">Jenis</span></th>
                                            <th><span class="text-muted">Volume</span></th>
                                            <th><span class="text-muted">Sumber Dana</span></th>
                                            <th><span class="text-muted">Pagu</span></th>
                                            <th><span class="text-muted">Tahun</span></th>
                                            <th><span class="text-muted">Kecamatan</span></th>
                                            <th><span class="text-muted">Aksi</span></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                    @endphp
                                    {{-- @foreach ($data as $row ) --}}
                                    
                                    {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- ############ Content END-->
@endsection

@push('addon-script')
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<script>
    
    var datatable = $('#datatable').DataTable({
            dom: 'lBfrtip',
            buttons: [
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4, 5,6 ]
                }
            },
            {
                extend: 'pdfHtml5',
                filename: 'data-progres-perkim-plpp',
                title:' SIPID | PERKIM \n Data - data Hasil Pembangunan Penyehatan Lingkungan Perumahan dan Pemukiman ',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4, 5,6 ]
                }
            },
        ],
            // buttons: [
            //         'excel', 'pdf', 'print'
            //     ],
            processing: true,
            serverSide:true,
            ordering:true,
            ajax:{
                url: '{!! url()->current() !!}',
            },
            columns:[
                {data:'kegiatan', name: 'kegiatan'},
                {data:'jenis', name: 'jenis'},
                {data:'volume', name: 'volume'},
                {data:'sumber_dana', name: 'sumber_dana'},
                {data:'pagu', name: 'pagu'},
                {data:'tahun', name: 'tahun'},
                {data:'kecamatan', name: 'kecamatan'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        });
        
</script>

@endpush