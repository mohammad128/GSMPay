<?php

namespace App\Repositories\User;

use App\DTOs\UserRegisterDTO;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function create(UserRegisterDTO $dto): User
    {
        return User::query()->create(
            attributes: [
                'mobile' => $dto->mobile,
                'password' => HASH::make($dto->password),
            ]
        );
    }

    public function topUsers(): LengthAwarePaginator
    {
        return User::query()->withSum(relation: 'posts as total_view', column: 'views')
            ->orderByDesc(column: 'total_view')
            ->paginate();
    }
}
