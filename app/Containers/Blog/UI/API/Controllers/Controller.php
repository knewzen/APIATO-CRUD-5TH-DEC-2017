<?php

namespace App\Containers\Blog\UI\API\Controllers;

use App\Containers\Blog\UI\API\Requests\CreateBlogRequest;
use App\Containers\Blog\UI\API\Requests\DeleteBlogRequest;
use App\Containers\Blog\UI\API\Requests\GetAllBlogsRequest;
use App\Containers\Blog\UI\API\Requests\FindBlogByIdRequest;
use App\Containers\Blog\UI\API\Requests\UpdateBlogRequest;
use App\Containers\Blog\UI\API\Transformers\BlogTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Blog\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateBlogRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createBlog(CreateBlogRequest $request)
    {
        $blog = Apiato::call('Blog@CreateBlogAction', [$request]);

        return $this->created($this->transform($blog, BlogTransformer::class));
    }

    /**
     * @param FindBlogByIdRequest $request
     * @return array
     */
    public function findBlogById(FindBlogByIdRequest $request)
    {
        $blog = Apiato::call('Blog@FindBlogByIdAction', [$request]);

        return $this->transform($blog, BlogTransformer::class);
    }

    /**
     * @param GetAllBlogsRequest $request
     * @return array
     */
    public function getAllBlogs(GetAllBlogsRequest $request)
    {
        $blogs = Apiato::call('Blog@GetAllBlogsAction', [$request]);

        return $this->transform($blogs, BlogTransformer::class);
    }

    /**
     * @param UpdateBlogRequest $request
     * @return array
     */
    public function updateBlog(UpdateBlogRequest $request)
    {
        $blog = Apiato::call('Blog@UpdateBlogAction', [$request]);

        return $this->transform($blog, BlogTransformer::class);
    }

    /**
     * @param DeleteBlogRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteBlog(DeleteBlogRequest $request)
    {
        Apiato::call('Blog@DeleteBlogAction', [$request]);

        return $this->noContent();
    }
}
