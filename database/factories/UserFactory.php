<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use JobSearch\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'user_type'=>'seeker',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(JobSearch\Company::class, function (Faker $faker) {
    return [
        'user_id'=>JobSearch\User::all()->random()->id,
        'cname'=>$name=$faker->company,
        'slug'=>str_slug($name),
        'address'=>$faker->address,
        'phone'=>$faker->phoneNumber,
        'website'=>$faker->domainName,
        'logo'=>'man.jpg',
        'cover_photo'=>'tumblr-image-sizes-banner.png',
        'slogan'=>'learn-earn and grow',
        'description'=>$faker->paragraph(rand(2,10))

    ];
});

$factory->define(JobSearch\JobSearch::class, function (Faker $faker) {
    return [
        'user_id'=>JobSearch\User::all()->random()->id,
        'company_id'=>JobSearch\Company::all()->random()->id,
        'title'=>$title=$faker->text,
        'slug'=>str_slug($title),
        'position'=>$faker->jobTitle,
        'address'=>$faker->address,
        'category_id'=>rand(1,5),
        'type'=>'fulltime',
        'status'=>rand(0,1),
        'description'=>$faker->paragraph(rand(2,10)),
        'roles'=>$faker->text,
        'last_date'=>$faker->DateTime
    ];
});