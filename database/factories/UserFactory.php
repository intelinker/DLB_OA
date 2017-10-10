<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

//$factory->define(App\User::class, function (Faker $faker) {
//    static $password;
//
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'password' => $password ?: $password = bcrypt('secret'),
//        'remember_token' => str_random(10),
//    ];
//});

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'avatar' => $faker->imageUrl(60, 60),
        'phone' => $faker->unique()->phoneNumber(11),
        'department' => $faker->randomDigit(1, 13),
        'uid' => str_random(18),
    ];
});

//$factory->define(App\Article::class, function (Faker\Generator $faker) {
//    $userIDs = \App\User::pluck('id')->toArray();
//    $ownerID = $faker->randomElement($userIDs);
//    $forward = $ownerID;
//    if($faker->boolean(20)) {
//        $forward = $faker->randomElement($userIDs);
//    }
//    return [
//        'title' => $faker->sentence,
//        'language_id' => $faker->biasedNumberBetween(1, 2),
//        'original_id' => $forward,
//        'content' => $faker->paragraph(5, true),
//        'updated_by' => $ownerID,
//        'created_by' => $ownerID,
////        'location' =>$faker->address,
//    ];
//});
