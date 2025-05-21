<?php

namespace App\Repositories\Post;

use App\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;

class PostRepository implements PostRepositoryInterface
{
    public function listPosts(array|string $filters = [], array $columns = ['*'], array $with = [], int $page = 0, int $perPage = 10): LengthAwarePaginator
    {
        return Post::with(relations: $filters)
            ->select(columns: $columns)
            ->where(column: $filters)
            ->latest()
            ->paginate(
                perPage: $perPage,
                page: $page
            );
    }

    public function getPost(int $postId, array $with = []): Post
    {
        return Post::with(relations: $with)
            ->findOrFail(id: $postId);
    }
}
