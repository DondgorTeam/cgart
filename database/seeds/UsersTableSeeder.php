<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Odhuu',
            'email' => 'odhuu@gmail.com',
            'password' => bcrypt('odhuu2016'),  
        ]);
    }
}
