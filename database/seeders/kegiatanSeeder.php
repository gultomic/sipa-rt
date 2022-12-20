<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Kegiatan;

class kegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        Kegiatan::truncate();

        Kegiatan::create([
            'nama' => 'Kerja Bakti',
            'tempat' => 'Selokan Sekolah',
            'tanggal' => $faker->date('Y-m-d'),
            'keterangan' => 'Bawa peralatan',
        ]);

        Kegiatan::create([
            'nama' => 'Kerja Bakti',
            'tempat' => 'Masjid',
            'tanggal' => $faker->date('Y-m-d'),
            'keterangan' => 'Jangan luppa...!',
        ]);
    }
}
