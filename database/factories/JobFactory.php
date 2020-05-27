<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'client_id' => rand(31,33),
        'job_title' => $faker->sentence(rand(5,7)),
        'job_type' => $faker->word(rand(5,7)),
        'job_description' => $faker->paragraphs(rand(5,7),true),
        'salary' => $faker->numberBetween($min = 1000, $max = 9000),
        'slug' => $faker->unique()->slug,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
