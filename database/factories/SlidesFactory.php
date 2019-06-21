<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Slides;
use Faker\Generator as Faker;

$factory->define(Slides::class, function (Faker $faker) {
    return [
		'image' => $faker->imageUrl(1920, 1080, 'abstract', true),
		'title' => substr($faker->sentence(2), 0, -1),
		'sub_title' => $faker->paragraph,
	];
});