<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$categories=[
			[
				'name' => 'Cặp',
				'slug' => 'cap',
			],
			[
				'name' => 'Balo',
				'slug' => 'balo',
			],
			[
				'name' => 'Ví',
				'slug' => 'vi',
			],
			[
				'name' => 'Phụ kiện',
				'slug' => 'phu-kien',
			],
			[
				'name' => 'Văn phòng phẩm',
				'slug' => 'van-phong-pham'
			],
			[
				'name' => 'Handmade',
				'slug' => 'handmade',
			],
		];

		foreach ($categories as $cate) {
			Cate::create($cate);
		}

	}

}