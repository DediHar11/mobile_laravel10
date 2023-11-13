<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merek extends Model
{
    use HasFactory;
    protected $table = "mereks";
    protected $primaryKey = "id";
    protected $fillable = ['id','merek','keterangan'];

    public function merek()
    {
        return $this->hasMany(barang::class);
    }
}

