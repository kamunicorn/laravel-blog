<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->realText(rand(10, 45));
    $shortTitle = \Illuminate\Support\Str::length($title) > 30
        ? mb_substr($title, 0, 30) . '...'
        : $title;
    $created = $faker->dateTimeBetween('-30 days', '-1 days');

    return [
        'title' => $title,
        'short_title' => $shortTitle,
        'author_id' => rand(1, 4),
        'created_at' => $created,
        'updated_at' => $created,
        'description' => $faker->realText(rand(50, 191))
    ];
});
