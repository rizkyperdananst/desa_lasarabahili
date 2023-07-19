@extends('layouts.dashboard')
@section('title', 'Admin | Data Kematian')
    
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
                    <h4>Data Kematian</h4>
                    <a href="{{ route('kematian.create') }}" class="btn btn-primary">Tambah</a>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-hover table-bordered">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Kematian</th>
                                        <th>Tempat Kematian</th>
                                        <th>Penyebab Kematian</th>
                                        <th>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @php
                                       $no=1;
                                   @endphp
                                   @foreach ($kematians as $k)
                                   <tr>
                                        <td width="5%">{{ $no++ }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>{{ $k->tanggal_kematian }}</td>
                                        <td>{{ $k->tempat_kematian }}</td>
                                        <td>{{ $k->penyebab_kematian }}</td>
                                        <td width="10%">
                                             <a href="{{ route('kematian.edit', $k->id) }}"
                                                  class="btn btn-warning">
                                                  <i class="fa-solid fa-pen-to-square"></i>
                                              </a>
                                              <form action="{{ route('kematian.destroy', $k->id) }}" method="POST" class="d-inline mb-1">
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