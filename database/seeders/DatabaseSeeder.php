<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Gadik;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Gadik::factory(10)->create();


        // \App\Models\Gadik::factory()->create([
        //     'Name' => 'joko',
        //     'Nrp' => '99080817',
        //     'Pangkat' => 'bripda',
        //     'Jabatan' => 'bamin',
            
        // ]);

        Siswa::create([
            'Name' => 'exser',
            'Nosis' => '99080817',
            'Pleton' => '1',
            'Kompi' => 'A',
            'Angkatan' => '48',
            'Tahun' => '2022 Gel-II',
        ]);
        Siswa::create([
            'Name' => 'Maratade',
            'Nosis' => '99080818',
            'Pleton' => '1',
            'Kompi' => 'A',
            'Angkatan' => '48',
            'Tahun' => '2022 Gel-II',
        ]);
        Siswa::create([
            'Name' => 'exser maratade',
            'Nosis' => '99080819',
            'Pleton' => '1',
            'Kompi' => 'A',
            'Angkatan' => '48',
            'Tahun' => '2022 Gel-II',
        ]);
     
        Gadik::create([
            'Name' => 'surianto',
            'Nrp' => '99080819',
            'Pangkat' => 'bripda',
            'Jabatan' => 'ba min',
            // 'mapel_id' => '1',
        ]);
     
        Gadik::create([
            'Name' => 'maratade',
            'Nrp' => '99080812',
            'Pangkat' => 'briptu',
            'Jabatan' => 'banum',
            // 'mapel_id' => '1',
        ]);
        Gadik::create([
            'Name' => 'reki',
            'Nrp' => '99080813',
            'Pangkat' => 'Bripka',
            'Jabatan' => 'banum',
            // 'mapel_id' => '1',
        ]);

        Mapel::create([
            'Pelajaran' => 'dalmas',
            'gadik_id' => '1',
        ]);
        Mapel::create([
            'Pelajaran' => 'KUHP',
            'gadik_id' => '2',
        ]);
     
        
    }
}
