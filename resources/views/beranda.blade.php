@extends('layouts.master')
@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-arrow-circle-down text-success" aria-hidden="true" style="font-size:40px"></i>
                <div class="ms-3">
                    <p class="mb-2">Barang masuk</p>
                    <h6 class="mb-0">{{$b}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-arrow-circle-up text-danger" aria-hidden="true" style="font-size:40px"></i>
                <div class="ms-3">
                    <p class="mb-2">Barang keluar</p>
                    <h6 class="mb-0">{{$d}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-user-circle text-primary" aria-hidden="true" style="font-size:40px"></i>
                <div class="ms-3">
                    <p class="mb-2">Total User Admin</p>
                    <h6 class="mb-0">{{$a}}</h6>
                </div>
            </div>
        </div>
        {{-- <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Revenue</p>
                    <h6 class="mb-0">$1234</h6>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- Sale & Revenue End -->


<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Barang masuk hari ini</h6>
            <!-- <a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a> -->
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
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach ($data as $d)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$d->nama_barang}}</td>
                        <td>{{$d->merek->merek}}</td>
                        <td>{{$d->kategori->kategori}}</td>
                        <td>{{$d->keterangan}}</td>
                        <td>{{$d->stok}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->

<!-- <div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Barang keluar hari ini</h6>
            <a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a>
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
                        <td><a class="btn btn-sm btn-danger">22</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> -->

@endsection('content')