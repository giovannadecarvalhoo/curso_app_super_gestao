<?php

/** @var Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->tollFreePhoneNumber,
        'email' => $faker->unique()->email,
        'motivo_contato' => $faker->numberBetween(1,3),
        'mensagem' => $faker->text(200)
    ];
});
