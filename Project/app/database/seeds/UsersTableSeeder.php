<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		//$DB::table('users')->truncate();
		$users = [
				 	[
				 		'username' => 'owner',
				 		'password' => Hash::make('owner'),
				 		'role_id' => 1
				 	],
				 	[
				 		'username' => 'admin',
				 		'password' => Hash::make('admin'),
				 		'role_id' => 2
				 	],
				 ];
		foreach ($users as $user) {
			User::create($user);
		}
	}

}