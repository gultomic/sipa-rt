<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inventaris as IV;

class inventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IV::truncate();

        IV::create([
            'nama' => 'Bangku plastik',
            'sumber' => 'Pabrik kerupuk',
            'jumlah' => '55',
            'keterangan' => 'Sumbangan',
        ]);

        IV::create([
            'nama' => 'Tenda terpal 10x10',
            'sumber' => 'Pabrik roti',
            'jumlah' => '1',
            'keterangan' => 'Sumbangan',
        ]);
    }
}
