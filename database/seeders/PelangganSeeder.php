<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Pelanggan::create([
              'nik' => "1234567890123456",
              'jk'  => "1",
              'nama' => "Dobleh",
              'no_rekening' => "1234567890123456",
              'telp' => '123456789012',
              'alamat' => "Singaraja, Banyuasi, Jalan Jendral Sudirman, Gg. 6",
              'tgllhr' => '2002-03-12',
          ]);
          Pelanggan::create([
              'nik' => "1234567890123457",
              'jk'  => "0",
              'nama' => "Debbie",
              'no_rekening' => "1234567890123457",
              'telp' => '123456789013',
              'alamat' => "Singaraja, Banyuasi, Jalan Jendral Sudirman, Gg. 6",
              'tgllhr' => '2002-03-12',
          ]);
    }
}
