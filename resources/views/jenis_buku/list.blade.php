@extends('layouts')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Jenis Buku</h6>
                <div class="dropdown no-arrow">
                    <a href="{{route('jenis_buku_tambah')}}">
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
                                <th class="text-center">Nama</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jenis_buku as $index => $row)
                            <tr>
                                <td>{{$index+=1}}</td>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->deskripsi}}</td>
                                <td><a href="{{route('jenis_buku_ubah',[$row->id])}}">Ubah</a></td>
                                <td><a onclick="return confirm('Apakah Anda yakin ingin menghapus Jenis Buku {{$row->nama}}?')" href="{{route('jenis_buku_hapus',[$row->id])}}">Hapus</a></td>
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