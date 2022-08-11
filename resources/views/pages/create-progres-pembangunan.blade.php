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
                                <h2 class="text-md text-highlight">Tambah Progres Kegiatan Dinas {{ $dinas }} Bidang {{ $bidang }}</h2>
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
                                            <form action="{{ route('post-progres-kegiatan',[$dinas , $bidang]) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label class=text-muted">Nama Pekerjaan</label>
                                                        <textarea id="event-desc" class="form-control" rows="5" id="nama_pekerjaan" required name="nama_pekerjaan"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Lokasi</label>
                                                        <input type="text" id="lokasi" name="lokasi"  class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Jenis</label>
                                                        <input  type="text" id="jenis" name="jenis"  class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Volume</label>
                                                        <input type="text" id="volume" name="volume" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Sumber Dana</label>
                                                        <input type="text" id="sumber_dana" name="sumber_dana" required class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Pagu</label>
                                                        <input type="number" id="nilai_pagu" name="nilai_pagu" required class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Kontrak</label>
                                                        <input type="number" id="nilai_kontrak" name="nilai_kontrak" required class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Progres Fisik(%)</label>
                                                        <input type="text" id="progres_fisik" name="progres_fisik" required class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Progres Keuangan</label>
                                                        <input type="number" id="progres_keuangan" name="progres_keuangan" required class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label for="bulan" id="bulan" class="text-muted d-block">Bulan</label>
                                                        <select name="bulan" class="custom-select" required>
                                                            <option selected>Pilih...</option>
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
                                                        <input type="number" id="tahun" name="tahun" required class="form-control"">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class=text-muted">Keterangan</label>
                                                        <textarea id="event-desc" class="form-control" rows="5" id="keterangan" required name="keterangan"></textarea>
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

