<?php

use Illuminate\Database\Seeder;
use App\MataPelajaran;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataPelajaran::truncate();

        MataPelajaran::create([
        	'kode' => 'IND',
        	'nama' => 'Bahasa Indonesia'
        ]);	
    }
}
