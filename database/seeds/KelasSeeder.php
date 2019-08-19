<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('kelas')->get()->count() == 0){

            DB::table('kelas')->insert([

                [
                    'nama_kelas' => '7-A',
                ],
                [
                    'nama_kelas' => '7-B',
                ],
                [
                    'nama_kelas' => '7-C',
                ],
                [
                    'nama_kelas' => '8-A',
                ],
                [
                    'nama_kelas' => '8-B',
                ],
                [
                    'nama_kelas' => '8-C',
                ],
                [
                    'nama_kelas' => '9-A',
                ],
                [
                    'nama_kelas' => '9-B',
                ],
                [
                    'nama_kelas' => '9-C',
                ],


            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
