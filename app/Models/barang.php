<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = "barangs";
    protected $primaryKey = "id";
    protected $fillable =[
        'id','nama_barang','merek_id','kategori_id','keterangan','stok'
    ];

    public function merek()
    {
        return $this->belongsTo(merek::class);
    }
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
