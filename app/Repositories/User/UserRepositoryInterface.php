<?php

namespace App\Repositories\User;

use App\DTOs\UserRegisterDTO;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

interface UserRepositoryInterface
{
    public function create(UserRegisterDTO $dto): User;

    public function topUsers(): LengthAwarePaginator;
}
