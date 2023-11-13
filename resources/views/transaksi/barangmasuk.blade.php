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
                        <tr>
                            <td>1</td>
                            <td>1 Desember 2023</td>
                            <td>kulkas</td>
                            <td>panasi</td>
                            <td>elektronik</td>
                            <td>kulkas 200</td>
                            <td><a class="btn btn-sm btn-success">22</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection('content')
