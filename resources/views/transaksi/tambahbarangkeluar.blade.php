@extends('layouts.master')
@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-10">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Barang Keluar</h6>
                    <form action="{{route('storebarangkeluar')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="tanggal" id="floatingPassword" required>
                            @if ($errors->has('??'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('??') }}</p>
                                </span>
                            @endif
                            <label for="floatingPassword">Tanggal</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" name="barang_id"
                                aria-label="Floating label select example" required>
                                <option selected>-- Pilih Barang --</option>
                                @foreach ($barang as $d)
                                <option value="{{ $d->id}}">{{$d->nama_barang}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('barang_id'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('barang_id') }}</p>
                                </span>
                            @endif
                            <label for="floatingSelect">Nama Barang</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="jumlah" id="floatingPassword"
                                placeholder="Jumlah" required>
                            @if ($errors->has('jumlah'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('jumlah') }}</p>
                                </span>
                            @endif
                            <label for="floatingPassword">Jumlah</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Isi keterangan" name="keterangan" id="floatingTextarea"
                                style="height: 150px;" required></textarea>
                            @if ($errors->has('keterangan'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('keterangan') }}</p>
                                </span>
                            @endif
                            <label for="floatingTextarea">Keterangan</label>
                        </div><br>
                        <a onclick="goBack()" class="btn btn-sm btn-outline-secondary">Batal</a>
                        <button class="btn btn-sm btn-outline-success" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection('content')
