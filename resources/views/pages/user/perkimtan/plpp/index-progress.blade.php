@extends('layouts.user')
@section('title')
Dinas PERKIMTAN
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
                                <h2 class="text-md text-highlight">Data - Data Progres Kegiatan di PLPP</h2>
                                <small class="text-muted">Daftar list seluruh proses kegiatan</small>
                            </div>
                            <div class="flex"></div>
                        </div>
                    </div>
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-theme table-row v-middle" >
                                    <thead>
                                        <tr>
                                            <th><span class="text-muted">Nama Pekerjaan</span></th>
                                            <th><span class="text-muted">Lokasi</span></th>
                                            <th><span class="text-muted">Jenis</span></th>
                                            <th><span class="text-muted">Volume</span></th>
                                            <th><span class="text-muted">Sumber Dana</span></th>
                                            <th><span class="text-muted">Progres Fisik</span></th>
                                            <th><span class="text-muted">Progres Keuangan</span></th>
                                            <th><span class="text-muted">bulan</span></th>
                                            <th><span class="text-muted">tahun</span></th>
                                            <th><span class="text-muted">Keterangan</span></th>
                                            
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
                title:' SIPID | PERKIM \n Data - data Progress Kegiatan Penyehatan Lingkungan Perumahan dan Pemukiman ',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4, 5,6 ]
                }
            },
        ],
            processing: true,
            serverSide:true,
            ordering:true,
            scrollX:true,
            ajax:{
                url: '{!! url()->current() !!}',
            },
            columns:[
                {data:'nama_pekerjaan', name: 'nama_pekerjaan', "width": "400px"},
                {data:'lokasi', name: 'lokasi', "width": "150px"},
                {data:'jenis', name: 'jenis', "width": "150px"},
                {data:'volume', name: 'volume'},
                {data:'sumber_dana', name: 'sumber_dana', "width": "150px"},
                {data:'progres_fisik', name: 'progres_fisik', "width": "150px"},
                {data:'progres_keuangan', name: 'progres_keuangan', "width": "150px"},
                {data:'bulan', name: 'bulan'},
                {data:'tahun', name: 'tahun'},
                {data:'keterangan', name: 'keterangan', "width": "200px"},

            ]
        });
        
</script>

@endpush