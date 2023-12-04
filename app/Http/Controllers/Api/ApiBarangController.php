<?php

namespace App\Http\Controllers\Api;

use App\Models\barang;
use App\Models\barangmasuk;
use App\Models\barangkeluar;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ApiBarangController extends Controller
{
    // API Stok Barang
    public function getSemuaBarang(){
        $barang = barang::all();
        return Response::json($barang, 200);
    }
    public function getBarang($id){
        $barang = barang::find($id);
        return Response::json($barang, 200);
    }

    // API Barang Masuk
    public function getSemuaBarangMasuk(){
        $barang = barangmasuk::all();
        return Response::json($barang, 200);
    }
    public function getBarangMasuk($id){
        $barang = barangmasuk::find($id);
        return Response::json($barang, 200);
    }
    public function storeBarangMasuk(Request $request){
        $barang = Barang::find($request->barang_id);

        if (!$barang) {
            return response()->json(['error' => 'Barang not found'], 404);
        }

        $stok = ($barang->stok == 0) ? $request->jumlah : $barang->stok + $request->jumlah;

        $messages = [
            'required' => 'Input :attribute harus diisi!!!',
        ];

        $this->validate($request, [
            'barang_id' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ], $messages);

        $barangMasuk = new BarangMasuk();
        $barangMasuk->barang_id = $request->input('barang_id');
        $barangMasuk->tanggal = $request->input('tanggal');
        $barangMasuk->keterangan = $request->input('keterangan');
        $barangMasuk->jumlah = $request->input('jumlah');
        $barangMasuk->save();

        $barang->update([
            'stok' => $stok,
        ]);

        return response()->json(['message' => 'Data berhasil ditambahkan', 'data' => $barangMasuk], 201);
    }


    // API Barang Keluar
    public function getSemuaBarangKeluar(){
        $barang = barangkeluar::all();
        return Response::json($barang, 200);
    }
    public function getBarangKeluar($id){
        $barang = barangkeluar::find($id);
        return Response::json($barang, 200);
    }
    public function storeBarangKeluar(Request $request){
        $barang = Barang::find($request->barang_id);

        if (!$barang) {
            return response()->json(['error' => 'Barang not found'], 404);
        }

        $stok = ($barang->stok == 0) ? $request->jumlah : $barang->stok - $request->jumlah;

        $messages = [
            'required' => 'Input :attribute harus diisi!!!',
        ];

        $this->validate($request, [
            'barang_id' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ], $messages);

        $barangKeluar = new BarangKeluar();
        $barangKeluar->barang_id = $request->input('barang_id');
        $barangKeluar->tanggal = $request->input('tanggal');
        $barangKeluar->keterangan = $request->input('keterangan');
        $barangKeluar->jumlah = $request->input('jumlah');
        $barangKeluar->save();

        $barang->update([
            'stok' => $stok,
        ]);

        return response()->json(['message' => 'Data berhasil ditambahkan', 'data' => $barangKeluar], 201);
    }
}
