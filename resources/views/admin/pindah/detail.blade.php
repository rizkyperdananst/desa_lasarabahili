@extends('layouts.dashboard')
@section('title', 'Admin | Detail Pindah')

@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Detail Pindah</h4>
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
                                        <th>Desa</th>
                                        <td>{{ $p->desa }}</td>
                                   </tr>
                                   <tr>
                                        <th>Kecamatan</th>
                                        <td>{{ $p->kecamatan }}</td>
                                   </tr>
                                   <tr>
                                        <th>Tanggal Pindah</th>
                                        <td>{{ $p->tanggal_pindah }}</td>
                                   </tr>
                                   <tr>
                                        <th>Alasan Pindah</th>
                                        <td>{{ $p->alasan_pindah }}</td>
                                   </tr>
                                   <tr>
                                        <th>Alamat Pindah</th>
                                        <td>{{ $p->alamat_pindah }}</td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
               <div class="card-footer">
                    <a href="{{ route('pindah.index') }}" class="btn btn-secondary float-end">Kembali</a>
               </div>
          </div>
     </div>
</div>
@endsection