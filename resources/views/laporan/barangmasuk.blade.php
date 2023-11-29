@extends('layouts.master')
@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-8">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Laporan Barang Masuk</h6>
                    <form action="{{route('barang_bm')}}" target="_blank" method="get">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Awal</label>
                            <div class="col-sm-10">
                                <input type="date" name="daritanggal" class="form-control" id="date">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                            <div class="col-sm-10">
                                <input type="date" name="hinggatanggal" class="form-control" id="date">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection('content')
