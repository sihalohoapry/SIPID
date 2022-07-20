@extends('layouts.admin')
@section('title')
    Siswa
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
                                <h2 class="text-md text-highlight">Siswa</h2>
                                <small class="text-muted">Daftar list seluruh siswa</small>
                            </div>
                            <div class="flex"></div>
                            <div>
                                <a href="" class="btn btn-md text-muted">
                                    <span class="d-none d-sm-inline mx-1">Tambah Siswa</span>
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                                    <thead>
                                        <tr>
                                            <th><span class="text-muted">No</span></th>
                                            <th><span class="text-muted">Nama Lengkap</span></th>
                                            <th><span class="text-muted">Email</span></th>
                                            <th><span class="text-muted">Status Siswa</span></th>
                                            <th><span class="text-muted">Status Payment</span></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                    @endphp
                                    {{-- @foreach ($data as $row ) --}}
                                    <tr class=" " data-id="3">
                                        <td style="min-width:30px;text-align:center">
                                            {{-- <small class="text-muted">{{ $no ++ }}</small> --}}
                                        </td>
                                        <td>
                                            <span class="item-amount text-sm ">
                                                
                                            </span>
                                        </td>
                                        <td>
                                            <span class="item-amount text-sm ">
                                                
                                            </span>
                                        </td>
                                        <td>
                                            <span class="item-amount text-sm ">
                                                
                                            </span>
                                        </td>
                                        <td>
                                            <span class="item-amount text-sm ">
                                                
                                            </span>
                                        </td>
                                        
                                        {{-- <td>
                                            <div class="item-action dropdown">
                                                <a href="#" data-toggle="dropdown" class="text-muted">
                                                    <i data-feather="more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                    <a class="dropdown-item" href="">
                                                        Lihat Detail
                                                    </a>
                                                    <a href="" class="dropdown-item edit">
                                                        Edit
                                                    </a>
                                                </div>
                                            </div>
                                        </td> --}}
                                    </tr>
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
