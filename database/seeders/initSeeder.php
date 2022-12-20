<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\KartuKeluarga as KK;
use App\Models\DataWarga as DW;
use DB;

class initSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KK::truncate();
        DW::truncate();

        $this->createKK();
        // $this->createWarga();
    }

    public function createKK() {
        $faker = Faker::create('id_ID');

        KK::create([
            'nkk' => '0000000000000000',
            'refs' => [
                'dikeluarkan' => '',
                'alamat' => '',
                'rtrw' => '',
                'deskel' => '',
                'kec' => '',
                'kabkot' => '',
                'kodepos' => '',
                'provinsi' => '',
                'catatan' => '',
            ],
        ]);

        $this->createWarga('0000000000000000', 'Kepala Keluarga');
        $this->createWarga('0000000000000000', 'Isteri');
        $this->createWarga('0000000000000000', 'Anak');

        for ($i=0; $i < 15; $i++) {
            $nkk = $faker->unique()->nik();

            KK::create([
                'nkk' => $nkk,
                'refs' => [
                    'dikeluarkan' => '',
                    'alamat' => '',
                    'rtrw' => '',
                    'deskel' => '',
                    'kec' => '',
                    'kabkot' => '',
                    'kodepos' => '',
                    'provinsi' => '',
                    'catatan' => '',
                ],
            ]);

            $this->createWarga($nkk, 'Kepala Keluarga');
            $this->createWarga($nkk, 'Isteri');
            $this->createWarga($nkk, 'Anak');
        }
    }

    public function createWarga($nkk, $skk) {
        $faker = Faker::create('id_ID');

        DW::create([
            'nik' => $faker->unique()->nik(),
            'nkk' => $nkk,
            'nama' => $faker->name(),
            'status_kk' => $skk,
            'refs' => [
                'jenis_kelamin' => '',
                'tempat_lahir' => '',
                'tanggal_lahir' => '',
                'agama' => '',
                'pendidikan' => '',
                'jenis_pekerjaan' => '',
            ],
        ]);
    }
}
