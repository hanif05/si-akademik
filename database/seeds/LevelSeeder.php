<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Level::truncate();

        // Level::create([['name' => 'Admin'], ['name' => 'Guru']]);


        if(DB::table('levels')->get()->count() == 0){

            DB::table('levels')->insert([

                [
                    'name' => 'Admin',
                ],
                [
                    'name' => 'Guru',
                ],
                [
                    'name' => 'Siswa',
                ],

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }

    }
}
