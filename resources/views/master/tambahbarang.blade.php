@extends('layouts.master')
@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-10">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Barang</h6>
                    <form action="{{route('store_barang')}}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nama_barang" id="floatingPassword"
                                placeholder="Nama barang">
                            @if ($errors->has('nama_barang'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('nama_barang') }}</p>
                                </span>
                            @endif
                            <label for="floatingPassword">Nama Barang</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" name="merek_id"
                                aria-label="Floating label select example">
                                <option selected>-- Pilih Barang --</option>
                                @foreach ($merek as $d)
                                    <option value="{{ $d->id }}">{{ $d->merek }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('merek_id'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('merek_id') }}</p>
                                </span>
                            @endif
                            <label for="floatingSelect">Merek Barang</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" name="kategori_id"
                                aria-label="Floating label select example">
                                <option selected>-- Pilih Kategori --</option>
                                @foreach ($kategori as $d)
                                    <option value="{{ $d->id }}">{{ $d->kategori }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kategori_id'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('kategori_id') }}</p>
                                </span>
                            @endif
                            <label for="floatingSelect">Kategori Barang</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Isi keterangan" name="keterangan" id="floatingTextarea"
                                style="height: 150px;"></textarea>
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
