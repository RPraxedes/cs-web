<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
	$faker->addProvider(new BlogArticleFaker\FakerProvider($faker));
    return [
        'title' => $faker->articleTitle,
		'author_id' => User::all()->random()->id,
        'body' => $faker->articleContent,
        'header_image' => 'http://127.0.0.1:8000/assets/images/nao-banner.jpg',
        'header_alt' => 'image',
        'type' => $faker->randomElement(['news', 'research', 'publication']),
        'category' => 'Uncategorized',
		'published_at' => now(),
		'created_at' => now(),
		'updated_at' => now(),
		
    ];
});
