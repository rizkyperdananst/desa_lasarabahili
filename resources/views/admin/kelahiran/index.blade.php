@extends('layouts.dashboard')
@section('title', 'Admin | Data Kelahiran')
    
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
                    <h4>Data Kelahiran</h4>
                    <a href="{{ route('kelahiran.create') }}" class="btn btn-primary">Tambah</a>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-hover table-bordered">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nama Ayah</th>
                                        <th>Nama Ibu</th>
                                        <th>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @php
                                       $no=1;
                                   @endphp
                                   @foreach ($kelahirans as $k)
                                   <tr>
                                        <td width="5%">{{ $no++ }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>{{ $k->tanggal_lahir }}</td>
                                        <td>{{ $k->nama_ayah }}</td>
                                        <td>{{ $k->nama_ibu }}</td>
                                        <td width="10%">
                                             <a href="{{ route('kelahiran.edit', $k->id) }}"
                                                  class="btn btn-warning">
                                                  <i class="fa-solid fa-pen-to-square"></i>
                                              </a>
                                              <form action="{{ route('kelahiran.destroy', $k->id) }}" method="POST" class="d-inline mb-1">
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