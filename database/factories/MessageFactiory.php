<?php

use Faker\Generator as Faker;

/**
 * Фейковые значения
 *
 * @param Faker $faker
 * @return array
 */
$factory->define(App\Message::class, function (Faker $faker) use ($factory) {
    return [
        'text' => $faker->realText(),
    ];
});
