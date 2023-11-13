<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //barang masuk
        public function barangmasuk()
        {
            $barang = barang::with('barangmasuk');
            return view('transaksi.barangmasuk',compact('barang'));
        }
        public function createbarangmasuk()
        {
            $barang = barang::all();
            return view('transaksi.tambahbarangmasuk',compact('barang'));
        }
        public function store()
        {
            return view('transaksi.tambahbarangmasuk');
        }
    //end barang masuk

    //barang keluar
        public function barangkeluar()
        {
            return view('transaksi.barangkeluar');
        }
    //end barang keluar
}
