<?php

namespace Database\Seeders;

use App\Models\WargaModel;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WargaModel::query()->create([
            'nama_lengkap' => 'Ega Erlanda',
            'gender'       => 'P',
            'tgl_lahir'    => '2002-05-12',
            'alamat'       => 'Segedong',
            'lokasi'       => '0.191361, 109.265528',
            'pengguna_id'  => 1
        ]);
    }
}
