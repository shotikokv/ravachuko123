<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'slug' => $faker->unique()->slug,
        'featured' => true,
        'details' => $faker->sentence(8),
        'price' => $faker->numberBetween(1000, 500000),
        'description' => $faker->paragraph,
        'image' => 'image/gift.jpg',
        'images' => '["image/gift.jpg","image/gift.jpg","image/gift.jpg"]',
        'quantity' => 10,
    ];
});
