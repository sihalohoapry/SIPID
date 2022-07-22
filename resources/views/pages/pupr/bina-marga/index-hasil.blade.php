@extends('layouts.admin')
@section('title')
    PUPR
@endsection
@section('content')
<div id="content" class="flex ">
    @include('alert.success')
    @include('alert.failed')
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Proses Kegiatan di Bidang Binamarga</h2>
                                <small class="text-muted">Daftar list seluruh proses kegiatan</small>
                            </div>
                            <div class="flex"></div>
                            <div>
                                <a href="{{ route('create-hasil-kegiatan', ["PUPR","Bina Marga"]) }}" class="btn btn-md text-muted">
                                    <span class="d-none d-sm-inline mx-1">Tambah Proses</span>
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
                                            <th><span class="text-muted">kecamatan</span></th>
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
<script>
    var datatable = $('#datatable').DataTable({
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