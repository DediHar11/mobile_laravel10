@extends('layouts.master')
@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">PENGGUNA</h6>
                <a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-plus"></i> Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th>No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Username</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dedi saja</td>
                            <td>08238379173</td>
                            <td>asas</td>
                            <td>
                                <a class="btn btn-sm btn-outline-info"><i class="fa fa-pen"></i> Edit</a>
                                <a class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
@endsection('content')
