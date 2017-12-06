<?php

namespace App\Containers\Blog\UI\API\Transformers;

use App\Containers\Blog\Models\Blog;
use App\Ship\Parents\Transformers\Transformer;

class BlogTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Blog $entity
     *
     * @return array
     */
    public function transform(Blog $entity)
    {
        $response = [
            'object' => 'Blog',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
