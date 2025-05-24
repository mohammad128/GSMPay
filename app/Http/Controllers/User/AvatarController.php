<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AvatarRequest;
use App\Http\Resources\UserResource;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Header;
use Knuckles\Scribe\Attributes\ResponseFromFile;

#[Group(name: 'User')]
#[Header(name: 'Authorization', example: 'Bearer xxx')]
class AvatarController extends Controller
{
    #[Endpoint(title: 'Change Avatar', description: 'change user avatar.', authenticated: true)]
    #[ResponseFromFile(file: 'storage/responses/user/avatar.json')]
    #[BodyParam(name: 'avatar', type: 'file', description: 'The avatar image', required: true)]
    public function __invoke(AvatarRequest $request): UserResource
    {
        $request->user()->update([
            'avatar' => $request->file('avatar')->store('avatar', 'public'),
        ]);

        return UserResource::make($request->user());
    }
}
