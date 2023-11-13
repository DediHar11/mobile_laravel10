@extends('layouts.master')
@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-10">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Kategori</h6>
                    <form action="{{route('store_kategori')}}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="kategori" id="floatingPassword"
                                placeholder="Nama kategori">
                            @if ($errors->has('kategori'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('kategori') }}</p>
                                </span>
                            @endif
                            <label for="floatingPassword">Nama Kategori</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Isi keterangan" type="text" name="keterangan" id="floatingTextarea"
                                style="height: 150px;"></textarea>
                            @if ($errors->has('keterangan'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('keterangan') }}</p>
                                </span>
                            @endif
                            <label for="floatingTextarea">Keterangan</label>
                        </div><br>
                        <a onclick="goBack()" class="btn btn-sm btn-outline-secondary">Batal</a>
                        <button type="submit" class="btn btn-sm btn-outline-success">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection('content')
