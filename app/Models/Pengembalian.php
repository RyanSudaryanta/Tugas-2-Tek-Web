<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';
    protected $primaryKey = 'id';
    protected $guarded = [];

    // public function pengembalianPelanggan()
    // {
    //     return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'id');
    // }

    static function getPengembalian()
    {
        $return = DB::table('pengembalian')
                ->join('pelanggan', 'pengembalian.pelanggan_id', '=', 'pelanggan.id');

        return $return;
    }
}
