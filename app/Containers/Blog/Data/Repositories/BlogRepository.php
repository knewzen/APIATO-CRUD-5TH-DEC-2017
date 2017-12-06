<?php

namespace App\Containers\Blog\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

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

}
