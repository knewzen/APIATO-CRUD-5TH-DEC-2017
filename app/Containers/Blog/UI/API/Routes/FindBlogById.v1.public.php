<?php

/**
 * @apiGroup           Blog
 * @apiName            findBlogById
 *
 * @api                {GET} /v1/blogs/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('blogs/{id}', [
    'as' => 'api_blog_find_blog_by_id',
    'uses'  => 'Controller@findBlogById',
    'middleware' => [
      'auth:api',
    ],
]);
