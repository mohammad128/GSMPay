<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Support\Facades\Cache;

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
        $post = $this->postRepository->getPost(
            postId: $id,
            with: ['user:id,mobile,avatar']
        );

        $ip = request()->ip();
        $key = "post_viewed:{$post->id}:{$ip}";
        if (!Cache::has($key)) {
            $post->increment('views');
            Cache::put($key, true);
        }

        return PostResource::make($post);
    }
}
