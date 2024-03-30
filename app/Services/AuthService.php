<?php

namespace App\Services;

use App\Http\Resources\LoginResource;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    /**
     * @var UserRepositoryInterface
     */
    protected $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param $credentials
     * @return LoginResource|null
     */
    public function attemptLogin($credentials)
    {
        if (!Auth::attempt($credentials)) {
            return null;
        }

        $user = Auth::user();
        $token = $user->createToken('authToken')->plainTextToken;

        return new LoginResource($user->setAttribute('token', $token));
    }

    /**
     * @return void
     */
    public function logout()
    {
        $user = auth()->user();
        if ($user->currentAccessToken() && method_exists($user->currentAccessToken(), 'delete')) {
            $user->currentAccessToken()->delete();
        }
    }
}
