@extends('layouts.dashboard')
@section('title', 'Admin | Edit Kematian')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Edit Kelahiran</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('kelahiran.update', $k->id) }}" method="POST">
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
                                   <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                   <input type="date" name="tanggal_lahir" value="{{ $k->tanggal_lahir }}" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" placeholder="masukkan tanggal lahir">
                                   @error('tanggal_lahir')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                   <input type="text" name="nama_ayah" value="{{ $k->nama_ayah }}" id="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="masukkan nama ayah">
                                   @error('nama_ayah')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                   <input type="text" name="nama_ibu" value="{{ $k->nama_ibu }}" id="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="masukkan nama ibu">
                                   @error('nama_ibu')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('kelahiran.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Update</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection