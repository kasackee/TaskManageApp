<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

/**
 * プロジェクトテーブル用　ダミーデータ
 */
$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(),
        'create_user_id' => $faker->numberBetween(1, 10),
    ];
});
