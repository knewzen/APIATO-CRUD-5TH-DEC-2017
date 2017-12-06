<?php

namespace App\Containers\Blog\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder;
use App\Containers\Blog\Models\Blog;


class BlogSeeder extends Seeder
{
    public function run()
    {
        factory(Blog::class, 5)->create();
    }
}
