<?php

namespace App\Http\Controllers;

use App\Models\merek;
use App\Models\barang;
use App\Models\barangkeluar;
use App\Models\kategori;
use App\Models\barangmasuk;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function cetak_bm(){
        $barangmasuk = barangmasuk::join('barangs', 'barangmasuks.barang_id', '=', 'barangs.id')
                                        ->join('kategoris', 'barangs.kategori_id', '=', 'kategoris.id')
                                        ->join('mereks', 'barangs.merek_id', '=', 'mereks.id')
                                        // ->join('barangmasuks', 'keterangan.barangmasuks_id', '=', 'barangmasuks.id')
                                        ->get();
        
        
    // dd($barangmasuk);
        return view('transaksi.cetakbm', compact('barangmasuk'));
    }
    //barang masuk
    public function barangmasuk()
    {
        // $barangmasuk = barangmasuk::with('barangmasuk','merek','kategori')->paginate(10);
        $barangmasuk = barangmasuk::join('barangs', 'barangmasuks.barang_id', '=', 'barangs.id')
                                        ->join('kategoris', 'barangs.kategori_id', '=', 'kategoris.id')
                                        ->join('mereks', 'barangs.merek_id', '=', 'mereks.id')
                                        ->get();
        $a = BarangMasuk::pluck('keterangan');
    // dd($barangmasuk);
        return view('transaksi.barangmasuk', compact('barangmasuk', 'a'));
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
    public function storebarangmasuk(Request $request)
    {
        $barang = barang::find($request->barang_id);
        if($barang->stok == 0){
            $stok = $request->jumlah;
        }else{
            $stok = $barang->stok + $request->jumlah;
        }
        // dd($stok);

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

        barang::find($barang->id)->update([
            'stok' => $stok,
        ]);

        return redirect()->route('barangmasuk')->with('success', 'Data berhasil di tambahkan !');
    }
    //end barang masuk

    //barang keluar

    public function cetak_bk()
    {
        // $barangkeluar = barangkeluar::with('barangkeluar','merek','kategori')->paginate(10);
        $barangkeluar = barangkeluar::join('barangs', 'barangkeluars.barang_id', '=', 'barangs.id')
                                        ->join('kategoris', 'barangs.kategori_id', '=', 'kategoris.id')
                                        ->join('mereks', 'barangs.merek_id', '=', 'mereks.id')
                                        ->get();
    // dd($barangkeluar);
        return view('transaksi.cetakbk', compact('barangkeluar'));
    }

    public function barangkeluar()
    {
        // $barangkeluar = barangkeluar::with('barangkeluar','merek','kategori')->paginate(10);
        $barangkeluar = barangkeluar::join('barangs', 'barangkeluars.barang_id', '=', 'barangs.id')
                                        ->join('kategoris', 'barangs.kategori_id', '=', 'kategoris.id')
                                        ->join('mereks', 'barangs.merek_id', '=', 'mereks.id')
                                        ->get();
    // dd($barangkeluar);
        $a = BarangKeluar::pluck('keterangan');
        return view('transaksi.barangkeluar', compact('barangkeluar', 'a'));
    }
    public function createbarangkeluar()
    {
        //PR
        $barang = barang::all();
        $merek = merek::all();
        $kategori = kategori::all();
        $barangklr = barangkeluar::with('barangkeluar')->get();
        return view('transaksi.tambahbarangkeluar', compact('barangklr','barang','merek','kategori'));
    }
    public function storebarangkeluar(Request $request)
    {
        $barang = barang::find($request->barang_id);
        if($barang->stok == 0){
            $stok = $request->jumlah;
        }else{
            $stok = $barang->stok - $request->jumlah;
        }
        // dd($stok);

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
        $post = new barangkeluar();
        if($b->where($request->id == 'id')){
            $post->barang_id = $request->input('barang_id');
            $post->tanggal = $request->input('tanggal');
            $post->keterangan = $request->input('keterangan');
            $b->stok = $post->jumlah;
            $post->jumlah = $request->input('jumlah');
        }
        $post->save();

        barang::find($barang->id)->update([
            'stok' => $stok,
        ]);

        return redirect()->route('barangkeluar')->with('success', 'Data berhasil di tambahkan !');
    }
    //end barang keluar

}
