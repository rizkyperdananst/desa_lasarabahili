@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Pendatang')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Tambah Pendatang</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('pendatang.store') }}" method="POST">
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
                                   <label for="desa_asal" class="form-label">Desa Asal</label>
                                   <input type="text" name="desa_asal" id="desa_asal" class="form-control @error('desa_asal') is-invalid @enderror" placeholder="masukkan desa asal">
                                   @error('desa_asal')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror 
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="tanggal_datang" class="form-label">Tanggal Datang</label>
                                   <input type="date" name="tanggal_datang" id="tanggal_datang" class="form-control @error('tanggal_datang') is-invalid @enderror" placeholder="masukkan tanggal datang">
                                   @error('tanggal_datang')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror 
                              </div>
                              <div class="col-md-6">
                                   <label for="kecamatan_asal" class="form-label">Kecamatan Asal</label>
                                   <input type="text" name="kecamatan_asal" id="kecamatan_asal" class="form-control @error('kecamatan_asal') is-invalid @enderror" placeholder="masukkan kecamatan asal">
                                   @error('kecamatan_asal')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror 
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="alamat_asal" class="form-label">Alamat Asal</label>
                                   <textarea name="alamat_asal" id="alamat_asal" cols="30" rows="5" class="form-control @error('alamat_asal') is-invalid @enderror" placeholder="masukkan alamat asal"></textarea>
                                   @error('alamat_asal')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('pendatang.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Tambah</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection