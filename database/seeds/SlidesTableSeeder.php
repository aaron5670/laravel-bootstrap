<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Slides::class, 3)->create();
	}
}
