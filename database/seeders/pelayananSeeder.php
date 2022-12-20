<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\PelayananJenis as PJ;
use App\Models\PelayananWarga as PW;
use DB;

class pelayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PJ::truncate();
        PW::truncate();

        $this->createPJ();
        // $this->createPW(1);
    }

    public function createPJ()
    {
        $faker = Faker::create('id_ID');

        $pj = PJ::create([
            'nama' => 'Surat Pengantar Nikah',
            'catatan' => $faker->text(),
        ]);
        for ($i=0; $i < 5; $i++) {
            $this->createPW($pj->id);
        }

        $pj = PJ::create([
            'nama' => 'Surat Domisili',
            'catatan' => $faker->text(),
        ]);
        for ($i=0; $i < 8; $i++) {
            # code...
            $this->createPW($pj->id);
        }
    }

    public function createPW($pid)
    {
        $faker = Faker::create('id_ID');
        $c = DB::table('data_warga')->count();
        $r = rand(1, $c);
        $w = DB::table('data_warga')
            ->inRandomOrder()
            ->first();
        // print_r($nik->nik);

        PW::create([
            'pelayanan_id' => $pid,
            'warga_id' => $w->nik,
            'catatan' => [
                [$faker->date('Y-m-d H:i:s') => $faker->sentence()],
                [$faker->date('Y-m-d H:i:s') => $faker->sentence()],
            ],
        ]);
    }
}
