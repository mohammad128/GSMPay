<?php

namespace App\Http\Controllers\Auth;

use App\DTOs\UserRegisterDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Repositories\User\UserRepositoryInterface;

class RegisterController extends Controller
{
    public function __construct(public UserRepositoryInterface $userRepository) {}

    public function __invoke(RegisterRequest $request): UserResource
    {
        $dto = UserRegisterDTO::fromRequest(
            $request->validated()
        );

        return UserResource::make(
            $this->userRepository->create(
                dto: $dto
            )
        );
    }
}
