<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    use HasFactory;
    protected $table = "barangmasuks";
    protected $primaryKey = "id";
    protected $fillable = ['id','barang_id','jumlah','keterangan'];

    public function barangmasuk()
    {
        return $this->belongsTo(barang::class);
    }
}
