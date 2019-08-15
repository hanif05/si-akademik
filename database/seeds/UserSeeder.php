<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'     => 'Muamar Hanif',
            'email'    => 'muamarhanif05@gmail.com',
            'password' => bcrypt('password'),
            'level_id' => '1'
        ]);
    }
}
