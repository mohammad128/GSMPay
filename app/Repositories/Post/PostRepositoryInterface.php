<?php

namespace App\Repositories\Post;

use App\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;

interface PostRepositoryInterface
{
    public function listPosts(array|string $filters = [], array $columns = ['*'], array $with = [], int $page = 0, int $perPage = 10): LengthAwarePaginator;

    public function getPost(int $postId, array $with = []): Post;
}
