@extends('layouts.master')
@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">PENGGUNA</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    
                    <thead>
                        <tr class="text-dark">
                            <th>No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Roles</th>
                            <th scope="col">email</th>
                        </tr>
                    </thead>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($data as $d)
                    <tbody>
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->username}}</td>
                            <td>{{$d->roles}}</td>
                            <td>{{$d->email}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
@endsection('content')
