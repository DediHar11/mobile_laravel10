@extends('layouts.master')
@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">BARANG</h6>
                <a href="{{route('create_barang')}}" class="btn btn-sm btn-outline-info"><i class="fa fa-plus"></i> Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th>No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($data as $d)
                    <tbody>
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$d->nama_barang}}</td>
                            <td>{{$d->merek->merek}}</td>
                            <td>{{$d->kategori->kategori}}</td>
                            <td>{{$d->keterangan}}</td>
                            <td>{{$d->stok}}</td>
                            <td>
                                <form action="{{route('delete_barang',$d->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{$data->links()}}
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
@endsection('content')
