<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    use HasFactory;
    protected $table = "barangmasuks";
    protected $primaryKey = "id";
    protected $fillable = ['id','barang_id','jumlah','keterangan','tanggal'];

    public function barangmasuk()
    {
        return $this->belongsTo(barang::class);
    }
    public function merek()
    {
        return $this->belongsTo(merek::class);
    }
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
