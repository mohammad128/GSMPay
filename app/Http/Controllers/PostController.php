<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Repositories\Post\PostRepositoryInterface;

class PostController extends Controller
{
    public function __construct(public PostRepositoryInterface $postRepository) {}

    public function index(): PostCollection
    {
        return PostCollection::make(
            $this->postRepository->listPosts(
                with: ['user']
            )
        );
    }

    public function show(int $id): PostResource
    {
        return PostResource::make(
            $this->postRepository->getPost(
                postId: $id,
                with: ['user:id,mobile,avatar']
            )
        );
    }
}
