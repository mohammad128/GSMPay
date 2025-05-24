<?php

namespace App\Http\Controllers\Auth;

use App\DTOs\UserRegisterDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Repositories\User\UserRepositoryInterface;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\ResponseFromFile;

#[Group(name: 'Auth')]
class RegisterController extends Controller
{
    public function __construct(public UserRepositoryInterface $userRepository) {}

    #[Endpoint(title: 'Register', description: 'register new user.', authenticated: false)]
    #[ResponseFromFile(file: 'storage/responses/auth/register.json')]
    #[BodyParam(name: 'mobile', type: 'string', description: 'The user mobile', required: true, example: '09363680395')]
    #[BodyParam(name: 'password', type: 'string', description: 'The user password', required: true, example: 'password')]
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
