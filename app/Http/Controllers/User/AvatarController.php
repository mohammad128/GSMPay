<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AvatarRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function __invoke(AvatarRequest $request): UserResource
    {
        $request->user()->update([
            'avatar' => $request->file('avatar')->store('avatar', 'public')
        ]);

        return UserResource::make($request->user());
    }
}
