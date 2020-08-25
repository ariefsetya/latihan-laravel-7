@extends('layouts')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
                <div class="dropdown no-arrow">
                    <a href="{{route('buku_tambah')}}">
                        Tambah
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 60px;" class="text-center">No</th>
                                <th class="text-center">Jenis</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Penulis</th>
                                <th class="text-center">Penerbit</th>
                                <th class="text-center">Tahun</th>
                                <th class="text-center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($buku as $index => $row)
                            <tr>
                                <td>{{$index+=1}}</td>
                                <td>{{$row->jenis_buku->nama ?? ''}}</td>
                                <td>{{$row->judul}}</td>
                                <td>{{$row->penulis}}</td>
                                <td>{{$row->penerbit}}</td>
                                <td>{{$row->tahun}}</td>
                                <td><a href="{{route('buku_ubah',[$row->id])}}">Ubah</a></td>
                                <td><a onclick="return confirm('Apakah Anda yakin ingin menghapus Buku {{$row->judul}}?')" href="{{route('buku_hapus',[$row->id])}}">Hapus</a></td>
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