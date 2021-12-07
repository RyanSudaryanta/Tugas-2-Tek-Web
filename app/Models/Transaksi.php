<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='kategory';
    protected $fillable = [
        'id_user',
        'id_barang',
        
    ];
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
