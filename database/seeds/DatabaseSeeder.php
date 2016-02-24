<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
    }
}

class AdminTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('admins')->insert([
			'username'=> 'admin',
			'email' => 'support@cgart.mn',
			'password'=> bcrypt('cgart2016')
			]);
		$this->command->info('admin added');
	}
	
}