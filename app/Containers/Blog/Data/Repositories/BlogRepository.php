<?php

namespace App\Containers\Blog\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;
use App\Containers\Blog\Models\Blog;

/**
 * Class BlogRepository
 */
class BlogRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

    public function allBlogs(){
        return Blog::orderBy('created_at', 'desc')->paginate(15);
    }

}
