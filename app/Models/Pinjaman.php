<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pinjaman extends Model
{
    use HasFactory;
    protected $table = 'pinjaman';
    protected $primaryKey = 'id';
    protected $guarded = [];

    // public function PinjamanPelanggan()
    // {
    //     return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'id');
    // }

    static function getPijaman()
    {
        $return = DB::table('pinjaman')
                ->join('pelanggan', 'pinjaman.pelanggan_id', '=', 'pelanggan.id');

        return $return;
    }
}
