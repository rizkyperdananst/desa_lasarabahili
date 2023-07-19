@extends('layouts.dashboard')
@section('title', 'Admin | Data Pindah')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          @if (session('success'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>{{ session('success') }}</strong>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
          @endif
     </div>
</div>
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header d-flex justify-content-between">
                    <h4>Data Pindah</h4>
                    <a href="{{ route('pindah.create') }}" class="btn btn-primary">Tambah</a>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-hover table-bordered">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alasan Pindah</th>
                                        <th>Alamat Pindah</th>
                                        <th>Tanggal Pindah</th>
                                        <th>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @php
                                       $no=1;
                                   @endphp
                                   @foreach ($pindahs as $p)
                                   <tr>
                                        <td width="5%">{{ $no++ }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->alasan_pindah }}</td>
                                        <td>{{ $p->alamat_pindah }}</td>
                                        <td>{{ $p->tanggal_pindah }}</td>
                                        <td width="19%">
                                             <a href="{{ route('pindah.show', $p->id) }}"
                                                  class="btn btn-info">
                                                  <i class="fa-solid fa-eye"></i>
                                              </a>
                                             <a href="{{ route('pindah.edit', $p->id) }}"
                                                  class="btn btn-warning">
                                                  <i class="fa-solid fa-pen-to-square"></i>
                                              </a>
                                              <form action="{{ route('pindah.destroy', $p->id) }}" method="POST" class="d-inline mb-1">
                                                  @csrf
                                                  @method('delete')
                                                  <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                              </form>
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection