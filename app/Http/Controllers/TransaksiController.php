<?php

namespace App\Http\Controllers;

use App\Models\merek;
use App\Models\barang;
use App\Models\kategori;
use App\Models\barangmasuk;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //barang masuk
    public function barangmasuk()
    {
        $barangmasuk = barangmasuk::with('barangmasuk','merek','kategori')->paginate(10);
        return view('transaksi.barangmasuk', compact('barangmasuk'));
    }
    public function createbarangmasuk()
    {
        //PR
        $barang = barang::all();
        $merek = merek::all();
        $kategori = kategori::all();
        $barangmsk = barangmasuk::with('barangmasuk')->get();
        return view('transaksi.tambahbarangmasuk', compact('barangmsk','barang','merek','kategori'));
    }
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Input :attribute harus diisi!!!',
        ];
        // dd($request);
        $this->validate($request, [
            'barang_id' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ], $messages);

        $b = barang::get();
        $post = new barangmasuk();
        if($b->where($request->id == 'id')){
            $post->barang_id = $request->input('barang_id');
            $post->tanggal = $request->input('tanggal');
            $post->keterangan = $request->input('keterangan');
            $b->stok = $post->jumlah;
            $post->jumlah = $request->input('jumlah');
        }
        $post->save();

        return redirect()->route('barangmasuk')->with('success', 'Data berhasil di tambahkan !');
    }
    //end barang masuk

    //barang keluar
    public function barangkeluar()
    {
        return view('transaksi.barangkeluar');
    }
    //end barang keluar
}
