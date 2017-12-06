<?php

/**
 * @apiGroup           Blog
 * @apiName            deleteBlog
 *
 * @api                {DELETE} /v1/blogs/:id Endpoint title here..
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
$router->delete('blogs/{id}', [
    'as' => 'api_blog_delete_blog',
    'uses'  => 'Controller@deleteBlog',
    'middleware' => [
      'auth:api',
    ],
]);
