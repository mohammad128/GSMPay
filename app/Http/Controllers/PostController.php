<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserCollection;
use App\Repositories\Post\PostRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function __construct(public PostRepositoryInterface $postRepository) {}

    public function index(): PostCollection
    {
        return PostCollection::make(
            $this->postRepository->listPosts(
                with: ['user'],
                page: request()->input('page', 1),
                perPage: request()->input('perPage', 10),
            )
        );
    }

    public function show(int $id): PostResource
    {
        $post = $this->postRepository->getPost(
            postId: $id,
            with: ['user:id,mobile,avatar']
        );

        $ip = request()->ip();
        $key = "post_viewed:{$post->id}:{$ip}";
        if (! Cache::has($key)) {
            $post->increment(column: 'views');
            Cache::put(key: $key, value: true);
        }

        return PostResource::make($post);
    }

    public function topUsers(UserRepositoryInterface $userRepository): UserCollection
    {
        return UserCollection::make($userRepository->topUsers());
    }
}
