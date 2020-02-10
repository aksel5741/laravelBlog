<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'post_content' => $faker->text,
        'views' => $faker->numberBetween(10,100),
        'author_id'=>$faker->numberBetween(1,5)
    ];
});
