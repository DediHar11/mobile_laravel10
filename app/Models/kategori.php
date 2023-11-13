<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = "kategoris";
    protected $primaryKey = "id";
    protected $fillable = ['id','kategori','keterangan'];

    public function kategori()
    {
        return $this->hasMany(barang::class);
    }
}
