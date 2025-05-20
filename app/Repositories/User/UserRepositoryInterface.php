<?php

namespace App\Repositories\User;

use App\DTOs\UserRegisterDTO;

interface UserRepositoryInterface
{
    public function create(UserRegisterDTO $dto);
}
