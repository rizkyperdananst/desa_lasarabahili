@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Penduduk')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Tambah Penduduk</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('penduduk.store') }}" method="POST">
                         @csrf
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="nama" class="form-label">Nama</label>
                                   <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="masukkan nama">
                                   @error('nama')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                   <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="masukkan tempat lahir">
                                   @error('tempat_lahir')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                   <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                   @error('tanggal_lahir')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="nik" class="form-label">NIK</label>
                                   <input type="number" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="masukkan nik">
                                   @error('nik')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="alamat" class="form-label">Alamat</label>
                                   <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control @error('alamat') is-invalid @enderror" placeholder="masukkan alamat"></textarea>
                                   @error('alamat')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="kecamatan" class="form-label">Kecamatan</label>
                                   <input type="text" name="kecamatan" id="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" placeholder="masukkan kecamatan">
                                   @error('kecamatan')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="kabupaten" class="form-label">Kabupaten</label>
                                   <input type="text" name="kabupaten" id="kabupaten" class="form-control @error('kabupaten') is-invalid @enderror" placeholder="masukkan kabupaten">
                                   @error('kabupaten')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="provinsi" class="form-label">Provinsi</label>
                                   <input type="text" name="provinsi" id="provinsi" class="form-control @error('provinsi') is-invalid @enderror" placeholder="masukkan provinsi">
                                   @error('provinsi')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="status_kawin" class="form-label">Status Kawin</label>
                                   <input type="text" name="status_kawin" id="status_kawin" class="form-control @error('status_kawin') is-invalid @enderror" placeholder="masukkan status kawin">
                                   @error('status_kawin')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                   <input type="text" name="pekerjaan" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="masukkan pekerjaan">
                                   @error('pekerjaan')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('penduduk.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Tambah</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection