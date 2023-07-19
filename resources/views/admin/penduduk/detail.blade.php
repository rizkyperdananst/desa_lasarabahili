@extends('layouts.dashboard')
@section('title', 'Admin | Detail Penduduk')

@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Detail Penduduk</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table tabl-hover table-bordered">
                              <tbody>
                                   <tr>
                                        <th>Nama</th>
                                        <td>{{ $p->nama }}</td>
                                   </tr>
                                   <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{ $p->tempat_lahir }}</td>
                                   </tr>
                                   <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{ $p->tanggal_lahir }}</td>
                                   </tr>
                                   <tr>
                                        <th>NIK</th>
                                        <td>{{ $p->nik }}</td>
                                   </tr>
                                   <tr>
                                        <th>Alamat</th>
                                        <td>{{ $p->alamat }}</td>
                                   </tr>
                                   <tr>
                                        <th>Kecamatan</th>
                                        <td>{{ $p->kecamatan }}</td>
                                   </tr>
                                   <tr>
                                        <th>Kabupaten</th>
                                        <td>{{ $p->kabupaten }}</td>
                                   </tr>
                                   <tr>
                                        <th>Provinsi</th>
                                        <td>{{ $p->provinsi }}</td>
                                   </tr>
                                   <tr>
                                        <th>Status Kawin</th>
                                        <td>{{ $p->status_kawin }}</td>
                                   </tr>
                                   <tr>
                                        <th>Pekerjaan</th>
                                        <td>{{ $p->pekerjaan }}</td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
               <div class="card-footer">
                    <a href="{{ route('penduduk.index') }}" class="btn btn-secondary float-end">Kembali</a>
               </div>
          </div>
     </div>
</div>
@endsection