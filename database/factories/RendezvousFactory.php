<?php

$factory->define(App\Rendezvous::class, function (Faker\Generator $faker) {
    return [
        "meetingdate" => $faker->date("Y-m-d H:i:s", $max = 'now'),
        "client_id" => factory('App\Client')->create(),
    ];
});
