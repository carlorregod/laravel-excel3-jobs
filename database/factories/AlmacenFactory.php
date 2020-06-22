<?php

use Faker\Generator as Faker;
use App\Almacen;

$factory->define(Almacen::class, function (Faker $faker) {
    return [
         'name' => $faker->text(rand(32, 64)),
        'stock' => rand(5, 25)

    ];
});
