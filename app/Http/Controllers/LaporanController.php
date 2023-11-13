<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // laporan barang masuk
        public function barang_masuk()
        {
            return view('laporan.barangmasuk');
        }
    // end laporan barang masuk

    // laporan barang keluar
        public function barang_keluar()
        {
            return view('laporan.barangkeluar');
        }
    // end laporan barang keluar

    // laporan stok barang
        public function stok_barang()
        {
            return view('laporan.stokbarang');
        }
    // end laporan stok barang

}
