<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PrivilegesTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('privileges')->truncate();
        $privileges=[
                    [
                    'name' => 'add-product',
                    ],
                    [
                    'name' => 'del-product',
                    ],
                    [
                    'name' => 'add-user',
                    ],
                    [
                    'name' => 'del-user',
                    ]
       		   ];

        foreach($privileges as $privilege){
                Privileges::create($privilege);
        }
	}

}