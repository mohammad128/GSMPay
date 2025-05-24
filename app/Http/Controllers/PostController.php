<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserCollection;
use App\Repositories\Post\PostRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Cache;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Header;
use Knuckles\Scribe\Attributes\ResponseFromFile;

#[Group(name: 'Post')]
#[Header(name: 'Authorization', example: 'Bearer xxx')]
class PostController extends Controller
{
    public function __construct(public PostRepositoryInterface $postRepository) {}

    #[Endpoint(title: 'Index', description: 'list of posts.', authenticated: true)]
    #[ResponseFromFile(file: 'storage/responses/post/index.json')]
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

    #[Endpoint(title: 'Show', description: 'fetch specific post by id.', authenticated: true)]
    #[ResponseFromFile(file: 'storage/responses/post/show.json')]
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

    #[Endpoint(title: 'Top Users', description: 'get top users ordered by the highest total views of all their posts', authenticated: true)]
    #[ResponseFromFile(file: 'storage/responses/post/top-users.json')]
    public function topUsers(UserRepositoryInterface $userRepository): UserCollection
    {
        return UserCollection::make($userRepository->topUsers());
    }
}
