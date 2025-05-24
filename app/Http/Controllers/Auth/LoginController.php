<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\TokenResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Knuckles\Scribe\Attributes\BodyParam;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\ResponseFromFile;
use Symfony\Component\HttpFoundation\Response;

#[Group(name: 'Auth')]
class LoginController extends Controller
{
    #[Endpoint(title: 'Login', description: 'login user.', authenticated: false)]
    #[ResponseFromFile(file: 'storage/responses/auth/login.json')]
    #[BodyParam(name: 'mobile', type: 'string', description: 'The user mobile', required: true, example: '09363680395')]
    #[BodyParam(name: 'password', type: 'string', description: 'The user password', required: true, example: 'password')]
    public function __invoke(LoginRequest $request)
    {
        $user = User::query()->where([
            'mobile' => $request->input('mobile'),
        ])->first();

        if (! $user || ! Hash::check($request->input('password'), $user->password)) {
            return response()->json([
                'message' => 'Invalid Credentials',
            ], Response::HTTP_UNAUTHORIZED);
        }

        $token = $user->createToken("{$user->name}-token")->plainTextToken;

        return TokenResource::make([
            'token' => $token,
        ]);
    }
}
