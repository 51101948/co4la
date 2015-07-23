<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AllowancesTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('allowances')->truncate();
		$all_privileges = Privileges::all();
		$owner = Roles::where('name', 'owner')->first();
		$admin = Roles::where('name', 'admin')->first();
		/*create owner role*/
		foreach ($all_privileges as $privilege) {
			$allow=[
					'privilege_id' => $privilege->id,
					'role_id' => $owner->id
			];
			Allowances::create($allow);
		}
		/*create admin role*/
		$allowances = [
						  [
						  	  'role_id' => 2,
						  	  'privilege_id' => 1
						  ],
						  [
						  	  'role_id' => 2,
						  	  'privilege_id' => 2
						  ],
				  	  ];
		foreach ($allowances as $allow) {
			Allowances::create($allow);
		}
	}

}