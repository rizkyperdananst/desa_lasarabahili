@extends('layouts.dashboard')
@section('title', 'Admin | Edit Kematian')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Edit Kematian</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('kematian.update', $k->id) }}" method="POST">
                         @csrf
                         @method('put')
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="nama" class="form-label">Nama</label>
                                   <input type="text" name="nama" value="{{ $k->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="masukkan nama">
                                   @error('nama')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="tanggal_kematian" class="form-label">Tanggal Kematian</label>
                                   <input type="date" name="tanggal_kematian" value="{{ $k->tanggal_kematian }}" id="tanggal_kematian" class="form-control @error('tanggal_kematian') is-invalid @enderror" placeholder="masukkan tanggal kematian">
                                   @error('tanggal_kematian')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="tempat_kematian" class="form-label">Tempat Kematian</label>
                                   <input type="text" name="tempat_kematian" value="{{ $k->tempat_kematian }}" id="tempat_kematian" class="form-control @error('tempat_kematian') is-invalid @enderror" placeholder="masukkan tempat kematian">
                                   @error('tempat_kematian')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="penyebab_kematian" class="form-label">Penyebab Kematian</label>
                                   <input type="text" name="penyebab_kematian" value="{{ $k->penyebab_kematian }}" id="penyebab_kematian" class="form-control @error('penyebab_kematian') is-invalid @enderror" placeholder="masukkan penyebab kematian">
                                   @error('penyebab_kematian')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('kematian.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Update</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection