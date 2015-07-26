<?php

// Composer: 'fzaninotto/faker': 'v1.3.0'
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		/*$categories=[
			[
				'name' => 'Cap',
				'slug' => 'cap',
			],
			[
				'name' => 'Balo',
				'slug' => 'balo',
			],
			[
				'name' => 'Vi',
				'slug' => 'vi',
			],
			[
				'name' => 'Phu kien',
				'slug' => 'phu-kien',
			],
			[
				'name' => 'Van phong pham',
				'slug' => 'van-phong-pham'
			],
			[
				'name' => 'Handmade',
				'slug' => 'handmade',
			],
		];

		foreach ($categories as $cate) {
			Categories::create($cate);
		}*/

		Categories::create(array('name'=>'Balo', 'slug'=>'balo'));
	}

}
			/*$model = new Categories;
			$model->name=$cate["name"];
			$model->slug=$cate["slug"];
			$model->save();*/