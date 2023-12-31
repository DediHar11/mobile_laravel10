<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\barangmasuk;
use App\Models\barangkeluar;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // laporan barang masuk
        public function barang_masuk()
        {
            return view('laporan.barangmasuk');
        }
        public function barang_bm(Request $request)
        {
            
            $daritanggal = $request->daritanggal;
            $hinggatanggal = $request->hinggatanggal;
            $data = barangmasuk::join('barangs', 'barangmasuks.barang_id', '=', 'barangs.id')
            ->join('kategoris', 'barangs.kategori_id', '=', 'kategoris.id')
            ->join('mereks', 'barangs.merek_id', '=', 'mereks.id')
            ->whereBetween('tanggal',[$daritanggal,$hinggatanggal])->get();

            $a = barangmasuk::pluck('keterangan');
            
            // $i = 0;
            // foreach ($data as $cektanggal) {
            //     if($cektanggal->tanggal == $currentday->tanggal){
            //         $hasil[$i] = $cektanggal;
            //     }
            //     $i++;
            //     dd($currentday);
            // }
            return view('laporan.laporanbm',compact('data', 'daritanggal', 'hinggatanggal', 'a'));
        }
    // end laporan barang masuk

    // laporan barang keluar
        public function barang_keluar()
        {
            return view('laporan.barangkeluar');
        }
        public function barang_bk(Request $request)
        {
            
            $daritanggal = $request->daritanggal;
            $hinggatanggal = $request->hinggatanggal;
            $data = barangkeluar::join('barangs', 'barangkeluars.barang_id', '=', 'barangs.id')
            ->join('kategoris', 'barangs.kategori_id', '=', 'kategoris.id')
            ->join('mereks', 'barangs.merek_id', '=', 'mereks.id')
            ->whereBetween('tanggal',[$daritanggal,$hinggatanggal])->get();

            $a = barangkeluar::pluck('keterangan');

            return view('laporan.laporanbk',compact('data', 'daritanggal', 'hinggatanggal', 'a'));
        }
    // end laporan barang keluar

    // laporan stok barang
        public function stok_barang()
        {
            $data = barang::all();
            return view('laporan.stokbarang',compact('data'));
        }
    // end laporan stok barang

}
