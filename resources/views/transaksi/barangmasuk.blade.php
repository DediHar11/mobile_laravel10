@extends('layouts.master')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <h6 class="mb-0" style="text-align:left">Barang Masuk</h6><br>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <a href="{{route('tambahbarangmasuk')}}" class="btn btn-sm btn-outline-info"><i class="fa fa-plus"></i> Tambah</a>
                <a href="#" class="btn btn-sm btn-outline-success"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th>No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($barangmasuk as $d)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$d->tanggal}}</td>
                            <td>{{$d->nama_barang}}</td>
                            <td>{{$d->merek}}</td>
                            <td>{{$d->kategori}}</td>
                            <td>{{$d->keterangan}}</td>
                            <td><a class="btn btn-sm btn-success">{{$d->jumlah}}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection('content')
