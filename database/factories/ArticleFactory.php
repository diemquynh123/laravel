<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Article::class, function (Faker $faker) {
    return [
        //
		'name'=> $faker->word,
		'text' => $faker->paragraph,
    ];
});
