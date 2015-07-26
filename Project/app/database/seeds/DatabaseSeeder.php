<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CategoriesTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('PrivilegesTableSeeder');
		$this->call('AllowancesTableSeeder');
		$this->call('UsersTableSeeder');
	}

}
