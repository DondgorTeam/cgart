<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    public function run()
    {

        DB::table('users')->delete;

        User::create([ 'name' => 'Odhuu', 'email' => 'odhuu@example.com', 'password' => Hash::make('Odhuu')]);

    }
}