<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\TokenResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $user = User::query()->where([
            'mobile' => $request->input('mobile'),
        ])->first();


        if(!$user || !Hash::check($request->input('password'),$user->password)){
            return response()->json([
                'message' => 'Invalid Credentials'
            ],Response::HTTP_UNAUTHORIZED);
        }

        $token = $user->createToken("{$user->name}-token")->plainTextToken;

        return TokenResource::make([
            "token" => $token,
        ]);
    }
}
