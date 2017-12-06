<?php

/**
 * @apiGroup           Blog
 * @apiName            createBlog
 *
 * @api                {POST} /v1/blogs Endpoint title here..
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
$router->post('blogs', [
    'as' => 'api_blog_create_blog',
    'uses'  => 'Controller@createBlog',
    'middleware' => [
      'auth:api',
    ],
]);
