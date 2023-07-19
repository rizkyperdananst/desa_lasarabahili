@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Pindah')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Tambah Pindah</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('pindah.store') }}" method="POST">
                         @csrf
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="nama" class="form-label">Nama</label>
                                   <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="masukkan nama">
                                   @error('nama')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $messagae }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="desa" class="form-label">Desa</label>
                                   <input type="text" name="desa" id="desa" class="form-control @error('desa') is-invalid @enderror" placeholder="masukkan desa">
                                   @error('desa')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="kecamatan" class="form-label">Kecamatan</label>
                                   <input type="text" name="kecamatan" id="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" placeholder="masukkan kecamatan">
                                   @error('kecamatan')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $messagae }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="tanggal_pindah" class="form-label">Tanggal Pindah</label>
                                   <input type="date" name="tanggal_pindah" id="tanggal_pindah" class="form-control @error('tanggal_pindah') is-invalid @enderror">
                                   @error('tanggal_pindah')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="alasan_pindah" class="form-label">Alasan Pindah</label>
                                   <textarea name="alasan_pindah" id="alasan_pindah" cols="30" rows="5" class="form-control @error('alasan_pindah') is-invalid @enderror" placeholder="masukkan alasan pindah"></textarea>
                                   @error('alasan_pindah')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="alamat_pindah" class="form-label">Alamat Pindah</label>
                                   <textarea name="alamat_pindah" id="alamat_pindah" cols="30" rows="5" class="form-control @error('alamat_pindah') is-invalid @enderror" placeholder="masukkan alamat pindah"></textarea>
                                   @error('alamat_pindah')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('pindah.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Tambah</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection