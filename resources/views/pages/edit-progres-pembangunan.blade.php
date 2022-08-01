@extends('layouts.admin')
@section('title')
    Tambah Data
@endsection
@section('content')
<div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex pt-0">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Tambah Progres Kegiatan Dinas {{ $data->dinas }} Bidang {{ $data->bidang }}</h2>
                                <small class="text-muted">Silahkan Isi data dengan benar</small>
                            </div>
                        </div>
                    </div>

                    <div class="page-content page-container" id="page-content">
                        <div class="padding pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Data - data progres kegiatan</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('update-progres',$data->id) }}" method="POST" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label class=text-muted">Nama Pekerjaan</label>
                                                        <textarea id="event-desc" class="form-control" rows="5" id="nama_pekerjaan" name="nama_pekerjaan">{{ $data->nama_pekerjaan }}</textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Lokasi</label>
                                                        <input type="text" id="lokasi" name="lokasi" value="{{ $data->lokasi }}" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Jenis</label>
                                                        <input  type="text" id="jenis" name="jenis" value="{{ $data->jenis }}" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Volume</label>
                                                        <input type="text" id="volume" name="volume" value="{{ $data->volume }}" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Sumber Dana</label>
                                                        <input type="text" id="sumber_dana" name="sumber_dana" value="{{ $data->sumber_dana }}" class="form-control"">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Pagu</label>
                                                        <input type="number" id="nilai_pagu" name="nilai_pagu" value="{{ $data->nilai_pagu }}" class="form-control"">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Kontrak</label>
                                                        <input type="number" id="nilai_kontrak" name="nilai_kontrak" value="{{ $data->nilai_kontrak }}" class="form-control"">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Progres Fisik(%)</label>
                                                        <input type="text" id="progres_fisik" name="progres_fisik" value="{{ $data->progres_fisik }}" class="form-control"">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Progres Keunangan</label>
                                                        <input type="text" id="progres_keuangan" name="progres_keuangan" value="{{ $data->progres_keuangan }}" class="form-control"">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label for="bulan" id="bulan" class="text-muted d-block">Bulan</label>
                                                        <select name="bulan" class="custom-select" >
                                                            <option selected value="{{ $data->bulan }}">{{ $data->bulan }}</option>
                                                            <option value="Januari">Januari</option>
                                                            <option value="Februari">Februari</option>
                                                            <option value="Maret">Maret</option>
                                                            <option value="April">April</option>
                                                            <option value="Mei">Mei</option>
                                                            <option value="Juni">Juni</option>
                                                            <option value="Juli">Juli</option>
                                                            <option value="Agustus">Agustus</option>
                                                            <option value="September">September</option>
                                                            <option value="Oktober">Oktober</option>
                                                            <option value="November">November</option>
                                                            <option value="Desember">Desember</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Tahun</label>
                                                        <input type="number" id="tahun" name="tahun" value="{{ $data->tahun }}" class="form-control"">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class=text-muted">Keterangan</label>
                                                        <textarea id="event-desc" class="form-control" rows="5" id="keterangan"  name="keterangan">{{ $data->keterangan }}</textarea>
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
            <!-- ############ Content END-->
@endsection

