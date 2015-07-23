<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
        {
            //DB::table('roles')->truncate();
            $users=[
                        [
                        'name' => 'owner',
                        ],
                        [
                        'name' => 'admin',
                        ]
           		   ];

            foreach($users as $user){
                    Roles::create($user);
            }
        }
}

/*class RolesSeeder extends Seeder {

        public function run()
        {
                DB::table('roles')->truncate();

                $users=[
                                        [
                                        'name' => 'owner',
                                        ],
                                        [
                                        'name' => 'admin',
                                        ]
                ];

                foreach($users as $user){
                        User::create($user);
                }
        }

}*/