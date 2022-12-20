<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\KeuanganJenis as KJ;
use App\Models\KeuanganRincian as KR;

class keuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KJ::truncate();
        KR::truncate();

        $this->jenis();
    }

    public function jenis()
    {
        $k = KJ::create([
            'nama' => 'Iuran Bulanan'
        ]);
        $this->debet($k->id);
        $this->kredit($k->id);

        $k = KJ::create([
            'nama' => 'Kas Warga'
        ]);
        $this->debet($k->id);
        $this->kredit($k->id);
    }

    public function debet($kid)
    {
        $faker = Faker::create('id_ID');
        $m = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'];

        foreach ($m as $v) {
            KR::create([
                'jenis_id' => $kid,
                'nominal' => $faker->randomNumber(6, true),
                'keterangan' => "Bulan $v 2022",
                'tipe' => 'Debet'
            ]);
        }
    }

    public function kredit($kid)
    {
        $faker = Faker::create('id_ID');
        $m = ['Januari', 'Februari', 'Maret', 'April', 'Mei'];

        foreach ($m as $v) {
            KR::create([
                'jenis_id' => $kid,
                'nominal' => $faker->randomNumber(5, true),
                'keterangan' => "Bulan $v 2022",
                'tipe' => 'Kredit'
            ]);
        }
    }
}
