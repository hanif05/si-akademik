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
                    'nama' => '7-A',
                ],
                [
                    'nama' => '7-B',
                ],
                [
                    'nama' => '7-C',
                ],
                [
                    'nama' => '8-A',
                ],
                [
                    'nama' => '8-B',
                ],
                [
                    'nama' => '8-C',
                ],
                [
                    'nama' => '9-A',
                ],
                [
                    'nama' => '9-B',
                ],
                [
                    'nama' => '9-C',
                ],


            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
