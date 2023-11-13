<?php

namespace App\Http\Controllers;

use App\Models\merek;
use App\Models\barang;
use App\Models\kategori;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    //start merek
    public function merek()
    {
        $data = merek::paginate(10);
        return view('master.merek',compact('data'));
    }
    public function create_merek()
    {
        return view('master.tambahmerek');
    }
    public function store_merek(Request $request)
    {
        $messages = [
            'required' => 'Input :attribute harus diisi!!!',
        ];
        $this->validate($request, [
            'merek' => 'required',
            'keterangan' => 'required',
        ], $messages);

        $post = new merek();
        $post->merek = $request->input('merek');
        $post->keterangan = $request->input('keterangan');
        $post->save();

        return redirect()->route('merek')->with('success', 'Data berhasil di tambahkan !');
    }
    public function delete_merek($id)
    {
        $data = merek::where('id',$id)->delete();
        return redirect()->route('merek',compact('data'));
    }
    //end merek

    // start kategori
    public function kategori()
    {
        $data = kategori::paginate(10);
        return view('master.kategori',compact('data'));
    }
    public function create_kategori()
    {
        return view('master.tambahkategori');
    }
    public function store_kategori(Request $request)
    {
        $messages = [
            'required' => 'Input :attribute harus diisi!!!',
        ];
        $this->validate($request, [
            'kategori' => 'required',
            'keterangan' => 'required',
        ], $messages);

        $post = new kategori();
        $post->kategori = $request->input('kategori');
        $post->keterangan = $request->input('keterangan');
        $post->save();

        return redirect()->route('kategori')->with('success', 'Data berhasil di tambahkan !');
    }
    public function delete_kategori($id)
    {
        $data = kategori::where('id',$id)->delete();
        return redirect()->route('kategori',compact('data'));
    }
    //end kategori

    // start barang
    public function barang()
    {
        $data = barang::with('merek','kategori')->paginate(10);
        return view('master.barang',compact('data'));
    }
    public function create_barang()
    {
        $merek = merek::all();
        $kategori = kategori::all();
        return view('master.tambahbarang',compact('merek','kategori'));
    }
    public function store_barang(Request $request)
    {
        $messages = [
            'required' => 'Input :attribute harus diisi!!!',
        ];
        $this->validate($request, [
            'nama_barang' => 'required',
            'merek_id' => 'required',
            'kategori_id' => 'required',
            'keterangan' => 'required',
        ], $messages);

        $post = new barang();
        $post->nama_barang = $request->input('nama_barang');
        $post->merek_id = $request->input('merek_id');
        $post->kategori_id = $request->input('kategori_id');
        $post->keterangan = $request->input('keterangan');
        $post->stok = 0;
        $post->save();

        return redirect()->route('barang')->with('success', 'Data berhasil di tambahkan !');
    }
    public function delete_barang($id)
    {
        $data = barang::where('id',$id)->delete();
        return redirect()->route('barang',compact('data'));
    }
    //end start barang

    // start pengguna
    public function pengguna()
    {
        return view('master.pengguna');
    }
    // end pengguna
}
