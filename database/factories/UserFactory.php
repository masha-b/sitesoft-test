<?php

use Faker\Generator as Faker;


/**
 * Фейковые значения
 *
 * @param Faker $faker
 * @return array
 */

$factory->define(App\User::class, function (Faker $faker) {
    $names = ['Eugene', 'Mikle', 'Tony', 'Andre'];
    return [
        'username' => $names[rand(0, 3)] . rand(100, 999),
        'password' => bcrypt('123Secret'),
        'remember_token' => str_random(10),
    ];
});
