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
                                <h2 class="text-md text-highlight">Tambah Hasil Pembangunan Dinas {{ $dinas }} Bidang {{ $bidang }}</h2>
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
                                            <strong>Data - data hasil kegiatan</strong>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('post-hasil-kegiatan',[$dinas , $bidang]) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label class=text-muted">Nama Kegiatan</label>
                                                        <textarea id="event-desc" class="form-control" rows="5" id="kegiatan" required name="kegiatan"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="kecamatan" id="kecamatan" class="text-muted d-block">Kecamatan</label>
                                                        <select name="kecamatan" class="custom-select" required>
                                                            <option selected>Pilih...</option>
                                                            <option value="Banjar Agung">Banjar Agung</option>
                                                            <option value="Banjar Baru">Banjar Baru</option>
                                                            <option value="Banjar Margo">Banjar Margo</option>
                                                            <option value="Dente Teladas">Dente Teladas</option>
                                                            <option value="Gedung Aji">Gedung Aji</option>
                                                            <option value="Gedung Aji Baru">Gedung Aji Baru</option>
                                                            <option value="Gedung Meneng">Gedung Meneng</option>
                                                            <option value="Menggala">Menggala</option>
                                                            <option value="Menggala Timur">Menggala Timur</option>
                                                            <option value="Meraksa Aji">Meraksa Aji</option>
                                                            <option value="Penawar Aji">Penawar Aji</option>
                                                            <option value="Penawar Tama">Penawar Tama</option>
                                                            <option value="Rawa Jitu Selatan">Rawa Jitu Selatan</option>
                                                            <option value="Rawa Jitu Timur">Rawa Jitu Timur</option>
                                                            <option value="Rawa Pitu">Rawa Pitu</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Tahun</label>
                                                        <input  type="number" id="tahun" name="tahun"  class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Jenis</label>
                                                        <input type="text" id="jenis" name="jenis"  class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Volume</label>
                                                        <input type="text" id="volume" name="volume" required class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Sumber Dana</label>
                                                        <input type="text" id="sumber_dana" name="sumber_dana" required class="form-control"">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-muted">Pagu</label>
                                                        <input type="number" id="pagu" name="pagu" required class="form-control"">
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

