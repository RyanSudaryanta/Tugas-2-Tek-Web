<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function pelangganPengembalian()
    {
        return $this->hasMany(Pengembalian::class, 'pelanggan_id', 'id');
    }
    public function PelangganPinjaman()
    {
        return $this->hasMany(Pinjaman::class, 'pelanggan_id', 'id');
    }
}
