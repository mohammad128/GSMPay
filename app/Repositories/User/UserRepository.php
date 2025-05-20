<?php

namespace App\Repositories\User;

use App\DTOs\UserRegisterDTO;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function create(UserRegisterDTO $dto)
    {
        return User::query()->create(
            attributes: [
                'mobile' => $dto->mobile,
                'password' => HASH::make($dto->password),
            ]
        );
    }
}
