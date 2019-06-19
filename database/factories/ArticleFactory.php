<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Article;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
	$faker->addProvider(new BlogArticleFaker\FakerProvider($faker));
    return [
        'title' => $faker->articleTitle,
		'user_id' => User::all()->random()->id,
        'body' => $faker->articleContent,
        'header_image' => 'nao-banner.jpg',
        'header_alt' => 'image',
        'type' => $faker->randomElement(['news', 'research', 'publication']),
		'published_at' => now(),
		'created_at' => now(),
		'updated_at' => now(),
		
    ];
});
