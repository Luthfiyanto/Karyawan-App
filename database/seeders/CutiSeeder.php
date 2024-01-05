<?php

namespace Database\Seeders;

use App\Models\Cuti;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cutiData = [
            [
                'id' => 1,
                'nomor_induk' => 'IP2401001',
                'tanggal_cuti' => '2020-08-02',
                'lama_cuti' => 2,
                'keterangan' => 'Acara Keluarga'
            ],
            [
                'id' => 2,
                'nomor_induk' => 'IP2401001',
                'tanggal_cuti' => '2020-08-18',
                'lama_cuti' => 2,
                'keterangan' => 'Anak Sakit'
            ],
            [
                'id' => 3,
                'nomor_induk' => 'IP2401006',
                'tanggal_cuti' => '2020-08-19',
                'lama_cuti' => 1,
                'keterangan' => 'Nenek Sakit'
            ],
            [
                'id' => 4,
                'nomor_induk' => 'IP2401007',
                'tanggal_cuti' => '2020-08-23',
                'lama_cuti' => 1,
                'keterangan' => 'Sakit'
            ],
            [
                'id' => 5,
                'nomor_induk' => 'IP2401004',
                'tanggal_cuti' => '2020-08-29',
                'lama_cuti' => 5,
                'keterangan' => 'Menikah'
            ],
            [
                'id' => 6,
                'nomor_induk' => 'IP2401003',
                'tanggal_cuti' => '2020-08-30',
                'lama_cuti' => 2,
                'keterangan' => 'Acara Keluarga'
            ],
        ];

        foreach ($cutiData as $data) {
            Cuti::create($data);
        }
    }
}
