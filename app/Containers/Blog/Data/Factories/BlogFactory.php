<?php

use App\Containers\Blog\Models\Blog;
use App\Containers\User\Models\User;
use Faker\Generator as Faker;


$factory->define(Blog::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'user_id' => function (){
        return factory(User::class)->create()->id;
        }
    ];
});