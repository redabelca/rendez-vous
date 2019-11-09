<?php

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
        "nom" => $faker->name,
        "cin" => $faker->name,
        "tel" => $faker->name,
    ];
});
